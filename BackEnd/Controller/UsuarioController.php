<?php

namespace Jubarte\Controller;

use \Slim\Http\Request;
use \Slim\Http\Response;
use \Exception;
use Jubarte\Util\DBLayer;
use Jubarte\Util\Utils;
use Jubarte\Model\VO\Usuario;
use Jubarte\Util\StatusCode;
use Jubarte\Util\StatusMessage;

require_once '../../pmroPadrao/src/start.php';
use PmroPadraoLib\Controller\AutenticacaoController;

class UsuarioController
{
    //LISTA TODOS OS USUARIOS DA JUBARTE
    public static function getAll(Request $request, Response $response)
    {
        try
        {
            $params = $request->getParsedBody();
            $draw =  isset($params['draw']) ? $params['draw'] : null;
            $limit =  isset($params['length']) ? $params['length'] : null;
            $offset = isset($params['start']) ? $params['start'] : null;
            $search = isset($params['search']) ? '%' . $params['search'] . '%' : null;
            $ordering = isset($params['ordering']) ?  $params['ordering'] : null;

            /*
             SELECT usuarios.*, org.sigla ||' - '|| org.nome as "nomeOrganograma", p.nome as "nomePessoa"
            FROM "usuarios"
            left JOIN pmro_padrao.func_organograma() as org on  org."idOrganograma" = "usuarios"."idOrganograma"
            JOIN pmro_padrao.pessoas as p on p.id =usuarios."idPessoa"
            */

            $query = DBLayer::Connect()
                ->table(Usuario::TABLE_NAME)
                ->select(DBLayer::raw('usuarios.*, perfis.sigla as "siglaPerfil", sistemas.sigla as "siglaSistema", org.sigla ||\' - \'|| org.nome as "nomeOrganograma", p.nome as "nomePessoa"'))
                ->join("perfis","perfis.id","=",Usuario::TABLE_NAME.".".Usuario::ID_PERFIL)
                ->join("sistemas","sistemas.id","=",Usuario::TABLE_NAME.".".Usuario::ID_SISTEMA)
                ->leftJoin(DBLayer::raw('pmro_padrao.func_organograma() as org'),DBLayer::raw('org."idOrganograma"'),"=", DBLayer::raw('"usuarios"."idOrganograma"'))
                ->join(DBLayer::raw('pmro_padrao.pessoas as p'),DBLayer::raw('p.id'),"=", DBLayer::raw('"usuarios"."idPessoa"'));

            if($search != null)
            {
                $query->where(function ($query) use ($request, $search) {
                    $query->orWhere(Usuario::LOGIN, 'ilike', $search);
                    $query->orWhere("perfis.sigla", 'ilike', $search);
                    $query->orWhere("sistemas.sigla", 'ilike', $search);
                    $query->orWhere("p.nome", 'ilike', $search);
                });
            }

            $totalRecords = $query->count();

            //implementação da ordenação do ModernDataTable
            if($ordering != null && count($ordering) > 0){
                foreach ($ordering as $item){
                    $query->orderBy($item['columnKey'],$item['direction']);
                }
            }else {
                $query->orderBy("p.nome", DBLayer::ORDER_DIRE_ASC);
            }

            if ($limit != null && $offset != null)
            {
                $data = $query->limit($limit)->offset($offset)->get();
            }
            else
            {
                $data = $query->get();
            }

            $result['draw'] = $draw;
            $result['recordsFiltered'] = $totalRecords;
            $result['recordsTotal'] = $totalRecords;
            $result['data'] = $data;

        }
        catch (Exception $e)
        {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
        return $response->withStatus(StatusCode::SUCCESS)->withJson($result);
    }

    //LISTA TODOS OS LOGINS DO LDAP
    public static function getAllLogin(Request $request, Response $response)
    {
        try
        {
            $formData = $request->getParsedBody();
            $result = AutenticacaoController::ListaUsuarios($formData, AutenticacaoController::ARRAY_ASSOC_FORMAT);

        }
        catch (Exception $e)
        {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
        return $response->withStatus(StatusCode::SUCCESS)->withJson($result);
    }

    //SALVA USUARIO JUBARTE
    public static function save(Request $request, Response $response)
    {
        try
        {
            $id = $request->getAttribute('id');
            $formData = Utils::filterArrayByArray($request->getParsedBody(), Usuario::TABLE_FIELDS);

            if ($id)
            {
                DBLayer::Connect()->table(Usuario::TABLE_NAME)
                    ->where(Usuario::ID_PESSOA, DBLayer::OPERATOR_EQUAL, $id)
                    ->update($formData);
            }
            else
            {
                DBLayer::Connect()->table(Usuario::TABLE_NAME)->insert($formData);
            }
        }
        catch (Exception $e)
        {
            return $response->withStatus(StatusCode::BAD_REQUEST)->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
        return $response->withStatus(StatusCode::SUCCESS)->withJson(['message' => StatusMessage::MENSAGEM_DE_SUCESSO_PADRAO]);
    }

    public static function get(Request $request, Response $response)
    {
        try
        {
            $id = $request->getAttribute('id');

            $result = DBLayer::Connect()->table(Usuario::TABLE_NAME)
                ->where(Usuario::ID_PESSOA, DBLayer::OPERATOR_EQUAL, $id)
                ->first();

            return $response->withStatus(StatusCode::SUCCESS)->withJson($result);
        }
        catch (Exception $e)
        {
            return $response->withStatus(StatusCode::BAD_REQUEST)->withJson(['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
        }
    }

    public static function delete(Request $request, Response $response)
    {
        try
        {
            $formData = $request->getParsedBody();
            $ids = $formData['ids'];
            $idsCount = count($ids);
            $itensDeletadosCount = 0;
            foreach ($ids as $id)
            {
                $result = DBLayer::Connect()->table(Usuario::TABLE_NAME)
                    ->where(Usuario::ID_PESSOA, DBLayer::OPERATOR_EQUAL, $id)
                    ->first();

                if ($result)
                {
                    if (DBLayer::Connect()->table(Usuario::TABLE_NAME)
                        ->delete($id))
                    {
                        $itensDeletadosCount++;
                    }
                }
            }
            if ($itensDeletadosCount == $idsCount)
            {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson(['message' => StatusMessage::TODOS_ITENS_DELETADOS]);
            }
            else if ($itensDeletadosCount > 0)
            {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson(['message' => StatusMessage::NEM_TODOS_ITENS_DELETADOS]);
            }
            else
            {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson((['message' => StatusMessage::NENHUM_ITEM_DELETADO]));
            }
        }
        catch (Exception $e)
        {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson(['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
        }
    }
}