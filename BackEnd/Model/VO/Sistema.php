<?php

namespace Jubarte\Model\VO;

class Sistema
{
    const TABLE_NAME = "sistemas";
    const KEY_ID = "id";
    const SIGLA = "sigla";
    const DESCRICAO = "descricao";
    const ORDEM = "ordem";
    const ATIVO = "ativo";

    const TABLE_FIELDS = [self::SIGLA, self::DESCRICAO, self::ORDEM, self::ATIVO];

    public $id;
    public $sigla;
    public $descricao;
    public $ordem;
    public $ativo;

    public $extensions;

    /**
     * Seta uma lista de extensões
     *
     * @param mixed $extensions
     * @return $this
     */
    public function setExtensions(array $extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }

    /**
     * Retorna uma lista de extensões
     *
     * @return array
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Adiciona uma extensão ao sistema
     *
     * @param Extensao $extension
     * @return $this
     */
    public function addExtension(Extensao $extension) {
        array_push($this->extensions, $extension);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * @param mixed $ordem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
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

