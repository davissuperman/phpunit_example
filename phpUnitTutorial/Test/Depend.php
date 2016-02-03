<?php
class DependanceDemo extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        echo "testOne\n";
        $this->assertTrue(TRUE);
    }

    public function testTwo()
    {
        echo "testTwo\n";
        $this->assertTrue(FALSE);
    }

    /**
     * @depends testOne
     * @depends testTwo
     */
    public function testThree()
    {
    }
}
?>