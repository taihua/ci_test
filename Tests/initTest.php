<?php
class initTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }
    public function tearDown()
    {
    }
    
    public function testHelloWorld()
    {
        $hello_world = 'Hello World';
        $this->assertEquals('Hello World', $hello_world);
    }

}