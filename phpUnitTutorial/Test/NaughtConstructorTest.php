<?php
namespace phpUnitTutorial\Test;

use phpUnitTutorial\NaughtyConstructor;

class NaughtyConstructorTest extends \PHPUnit_Framework_TestCase
{
    public function testGetMetaTagsReturnsArrayOfProperties()
    {
//        $naughty = new NaughtyConstructor('http://jtreminio.com');
        $naughty = $this->getMockBuilder('\phpUnitTutorial\NaughtyConstructor')
            ->setMethods(array('__construct'))
            ->setConstructorArgs(array('http://jtreminio.com'))
            ->disableOriginalConstructor()
            ->getMock();
        $naughty->html = $this->getHtml();
        $result = $naughty->getMetaTags();

        $expectedAuthor = 'Juan Treminio';

        $this->assertEquals(
            $expectedAuthor,
            $result['author']
        );
    }
    protected function getHtml()
    {
        return '
             <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta name="viewport" content="width=1, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
                    <meta name="description" content="Dallas PHP/MySQL Web Developer"/>
                    <meta name="author" content="Juan Treminio"/>
                    <meta name="generator" content="PieCrust 1.0.0-dev"/>
                    <meta name="template-engine" content="Twig"/>
                    <title>Juan Treminio - Dallas PHP/MySQL Web Developer &mdash; Blog</title>
                </head>
                <body>
                </body>
                </html>
        ';
    }
}