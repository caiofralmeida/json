<?php

namespace JamalTest\Json;

use PHPUnit_Framework_TestCase;
use Jamal\Json\Decoder;

class DecoderTest extends PHPUnit_Framework_TestCase
{
    public function testDecodeValidJson()
    {
        $simpleJson = '{"name": "jamal", "age": 25}';

        $expected = (object) array(
            'name' => 'jamal',
            'age'  => 25
        );

        $this->assertEquals($expected, Decoder::execute($simpleJson));
    }

    /**
     * @expectedException Jamal\Json\JsonDecoderException
     */
    public function testDecodeInValidJson()
    {
        $simpleJson = '"name": "jamal", "age": 25}';

        $expected = (object) array(
            'name' => 'jamal',
            'age'  => 25
        );

        $this->assertEquals($expected, Decoder::execute($simpleJson));
    }
}
