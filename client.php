<?php

require __DIR__ . '/vendor/autoload.php';

use RicFrankMailChimp\MailChimp\MailChimpFactory;
use RicFrankMailChimp\MailChimp\MailChimpWrapper;
use RicFrankMailChimp\Configuration\YmlConfigLoader;

$configDirectories = __DIR__.'/config';
$yamlConfigLoader = new YmlConfigLoader();
$configuration = $yamlConfigLoader->load($configDirectories.'/config.yml');


$userData = array('FNAME' => 'Roberto',
    'LNAME' => 'Baggio',
    'EMAIL' => 'myemail@example.com'); //insert a valid email address

$mailChimpWrapper = new MailChimpWrapper(MailChimpFactory::getInstance($configuration));

try {
    var_dump($mailChimpWrapper->subscribeUser($userData, MailChimpFactory::getListId($configuration)));
} catch (\Exception $exc) {
    echo $exc->getMessage();
}
