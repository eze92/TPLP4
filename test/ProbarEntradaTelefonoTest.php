<?php

/**
 * ProbarEntradaTelefono test case.
 */
class ProbarEntradaTelefonoTest extends PHPUnit\Framework\TestCase
{

    private function entrada(string $input)
    {
        if(empty($input)){
            return false;
        } else {
            if (!is_numeric($input))	{
                return false;
            }
            return true;
        } 
    }

    public function testNohayDatos()
    {
        $input = '';
        $this->assertEquals(false, $this->entrada($input));
    }
    public function testNoHayDatosNoNumericos()
    {
        $input = 'abcd';
        $this->assertEquals(false, $this->entrada($input));
    }
    public function testHayDatosNumericos()
    {
        $input = '12345';
        $this->assertEquals(true, $this->entrada($input));
    }
    
}

