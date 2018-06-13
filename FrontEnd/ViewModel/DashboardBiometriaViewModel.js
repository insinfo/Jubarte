$(function () {
    var gerenciarEstatiBioVM = new GerenciarEstatiBioVM();
    gerenciarEstatiBioVM.init();
});

function GerenciarEstatiBioVM()
{
    this.webserviceJubarteBaseURL = WEBSERVICE_JUBARTE_BASE_URL;
    this.customLoading = new LoaderAPI();
    this.restClient = new RESTClient();
    this.modalClient = window.location != window.parent.location ? window.parent.getModal() : new ModalAPI();
    this.mainNavbar = window.location != window.parent.location ? window.parent.getMainNavbar() : null;

    //FORMULARIO e controles da tela
    this.cadastradosHoje = $('#cadastrados_hoje');
    this.totalCadastrados= $('#total_cadastrados');
    this.naoCadastrados  = $('#nao_cadastrados');
    this.totalMatriculas = $('#total_matriculas');

    this.graficoPie = null;


    //LISTA TIPO DE EQUIPAMENTO
    //this.tableBiometriaTrue = $('#tableListServidores');
    this.dataTablesBiometriaTrue = new ModernDataTable('tableListServidoresTrue');

    //this.tableBiometriaFalse = $('#tableListServidores2');
    this.dataTablesBiometriaFalse = new ModernDataTable('tableListServidoresFalse');
}

GerenciarEstatiBioVM.prototype.init = function () {
    var self = this;
    // Load de plugins

    self.eventos();

    // Carregamento
    self.listaServidorBiometriaTrue(self.dataTablesBiometriaTrue, 'true'); //datatables
    self.listaServidorBiometriaTrue(self.dataTablesBiometriaFalse,'false'); //datatables

    self.estatisticasBiometria(); //box das estatisticas


// Pie chart
    // ------------------------------
    //self.pieChart();
    //self.barChart();


};

GerenciarEstatiBioVM.prototype.eventos = function () {
    var self = this;

/*
    //preencher FORM com os dados do registro a ser editado
    $('#tableContrato').on('click','.btnEditar',function(){
        var indice = $(this).parents('tr').attr('data-index');
        var data = self.dataTableContrato.getData()[indice];
        //console.log(data);
        self.preencheForm(data);
    });
*/


};

GerenciarEstatiBioVM.prototype.listaServidorBiometriaTrue = function (dataTable, biometria) {
    var self = this;
    var columnsConfiguration = [
        /*
        {"key": "ativo","xrender":function(row){
                return "<a><i class='btnEditar glyphicon glyphicon-edit'></i></a>";
            }
        },*/
        {"key": "id"},
        {"key": "matricula"},
        {"key": "nome"},
        {"key": "cpf", "align":"center" , "render": function(data){ return data['cpf'].replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4") } },
        {"key": "rg", "align":"center"},
        {"key": "dataNascimento", "type":"date", "align":"center"},
        {"key": "siglaLotacao", "align":"center"},
        //{"key": "biometria","type":"boolLabel", "flag":"disabled"}
    ];

    dataTable.hideActionBtnDelete();
    dataTable.hideRowSelectionCheckBox();

    dataTable.setDisplayCols(columnsConfiguration);
    dataTable.setIsColsEditable(false); //nao editar as linhas da grid

    dataTable.setDataToSender({"biometria":biometria});// enviar
    dataTable.setSourceURL(self.webserviceJubarteBaseURL + 'estatisticas/biometria');

    //self.dataTablesBiometriaTrue.setRecordsPerPage(3); //quantidade de registros por pagina
    //*self.dataTablesBiometriaTrue.setPaginationBtnQuantity(2); //quantidade de botoes na paginacao

    dataTable.setSourceMethodPOST();
    dataTable.load();
};

GerenciarEstatiBioVM.prototype.estatisticasBiometria = function () {
    var self = this;

    //faz uma requisição a API Rest para validar token
    //self.restClient.setDataToSender({"access_token": sessionStorage.getItem(self.accessTokenKey)});
    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'estatisticas/biometria/cadastros');
    self.restClient.setMethodGET(); //console.log(self.webserviceJubarteBaseURL + 'estatisticas/biometria/cadastros');
    self.restClient.setSuccessCallbackFunction(function (data) {
        //console.log(data);

        self.cadastradosHoje.text(data['cadastrados_hoje']);
        self.totalCadastrados.text(data['total_cadastrados']);
        self.naoCadastrados.text(data['nao_cadastrados']);
        self.totalMatriculas.text(data['total_matriculas']);

        //monta o grafico de pizza
        self.pieChart();
        self.barChart(data['dia']);
        self.linesChart(data['biometrias'], data['biometrias_nao']);

    });
    //self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
    //    self.showLoginView();
    //    self.loaderApi.hide();
    //});
    self.restClient.exec();
};

GerenciarEstatiBioVM.prototype.pieChart = function (){
    var self = this;

    // Generate chart
//self.totalMatriculas.text('ola');

    //console.log(self.cadastradosHoje.text() + ' - ' + self.totalCadastrados.text() + ' - ' + self.naoCadastrados.text() + ' - ' + self.totalMatriculas.text());
    //var cols = [['data1', 120], ['data2',200]];
    var cols = [['Hoje', self.cadastradosHoje.text()], ['Cadastrados',self.totalCadastrados.text()], ['Faltam', self.naoCadastrados.text()], ['Matriculas',self.totalMatriculas.text()] ];

    var pie_chart = c3.generate({
        bindto: '#c3-pie-chart',
        size: { width: 350 },
        color: {
            pattern: ['#3F51B5', '#FF9800', '#4CAF50', '#00BCD4', '#F44336']
        },
        data: {
            columns:
            cols
                //['data1', 120],
                //['data2', 120],
            ,
            type : 'pie'
        }
    });

//    pie_chart.load({
//            columns:
//            cols
//                //[["teste1", 10], ["teste2", 110], ["teste3", 80]]

//        });
};

GerenciarEstatiBioVM.prototype.barChart = function (dados){
    var self = this;
    var cols = [];
//console.log(data);
    dados.forEach(function (item, index) {
        //*console.log(item);
        cols[index] = new Array(item['data'], item['count']);
    });
    console.log(cols);
// Bar chart
// ------------------------------

// Generate chart
    var bar_chart = c3.generate({
        bindto: '#c3-bar-chart',
        size: { height: 400 },
        data: {
            columns:
                cols
                //['data1', 30, 200, 100, 400, 150, 250],
                //['data2', 13, 10, 14, 20, 15, 5]
                //['data1', 30],['data2', 200],['data3', 100],['data4', 400],['data5', 150],['data6', 250]

            ,
            type: 'bar'
        },
        axis: {
            x: {
                type: 'category',
                categories: ['Dias'],
            }
        },
        color: {
            pattern: ['#2196F3', '#FF9800', '#4CAF50','#3F51B5', '#00BCD4', '#F44336']
        },
        bar: {
            width: {
                ratio: 0.5
            }
        },
        grid: {
            y: {
                show: true
            }
        }
    });
/*
    // Change data
    setTimeout(function () {
        bar_chart.load({
            columns: [
                ['data3', 13, -15, 20, 30, -20, 10]
            ]
        });
    }, 6000);
*/
};

GerenciarEstatiBioVM.prototype.linesChart = function (dados, dados2){
    var self = this;
    var cols = ['Cadastradas'];
    var cols2 = ['Não cadastradas'];
    var legenda = new Array();
    cols.push("Cadastradas");
    cols2.push("Não Cadastradas");

    //console.log(dados2);


    dados.forEach(function (item, index) {
        //console.log(item);
        cols[index+1] = item['count'];
        legenda.push(item['data']);
    });

    dados2.forEach(function (item, index) {
        //console.log(item['data']);
        cols2[index+1] = item['count'];
    });
    //console.log(':::Cadastradas:::');
    //console.log(cols2);

    //console.log(legenda);


// Bar chart
// ------------------------------

// Chart transforms
    // ------------------------------

    // Generate chart
    var transform = c3.generate({
        bindto: '#c3-transform',
        size: { height: 400 },
        data: {
            columns: [
            cols,
            cols2
                //['Cadastradas', 3, 20, 10, 40, 15, 25],

            ]
        },
        axis: {
            x: {
                type: 'category',
                categories: legenda
                //categories: ['cat1', 'cat2', 'cat3', 'cat4', 'cat5', 'cat6', 'cat7', 'cat8', 'cat9'],
            }
        },
        grid: {
            y: {
                show: true
            }
        }
    });

};