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

    <!-- DEPENDECIAS GRAFICAS -->
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/plugins/visualization/c3/c3.min.js"></script>

    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/charts/c3/c3_advanced.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/charts/c3/c3_bars_pies.jss"></script>

    <!-- VIEW MODEL -->
    <script type="text/javascript" src="/ViewModel/Constants.js"></script>
    <script type="text/javascript" src="/ViewModel/DashboardBiometriaViewModel.js"></script>

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
                                <i class="icon-graph position-left"></i>
                                <span class="text-semibold">Estatísticas Biometria</span>
                            </h4>

                            <ul class="breadcrumb position-right"></ul>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <button data-toggle="collapse" data-parent="#accordion-controls" href="cadastroServidor" class="btnSalvar btn bg-orange btn-labeled heading-btn legitRipple"><b><i class="icon-vcard"></i></b>Cadastro Servidor
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /header content -->

                    <!-- Content area -->
                    <div class="content">

                        <div class="tabbable">
                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-component">
                                <li class="active">
                                    <a id="btnShowTabCadPessoa" href="#tabEstatisticasBiometria" data-toggle="tab" class="legitRipple"
                                       aria-expanded="true">Estatísticas</a>
                                </li>
                                <li class="">
                                    <a id="btnShowTabListaPessoaFisica" href="#tabListaBiometriaCadastrada" data-toggle="tab" class="legitRipple"
                                       aria-expanded="false">Listar Biometria Cadastrada</a>
                                </li>
                                <li class="">
                                    <a id="btnShowTabListaPessoaJuridica" href="#tabListaBiometriaNaoCadastrada" data-toggle="tab" class="legitRipple"
                                       aria-expanded="false">Listar Biometria Não Cadastrada</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tabEstatisticasBiometria">

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

                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="panel panel-flat">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title text-semibold">Biometrias Cadastradas por dia<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li><a data-action="collapse"></a></li>
                                                            <li><a data-action="reload"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="panel-body">
                                                    <div class="chart-container">
                                                        <div class="chart c3" id="c3-bar-chart" style="max-height: 400px; position: relative;">
                                                            <div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 162.5px; left: 196.5px;">
                                                                <table class="c3-tooltip">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th colspan="2">0</th>
                                                                    </tr>
                                                                    <tr class="c3-tooltip-name-data1">
                                                                        <td class="name"><span style="background-color:#2196F3"></span>data1</td>
                                                                        <td class="value">30</td>
                                                                    </tr>
                                                                    <tr class="c3-tooltip-name-data2">
                                                                        <td class="name"><span style="background-color:#FF9800"></span>data2</td>
                                                                        <td class="value">130</td>
                                                                    </tr>
                                                                    <tr class="c3-tooltip-name-data3">
                                                                        <td class="name"><span style="background-color:#4CAF50"></span>data3</td>
                                                                        <td class="value">130</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="panel panel-flat" style="height: 488px;">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title text-semibold">Estatística Geral<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li><a data-action="collapse"></a></li>
                                                            <li><a data-action="reload"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="panel-body">
                                                    <div class="chart-container text-center">
                                                        <div class="display-inline-block c3" id="c3-pie-chart" style="max-height: 400px; position: relative;">
                                                            <svg width="350" height="320" style="overflow: hidden;">
                                                                <defs>
                                                                    <clipPath id="c3-1526416496908-clip">
                                                                        <rect width="350" height="296"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526416496908-clip-xaxis">
                                                                        <rect x="-31" y="-20" width="412" height="40"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526416496908-clip-yaxis">
                                                                        <rect x="-29" y="-4" width="20" height="320"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526416496908-clip-grid">
                                                                        <rect width="350" height="296"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526416496908-clip-subchart">
                                                                        <rect width="350"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(0.5,4.5)">
                                                                    <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="175" y="148" style="opacity: 0;"></text>
                                                                    <rect class="c3-zoom-rect" width="350" height="296" style="opacity: 0;"></rect>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip)" class="c3-regions" style="visibility: hidden;"></g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip-grid)" class="c3-grid" style="visibility: hidden;">
                                                                        <g class="c3-xgrid-focus">
                                                                            <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="296" style="visibility: hidden;"></line>
                                                                        </g>
                                                                    </g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip)" class="c3-chart">
                                                                        <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                                                            <rect class=" c3-event-rect c3-event-rect-0" x="0.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-1" x="7.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-2" x="14.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-3" x="21.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-4" x="28.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-5" x="35.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-6" x="42.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-7" x="49.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-8" x="56.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-9" x="63.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-10" x="70.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-11" x="77.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-12" x="84.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-13" x="91.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-14" x="98.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-15" x="105.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-16" x="112.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-17" x="119.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-18" x="126.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-19" x="133.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-20" x="140.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-21" x="147.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-22" x="154.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-23" x="161.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-24" x="168.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-25" x="175.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-26" x="182.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-27" x="189.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-28" x="196.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-29" x="203.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-30" x="210.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-31" x="217.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-32" x="224.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-33" x="231.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-34" x="238.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-35" x="245.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-36" x="252.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-37" x="259.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-38" x="266.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-39" x="273.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-40" x="280.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-41" x="287.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-42" x="294.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-43" x="301.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-44" x="308.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-45" x="315.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-46" x="322.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-47" x="329.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-48" x="336.5" y="0" width="7" height="296"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-49" x="343.5" y="0" width="7" height="296"></rect>
                                                                        </g>
                                                                        <g class="c3-chart-bars">
                                                                            <g class="c3-chart-bar c3-target c3-target-setosa" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-setosa c3-bars c3-bars-setosa" style="cursor: pointer;"></g>
                                                                            </g>
                                                                            <g class="c3-chart-bar c3-target c3-target-versicolor" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-versicolor c3-bars c3-bars-versicolor" style="cursor: pointer;"></g>
                                                                            </g>
                                                                            <g class="c3-chart-bar c3-target c3-target-virginica" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-virginica c3-bars c3-bars-virginica" style="cursor: pointer;"></g>
                                                                            </g>
                                                                        </g>
                                                                        <g class="c3-chart-lines">
                                                                            <g class="c3-chart-line c3-target c3-target-setosa" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-setosa c3-lines c3-lines-setosa"></g>
                                                                                <g class=" c3-shapes c3-shapes-setosa c3-areas c3-areas-setosa"></g>
                                                                                <g class=" c3-selected-circles c3-selected-circles-setosa"></g>
                                                                                <g class=" c3-shapes c3-shapes-setosa c3-circles c3-circles-setosa" style="cursor: pointer;"></g>
                                                                            </g>
                                                                            <g class="c3-chart-line c3-target c3-target-versicolor" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-versicolor c3-lines c3-lines-versicolor"></g>
                                                                                <g class=" c3-shapes c3-shapes-versicolor c3-areas c3-areas-versicolor"></g>
                                                                                <g class=" c3-selected-circles c3-selected-circles-versicolor"></g>
                                                                                <g class=" c3-shapes c3-shapes-versicolor c3-circles c3-circles-versicolor" style="cursor: pointer;"></g>
                                                                            </g>
                                                                            <g class="c3-chart-line c3-target c3-target-virginica" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-virginica c3-lines c3-lines-virginica"></g>
                                                                                <g class=" c3-shapes c3-shapes-virginica c3-areas c3-areas-virginica"></g>
                                                                                <g class=" c3-selected-circles c3-selected-circles-virginica"></g>
                                                                                <g class=" c3-shapes c3-shapes-virginica c3-circles c3-circles-virginica" style="cursor: pointer;"></g>
                                                                            </g>
                                                                        </g>
                                                                        <g class="c3-chart-arcs" transform="translate(175,143)">
                                                                            <text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text>
                                                                            <g class="c3-chart-arc c3-target c3-target-setosa">
                                                                                <g class=" c3-shapes c3-shapes-setosa c3-arcs c3-arcs-setosa">
                                                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-setosa" transform="" style="fill: rgb(76, 175, 80); cursor: pointer; opacity: 1;" d="M-56.58122334909735,-123.50622520472221A135.85,135.85 0 0,1 -1.4561427846588719e-13,-135.85L0,0Z"></path>
                                                                                </g>
                                                                                <text dy=".35em" class="" transform="translate(-23.16481335776993,-106.18254951779828)" style="opacity: 1; text-anchor: middle; pointer-events: none;">6.8%</text>
                                                                            </g>
                                                                            <g class="c3-chart-arc c3-target c3-target-versicolor">
                                                                                <g class=" c3-shapes c3-shapes-versicolor c3-arcs c3-arcs-versicolor">
                                                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-versicolor" transform="" style="fill: rgb(0, 188, 212); cursor: pointer; opacity: 1;" d="M-52.45293501852296,125.3152508992525A135.85,135.85 0 0,1 -56.58122334909735,-123.50622520472221L0,0Z"></path>
                                                                                </g>
                                                                                <text dy=".35em" class="" transform="translate(-108.66504472846542,1.8029015948221905)" style="opacity: 1; text-anchor: middle; pointer-events: none;">36.9%</text>
                                                                            </g>
                                                                            <g class="c3-chart-arc c3-target c3-target-virginica">
                                                                                <g class=" c3-shapes c3-shapes-virginica c3-arcs c3-arcs-virginica">
                                                                                    <path class=" c3-shape c3-shape c3-arc c3-arc-virginica" transform="" style="fill: rgb(244, 67, 54); cursor: pointer; opacity: 1;" d="M8.318413383208396e-15,-135.85A135.85,135.85 0 1,1 -52.45293501852296,125.3152508992525L0,0Z"></path>
                                                                                </g>
                                                                                <text dy=".35em" class="" transform="translate(106.55222093927608,21.400154506631363)" style="opacity: 1; text-anchor: middle; pointer-events: none;">56.3%</text>
                                                                            </g>
                                                                        </g>
                                                                        <g class="c3-chart-texts">
                                                                            <g class="c3-chart-text c3-target c3-target-setosa" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-texts c3-texts-setosa"></g>
                                                                            </g>
                                                                            <g class="c3-chart-text c3-target c3-target-versicolor" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-texts c3-texts-versicolor"></g>
                                                                            </g>
                                                                            <g class="c3-chart-text c3-target c3-target-virginica" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-texts c3-texts-virginica"></g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip-grid)" class="c3-grid c3-grid-lines">
                                                                        <g class="c3-xgrid-lines"></g>
                                                                        <g class="c3-ygrid-lines"></g>
                                                                    </g>
                                                                    <g class="c3-axis c3-axis-x" clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip-xaxis)" transform="translate(0,296)" style="visibility: visible; opacity: 0;">
                                                                        <text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="350" dx="-0.5em" dy="-0.5em"></text>
                                                                        <g class="tick" transform="translate(4, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(11, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(18, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(25, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">3</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(32, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">4</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(39, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(46, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">6</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(53, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">7</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(60, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">8</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(67, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">9</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(74, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">10</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(81, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">11</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(88, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">12</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(95, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">13</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(102, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">14</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(109, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">15</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(116, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">16</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(123, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">17</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(130, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">18</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(137, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">19</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(144, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">20</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(151, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">21</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(158, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">22</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(165, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">23</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(172, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">24</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(179, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">25</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(186, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">26</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(193, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">27</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(200, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">28</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(207, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">29</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(214, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">30</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(221, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">31</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(228, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">32</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(235, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">33</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(242, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">34</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(249, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">35</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(256, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">36</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(263, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">37</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(270, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">38</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(277, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">39</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(284, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">40</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(291, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">41</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(298, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">42</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(305, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">43</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(312, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">44</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(319, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">45</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(326, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">46</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(333, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">47</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(340, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">48</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(347, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">49</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M0,6V0H350V6"></path>
                                                                    </g>
                                                                    <g class="c3-axis c3-axis-y" clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 0;">
                                                                        <text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text>
                                                                        <g class="tick" transform="translate(0,282)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,231)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">0.5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,180)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,129)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">1.5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,77)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,26)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">2.5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M-6,1H0V296H-6"></path>
                                                                    </g>
                                                                    <g class="c3-axis c3-axis-y2" transform="translate(350,0)" style="visibility: hidden; opacity: 0;">
                                                                        <text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text>
                                                                        <g class="tick" transform="translate(0,296)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,267)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,237)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,208)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.3</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,178)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.4</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,149)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,119)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.6</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,90)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.7</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,60)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.8</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,31)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.9</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M6,1H0V296H6"></path>
                                                                    </g>
                                                                </g>
                                                                <g transform="translate(0.5,320.5)" style="visibility: hidden;">
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip-subchart)" class="c3-chart">
                                                                        <g class="c3-chart-bars"></g>
                                                                        <g class="c3-chart-lines"></g>
                                                                    </g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                                        <rect class="background" x="0" width="350" style="visibility: hidden; cursor: crosshair;"></rect>
                                                                        <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                                                        <g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                                                        </g>
                                                                        <g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                                                        </g>
                                                                    </g>
                                                                    <g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://localhost/limitless/material/c3_bars_pies.html#c3-1526416496908-clip-xaxis)" style="visibility: visible; opacity: 0;">
                                                                        <g class="tick" transform="translate(4, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(11, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(18, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(25, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">3</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(32, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">4</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(39, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(46, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">6</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(53, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">7</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(60, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">8</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(67, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">9</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(74, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">10</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(81, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">11</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(88, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">12</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(95, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">13</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(102, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">14</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(109, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">15</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(116, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">16</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(123, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">17</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(130, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">18</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(137, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">19</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(144, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">20</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(151, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">21</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(158, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">22</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(165, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">23</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(172, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">24</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(179, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">25</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(186, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">26</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(193, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">27</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(200, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">28</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(207, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">29</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(214, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">30</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(221, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">31</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(228, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">32</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(235, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">33</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(242, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">34</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(249, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">35</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(256, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">36</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(263, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">37</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(270, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">38</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(277, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">39</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(284, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">40</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(291, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">41</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(298, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">42</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(305, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">43</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(312, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">44</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(319, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">45</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(326, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">46</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(333, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">47</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(340, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: block; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">48</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(347, 0)" style="opacity: 1;">
                                                                            <line y2="6" x2="0" x1="0"></line>
                                                                            <text y="9" transform="" x="0" style="display: none; text-anchor: middle;">
                                                                                <tspan x="0" dy=".71em" dx="0">49</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M0,6V0H350V6"></path>
                                                                    </g>
                                                                </g>
                                                                <g transform="translate(0,300)">
                                                                    <g class="c3-legend-item c3-legend-item-setosa" style="visibility: visible; cursor: pointer; opacity: 1;">
                                                                        <text x="88.265625" y="9" style="pointer-events: none;">setosa</text>
                                                                        <rect class="c3-legend-item-event" x="74.265625" y="-5" style="fill-opacity: 0;" height="18" width="61.6875"></rect>
                                                                        <line class="c3-legend-item-tile" stroke-width="10" style="pointer-events: none; stroke: rgb(76, 175, 80);" y2="4" x2="82.265625" y1="4" x1="72.265625"></line>
                                                                    </g>
                                                                    <g class="c3-legend-item c3-legend-item-versicolor" style="visibility: visible; cursor: pointer; opacity: 1;">
                                                                        <text x="149.953125" y="9" style="pointer-events: none;">versicolor</text>
                                                                        <rect class="c3-legend-item-event" x="135.953125" y="-5" style="fill-opacity: 0;" height="18" width="78.671875"></rect>
                                                                        <line class="c3-legend-item-tile" stroke-width="10" style="pointer-events: none; stroke: rgb(0, 188, 212);" y2="4" x2="143.953125" y1="4" x1="133.953125"></line>
                                                                    </g>
                                                                    <g class="c3-legend-item c3-legend-item-virginica" style="visibility: visible; cursor: pointer; opacity: 1;">
                                                                        <text x="228.625" y="9" style="pointer-events: none;">virginica</text>
                                                                        <rect class="c3-legend-item-event" x="214.625" y="-5" style="fill-opacity: 0;" height="18" width="61.109375"></rect>
                                                                        <line class="c3-legend-item-tile" stroke-width="10" style="pointer-events: none; stroke: rgb(244, 67, 54);" y2="4" x2="222.625" y1="4" x1="212.625"></line>
                                                                    </g>
                                                                </g>
                                                                <text class="c3-title" x="175" y="0"></text>
                                                            </svg>
                                                            <div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 85.5px; left: 270.75px;">
                                                                <table class="c3-tooltip">
                                                                    <tbody>
                                                                    <tr class="c3-tooltip-name-virginica">
                                                                        <td class="name"><span style="background-color:#F44336"></span>virginica</td>
                                                                        <td class="value">56.3%</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="panel panel-flat">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title text-semibold">Biometrias (Cadastradas X Não Cadastradas)<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li><a data-action="collapse"></a></li>
                                                            <li><a data-action="reload"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="panel-body">
                                                    <div class="chart-container">
                                                        <div class="chart c3" id="c3-transform" style="max-height: 400px; position: relative;">
                                                            <svg width="1563" height="400" style="overflow: hidden;">
                                                                <defs>
                                                                    <clipPath id="c3-1526414476638-clip">
                                                                        <rect width="1511" height="346"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526414476638-clip-xaxis">
                                                                        <rect x="-51" y="-20" width="1593" height="70"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526414476638-clip-yaxis">
                                                                        <rect x="-49" y="-4" width="70" height="370"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526414476638-clip-grid">
                                                                        <rect width="1511" height="346"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="c3-1526414476638-clip-subchart">
                                                                        <rect width="1511"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g transform="translate(50.5,4.5)">
                                                                    <text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="755.5" y="173" style="opacity: 0;"></text>
                                                                    <rect class="c3-zoom-rect" width="1511" height="346" style="opacity: 0;"></rect>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip)" class="c3-regions" style="visibility: visible;"></g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip-grid)" class="c3-grid" style="visibility: visible;">
                                                                        <g class="c3-ygrids">
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="341" y2="341"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="302" y2="302"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="263" y2="263"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="225" y2="225"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="186" y2="186"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="147" y2="147"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="108" y2="108"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="69" y2="69"></line>
                                                                            <line class="c3-ygrid" x1="0" x2="1511" y1="30" y2="30"></line>
                                                                        </g>
                                                                        <g class="c3-xgrid-focus">
                                                                            <line class="c3-xgrid-focus" x1="15" x2="15" y1="0" y2="346" style="visibility: hidden;"></line>
                                                                        </g>
                                                                    </g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip)" class="c3-chart">
                                                                        <g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;">
                                                                            <rect class=" c3-event-rect c3-event-rect-0" x="-110.91666666666667" y="0" width="251.83333333333334" height="346"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-1" x="186.08333333333331" y="0" width="251.83333333333334" height="346"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-2" x="482.0833333333333" y="0" width="251.83333333333334" height="346"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-3" x="778.0833333333334" y="0" width="251.83333333333334" height="346"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-4" x="1074.0833333333333" y="0" width="251.83333333333334" height="346"></rect>
                                                                            <rect class=" c3-event-rect c3-event-rect-5" x="1371.0833333333333" y="0" width="251.83333333333334" height="346"></rect>
                                                                        </g>
                                                                        <g class="c3-chart-bars">
                                                                            <g class="c3-chart-bar c3-target c3-target-data1" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1" style="cursor: pointer;"></g>
                                                                            </g>
                                                                            <g class="c3-chart-bar c3-target c3-target-data2" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-data2 c3-bars c3-bars-data2" style="cursor: pointer;"></g>
                                                                            </g>
                                                                        </g>
                                                                        <g class="c3-chart-lines">
                                                                            <g class="c3-chart-line c3-target c3-target-data1" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1">
                                                                                    <path class=" c3-shape c3-shape c3-line c3-line-data1" d="M15,317.24999999999994L312,185.15540540540542L608,262.8581081081081L904,29.750000000000014L1200,224.00675675675674L1497,146.30405405405406" style="stroke: rgb(31, 119, 180); opacity: 1;"></path>
                                                                                </g>
                                                                                <g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1">
                                                                                    <path class=" c3-shape c3-shape c3-area c3-area-data1" d="M 15 317.24999999999994" style="fill: rgb(31, 119, 180); opacity: 0.4;"></path>
                                                                                </g>
                                                                                <g class=" c3-selected-circles c3-selected-circles-data1"></g>
                                                                                <g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1" style="cursor: pointer;">
                                                                                    <circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(31, 119, 180); opacity: 1;" cx="15" cy="317.24999999999994"></circle>
                                                                                    <circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(31, 119, 180); opacity: 1;" cx="312" cy="185.15540540540542"></circle>
                                                                                    <circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(31, 119, 180); opacity: 1;" cx="608" cy="262.8581081081081"></circle>
                                                                                    <circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(31, 119, 180); opacity: 1;" cx="904" cy="29.750000000000014"></circle>
                                                                                    <circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(31, 119, 180); opacity: 1;" cx="1200" cy="224.00675675675674"></circle>
                                                                                    <circle class="c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(31, 119, 180); opacity: 1;" cx="1497" cy="146.30405405405406"></circle>
                                                                                </g>
                                                                            </g>
                                                                            <g class="c3-chart-line c3-target c3-target-data2" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-shapes c3-shapes-data2 c3-lines c3-lines-data2">
                                                                                    <path class=" c3-shape c3-shape c3-line c3-line-data2" d="M15,239.54729729729726L312,262.8581081081081L608,231.77702702702703L904,185.15540540540542L1200,224.00675675675674L1497,301.7094594594595" style="stroke: rgb(255, 127, 14); opacity: 1;"></path>
                                                                                </g>
                                                                                <g class=" c3-shapes c3-shapes-data2 c3-areas c3-areas-data2">
                                                                                    <path class=" c3-shape c3-shape c3-area c3-area-data2" d="M 15 239.54729729729726" style="fill: rgb(255, 127, 14); opacity: 0.4;"></path>
                                                                                </g>
                                                                                <g class=" c3-selected-circles c3-selected-circles-data2"></g>
                                                                                <g class=" c3-shapes c3-shapes-data2 c3-circles c3-circles-data2" style="cursor: pointer;">
                                                                                    <circle class="c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(255, 127, 14); opacity: 1;" cx="15" cy="239.54729729729726"></circle>
                                                                                    <circle class="c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(255, 127, 14); opacity: 1;" cx="312" cy="262.8581081081081"></circle>
                                                                                    <circle class="c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(255, 127, 14); opacity: 1;" cx="608" cy="231.77702702702703"></circle>
                                                                                    <circle class="c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(255, 127, 14); opacity: 1;" cx="904" cy="185.15540540540542"></circle>
                                                                                    <circle class="c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(255, 127, 14); opacity: 1;" cx="1200" cy="224.00675675675674"></circle>
                                                                                    <circle class="c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(255, 127, 14); opacity: 1;" cx="1497" cy="301.7094594594595"></circle>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g class="c3-chart-arcs" transform="translate(755.5,168)">
                                                                            <text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text>
                                                                        </g>
                                                                        <g class="c3-chart-texts">
                                                                            <g class="c3-chart-text c3-target c3-target-data1" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-texts c3-texts-data1"></g>
                                                                            </g>
                                                                            <g class="c3-chart-text c3-target c3-target-data2" style="opacity: 1; pointer-events: none;">
                                                                                <g class=" c3-texts c3-texts-data2"></g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip-grid)" class="c3-grid c3-grid-lines">
                                                                        <g class="c3-xgrid-lines"></g>
                                                                        <g class="c3-ygrid-lines"></g>
                                                                    </g>
                                                                    <g class="c3-axis c3-axis-x" clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip-xaxis)" transform="translate(0,346)" style="visibility: visible; opacity: 1;">
                                                                        <text class="c3-axis-x-label" transform="" style="text-anchor: end;" x="1511" dx="-0.5em" dy="-0.5em"></text>
                                                                        <g class="tick" transform="translate(15, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(312, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(608, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(904, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">3</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(1200, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">4</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(1497, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M0,6V0H1511V6"></path>
                                                                    </g>
                                                                    <g class="c3-axis c3-axis-y" clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip-yaxis)" transform="translate(0,0)" style="visibility: visible; opacity: 1;">
                                                                        <text class="c3-axis-y-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="1.2em"></text>
                                                                        <g class="tick" transform="translate(0,341)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,302)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">50</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,263)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">100</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,225)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">150</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,186)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">200</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,147)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">250</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,108)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">300</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,69)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">350</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,30)" style="opacity: 1;">
                                                                            <line x2="-6"></line>
                                                                            <text x="-9" y="0" style="text-anchor: end;">
                                                                                <tspan x="-9" dy="3">400</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M-6,1H0V346H-6"></path>
                                                                    </g>
                                                                    <g class="c3-axis c3-axis-y2" transform="translate(1511,0)" style="visibility: hidden; opacity: 1;">
                                                                        <text class="c3-axis-y2-label" transform="rotate(-90)" style="text-anchor: end;" x="0" dx="-0.5em" dy="-0.5em"></text>
                                                                        <g class="tick" transform="translate(0,346)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,312)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,277)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,243)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.3</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,208)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.4</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,174)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,139)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.6</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,105)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.7</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,70)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.8</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,36)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">0.9</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(0,1)" style="opacity: 1;">
                                                                            <line x2="6" y2="0"></line>
                                                                            <text x="9" y="0" style="text-anchor: start;">
                                                                                <tspan x="9" dy="3">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M6,1H0V346H6"></path>
                                                                    </g>
                                                                </g>
                                                                <g transform="translate(20.5,400.5)" style="visibility: hidden;">
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip-subchart)" class="c3-chart">
                                                                        <g class="c3-chart-bars"></g>
                                                                        <g class="c3-chart-lines"></g>
                                                                    </g>
                                                                    <g clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                                        <rect class="background" x="0" width="1541" style="visibility: hidden; cursor: crosshair;"></rect>
                                                                        <rect class="extent" x="0" width="0" style="cursor: move;"></rect>
                                                                        <g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                                                        </g>
                                                                        <g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;">
                                                                            <rect x="-3" width="6" height="6" style="visibility: hidden;"></rect>
                                                                        </g>
                                                                    </g>
                                                                    <g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://localhost/limitless/material/c3_advanced.html#c3-1526414476638-clip-xaxis)" style="visibility: visible; opacity: 1;">
                                                                        <g class="tick" transform="translate(15, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(312, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">1</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(608, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">2</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(904, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">3</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(1200, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">4</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <g class="tick" transform="translate(1497, 0)" style="opacity: 1;">
                                                                            <line y2="6" x1="0" x2="0"></line>
                                                                            <text y="9" x="0" transform="" style="text-anchor: middle; display: block;">
                                                                                <tspan x="0" dy=".71em" dx="0">5</tspan>
                                                                            </text>
                                                                        </g>
                                                                        <path class="domain" d="M0,6V0H1511V6"></path>
                                                                    </g>
                                                                </g>
                                                                <g transform="translate(0,380)">
                                                                    <g class="c3-legend-item c3-legend-item-data1" style="visibility: visible; cursor: pointer;">
                                                                        <text x="744.5703125" y="9" style="pointer-events: none;">data1</text>
                                                                        <rect class="c3-legend-item-event" x="730.5703125" y="-5" width="55.8125" height="18" style="fill-opacity: 0;"></rect>
                                                                        <line class="c3-legend-item-tile" stroke-width="10" x1="728.5703125" y1="4" x2="738.5703125" y2="4" style="pointer-events: none; stroke: rgb(31, 119, 180);"></line>
                                                                    </g>
                                                                    <g class="c3-legend-item c3-legend-item-data2" style="visibility: visible; cursor: pointer;">
                                                                        <text x="800.3828125" y="9" style="pointer-events: none;">data2</text>
                                                                        <rect class="c3-legend-item-event" x="786.3828125" y="-5" width="46.046875" height="18" style="fill-opacity: 0;"></rect>
                                                                        <line class="c3-legend-item-tile" stroke-width="10" x1="784.3828125" y1="4" x2="794.3828125" y2="4" style="pointer-events: none; stroke: rgb(255, 127, 14);"></line>
                                                                    </g>
                                                                </g>
                                                                <text class="c3-title" x="781.5" y="0"></text>
                                                            </svg>
                                                            <div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none; top: 290.5px; left: 85.5px;">
                                                                <table class="c3-tooltip">
                                                                    <tbody>
                                                                    <tr>
                                                                        <th colspan="2">0</th>
                                                                    </tr>
                                                                    <tr class="c3-tooltip-name-data1">
                                                                        <td class="name"><span style="background-color:#1f77b4"></span>data1</td>
                                                                        <td class="value">30</td>
                                                                    </tr>
                                                                    <tr class="c3-tooltip-name-data2">
                                                                        <td class="name"><span style="background-color:#ff7f0e"></span>data2</td>
                                                                        <td class="value">130</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="tab-pane" id="tabListaBiometriaCadastrada">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-flat">
                                                <div class="panel-body no-padding">
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
                                    </div>
                                </div>

                                <div class="tab-pane" id="tabListaBiometriaNaoCadastrada">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-flat">
                                                <div class="panel-body no-padding">
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
</body>
</html>