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

    const APIKEY = 'INSERT_HERE_MAILCHIMP_API_KEY';

    public static function getInstance()
    {
        return new MCAPI(self::APIKEY);
    }

    public static function getListId()
    {
        return 'INSERT_HERE_MAILCHIMP_LIST_ID';
    }

}