<?php 

class plop {
    public $a = 1;
    public $b = 2;
    public $c = 3;

    public function __construct() 
    {
        echo "constructeur";
    }

    
    public function sum()
    {
        return $this->a + $this->b;
    }

}