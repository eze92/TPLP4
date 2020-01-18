<?php

/**
 * ProbaEntraEmail test case.
 */
class ProbaEntraEmailTest extends PHPUnit\Framework\TestCase
{
    
private function entrada(string $input) {
   
    if(!filter_var($input,FILTER_VALIDATE_EMAIL))	{
        return false;
    }
    else {
        return true;
    }
}
    
    public function testIngresarMailIcncorrecto()  {
        $input = 'ezegmail';
        $this->assertEquals(false, $this->entrada($input));
    }
    public function testIngresarCorrecto()  {
        $input = 'eze@gmail.com';
        $this->assertEquals(true, $this->entrada($input));
    }
    
    
}

