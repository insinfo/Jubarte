<?php


namespace Jubarte\Model\DAL;

use Jubarte\Util\DBLayer;
use Jubarte\Util\Utils;

use Jubarte\Model\VO\Usuario;

class UsuarioDAL
{
    private $db = null;

    function __construct()
    {
        $this->db = DBLayer::Connect();
    }

    public function checkAuth($loginName)
    {
        $usuario = $this->db->table(Usuario::TABLE_NAME)
            ->where(Usuario::LOGIN, $loginName)->first();

        if ($usuario) {
            return true;
        }
        return false;
    }

    /**
     * Obtem um objeto do tipo Usuario.
     *
     * @param  string  $loginName
     * @return  \Jubarte\Model\VO\Usuario
     */
    public function getByLoginName($loginName)
    {

        $data = $this->db->table(Usuario::TABLE_NAME)
            ->where(Usuario::LOGIN, $loginName)->first();

        return new Usuario($data);
    }
}