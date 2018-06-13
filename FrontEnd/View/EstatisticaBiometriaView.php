<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jubarte - Prefeitura Municipal de Rio das Ostras - RJ</title>

    <!-- ESTILO LIMITLESS -->
    <link href="/cdn/Assets/fonts/material-icons/material-icons.css" rel="stylesheet">
    <link href="/cdn/Assets/fonts/roboto/roboto.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/core.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/components.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /ESTILO LIMITLESS -->

    <!-- JS CORE LIMITLESS -->
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/plugins/notifications/jgrowl.min.js"></script>
    <!-- /JS CORE LIMITLESS -->

    <!-- JS PLUGINS EXTRA PARA ESTA PAGINA -->
    <script type="text/javascript" src="/cdn/Vendor/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/select2/4.0.6/select2.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/moment/2.19.1/moment.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/moment/2.19.1/locale/pt-br.js"></script>
    <!-- /JS PLUGINS EXTRA PARA ESTA PAGINA -->

    <!-- DEPENDEICIAS JUBARTE -->
    <link href="/cdn/Assets/css/jubarteStyle.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/jSwitch.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/jCheckBox.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/modernDataTable.css" rel="stylesheet" type="text/css"/>
    <link href="/Assets/css/ModernTreeView.css" rel="stylesheet" type="text/css">

    <!-- DEPENDECIAS DA VIEW MODEL -->
    <script type="text/javascript" src="/cdn/utils/utils.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernBlockUI.js"></script>
    <script type="text/javascript" src="/cdn/utils/jubarte.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModalAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/LoaderAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/RESTClient.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernDataTable.js"></script>

    <!-- VIEW MODEL -->
    <script type="text/javascript" src="/ViewModel/Constants.js"></script>
    <script type="text/javascript" src="/ViewModel/EstatisticaBiometriaViewModel.js"></script>

</head>
<body class="sidebar-detached-hidden">


<div class="sidebar-xs has-detached-right">
    <!-- Main content -->
    <div class="containerInsideIframe">
        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">


                    <!-- Header content -->
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4>
                                <i class="icon-multitouch position-left"></i>
                                <span class="text-semibold">Lista Biometria</span>
                            </h4>

                            <ul class="breadcrumb position-right"></ul>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <button data-toggle="collapse" data-parent="#accordion-controls" href="#blocoCadSistema" class="btnSalvar btn bg-orange btn-labeled heading-btn legitRipple">
                                    <b><i class="icon-multitouch"></i></b>Biometria Cadastrada
                                </button>
                                <button data-toggle="collapse" data-parent="#accordion-controls" href="#blocoListarModeloEquipamento" class="btnSalvar btn bg-blue btn-labeled heading-btn legitRipple">
                                    <b><i class="icon-thumbs-down2"></i></b>Biometria Não Cadastrada
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /header content -->

                    <!-- Content area -->
                    <div class="content">

                        <!-- Estatísticas -->
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel panel-body panel-body-accent">
                                    <div class="media no-margin">
                                        <div class="media-body">
                                            <h3 class="no-margin text-semibold" id="cadastrados_hoje">0</h3>
                                            <span class="text-uppercase text-size-mini text-muted">Cadastrados Hoje</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <i class="icon-user-check icon-3x text-orange"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="panel panel-body">
                                    <div class="media no-margin">
                                        <div class="media-body">
                                            <h3 class="no-margin text-semibold" id="total_cadastrados">0</h3>
                                            <span class="text-uppercase text-size-mini text-muted">Total Cadastrados</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <i class="icon-user-plus icon-3x text-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="panel panel-body">
                                    <div class="media no-margin">
                                        <div class="media-body">
                                            <h3 class="no-margin text-semibold" id="nao_cadastrados">0</h3>
                                            <span class="text-uppercase text-size-mini text-muted">Não Cadastrados</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <i class="icon-user-cancel icon-3x text-indigo"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="panel panel-body">
                                    <div class="media no-margin">
                                        <div class="media-body">
                                            <h3 class="no-margin text-semibold" id="total_matriculas">0</h3>
                                            <span class="text-uppercase text-size-mini text-muted">Total Matrículas</span>
                                        </div>

                                        <div class="media-right media-middle">
                                            <i class="icon-users4 icon-3x text-grey"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Estatísticas -->

                        <div class="panel-group accordion-sortable content-group-lg ui-sortable" id="accordion-controls">

                            <div class="panel panel-white" id="formPanel"><!-- painel 01 -->
                                <a id="linkOpenForm" data-toggle="collapse" data-parent="#accordion-controls" href="#blocoCadSistema" aria-expanded="true">
                                    <div class="panel-heading border3-darkOrange">
                                        <h6 class="panel-title">
                                            Biometria Cadastrada
                                        </h6>
                                    </div>
                                </a>
                                <div id="blocoCadSistema" class="panel-collapse collapse in" aria-expanded="true" style="">
                                    <div class="panel-body border3-orange no-padding">

                                        <!-- ModernDataTable -->
                                        <div class="modernDataTable">
                                            <table id="tableListServidoresTrue" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Matricula</th>
                                                    <th>Nome</th>
                                                    <th>CPF</th>
                                                    <th>RG</th>
                                                    <th>Data Nascimento</th>
                                                    <th>Lotação</th>
                                                </tr>
                                                </thead>

                                            </table>
                                        </div><!-- Fim ModernDataTable -->

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-white" id="tableSistemas"><!-- painel 02 -->
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion-controls" href="#blocoListarModeloEquipamento" aria-expanded="false">
                                    <div class="panel-heading border3-darkPrimary">
                                        <h6 class="panel-title">
                                            Biometria Não Cadastrada
                                    </div>
                                </a>
                                <div id="blocoListarModeloEquipamento" class="panel-collapse collapse" aria-expanded="false">
                                    <div class="panel-body border3-primary no-padding">

                                        <!-- ModernDataTable -->
                                        <div class="modernDataTable">
                                            <table id="tableListServidoresFalse" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th>Matricula</th>
                                                    <th>Nome</th>
                                                    <th>CPF</th>
                                                    <th>RG</th>
                                                    <th>Data Nascimento</th>
                                                    <th>Lotação</th>
                                                </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div><!-- Fim ModernDataTable -->

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /content area -->

                </div><!-- /main content -->

            </div><!-- /page content -->

            <!-- Footer -->
            <div class="footer text-muted">
            </div>
            <!-- /footer -->

        </div><!-- /page container -->
    </div>
</div>
<template id="blocoExtensao">
    <div class="form-group blocoExtensao">
        <label class="control-label col-sm-2">Extensão <span class="text-danger">*</span> <span id="icoEraser" class="cursor-pointer" title="Apagar Extensão"><i class="icon-eraser"></i></span></label>
        <div>
            <div class="col-sm-6">
                <input name="rotaws" type="text" class="form-control" placeholder="Web Service" required>
            </div>
            <div class="col-sm-2">
                <select name="tipoRota" class="form-control select2" data-placeholder="Método" required >
                    <option>Método</option>
                    <option>PUT</option>
                    <option>POST</option>
                    <option>GET</option>
                    <option>DELETE</option>
                </select>
            </div>
            <div class="col-sm-2">
                <input name="key" type="text" class="form-control" placeholder="Key" required>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                <input name="label" type="text" class="form-control" placeholder="Label" required>
            </div>
            <div class="col-sm-2">
                <select name="tipoExibicao" class="form-control select2" data-placeholder="Exibição" required >
                    <option>Exibição</option>
                    <option>Sequencial</option>
                    <option>Exibição</option>
                </select>
            </div>
            <div class="col-sm-2">
                <select name="tipoSelecao" class="form-control select2" data-placeholder="Seleção" required >
                    <option>Seleção</option>
                    <option>Simples</option>
                    <option>Múltiplo</option>
                </select>
            </div>
            <div class="col-sm-2">
                <select name="tipo" class="form-control select2" data-placeholder="Seleção" required >
                    <option>Tipo</option>
                    <option>Leitura</option>
                    <option>Gravação</option>
                </select>
            </div>
        </div>
    </div>
</template>
</body>
</html>