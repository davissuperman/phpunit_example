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

    /**
     * @dataProvider providerTestFoo
     */
    public function testFoo($variableOne, $variableTwo)
    {
        //
        echo $variableOne." \n";
        echo $variableTwo." \n";
    }

    public function providerTestFoo()
    {
        return array(array(1,2));
//        return array(
//            array('test 1, variable one', 'test 1, variable two'),
//            array('test 2, variable one', 'test 2, variable two'),
//            array('test 3, variable one', 'test 3, variable two'),
//            array('test 4, variable one', 'test 4, variable two'),
//            array('test 5, variable one', 'test 5, variable two'),
//        );
    }

}