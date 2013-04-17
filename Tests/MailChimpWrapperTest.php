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
        $listId = 'INSERT_HERE_MAILCHIMP_LIST_ID';
        
        $mailChimp = $this->getMock('Ricfrank\MailChimp\MCAPI', array(), array('INSERT_HERE_MAILCHIMP_API_KEY'));
        $mailChimp->expects($this->once())
                ->method('listSubscribe')
                ->with('59d091deed', 'butchermind@gmail.com')
                ->will($this->returnValue(true));
        
        $mailChimpWrapper = new MailChimpWrapper($mailChimp);
        $retVal = $mailChimpWrapper->subscribeUser($userData, $listId);
        
        $this->assertTrue($retVal);
    }

}
