<?php

/**
 * ProbarEntradaNombreApellido test case.
 */
class ProbarEntradaNombreApellidoTest extends PHPUnit_Framework_TestCase
{
    
    private function entrada(string $input) {
        if(empty($input)){
            return $input;
        } else {
            if (is_numeric($input))	{
                return $input;
             }
        }         
        return $input;
        
    }
    
    public function testNohayDatos()  {
        $input = '';
        $this->assertEquals('', $this->entrada($input));
    }
    
    public function testSeIngresaUnNombre()  {
        $input = 'eze';
        $this->assertEquals('eze', $this->entrada($input));
    }
    public function testSeIngresaUnApellido()  {
        $input = 'ledesma';
        $this->assertEquals('ledesma', $this->entrada($input));
    }
    public function testSeIngresaUnNumero()  {
        $input = 1;
        $this->assertEquals(1, $this->entrada($input));
    }
    
}

