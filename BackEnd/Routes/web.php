<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/*$app->get('/', function (Request $request, Response $response, $args) use ($app)
{
    //$name = $request->getAttribute('name');
    //$response->getBody()->write("Hello, $name");
    //$url = $this->router->pathFor('loginRoute');
    //return $response->withStatus(302)->withHeader('Location', $url);
    //return $response->withRedirect('mainView.php');
    return $this->view->render($response, 'LoginView.php');

});*/
$app->get('/', function (Request $request, Response $response, $args) use ($app)
{
    return $this->view->render($response, 'MainView.php');
});
$app->get('/mainView', function (Request $request, Response $response, $args) use ($app)
{
    return $this->view->render($response, 'MainView.php');
});
/*$app->get('/menu', function (Request $request, Response $response, $args) use ($app)
{
    return $response->withRedirect('Assets/menu.json');
});*/



// ROTAS DE WEBPAGES
$app->group('/pages', function () use ($app)
{
    // Controle de Acesso
    $app->get('/sistemas', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciarSistemasView.php');
    });
    $app->get('/perfis', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciarPerfisView.php');
    });
    $app->get('/menus', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciarMenusView.php');
    });
    $app->get('/permissoes', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciarPermissoesView.php');
    });
    $app->get('/dadosUsuario', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'DadosUsuarioView.php');
    });
    $app->get('/gerenciaPessoa', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciaPessoaView.php');
    });
    $app->get('/gerenciaPessoaMin', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciaPessoaMinView.php');
    });
    $app->get('/gerenciaUsuario', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciarUsuariosView.php');
    });
    $app->get('/cadastroServidor', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'CadastroServidorView.php');
    });
    $app->get('/estatisticaBiometria', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'EstatisticaBiometriaView.php');
    });
    $app->get('/dashboardBiometria', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'DashboardBiometriaView.php');
    });
    $app->get('/intranet', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'intranet.php');
    });
    $app->get('/suporte', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'suporteFAQ.php');
    });
    $app->get('/sis', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'Sistemas.php');
    });
    $app->get('/creditos', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'creditos.php');
    });
    $app->get('/contraCheque', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'ContraChequeView.php');
    });
    $app->get('/contraChequeMenu', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'ContraChequeMenuView.php');
    });

    $app->get('/gerenciarOrganograma', function (Request $request, Response $response, $args) use ($app)
    {
        return $this->view->render($response, 'GerenciarOrganogramaView.php');
    });

});