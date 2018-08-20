<?php 

class StrUtils{
  
    private $str;

public function __construct($uglify){
    $this->bold = '<b>'.($uglify).'</b>';
    $this->italic = '<i>' .($uglify).'</i>';
    $this->underline = '<u>'.($uglify).'</u>';
    $this->capitalize = strtoupper($uglify);
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
}

?>