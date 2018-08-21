<?php

require 'classes/StrUtils.php';

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    //test 
    
    public function testStrUtils(){
        $this->assertClassHasAttribute('str', StrUtils::class );
        
    }
    public function testBold(){
        $gras = new StrUtils('ca marche');
        $this->assertEquals('<b>ca marche</b>', $gras->bold);
    }
    
}
?>