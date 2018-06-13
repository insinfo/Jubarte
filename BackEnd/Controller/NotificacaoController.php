<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 22/05/2018
 * Time: 13:35
 */

namespace Jubarte\Controller;

use \Slim\Http\Request;
use \Slim\Http\Response;
use \Exception;
use Jubarte\Util\DBLayer;
use Jubarte\Util\Utils;
use Jubarte\Model\VO\Notificacao;
use Jubarte\Util\StatusCode;
use Jubarte\Util\StatusMessage;

class NotificacaoController
{
    public static function getAll(Request $request, Response $response)
    {
        try {
            $parametros = $request->getParsedBody();
            $draw = isset($parametros['draw']) ? $parametros['draw'] : null;
            $limit = isset($parametros['length']) ? $parametros['length'] : null;
            $offset = isset($parametros['start']) ? $parametros['start']: null;
            $search = isset($parametros['search']) ? '%' . $parametros['search'] . '%' : null;
            $query = DBLayer::Connect()->table(Notificacao::TABLE_NAME);

            if($search != null) {
                $query->where(function ($query) use ($request, $search) {
                    $query->orWhere(Notificacao::KEY_ID, DBLayer::OPERATOR_ILIKE, $search);
                });
            }

            $totalRecords = $query->count();

            if ($parametros) {
                $data = $query->limit($limit)->offset($offset)->get();
            } else {
                $data = $query->get();
            }

            $result['draw'] = $draw;
            $result['recordsFiltered'] = $totalRecords;
            $result['recordsTotal'] = $totalRecords;
            $result['data'] = $data;

        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
        return $response->withStatus(StatusCode::SUCCESS)
            ->withJson($result);
    }
    //notification
    public static function notify(Request $request, Response $response)
    {
        try {
            $connect = DBLayer::connect();

            //$id = $request->getAttribute('id');
            $data = $request->getParsedBody();

            $connect->table(Notificacao::TABLE_NAME)->insert($data);


        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO,
                    'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
        return $response->withStatus(StatusCode::SUCCESS)
            ->withJson(['message' => StatusMessage::MENSAGEM_DE_SUCESSO_PADRAO]);
    }

    public static function get(Request $request, Response $response)
    {
        try {
            $id = $request->getAttribute('id');
            $result = DBLayer::Connect()->table(Sistema::TABLE_NAME)
                ->where(Sistema::KEY_ID, DBLayer::OPERATOR_EQUAL, $id)
                ->first();
            return $response->withStatus(StatusCode::SUCCESS)->withJson($result);
        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson(['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
        }
    }

    public static function delete(Request $request, Response $response)
    {
        try {
            $formData = $request->getParsedBody();
            $ids = $formData['ids'];
            $idsCount = count($ids);
            $itensDeletadosCount = 0;
            foreach ($ids as $id) {
                $result = DBLayer::Connect()->table(Sistema::TABLE_NAME)
                    ->where(Sistema::KEY_ID, DBLayer::OPERATOR_EQUAL, $id)->first();

                if ($result) {
                    if (DBLayer::Connect()->table(Sistema::TABLE_NAME)->delete($id)) {
                        $itensDeletadosCount++;
                    }
                }
            }
            if ($itensDeletadosCount == $idsCount) {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson(['message' => StatusMessage::TODOS_ITENS_DELETADOS]);
            } else if ($itensDeletadosCount > 0) {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson(['message' => StatusMessage::NEM_TODOS_ITENS_DELETADOS]);
            } else {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson((['message' => StatusMessage::NENHUM_ITEM_DELETADO]));
            }
        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson(['message' => StatusMessage::MENSAGEM_ERRO_PADRAO,
                    'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
        }
    }
}