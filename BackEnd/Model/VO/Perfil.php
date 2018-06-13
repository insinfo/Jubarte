<?php

namespace Jubarte\Model\VO;

class Perfil
{
    const TABLE_NAME = "perfis";
    const KEY_ID = "id";
    const ID_SISTEMA = "idSistema";
    const SIGLA = "sigla";
    const DESCRICAO = "descricao";
    const PRIORIDADE = "prioridade";
    const ATIVO = "ativo";

    const TABLE_FIELDS = [self::ID_SISTEMA, self::SIGLA, self::DESCRICAO, self::PRIORIDADE, self::ATIVO];

    public $idSistema;
    public $sigla;
    public $descricao;
    public $prioridade;
    public $ativo;

    /**
     * @return mixed
     */
    public function getIdSistema()
    {
        return $this->idSistema;
    }

    /**
     * @param mixed $idSistema
     */
    public function setIdSistema($idSistema)
    {
        $this->idSistema = $idSistema;
    }

    /**
     * @return mixed
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param mixed $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * @param mixed $prioridade
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }


}

