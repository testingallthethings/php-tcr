<?php

namespace Braddle;

use PHPUnit\Framework\TestCase;

class PassingTest extends TestCase
{
    public function testPassing()
    {
        $this->assertTrue(true);
    }

    public function testAntherPassing()
    {
        $this->assertFalse(false);

    }


}