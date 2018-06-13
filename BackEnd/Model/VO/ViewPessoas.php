<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 16/04/2018
 * Time: 19:35
 */

namespace Jubarte\Model\VO;


class ViewPessoas
{
    const TABLE_NAME_PESSOA = "view_pessoas_json";
    const KEY_ID_PESSOA = "id";
    const CGM_PESSOA = "cgm";
    const NOME_PESSOA = "nome";
    const EMAIL_PRINCIPAL = "emailPrincipal";
    const EMAIL_ADICIONAL = "emailAdicional";
    const TIPO_PESSOA = "tipo";
    const DATA_INCLUSAO = "dataInclusao";
    const DATA_ALTERACAO = "dataAlteracao";

    const TABLE_FIELDS = [
        self::CGM_PESSOA,
        self::NOME_PESSOA,
        self::EMAIL_PRINCIPAL,
        self::EMAIL_ADICIONAL,
        self::TIPO_PESSOA,
        self::DATA_INCLUSAO,
        self::DATA_ALTERACAO
    ];

}