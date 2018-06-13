<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 15/02/2018
 * Time: 16:42
 */

namespace Jubarte\Model\VO;


class Usuario
{
    const TABLE_NAME = "usuarios";
    const ID_PESSOA = "idPessoa";
    const ID_ORGANOGRAMA = "idOrganograma";
    const LOGIN = "login";
    const ATIVO = "ativo";
    const ID_SISTEMA = "idSistema";
    const ID_PERFIL = "idPerfil";

    const TABLE_FIELDS = [
        self::ID_PESSOA,
        self::ID_ORGANOGRAMA,
        self::LOGIN,
        self::ATIVO,
        self::ID_SISTEMA,
        self::ID_PERFIL
    ];

    public $idPessoa;
    public $idOrganograma;
    public $login;
    public $ativo;
    public $idSistema;
    public $idPerfil;

    function __construct(array $data = array())
    {
        foreach ($data as $key => $val) {
            if (property_exists(__CLASS__, $key)) {
                $this->$key = $val;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param mixed $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @return mixed
     */
    public function getIdOrganograma()
    {
        return $this->idOrganograma;
    }

    /**
     * @param mixed $idOrganograma
     */
    public function setIdOrganograma($idOrganograma)
    {
        $this->idOrganograma = $idOrganograma;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
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
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * @param mixed $idPerfil
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;
    }






}