<?php

require __DIR__ . '/../vendor/autoload.php';

use RicFrankMailChimp\MailChimp\MailChimpWrapper;

class MailChimpWrapperTest extends \PHPUnit_Framework_TestCase
{

    public function testShouldSubscribeUser()
    {
        $userData = array('FNAME' => 'Roberto',
            'LNAME' => 'Baggio',
            'EMAIL' => 'xxxx@example.com');
        $listId = 'FAKE_LIST_ID';
        
        $mailChimp = $this->getMock('Ricfrank\MailChimp\MCAPI', array(), array('FAKE_API_KEY'));
        $mailChimp->expects($this->once())
                ->method('listSubscribe')
                ->with('FAKE_LIST_ID', 'xxxx@example.com')
                ->will($this->returnValue(true));
        
        $mailChimpWrapper = new MailChimpWrapper($mailChimp);
        $retVal = $mailChimpWrapper->subscribeUser($userData, $listId);
        
        $this->assertTrue($retVal);
    }

}
