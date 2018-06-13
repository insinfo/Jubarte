<?php


namespace Jubarte\Model\DAL;

use Jubarte\Util\DBLayer;
use Jubarte\Util\Utils;

use Jubarte\Model\VO\Pessoa;

class PessoaDAL
{
    private $db = null;

    function __construct()
    {
        $this->db = DBLayer::Connect();
    }

    /**
     * Obtem um objeto do tipo Pessoa.
     *
     * @param  integer  $id
     * @return  \Jubarte\Model\VO\Pessoa
     */
    public function getById($id)
    {
        $data = $this->db->table(Pessoa::TABLE_NAME_PESSOA)
            ->where(Pessoa::KEY_ID_PESSOA, $id)->first();

        return new Pessoa($data);
    }
}