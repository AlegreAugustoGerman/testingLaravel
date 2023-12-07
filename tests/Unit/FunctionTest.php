<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
 public function testEmail(){
    $result = validate_email('a@a.com');
    $this->assertTrue($result);

    //podemos verificar casos también
    $result = validate_email('a@@@a.com');
    $this->assertFalse($result);
}

}



