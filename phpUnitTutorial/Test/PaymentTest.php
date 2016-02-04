<?php
namespace phpUnitTutorial\Test;
use phpUnitTutorial\Payment;
class PaymentTest extends \PHPUnit_Framework_TestCase{
    public function testProcessPayment(){
        $paymentDetails = array(
            'amount'   => 123.99,
            'card_num' => '4111-1111-1111-1111',
            'exp_date' => '03/2013',
        );

        $payment = new Payment();
//        $authorizeNet = $this->getMock('\AuthorizeNetAIM', array(), array($payment::API_ID, $payment::TRANS_KEY));
//        $authorizeNet = new \AuthorizeNetAIM($payment::API_ID, $payment::TRANS_KEY);
        $authorizeNet = $this->getMockBuilder('\AuthorizeNetAIM')
            ->setConstructorArgs(array($payment::API_ID, $payment::TRANS_KEY))
            ->getMock();
//        var_dump($authorizeNet->captureOnly());
//        var_dump(get_class_methods($authorizeNet));

        $response = new \stdClass();
        $response->approved = true;
        $response->transaction_id = 123;

        $authorizeNet->expects($this->once())
            ->method('authorizeAndCapture')
            ->will($this->returnValue($response));

        
        $result = $payment->processPayment($authorizeNet, $paymentDetails);
        $this->assertTrue($result);
    }
}