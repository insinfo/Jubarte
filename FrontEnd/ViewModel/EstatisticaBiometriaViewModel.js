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
        {"key": "cpf"},
        {"key": "rg"},
        {"key": "dataNascimento", "type":"date"},
        {"key": "siglaLotacao"},
        //{"key": "biometria","type":"boolLabel", "flag":"disabled"}
    ];

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
    });
    //self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
    //    self.showLoginView();
    //    self.loaderApi.hide();
    //});
    self.restClient.exec();
};