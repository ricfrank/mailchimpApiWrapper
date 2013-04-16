<?php

require __DIR__ . '/vendor/autoload.php';

use RicFrankMailChimp\MailChimp\MailChimpFactory;
use RicFrankMailChimp\MailChimp\MailChimpWrapper;

$userData = array('FNAME' => 'Roberto',
    'LNAME' => 'Baggio',
    'EMAIL' => 'butchermind123@gmail.com'); //insert a valid email address

$mailChimpWrapper = new MailChimpWrapper(MailChimpFactory::getInstance());

try {
    var_dump($mailChimpWrapper->subscribeUser($userData, MailChimpFactory::getListId()));
} catch (\Exception $exc) {
    echo $exc->getMessage();
}
