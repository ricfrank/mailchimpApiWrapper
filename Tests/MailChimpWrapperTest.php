<?php

require __DIR__ . '/../vendor/autoload.php';

use RicFrankMailChimp\MailChimp\MailChimpWrapper;

class MailChimpWrapperTest extends \PHPUnit_Framework_TestCase
{

    public function testShouldSubscribeUser()
    {
        $userData = array('FNAME' => 'Roberto',
            'LNAME' => 'Baggio',
            'EMAIL' => 'butchermind@gmail.com');
        $listId = '59d091deed';
        
        $mailChimp = $this->getMock('Ricfrank\MailChimp\MCAPI', array(), array('60719856b4cb27a58f5970efccbccaee'));
        $mailChimp->expects($this->once())
                ->method('listSubscribe')
                ->with('59d091deed', 'butchermind@gmail.com')
                ->will($this->returnValue(true));
        
        $mailChimpWrapper = new MailChimpWrapper($mailChimp);
        $retVal = $mailChimpWrapper->subscribeUser($userData, $listId);
        
        $this->assertTrue($retVal);
    }

}
