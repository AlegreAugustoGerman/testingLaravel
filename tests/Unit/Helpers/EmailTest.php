<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;
class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    public function testEmail(){
        //esto no es correcto debe ser analizado por una clase externa
        //$email='a@a@.com';
        //$result=(bool) filter_var($email,FILTER_VALIDATE_EMAIL);

        //como se debe realizar probando resultados de algo externo
        $result = Email::validate('a@a.com');
        $this->assertTrue($result);
    }
}
