<?php
namespace phpUnitTutorial\Test;
use phpUnitTutorial\URL;
include "../URL.php";
class URLTest extends \PHPUnit_Framework_TestCase
{
    public function testSluggifyReturnsSluggifiedString()
    {
        $originalString = 'This string will be sluggified';
        $expectedResult = 'this-string-will-be-sluggified';

        $url = new URL();

        $result = $url->sluggify($originalString);

        $this->assertEquals($expectedResult, $result);
    }
}