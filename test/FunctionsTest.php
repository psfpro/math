<?php

namespace PsfPro\Math\Test;

use PHPUnit\Framework\TestCase;
use function PsfPro\Math\add;

class FunctionsTest extends TestCase
{
    public function testAdd()
    {
        $result = add("123456789012345", "76543210987655");

        $this->assertEquals("200000000000000", $result);
    }
}
