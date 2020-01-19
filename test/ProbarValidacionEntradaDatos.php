<?php

/**
 * ProbarEntradaNombreApellido test case.
 */
class ProbarEntradaNombreApellidoTest extends PHPUnit\Framework\TestCase
{
	$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
	
    private function entrada(string $input)
    {
        if (!(preg_match($patron_texto, $input))) {
            return false;
        } else {
            if (is_numeric($input)) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function testNohayDatos()
    {
        $input = '';
        $this->assertEquals(false, $this->entrada($input));
    }

    public function testSeIngresaUnNombre()
    {
        $input = 'eze';
        $this->assertEquals(true, $this->entrada($input));
    }

    public function testSeIngresaUnNumero()
    {
        $input = 1;
        $this->assertEquals(false, $this->entrada($input));
    }
}

