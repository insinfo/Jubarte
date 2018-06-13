<?php

namespace Jubarte\Model\VO;

class SistemaExtensao
{
    const TABLE_NAME = "sistemas_extensoes";
    const KEY_ID = "idSistema";
    const ID_SISTEMA = "idSistema";
    const ROTA_LEITURA = "rotaLeitura";
    const PARAM_LEITURA = "paramLeitura";
    const METODO_LEITURA = "metodoLeitura";
    const ROTA_GRAVACAO = "rotaGravacao";
    const METODO_GRAVACAO = "metodoGravacao";
    const MODO_GRAVACAO = "modoGravacao";//"simples" ou "multiplo" se é pra gravar um array ou um unico item
    const ROTULO = "rotulo";//label do input ou select
    const VALOR_GRAVACAO = "valorGravacao";//Valor a ser enviado para rota de gravação
    const VALOR_EXIBIDO = "valorExibido";//value exibido no input ou select
    const TIPO_EXIBICAO = "tipoExibicao";//"treeview", "datatables" ou "select"
    const DESTINO = "destino";//para que tela/view sera destinado esta extenção
    const ROTA_EXIBICAO = "rotaExibicao";//
    const METODO_EXIBICAO = "metodoExibicao";//

    const TABLE_FIELDS = [
        self::ID_SISTEMA,
        self::ROTA_LEITURA,
        self::METODO_LEITURA,
        self::PARAM_LEITURA,
        self::ROTA_GRAVACAO,
        self::METODO_GRAVACAO,
        self::MODO_GRAVACAO,
        self::ROTULO,
        self::VALOR_GRAVACAO,
        self::VALOR_EXIBIDO,
        self::TIPO_EXIBICAO,
        self::DESTINO,
        self::ROTA_EXIBICAO,
        self::METODO_EXIBICAO
    ];

    private $idSistema;
    private $rotaLeitura;
    private $metodoLeitura;
    private $paramLeitura;
    private $rotaGravacao;
    private $metodoGravacao;
    private $modoGravacao;
    private $rotulo;
    private $valorGravacao;
    private $valorExibido;
    private $tipoExibicao;
    private $destino;
    private $rotaExibicao;
    private $metodoExibicao;

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
    public function getRotaLeitura()
    {
        return $this->rotaLeitura;
    }

    /**
     * @param mixed $rotaLeitura
     */
    public function setRotaLeitura($rotaLeitura)
    {
        $this->rotaLeitura = $rotaLeitura;
    }

    /**
     * @return mixed
     */
    public function getMetodoLeitura()
    {
        return $this->metodoLeitura;
    }

    /**
     * @param mixed $metodoLeitura
     */
    public function setMetodoLeitura($metodoLeitura)
    {
        $this->metodoLeitura = $metodoLeitura;
    }

    /**
     * @return mixed
     */
    public function getParamLeitura()
    {
        return $this->paramLeitura;
    }

    /**
     * @param mixed $paramLeitura
     */
    public function setParamLeitura($paramLeitura)
    {
        $this->paramLeitura = $paramLeitura;
    }

    /**
     * @return mixed
     */
    public function getRotaGravacao()
    {
        return $this->rotaGravacao;
    }

    /**
     * @param mixed $rotaGravacao
     */
    public function setRotaGravacao($rotaGravacao)
    {
        $this->rotaGravacao = $rotaGravacao;
    }

    /**
     * @return mixed
     */
    public function getMetodoGravacao()
    {
        return $this->metodoGravacao;
    }

    /**
     * @param mixed $metodoGravacao
     */
    public function setMetodoGravacao($metodoGravacao)
    {
        $this->metodoGravacao = $metodoGravacao;
    }

    /**
     * @return mixed
     */
    public function getModoGravacao()
    {
        return $this->modoGravacao;
    }

    /**
     * @param mixed $modoGravacao
     */
    public function setModoGravacao($modoGravacao)
    {
        $this->modoGravacao = $modoGravacao;
    }

    /**
     * @return mixed
     */
    public function getRotulo()
    {
        return $this->rotulo;
    }

    /**
     * @param mixed $rotulo
     */
    public function setRotulo($rotulo)
    {
        $this->rotulo = $rotulo;
    }

    /**
     * @return mixed
     */
    public function getValorGravacao()
    {
        return $this->valorGravacao;
    }

    /**
     * @param mixed $valorGravacao
     */
    public function setValorGravacao($valorGravacao)
    {
        $this->valorGravacao = $valorGravacao;
    }

    /**
     * @return mixed
     */
    public function getValorExibido()
    {
        return $this->valorExibido;
    }

    /**
     * @param mixed $valorExibido
     */
    public function setValorExibido($valorExibido)
    {
        $this->valorExibido = $valorExibido;
    }

    /**
     * @return mixed
     */
    public function getTipoExibicao()
    {
        return $this->tipoExibicao;
    }

    /**
     * @param mixed $tipoExibicao
     */
    public function setTipoExibicao($tipoExibicao)
    {
        $this->tipoExibicao = $tipoExibicao;
    }

    /**
     * @return mixed
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param mixed $destino
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * @return mixed
     */
    public function getRotaExibicao()
    {
        return $this->rotaExibicao;
    }

    /**
     * @param mixed $rotaExibicao
     */
    public function setRotaExibicao($rotaExibicao)
    {
        $this->rotaExibicao = $rotaExibicao;
    }

    /**
     * @return mixed
     */
    public function getMetodoExibicao()
    {
        return $this->metodoExibicao;
    }

    /**
     * @param mixed $metodoExibicao
     */
    public function setMetodoExibicao($metodoExibicao)
    {
        $this->metodoExibicao = $metodoExibicao;
    }



}