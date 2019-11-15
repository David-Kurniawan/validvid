<?php

namespace Validvid\Validation\Tests;

use PHPUnit\Framework\TestCase;
use Validvid\Validation\Validator;

class ValidatorTest extends TestCase
{
    public function testPasses()
    {
        $validation = (new Validator())->make([
            'email' => 'foobar@gmail.com'
        ], [
            'email' => 'required|email'
        ]);

        $this->assertFalse($validation->fails());
    }

    public function testFails()
    {
        $validation = (new Validator())->make([], [
            'email' => 'required|email'
        ]);

        $this->assertTrue($validation->fails());
    }
}