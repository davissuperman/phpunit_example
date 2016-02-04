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
        $result = $payment->processPayment($paymentDetails);

        $this->assertTrue($result);
    }
}