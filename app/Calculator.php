<?php

namespace app;

class Calculator{

    private $numberOne;
    private $numberTwo;


    public function add($x, $y) : int
    {
        return $x + $y;
    }

    public function subtract($x, $y) : int 
    {
        return $x - $y;
    }

    public function multiply($x, $y) : int
    {
        return $x * $y;
    }

    public function divide($x, $y) : float
    {
        if($y === 0){
            echo "ARITHMETIC ERR: Cannot divide by 0!";
            return 0;
        }
        else{
            return $x / $y;
        }
    }
}