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
    public static function getInstance($configuration)
    {
        return new MCAPI($configuration['parameters']['apikey']);
    }

    public static function getListId($configuration)
    {
        return $configuration['parameters']['listid'];
    }
}