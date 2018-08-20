<?php 
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testOutputString(){
        $this->expectOutputString('php is awesome !!!');
        print 'php is awesome !!!';
    }
}
?>