<?php 

class StrUtils{
  
    private $str;

public function __construct($str){ // A priori ca marche mais j'ai inversé la function du constructeur avec les public function en dessous
    $this->bold = '<b>'.($str).'</b>';
    $this->italic = '<i>' .($str).'</i>';
    $this->underline = '<u>'.($str).'</u>';
    $this->capitalize = strtoupper($str);
}

    public function getBold(){
        return $this->bold;
    }
    public function getItalic(){
        return $this->italic;
    }
    public function getUnderline(){
        return $this->underline;
    }
    public function getCapitalize(){
        return $this->capitalize;
    }
    public function getUglify(){
        //$all = $this->str;
        //$this->str = $this->bold;
        //$this->str = $this->italic;
        //$this->str = $this->underline;
        //$this->str = $all;
        //return $all;
        $var1 = new StrUtils($this->bold);
        $var2 = new StrUtils($var1->italic);
        $var3 = new StrUtils($var2->capitalize);
        return $var3->underline;

    }
}

?>