<?php
namespace phpUnitTutorial\Test;
use phpUnitTutorial\URL;
class URLTest extends \PHPUnit_Framework_TestCase{
    public function testMd5(){
        $str = 'abcd';
        $url = new URL();
        $newStr = $url->strMd5($str);
        $this->assertTrue($newStr!=null);
        $this->assertEquals($newStr,'bbcd');
    }
}