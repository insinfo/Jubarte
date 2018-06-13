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

    <!-- DEPENDEICIAS JUBARTE -->
    <link href="/cdn/Assets/css/jubarteStyle.css" rel="stylesheet" type="text/css">

    <!-- DEPENDECIAS DA VIEW MODEL -->
    <script type="text/javascript" src="/cdn/utils/utils.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernBlockUI.js"></script>
    <script type="text/javascript" src="/cdn/utils/jubarte.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModalAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/LoaderAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/RESTClient.js"></script>

    <!-- VIEW MODEL -->
    <script type="text/javascript" src="/ViewModel/Constants.js"></script>
    <script type="text/javascript">
        // Exibe o IP Público e Privado do Usuário
        $(document).ready(function () {
            $.getJSON('//gd.geobytes.com/GetCityDetails?callback=?', function (data) {
                // console.log(JSON.stringify(data, null, 2));
                getUserIP(function (ip) {
                    $('#displayIpPrivate').text(' - IP Privado: ' + ip);
                });
                $('#displayIpPublic').text('- IP Público: ' + data['geobytesipaddress']);
            });
        });


    </script>

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

                    <!-- Page header -->
                    <div class="page-header">
                        <div class="page-header-content">
                            <div class="page-title">
                                <h4>
                                    <i class="icon-comment-discussion position-left"></i>
                                    <span class="text-semibold">Suporte e FAQ</span>
                                    <span id="displayIpPublic"></span>
                                    <span id="displayIpPrivate"></span>
                                </h4>

                                <ul class="breadcrumb position-right">

                                </ul>
                            </div>

                            <div class="heading-elements">
                                <a href="intranet" class="btn bg-orange btn-labeled heading-btn legitRipple"><b><i class="icon-home2"></i></b>Página Inicial</a>
                                <a href="creditos" class="btn bg-blue btn-labeled heading-btn legitRipple"><b><i class="icon-info3"></i></b>Créditos</a>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">

                        <div class="row">
                            <div class="col-md-9 col-lg-9">

                                <!-- Search -->
                                <div class="panel panel-flat border3-primary">
                                    <div class="panel-body">
                                        <form action="#">
                                            <div class="input-group content-group">
                                                <input type="text" class="form-control input-lg" placeholder="Pesquisar...">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary btn-lg btn-icon"><i class="icon-search4"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /search -->

                                <!-- Questions area -->
                                <h4 class="text-center content-group">
                                    FAQ - Perguntas Mais Frequentes
                                    <small class="display-block">Abaixo, temos as respostas das perguntas que mais se repetem no suporte</small>
                                </h4>

                                <!-- Questions list -->
                                <div class="panel-group panel-group-control panel-group-control-right">
                                    <div class="panel panel-white border3-grey">
                                        <a class="collapsed" data-toggle="collapse" href="#question1">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <i class="icon-help position-left text-slate"></i> Como obter contas de acesso
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="question1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ol>
                                                    <li>Acesse: intranet.pmro.rj.gov.br;</li>
                                                    <li>Procure e clique no link formulário para solicitações, que se encontra destacado em um retângulo azul, na página principal da intranet;(O formulário também se encontra disponível na aba DOWNLOADS > TECNOLOGIA DA INFORMAÇÃO > Formulário para Solicitações ou no site contas.pmro.rj.gov.br);</li>
                                                    <li>Preencher todos os campos do formulário, imprimir solicitação, entregar ao chefe imediato e encaminhar à Subsecretaria de Tecnologia da Informação pelas vias burocráticas.</li>
                                                </ol>
                                                <strong>IMPORTANTE:</strong> Caso desejar acesso a outras contas, deve ser impresso um novo formulário, com as devidas assinaturas e autorizações.
                                            </div>

                                            <div class="panel-footer panel-footer-transparent">
                                                <div class="heading-elements">
                                                    <span class="text-muted heading-text">Última atualização: 12 de Março de 2018</span>

                                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                                        <li><a href="#" class="text-primary"><i class="icon-thumbs-up2 position-left"></i></a> 320</li>
                                                        <li><a href="#" class="text-muted"><i class="icon-thumbs-down2 position-left"></i></a> 14</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-white border3-grey">
                                        <a class="collapsed" data-toggle="collapse" href="#question2">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <i class="icon-help position-left text-slate"></i> Meu computador parece estar com vírus
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="question2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Vírus de computador são responsáveis por uma série de sintomas como lentidão, perda de dados computacionais, erros de programas e travamentos. No entanto, é preciso identificar corretamente os sintomas, pois muitos deles podem ser causados por problemas diversos, como superaquecimento do computador, rede elétrica mal instalada e sem aterramento, erros de registro do sistema operacional, fragmentação do disco, entre outros. Portanto, tenha cuidado ao identificar corretamente problemas de vírus computacionais.
                                                <ol>
                                                    <li>Verifique se o programa antivírus se encontra ativo e atualizado. (O ícone do antivírus se encontra ao lado do relógio do Windows, na parte inferior direita. Perceba que o ícone pode estar oculto, neste caso, clique na seta que exibe ícones ocultos e procure pelo antivírus);</li>
                                                    <li>Verifique, no caso do antivírus Symantec Endpoint Protection, se é mostrado um pequeno círculo verde em sua parte inferior, garantindo assim sua conexão e atualização com o servidor;</li>
                                                    <li>Caso o antivírus esteja atualizado (círculo verde em seu ícone, e definição de antívirus recente), pedir ao usuário que faça uma verificação completa do sistema ou pendrive, para que seja efetuada limpeza do disco rígido. Jamais abrir e-mails de origem duvidosa;</li>
                                                    <li>Reiniciar o computador após a verificação completa. Caso os problemas persistirem, retornar ligação para abertura de Boletim de Atendimento.</li>
                                                </ol>
                                            </div>

                                            <div class="panel-footer panel-footer-transparent">
                                                <div class="heading-elements">
                                                    <span class="text-muted heading-text">Última atualização: 12 de Março de 2018</span>

                                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                                        <li><a href="#" class="text-primary"><i class="icon-thumbs-up2 position-left"></i></a> 278</li>
                                                        <li><a href="#" class="text-muted"><i class="icon-thumbs-down2 position-left"></i></a> 25</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-white border3-grey">
                                        <a class="collapsed" data-toggle="collapse" href="#question3">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <i class="icon-help position-left text-slate"></i> Micro liga, mas está apitando
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="question3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Os bips iniciais do sistema são informações que a BIOS emite para nos informar as condições do sistema. Normalmente há 1 bip longo, que indica que o sistema está ok. Quando há mais bips, o número de bips é significativo sobre o problema do sistema, como por exemplo 1 bip longo e dois curtos que indica problema de vídeo ou bips contínuos e longos que indicam problemas na memória RAM.
                                                <ol>
                                                    <li>Desligue o cabo de alimentação do computador;</li>
                                                    <li>Verifique cabos do monitor (se há mal contato) e ligue novamente o computador;</li>
                                                    <li>Caso não tenha sucesso, abrir Boletim Atendimento.</li>
                                                </ol>
                                            </div>

                                            <div class="panel-footer panel-footer-transparent">
                                                <div class="heading-elements">
                                                    <span class="text-muted heading-text">Última atualização: 12 de Março de 2018</span>

                                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                                        <li><a href="#" class="text-primary"><i class="icon-thumbs-up2 position-left"></i></a> 438</li>
                                                        <li><a href="#" class="text-muted"><i class="icon-thumbs-down2 position-left"></i></a> 16</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-white border3-grey">
                                        <a class="collapsed" data-toggle="collapse" href="#question4">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <i class="icon-help position-left text-slate"></i> Não consigo abrir o SALI
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="question4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Caso você não consiga abrir o SALI, mesmo que tenha aceitado o popup  dele, siga o passo a passo abaixo:
                                                <ol>
                                                    <li>Abra o Firefox;</li>
                                                    <li>Vá em Ferramentas;</li>
                                                    <li>Opções,  confirme se esta desmarcado "Bloquear janelas popup" e marque "Permitir Java Script".</li>
                                                </ol>
                                                Pronto, agora é só testar!
                                            </div>

                                            <div class="panel-footer panel-footer-transparent">
                                                <div class="heading-elements">
                                                    <span class="text-muted heading-text">Última atualização: 12 de Março de 2018</span>

                                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                                        <li><a href="#" class="text-primary"><i class="icon-thumbs-up2 position-left"></i></a> 583</li>
                                                        <li><a href="#" class="text-muted"><i class="icon-thumbs-down2 position-left"></i></a> 21</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-white border3-grey">
                                        <a class="collapsed" data-toggle="collapse" href="#question5">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">
                                                    <i class="icon-help position-left text-slate"></i> Computador não acessa mapeamento
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="question5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                Se você percebeu que seu computador não mapeou o Y:, X:, etc, temos uma maneira rápida e fácil de resolver isso, vamos lá?<br>
                                                Primeiro você ira no botão iniciar do seu Windows:<br>
                                                Depois vamos no campo do menu Iniciar de "Pesquisa" e digite gpupdate /force<br>
                                                Aparecerá essa tela abaixo, aguarde que ela se fechará:<br>
                                                Por último, você deve abrir o seu Internet Explorer, para carregar as alterações e logo depois reiniciar o computador.<br>
                                                Espero que ajude, caso não entre em contato conosco.<br>
                                            </div>

                                            <div class="panel-footer panel-footer-transparent">
                                                <div class="heading-elements">
                                                    <span class="text-muted heading-text">Última atualização: 12 de Março de 2018</span>

                                                    <ul class="list-inline list-inline-condensed heading-text pull-right">
                                                        <li><a href="#" class="text-primary"><i class="icon-thumbs-up2 position-left"></i></a> 642</li>
                                                        <li><a href="#" class="text-muted"><i class="icon-thumbs-down2 position-left"></i></a> 26</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /questions list -->

                                <div class="panel panel-flat border3-grey">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Notícias - BIT</h6>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="collapse"></a></li>
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <ul class="media-list content-group">
                                                    <li class="media stack-media-on-mobile">
                                                        <div class="media-left">
                                                            <div class="thumb">
                                                                <a href="http://bit.riodasostras.rj.gov.br/index.php/2018/03/06/configurando-e-restaurando-as-radwins/" target="_blank">
                                                                    <img src="/cdn/Vendor/limitless/material/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                                    <span class="zoom-image"><i class="icon-newspaper"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media-body">
                                                            <h6 class="media-heading"><a href="http://bit.riodasostras.rj.gov.br/index.php/2018/03/06/configurando-e-restaurando-as-radwins/" target="_blank">Configurando e restaurando as Radwins</a></h6>
                                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                                <li>Tutorial</li>
                                                                <li>06 de Março de 2018</li>
                                                            </ul>
                                                            Neste tutorial vamos mostrar como configurar e restaurar os radios da Radwin, são os equipamentos utilizados...
                                                        </div>
                                                    </li>

                                                    <li class="media stack-media-on-mobile">
                                                        <div class="media-left">
                                                            <div class="thumb">
                                                                <a href="http://bit.riodasostras.rj.gov.br/index.php/2018/03/05/instalando-backuppc/" target="_blank">
                                                                    <img src="/cdn/Vendor/limitless/material/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                                    <span class="zoom-image"><i class="icon-newspaper"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media-body">
                                                            <h6 class="media-heading"><a href="http://bit.riodasostras.rj.gov.br/index.php/2018/03/05/instalando-backuppc/" target="_blank">Instalando BackupPC</a></h6>
                                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                                <li>Tutorial</li>
                                                                <li>05 de Março de 2018</li>
                                                            </ul>
                                                            O BackupPC é uma solução de backup corporativo de alto desempenho usado para fazer backups de estações Linux...
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-6">
                                                <ul class="media-list content-group">
                                                    <li class="media stack-media-on-mobile">
                                                        <div class="media-left">
                                                            <div class="thumb">
                                                                <a href="http://bit.riodasostras.rj.gov.br/index.php/2018/01/23/mapeando-sshfs-no-windows/" target="_blank">
                                                                    <img src="/cdn/Vendor/limitless/material/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                                    <span class="zoom-image"><i class="icon-newspaper"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media-body">
                                                            <h6 class="media-heading"><a href="http://bit.riodasostras.rj.gov.br/index.php/2018/01/23/mapeando-sshfs-no-windows/" target="_blank">Mapeando SSHFS no Windows</a></h6>
                                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                                <li>Tutorial</li>
                                                                <li>23 de Janeiro de 2018</li>
                                                            </ul>
                                                            Este tutorial vai te mostrar como fazer mapeamentos utilizando o protocolo SSHFS que é baseado no nosso amigo...
                                                        </div>
                                                    </li>

                                                    <li class="media stack-media-on-mobile">
                                                        <div class="media-left">
                                                            <div class="thumb">
                                                                <a href="http://bit.riodasostras.rj.gov.br/index.php/2017/12/29/informativo-de-manutencao2812/" target="_blank">
                                                                    <img src="/cdn/Vendor/limitless/material/images/placeholder.jpg" class="img-responsive img-rounded media-preview" alt="">
                                                                    <span class="zoom-image"><i class="icon-newspaper"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="media-body">
                                                            <h6 class="media-heading"><a href="http://bit.riodasostras.rj.gov.br/index.php/2017/12/29/informativo-de-manutencao2812/" target="_blank">Informativo de Manutenção</a></h6>
                                                            <ul class="list-inline list-inline-separate text-muted mb-5">
                                                                <li>Tutorial</li>
                                                                <li>29 de Dezembro de 2017</li>
                                                            </ul>
                                                            Prezados, Conforme memorando encaminhado para todas as secretarias da Sede, o acesso autenticado será...
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-3 col-lg-3">

                                <!-- Info blocks -->

                                <div class="col">
                                    <div class="panel">
                                        <div class="panel-body text-center">
                                            <div class="icon-object border-orange text-orange"><i class="icon-lifebuoy"></i></div>
                                            <h5 class="text-semibold">Suporte</h5>
                                            <p class="mb-15">Para entrar em contato com a equipe de suporte,<br>ligue no telefone (22) 2771-6187 ou<br>em um dos ramais 6187 e 6249.</p>
                                            <!--<a href="#" class="btn bg-orange">Abrir Chamado</a>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="panel">
                                        <div class="panel-body text-center">
                                            <div class="icon-object border-blue text-blue"><i class="icon-bug2"></i></div>
                                            <h5 class="text-semibold">BugReport</h5>
                                            <p class="mb-15">Clique aqui para reportar erro no sistema</p>
                                            <a href="#" class="btn bg-blue">Reportar</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="panel">
                                        <div class="panel-body text-center">
                                            <div class="icon-object border-indigo text-indigo"><i class="icon-reading"></i></div>
                                            <h5 class="text-semibold">BIT</h5>
                                            <p class="mb-15">Artigos, Notícias e Tutorias sobre TI</p>
                                            <a href="http://bit.riodasostras.rj.gov.br/" target="_blank" class="btn bg-indigo">Blog</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- /info blocks -->

                            </div>
                        </div>
                        <!-- /questions area -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->
            <!-- Footer -->
            <div class="footer text-muted">
            </div>
            <!-- /footer -->
        </div>
        <!-- /page container -->
    </div>
</div>

</body>
</html>