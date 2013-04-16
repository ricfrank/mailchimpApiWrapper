<?php

namespace RicFrankMailChimp\MailChimp;

/**
 *  MailChimpWrapper a wrapper to MCAPI
 *
 * @author ricfrank
 */
class MailChimpWrapper
{
    private $api;

    public function __construct($api)
    {
        $this->api = $api;
    }

    public function subscribeUser($userData, $listId)
    {
        $this->api->listSubscribe($listId, $userData['EMAIL'], $userData, 'html', false);

        if ($this->api->errorCode) {
            throw new \Exception('Error Code: ' . $this->api->errorCode . ' Message: ' . $this->api->errorMessage);
        }
    }

    public function unsubscribeUser($email, $listId)
    {
        $this->api->listUnsubscribe($listId, $email);

        if ($this->api->errorCode) {
            throw new Exception('Error Code: ' . $this->api->errorCode . ' Message: ' . $this->api->errorMessage);
        }
    }

    public function retriveUserInfo($email, $listId)
    {
        $retVal = $this->api->listMemberInfo($listId, array($email));

        if ($this->api->errorCode) {
            throw new Exception('Error Code: ' . $this->api->errorCode . ' Message: ' . $this->api->errorMessage);
            return;
        }

        return $retVal;
    }

    public function updateUser($userData, $listId)
    {
        $this->api->listUpdateMember($listId, $userData['EMAIL'], $userData, 'html', false);

        if ($this->api->errorCode) {
            throw new Exception('Error Code: ' . $this->api->errorCode . ' Message: ' . $this->api->errorMessage);
        }
    }

}