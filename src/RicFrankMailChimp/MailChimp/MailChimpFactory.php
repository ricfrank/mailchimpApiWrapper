<?php

namespace RicFrankMailChimp\MailChimp;

use Ricfrank\MailChimp\MCAPI;

/**
 * Factory to build MCAPI object
 *
 * @author ricfrank
 */
class MailChimpFactory
{

    const APIKEY = '60719856b4cb27a58f5970efccbccaee-us6';

    public static function getInstance()
    {
        return new MCAPI(self::APIKEY);
    }

    public static function getListId()
    {
        return '59d091deed';
    }

}