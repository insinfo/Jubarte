$(function () {
    var gerenciaUsuarioViewModel = new GerenciaUsuarioViewModel();
    gerenciaUsuarioViewModel.init();
});

function GerenciaUsuarioViewModel()
{
    this.webserviceJubarteBaseURL = WEBSERVICE_JUBARTE_BASE_URL;
    this.restClient = new RESTClient();
    this.loaderApi = new LoaderAPI();

    this.modalApi = window.location != window.parent.location ? window.parent.getModal() : new ModalAPI();
    this.defaultModal = window.location != window.parent.location ? window.parent.getPrincipalVM().defaultModal : $('#defaultModal');

    //FORMULARIO CADASTRO USUARIO
    this.btnNovo = $('#btnNovo');
    this.painelFormulario = $('#painelFormulario');
    this.formulario = $('#formUsuario');
    this.selectSistema = $('#selectSistema');
    this.selectPerfil = $('#selectPerfil');
    this.inputOrganograma = $('#inputOrganograma');
    this.inputNomePessoa = $('#inputNomePessoa');
    this.inputUserLoginLDAP = $('#inputUserLoginLDAP');
    this.checkboxAtivo = $('#checkboxAtivo');
    this.btnSaveUsuario = $('#btnSaveUsuario');

    // SELECTIONS
    this.mtvOrganograma = null;
    this.dataTablePessoa = null;
    this.dataTableLoginLDAP = null;

    // EXTENSIONS
    this.extSetorCiente = null;

    // LISTA USUARIO
    this.datatableUsuarios = new ModernDataTable('tableListaUsuario');
}

GerenciaUsuarioViewModel.prototype.init = function () {
    var self = this;
    $('select').selectpicker();
    self.getSistemas();
    self.eventos();
    self.listarUsuarios();
};
GerenciaUsuarioViewModel.prototype.eventos = function () {
    var self = this;
    self.selectSistema.on('change',function () {
        var idSistema = $(this).val();
        self.getPerfis(idSistema);
        // Limpa extencoes atuais e cria nova(s)
        $('.extencao').remove();
        // Inicializa a EXTENCAO DE SISTEMAS
        self.extSetorCiente = new ExtencaoAPI('setores_ciente', idSistema);
        self.extSetorCiente.render("Setor Ciente", "idSetor", "text");
    });
    self.inputOrganograma.on('click', function () {
        self.defaultModal.find('.modal-body').empty();
        self.defaultModal.find('.modal-body').append('<div id="mtvOrganograma" class="mtvContainer"></div>');
        self.getOrganogramas();
    });
    self.inputNomePessoa.on('click', function () {
        var tabela = '<div class="modernDataTable">' +
                        '<table id="tableListaPessoa" class="table tasks-list table-lg dataTable no-footer">' +
                            '<thead><tr><th>Nome</th><th>Nascimento</th><th>Sexo</th><th>CPF</th><th>RG</th></tr></thead>' +
                            '<tbody><tr></tr></tbody>' +
                        '</table>' +
                     '</div>';
        self.defaultModal.find('.modal-body').empty();
        self.defaultModal.find('.modal-body').append(tabela);
        self.getPessoas();
    });
    self.inputUserLoginLDAP.on('click', function () {
        var tabela = '<div class="modernDataTable">' +
                         '<table id="tableListaLoginLDAP" class="table tasks-list table-lg dataTable no-footer">' +
                             '<thead><tr><th>Nome</th><th>Login</th></tr></thead>' +
                             '<tbody><tr></tr></tbody>' +
                         '</table>' +
                     '</div>';
        self.defaultModal.find('.modal-body').empty();
        self.defaultModal.find('.modal-body').append(tabela);
        self.getLogins();
    });
    self.btnNovo.on('click', function(){
        self.resetForm();
        if ( $('#blocoCadastrarUsuario').attr('aria-expanded')==='false' ) $('#panel-form').trigger('click');
    });
    self.btnSaveUsuario.on('click', function () {
        if (!validarCamposRequeridos(self.formulario)) {
            self.modalApi.notify(ModalAPI.WARNING, 'Usuários', 'É necessário entrar com os campos requeridos');
            return false;
        }
        self.save();
    });
};
GerenciaUsuarioViewModel.prototype.carregarUsuario = function (obj) {
    this.loaderApi.show();
    // Limpa extencoes atuais e cria nova(s)
    $('.extencao').remove();
    // Inicializa a EXTENCAO DE SISTEMAS
    self.extSetorCiente = new ExtencaoAPI('setores_ciente', obj['idSistema']);
    self.extSetorCiente.render("Setor Ciente", "idSetor", "text");

    this.selectSistema.val(obj['idSistema']);
    this.getPerfis(obj['idSistema'], obj['idPerfil']);
    this.inputNomePessoa.val(obj['nomePessoa']);
    this.inputNomePessoa.attr('data-id', obj['idPessoa']);
    this.inputOrganograma.val(obj['nomeOrganograma']);
    this.inputOrganograma.attr('data-id', obj['idOrganograma']);
    this.inputUserLoginLDAP.val(obj['login']);
    this.checkboxAtivo.prop('checked', obj['ativo']);
    $('select').selectpicker('refresh');

    // Carrega dados da EXTENCAO DE SISTEMA
//    self.extSetorCiente.loadData({"ativo":true}, {"idPessoa":obj['idPessoa']}, self.defaultModal);

    $('#panel-form').trigger('click');
    this.loaderApi.hide();
};
GerenciaUsuarioViewModel.prototype.getSistemas = function () {
    var self = this;
    self.loaderApi.show();
    self.restClient.setMethodPOST();
    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'sistemas');
    self.restClient.setSuccessCallbackFunction(function (data) {
        self.loaderApi.hide();
        data = data['data'];
        populateSelect(self.selectSistema, data, 'id', 'sigla', null, null);
        self.selectSistema.selectpicker('refresh');
    });
    self.restClient.setErrorCallbackFunction(function (callback) {
        self.loaderApi.hide();
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", callback.responseJSON, "OK");
    });
    self.restClient.exec();
};
GerenciaUsuarioViewModel.prototype.getPerfis = function (idSistema, selecionado) {
    var self = this;
    self.loaderApi.show();
    self.restClient.setMethodPOST();
    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'perfis');
    self.restClient.setDataToSender({"idSistema":idSistema});
    self.restClient.setSuccessCallbackFunction(function (data) {
        self.loaderApi.hide();
        data = data['data'];
        populateSelect(self.selectPerfil, data, 'id', 'sigla', selecionado, null);
        self.selectPerfil.selectpicker('refresh');
    });
    self.restClient.setErrorCallbackFunction(function (callback) {
        self.loaderApi.hide();
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", callback.responseJSON, "OK");
    });
    self.restClient.exec();
};
GerenciaUsuarioViewModel.prototype.getOrganogramas = function () {
    var self = this;
    self.loaderApi.show(self.painelFormulario);
    self.mtvOrganograma = new ModernTreeView(self.defaultModal.find('#mtvOrganograma'));
    self.mtvOrganograma.setupDisplayItems([
        {'key':'idOrganograma', 'type':ModernTreeView.ID},
        {'key':'text', 'type':ModernTreeView.LABEL}
    ]);
    self.mtvOrganograma.setExplorerStyle();
    self.mtvOrganograma.setMethodPOST();
    self.mtvOrganograma.setWebServiceURL(self.webserviceJubarteBaseURL + 'organogramas/hierarquia');
    self.mtvOrganograma.setOnLoadSuccessCallback(function (response) {
        self.loaderApi.hide();
        self.defaultModal.modal('show');
    });
    self.mtvOrganograma.setOnLoadErrorCallback(function (callback) {
        self.loaderApi.hide();
    });
    self.mtvOrganograma.setOnClick(function (data) {
        self.inputOrganograma.val(data['text']);
        self.inputOrganograma.attr('data-id',data['idOrganograma']);
        self.defaultModal.modal('hide');
    });
    self.mtvOrganograma.load();
};
GerenciaUsuarioViewModel.prototype.getPessoas = function () {
    var self = this;
    self.loaderApi.show(self.painelFormulario);
    self.dataTablePessoa = new ModernDataTable(self.defaultModal.find('#tableListaPessoa'));
    self.dataTablePessoa.setDisplayCols([
        {"key": "id"},
        {"key": "nome"},
        {"key": "dataNascimento","type":"date"},
        {"key": "sexo"},
        {"key": "cpf", 'render': function (data) {
            return data['cpf'].replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
        }},
        {"key": "rg"}
    ]);
    self.dataTablePessoa.setIsColsEditable(false);
    self.dataTablePessoa.defaultLoader(false);
    self.dataTablePessoa.hideActionBtnDelete();
    self.dataTablePessoa.hideRowSelectionCheckBox();
    self.dataTablePessoa.setDataToSender({"tipo":"fisica"});
    self.dataTablePessoa.setSourceURL(self.webserviceJubarteBaseURL + 'pessoas');
    self.dataTablePessoa.setSourceMethodPOST();
    self.dataTablePessoa.setOnClick(function (data) {
        self.inputNomePessoa.val(data['nome']);
        self.inputNomePessoa.attr('data-id', data['id']);
        self.defaultModal.modal('hide');
        // Carrega dados da EXTENCAO DE SISTEMA
        self.extSetorCiente.loadData({"ativo":true}, {"idPessoa":data['id']}, self.defaultModal);
    });
    self.dataTablePessoa.setOnLoadedContent(function () {
        // self.defaultModal.find().attr('data-container','body');
        // self.defaultModal.find('.dataTableSelectItemsPerPage').selectpicker();   //habilita o selectpicker com bug
        self.loaderApi.hide();
        self.defaultModal.modal('show');
    });
    self.dataTablePessoa.load();
};
GerenciaUsuarioViewModel.prototype.getLogins = function () {
    var self = this;
    self.loaderApi.show(self.painelFormulario);
    self.dataTableLoginLDAP = new ModernDataTable(self.defaultModal.find('#tableListaLoginLDAP'));
    self.dataTableLoginLDAP.hideRowSelectionCheckBox();
    self.dataTableLoginLDAP.setDisplayCols([{"key": "nome"},{"key": "login"}]);
    self.dataTableLoginLDAP.setIsColsEditable(false);
    self.dataTableLoginLDAP.defaultLoader(false);
    self.dataTableLoginLDAP.hideActionBtnDelete();
    self.dataTableLoginLDAP.setDataToSender({});
    self.dataTableLoginLDAP.setSourceURL(self.webserviceJubarteBaseURL + 'usuarios/logins');
    self.dataTableLoginLDAP.setSourceMethodPOST();
    self.dataTableLoginLDAP.setOnLoadedContent(function () {
        self.loaderApi.hide();
        self.defaultModal.modal('show');
    });
    self.dataTableLoginLDAP.setOnClick(function (data) {
        self.inputUserLoginLDAP.val(data['login']);
        self.inputUserLoginLDAP.attr('data-login',data['login']);
        self.defaultModal.modal('hide');
    });
    self.dataTableLoginLDAP.load();
};
GerenciaUsuarioViewModel.prototype.resetForm = function() {
    this.inputNomePessoa.val('');
    this.inputNomePessoa.removeAttr('data-id');
    this.inputOrganograma.val('');
    this.inputOrganograma.removeAttr('data-id');
    this.inputUserLoginLDAP.val('');
    this.checkboxAtivo.prop('checked', true);
    this.selectSistema.val('');
    this.selectPerfil.val('');
    $('select').selectpicker('refresh');
};
GerenciaUsuarioViewModel.prototype.prepararJSON = function() {
    var json = {};
    json['idPessoa'] = this.inputNomePessoa.attr('data-id');
    json['idOrganograma'] = this.inputOrganograma.attr('data-id');
    json['login'] = this.inputUserLoginLDAP.val();
    json['ativo'] = this.checkboxAtivo.is(':checked');
    json['idSistema'] = this.selectSistema.val();
    json['idPerfil'] = this.selectPerfil.val();
    return json;
};
GerenciaUsuarioViewModel.prototype.save = function () {
    var self = this;
    self.loaderApi.show();
    self.restClient.setMethodPUT();
    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'usuarios/');
    self.restClient.setDataToSender( self.prepararJSON() );
    self.restClient.setSuccessCallbackFunction(function (data) {
        var paramGravacao = {"idPessoa":self.inputNomePessoa.attr('data-id'), "idSetores":self.extSetorCiente.getSelected()};
        self.extSetorCiente.saveData(paramGravacao);
        self.resetForm();
        self.loaderApi.hide();  
    });
    self.restClient.setErrorCallbackFunction(function (callback) {
        self.loaderApi.hide();
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", callback.responseJSON, "OK");
    });
    self.restClient.exec();
};
GerenciaUsuarioViewModel.prototype.listarUsuarios = function () {
    var self = this;
    self.loaderApi.show();
    self.datatableUsuarios.setDisplayCols([
        {"key": "nomePessoa"},
        {"key": "login"},
        {"key": "siglaSistema"},
        {"key": "siglaPerfil"},
        {"key": "ativo","type":"boolLabel",'align':'center'}
    ]);
    self.datatableUsuarios.setIsColsEditable(false);
    self.datatableUsuarios.defaultLoader(false);
    self.datatableUsuarios.showActionBtnAdd();
    self.datatableUsuarios.setSourceURL(self.webserviceJubarteBaseURL + 'usuarios');
    self.datatableUsuarios.setSourceMethodPOST();
    self.datatableUsuarios.setOnLoadedContent(function () {
        self.loaderApi.hide();
    });
    self.datatableUsuarios.setOnDeleteItemAction(function (ids) {
        console.log('apagar ids: '+ ids);
    });
    self.datatableUsuarios.setOnClick(function (obj) {
        self.carregarUsuario(obj);
    });
    self.datatableUsuarios.setOnAddItemAction(function () {
        console.log('adicionando');
    });
    self.datatableUsuarios.load();
};