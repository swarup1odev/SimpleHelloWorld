<?php

namespace HelloWorldGit;

use PHPUnit\Framework\TestCase;

class HelloClassTest extends TestCase
{
    public function testHelloResult()
    {
        $object = new HelloClass();
        $this->assertSame('Hello', $object->HelloWorld('Hello'));
    }
}
