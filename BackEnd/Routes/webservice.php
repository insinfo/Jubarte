<?php

use \Slim\Http\Request;
use \Slim\Http\Response;

//use Psr\Http\Message\ServerRequestInterface as Request;
//use Psr\Http\Message\ResponseInterface as Response;

use Jubarte\Controller\SistemaController;
use Jubarte\Controller\SistemaExtensaoController;
use Jubarte\Controller\PerfilController;
use Jubarte\Controller\PermissaoController;
use Jubarte\Controller\MenuController;
use Jubarte\Controller\UsuarioController;
use Jubarte\Controller\BugReportController;
use Jubarte\Controller\ZimbraController;
use Jubarte\Controller\NotificacaoController;
use Jubarte\Controller\PessoasController;
use Jubarte\Controller\OrganogramasController;
use Jubarte\Controller\UtilController;
use Jubarte\Controller\IntranetController;


use Jubarte\Controller\AuthController;
use Jubarte\Middleware\AuthMiddleware;
use Jubarte\Middleware\LogMiddleware;

/* SISTEMA BIOMETRIA */
use Jubarte\Controller\CargoController;
use Jubarte\Controller\ServidorController;
use Jubarte\Controller\FuncaoGratificadaController;
use Jubarte\Controller\VinculoController;
use Jubarte\Controller\JornadaTrabalhoController;
use Jubarte\Controller\LocalBiometriaController;
use Jubarte\Controller\EstatisticaBiometriaController;

// ROTAS DE WEBSERVICE REST
$app->group('/api', function () use ($app)
{
    //**************** ROTAS SISTEMAS ******************/

    //OBTEM UM SISTEMA
    $app->get('/sistemas/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return SistemaController::get($request,$response);
    });
    //CRIA E ATUALIZA SISTEMA
    $app->put('/sistemas/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return SistemaController::save($request,$response);
    });
    //LISTA SISTEMA PARA MODERN DATATABLE
    $app->post('/sistemas',function (Request $request, Response $response, $args) use ($app)
    {
        return SistemaController::getAll($request, $response);
    });
    //DELETA SISTEMA
    $app->delete('/sistemas', function (Request $request, Response $response, $args) use ($app)
    {
        return SistemaController::delete($request,$response);
    });

    //LISTA EXTENÇOES DE SISTEMA PARA MODERN DATATABLE
    $app->post('/sistemas/extencoes',function (Request $request, Response $response, $args) use ($app)
    {
        return SistemaExtensaoController::getAll($request, $response);
    });

    //**************** ROTAS PERFIS ******************/

    //OBTEM UM PERFIL
    $app->get('/perfis/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return PerfilController::get($request,$response);
    });
    //CRIA E ATUALIZA PERFIL
    $app->put('/perfis/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return PerfilController::save($request,$response);
    });
    //LISTA PERFIL PARA MODERN DATATABLE
    $app->post('/perfis',function (Request $request, Response $response, $args) use ($app)
    {
        return PerfilController::getAll($request, $response);
    });
    //DELETA PERFIL
    $app->delete('/perfis', function (Request $request, Response $response, $args) use ($app)
    {
        return PerfilController::delete($request,$response);
    });

    //**************** ROTAS MENUS ******************/

    //OBTEM UM MENU
    $app->get('/menus/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return MenuController::get($request,$response);
    });
    //CRIA E ATUALIZA MENU
    $app->put('/menus/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return MenuController::save($request,$response);
    });
    //LISTA MENU PARA MODERN DATATABLE
    $app->post('/menus',function (Request $request, Response $response, $args) use ($app)
    {
        return MenuController::getAll($request, $response);
    });
    //DELETA MENU
    $app->delete('/menus', function (Request $request, Response $response, $args) use ($app)
    {
        return MenuController::delete($request,$response);
    });
    //OBTEM O MENU ESTRUTURADO PARA TREEVIEW
    $app->get('/menus/hierarquia/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return MenuController::getHierarchy($request,$response);
    });
    //OBTEM O MENU ESTRUTURADO PARA O USUARIO LOGADO
    $app->get('/menus', function (Request $request, Response $response, $args) use ($app)
    {
        return MenuController::getMenusOffUser($request,$response);
    });

    //**************** ROTAS PERMISSÕES ******************/

    //SALVA PERMISSÃO
    $app->put('/permissoes', function (Request $request, Response $response, $args) use ($app)
    {
        return PermissaoController::save($request,$response);
    });
    //LISTA PERMISSÃO
    $app->post('/permissoes',function (Request $request, Response $response, $args) use ($app)
    {
        return PermissaoController::getAll($request, $response);
    });

    //**************** ROTAS USUARIOS ******************/

    //OBTEM UM USUARIO
    $app->get('/usuarios/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return UsuarioController::get($request,$response);
    });
    //CRIA E ATUALIZA USUARIO
    $app->put('/usuarios/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return UsuarioController::save($request,$response);
    });
    //LISTA USUARIO PARA MODERN DATATABLE
    $app->post('/usuarios',function (Request $request, Response $response, $args) use ($app)
    {
        return UsuarioController::getAll($request, $response);
    });
    //DELETA USUARIO
    $app->delete('/usuarios', function (Request $request, Response $response, $args) use ($app)
    {
        return UsuarioController::delete($request,$response);
    });
    //LISTA LOGINS LDAP
    $app->post('/usuarios/logins',function (Request $request, Response $response, $args) use ($app)
    {
        return UsuarioController::getAllLogin($request, $response);
    });

    //**************** ROTAS BUG REPORT  ******************/

    //CRIA E ATUALIZA BUG REPORT
    $app->put('/bugreport/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return BugReportController::save($request,$response);
    });

    //**************** ROTAS PESSOA ******************/

    //OBTEM UMA PESSOA
    $app->get('/pessoas/[{id}/{tipo}]', function (Request $request, Response $response, $args) use ($app)
    {
        return PessoasController::get($request,$response);
    });
    //CRIA E ATUALIZA PESSOA
    $app->put('/pessoas/[{id}]', function (Request $request, Response $response, $args) use ($app)
    {
        return PessoasController::save($request,$response);
    });
    //LISTA PESSOA
    $app->post('/pessoas',function (Request $request, Response $response, $args) use ($app)
    {
        return PessoasController::getAll($request, $response);
    });
    //DELETA PESSOAS {ids,tipoPessoa}
    $app->delete('/pessoas',function (Request $request, Response $response, $args) use ($app)
    {
        return PessoasController::delete($request, $response);
    });

    //**************** ROTAS ORGANOGRAMA ******************/
    //gravar ou atualizar um NOVO setor no ORGANOGRAMA
    $app->put('/organograma/[{idOrganograma}/{dataInicio}]',function (Request $request, Response $response, $args) use ($app)
    {
        return OrganogramasController::save($request, $response);
    });

    //gravar historico para setor no ORGANOGRAMA
    $app->put('/organograma/{idOrganograma}',function (Request $request, Response $response, $args) use ($app)
    {
        return OrganogramasController::save($request, $response);
    });

    //LISTA ORGANOGRAMA hierarquia
    $app->post('/organogramas/hierarquia',function (Request $request, Response $response, $args) use ($app)
    {
        return OrganogramasController::getHierarquia($request, $response);
    });

    //LISTA ORGANOGRAMA hierarquia
    $app->post('/organogramas/historico',function (Request $request, Response $response, $args) use ($app)
    {
        return OrganogramasController::getHistoricoOrganograma($request, $response);
    });

    //**************** ROTAS E-MAIL ZIMBRA ******************/
    //lista emails
    $app->post('/emails', function (Request $request, Response $response, $args) use ($app)
    {
        return ZimbraController::getAll($request,$response);
    });
    $app->get('/emails/redirect', function (Request $request, Response $response, $args) use ($app)
    {
        return ZimbraController::redirectURL($request,$response);
    });

    //**************** ROTAS NOTIFICAÇÂO ******************/
    //obtem notificações
    $app->post('/notification', function (Request $request, Response $response, $args) use ($app)
    {
        return NotificacaoController::getAll($request,$response);
    });
    //cria notificação
    $app->put('/notification', function (Request $request, Response $response, $args) use ($app)
    {
        return NotificacaoController::notify($request,$response);
    });

    /** *************** ROTAS CADASTRO SERVIDOR BIOMETRIA ***************** **/
    //CRIA OU ATUALIZA SERVIDOR
    $app->put('/servidores', function (Request $request, Response $response, $args) use ($app)
    {
        return ServidorController::save($request,$response);
    });
    //rota de importação
    $app->put('/servidores/import', function (Request $request, Response $response, $args) use ($app)
    {
        return ServidorController::saveImport($request,$response);
    });
    //obtem um servidor por CPF
    $app->get('/servidores/cpf/[{cpf}]', function (Request $request, Response $response, $args) use ($app)
    {
        return ServidorController::getByCPF($request,$response);
    });
    //lista servidores
    $app->post('/servidores', function (Request $request, Response $response, $args) use ($app)
    {
        return ServidorController::getAll($request,$response);
    });
    //lista cargos
    $app->post('/cargos', function (Request $request, Response $response, $args) use ($app)
    {
        return CargoController::getAll($request,$response);
    });
    //lista Funcao Gratificada
    $app->post('/funcoes', function (Request $request, Response $response, $args) use ($app)
    {
        return FuncaoGratificadaController::getAll($request,$response);
    });
    //lista Vinculos
    $app->post('/vinculos', function (Request $request, Response $response, $args) use ($app)
    {
        return VinculoController::getAll($request,$response);
    });
    //lista Jornada de Trabalho
    $app->post('/jornadas', function (Request $request, Response $response, $args) use ($app)
    {
        return JornadaTrabalhoController::getAll($request,$response);
    });
    //lista Locais da Biometria
    $app->post('/locais', function (Request $request, Response $response, $args) use ($app)
    {
        return LocalBiometriaController::getAll($request,$response);
    });
    /** *************** FIM ROTAS CADASTRO SERVIDOR BIOMETRIA ***************** **/


})->add( new AuthMiddleware() )->add( new LogMiddleware() );

$app->group('/api', function () use ($app)
{
    //**************** PAGINA INICIAL DA JUBARTE ******************/
    $app->get('/estatisticas/intranet/usuarios', function (Request $request, Response $response, $args) use ($app)
    {
        return IntranetController::getSistemasAtivos($request,$response);
    });

    $app->get('/estatisticas/intranet/solicitacoes', function (Request $request, Response $response, $args) use ($app)
    {
        return IntranetController::getEstatisticaSolicitacoes($request,$response);
    });

    //lista de aniversariantes
    $app->get('/intranet/aniversariantes', function (Request $request, Response $response, $args) use ($app)
    {
        return IntranetController::getAniversariantes($request,$response);
    });

    //lista de servidores COM e SEM Biometria
    $app->post('/estatisticas/biometria', function (Request $request, Response $response, $args) use ($app)
    {
        return EstatisticaBiometriaController::getServidoresBiometria($request,$response);
    });

    //lista de servidores COM e SEM Biometria
    $app->get('/estatisticas/biometria/cadastros', function (Request $request, Response $response, $args) use ($app)
    {
        return EstatisticaBiometriaController::getEstatisticaBiometria($request,$response);
    });


});

//ROTA DE AUTENTICAÇÃO
$app->post('/api/auth/login', function (Request $request, Response $response, $args) use ($app)
{
    return AuthController::authenticate($request,$response);
});

//ROTA DE CHECK AUTENTICAÇÃO
$app->post('/api/auth/check', function (Request $request, Response $response, $args) use ($app)
{
    return AuthController::checkToken($request,$response);
});

//**************** ROTAS UTILITARIOS ******************/
//OBTEM O IP DO USUARIO VISIVEL NO SERVIDOR
$app->get('/api/utils/ip',function (Request $request, Response $response, $args) use ($app)
{
    return UtilController::getUserIP($request, $response);
});
//OBTEM O ENDEREÇO POR CEP
$app->get('/api/correios/endereco/[{cep}]',function (Request $request, Response $response, $args) use ($app)
{
    return UtilController::getEnderecoByCep($request, $response);
});
//OBTEM UMA LISTA DE CEP COM BASE NO ENDEREÇO
$app->post('/api/correios/cep',function (Request $request, Response $response, $args) use ($app)
{
    return UtilController::getCepByEndereco($request, $response);
});

$app->get('/api/datetime/timestamp', function (Request $request, Response $response, $args){
    return UtilController::timestamp($request, $response, $args);
});

$app->get('/api/numeroLei/{numeroLei}', function (Request $request, Response $response){
    return OrganogramasController::getNumeroLei($request, $response);
});

//**************** ROTA deploy ******************/

/*$app->post('/api/deploy', function (Request $request, Response $response){
    return UtilController::deploy($request, $response);
});*/
