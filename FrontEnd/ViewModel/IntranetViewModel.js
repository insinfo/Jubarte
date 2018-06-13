$(function () {
    var intranetViewModel = new IntranetViewModel();
        intranetViewModel.init();
});

function IntranetViewModel() {

    this.webserviceJubarteBaseURL = WEBSERVICE_JUBARTE_BASE_URL;
    this.webservicePmroBaseURL = WEBSERVICE_PMRO_BASE_URL;
    this.restClient = new RESTClient();
    this.loaderApi = new LoaderAPI();
    this.modalApi = window.location !== window.parent.location ? window.parent.getModal() : new ModalAPI();

    //estatisticas usuarios
    this.sistemasAtivos = $('#sistemas_ativos');
    this.usuariosOnline = $('#usuarios_online');
    this.usuariosAtivos = $('#usuarios_ativos');
    this.usuariosCadastrados = $('#usuarios_cadastrados');

    this.solicitacoesAbertas    = $('#solicitacoes_abertas');
    this.solicitacoesAndamento  = $('#solicitacoes_andamento');
    this.solicitacoesConcluidas = $('#solicitacoes_concluidas');
    this.solicitacoesTotal      = $('#solicitacoes_total');

    this.dataNiver      = $('#data_niver');
    this.listaNiver = $('#lista_niver li a');
    //this.listaNiver = $('#lista_niver');

}

IntranetViewModel.prototype.init = function () {
    var self = this;
    self.eventos();

    // PERFECT-SCROLLBAR
    new PerfectScrollbar( $(".containerInsideIframe")[0], {
        wheelPropagation: true
    });
    new PerfectScrollbar( $('.noticiasBITHomeIn')[0], {
        wheelPropagation: true
    });
    /*new PerfectScrollbar( $('.aniversariantesHomeOntem')[0], {
        wheelPropagation: true
    });*/
    //preencher box da HOME
    self.estatisticas();

    self.estatisticasCiente();

    //
    self.dataNiver.text(moment().format('DD/MM/YYYY'));
    //preencher box dos aniversarios
    self.ListaAniversariantes();
};

IntranetViewModel.prototype.eventos = function () {
    var self = this;

    self.listaNiver.on('click', function (e) {
        //alert(e.target);
        //console.log(e.target.getAttribute("href"));

        //console.log($(this).attr('href'));

        //console.log(self.listaNiver.find('.active a').attr('href'));

        if($(this).attr('href')=="#aniversariantesOntem")
             //self.dataNiver.text(moment().format('DD/MM/YYYY'));
             self.dataNiver.text(moment().subtract(1, 'days').format('DD/MM/YYYY'));

        if($(this).attr('href')=="#aniversariantesHoje")
             self.dataNiver.text(moment().format('DD/MM/YYYY'));

        if($(this).attr('href')=="#aniversariantesAmanha")
             self.dataNiver.text(moment().add(1, 'days').format('DD/MM/YYYY'));


    }); // redireciona para p�gina de nova solicita��o

    //console.log(this.usuariosCadastrados);
};

IntranetViewModel.prototype.estatisticas = function () {
    var self = this;

    //faz uma requisi��o a API Rest para validar token
    //self.restClient.setDataToSender({"access_token": sessionStorage.getItem(self.accessTokenKey)});
    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'estatisticas/intranet/usuarios');
    self.restClient.setMethodGET();
    self.restClient.setSuccessCallbackFunction(function (data) {
        //console.log(data);

            self.sistemasAtivos.text(data['sistemas_ativos']);
            self.usuariosOnline.text(data['usuarios_online']);
            self.usuariosAtivos.text(data['usuarios_ativos']);
            self.usuariosCadastrados.text(data['cadastros_ativos']);
    });
    //self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
    //    self.showLoginView();
    //    self.loaderApi.hide();
    //});
    self.restClient.exec();
};

IntranetViewModel.prototype.estatisticasCiente = function () {
    var self = this;

    //faz uma requisi��o a API Rest para validar token
    //self.restClient.setDataToSender({"access_token": sessionStorage.getItem(self.accessTokenKey)});
    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'estatisticas/intranet/solicitacoes');
    self.restClient.setMethodGET();
    self.restClient.setSuccessCallbackFunction(function (data) {
        //console.log(data);

            self.solicitacoesAbertas.text(data['solicitacoesAbertas']);
            self.solicitacoesConcluidas.text(data['solicitacoesConcluidas']);
            self.solicitacoesAndamento.text(data['solicitacoesAndamento']);
            self.solicitacoesTotal.text(data['solicitacoesTotal']);
    });
    //self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
    //    self.showLoginView();
    //    self.loaderApi.hide();
    //});
    self.restClient.exec();
};

IntranetViewModel.prototype.ListaAniversariantes = function () {
    var self = this;
    var template = $('#aniversariante');
    var content = template.find('li')[0] ? template.find('li') : $(template[0].content);

    var nome = content.find('.nome');
    var foto = content.find('.foto');
    var local = content.find('.local');

    //var d = new Date();//var data_atual = d.getFullYear()+''+(d.getMonth()+1)+''+d.getDate();
    var data_atual = moment().format('YYYYMMDD');
    //console.log('data_atual:'+data_atual);

    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'intranet/aniversariantes');
    self.restClient.setMethodGET();
    self.restClient.setSuccessCallbackFunction(function (dados) {

        $("#aniversariantesHoje ul").empty();
        $("#aniversariantesOntem ul").empty();
        $("#aniversariantesAmanha ul").empty();

        //console.log(data);
        $.each(dados['data'], function (idx, item) {

            nome.text(item['nome']);
            foto.attr("src",item['image']);
            local.text(item['siglaLocalTrabalho']);

            //console.log(item['aniversario'] + ':::'+ data_atual);


            if(item['aniversario'] < data_atual )
            {
                //console.log('ontem: '+ item['aniversario']);
                $("#aniversariantesOntem ul").append( template.html() );
            }

            if(item['aniversario'] == data_atual )
            {
                //console.log('hoje: '+ item['niver']);
                $("#aniversariantesHoje ul").append( template.html() );
            }

            if(item['aniversario'] > data_atual )
            {
                //console.log('amanha: '+ item['niver']);
                $("#aniversariantesAmanha ul").append( template.html() );
            }

        });
    });
    self.restClient.exec();

};