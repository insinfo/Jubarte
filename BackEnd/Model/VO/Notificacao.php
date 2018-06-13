<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 16/05/2018
 * Time: 13:04
 */

namespace Jubarte\Model\VO;


class Notificacao
{
    use TraitFillFromArray;

    const TABLE_NAME = "notificacoes";
    const KEY_ID = "id";
    const MENSAGEM = "mensagem";
    const DATA_LIDO = "dataLido";
    const DATA_CRIADO = "dataCriado";
    const RECEBIDO = "recebido";
    const LINK = "link";
    const ID_PESSOA = "idPessoa";
    const ID_SISTEMA = "idSistema";
    const APAGADA = "apagada";
    const DATA_DELETADO = "dataDeletado";
    const USER_AGENTE = "userAgente";

    const TABLE_FIELDS = [
        self::MENSAGEM,
        self::DATA_LIDO,
        self::DATA_CRIADO,
        self::RECEBIDO,
        self::LINK,
        self::ID_PESSOA,
        self::ID_SISTEMA,
        self::APAGADA,
        self::DATA_DELETADO,
        self::USER_AGENTE
    ];

    public $id;
    public $mensagem;
    public $dataLido;
    public $dataCriado;
    public $recebido;
    public $link;
    public $idPessoa;
    public $idSistema;
    public $apagada;
    public $dataDeletado;
    public $userAgente;

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
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param mixed $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @return mixed
     */
    public function getDataLido()
    {
        return $this->dataLido;
    }

    /**
     * @param mixed $dataLido
     */
    public function setDataLido($dataLido)
    {
        $this->dataLido = $dataLido;
    }

    /**
     * @return mixed
     */
    public function getDataCriado()
    {
        return $this->dataCriado;
    }

    /**
     * @param mixed $dataCriado
     */
    public function setDataCriado($dataCriado)
    {
        $this->dataCriado = $dataCriado;
    }

    /**
     * @return mixed
     */
    public function getRecebido()
    {
        return $this->recebido;
    }

    /**
     * @param mixed $recebido
     */
    public function setRecebido($recebido)
    {
        $this->recebido = $recebido;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
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
    public function getApagada()
    {
        return $this->apagada;
    }

    /**
     * @param mixed $apagada
     */
    public function setApagada($apagada)
    {
        $this->apagada = $apagada;
    }

    /**
     * @return mixed
     */
    public function getDataDeletado()
    {
        return $this->dataDeletado;
    }

    /**
     * @param mixed $dataDeletado
     */
    public function setDataDeletado($dataDeletado)
    {
        $this->dataDeletado = $dataDeletado;
    }

    /**
     * @return mixed
     */
    public function getUserAgente()
    {
        return $this->userAgente;
    }

    /**
     * @param mixed $userAgente
     */
    public function setUserAgente($userAgente)
    {
        $this->userAgente = $userAgente;
    }


}