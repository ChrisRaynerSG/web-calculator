<?php

namespace app;

class Calculator{

    private $numberOne;
    private $numberTwo;
    private $numberCalculated;
    private $operator;


    private function add($x, $y) : float
    {
        return $x + $y;
    }

    private function subtract($x, $y) : float
    {
        return $x - $y;
    }

    private function multiply($x, $y) : float
    {
        return $x * $y;
    }

    private function divide($x, $y) : float
    {
        if($y === 0)
        {
            echo "ARITHMETIC ERR: Cannot divide by 0!";
            return 0;
        }
        else
        {
            return $x / $y;
        }
    }

    public function inputNumber($numberInput){
        if($this->operator === "initial")
        {
            $this->numberOne = $numberInput;
        }
        else
        {
            $this->numberTwo = $numberInput;
        }
    }

    public function selectOperator($operator)
    {
        switch($operator)
        {
            case "addition" : $this->operator = "addition";
            case "subtraction": $this->operator = "subtraction";
            case "multiplication": $this->operator = "multiplication";
            case "division" : $this->operator = "division";
        }
    }

    public function calculate()
    {
        switch($operator)
        {
            case "addition": $this->numberCalculated = divide();
            case "subtraction": $this->numberCalculated = subtract();
            case "multiplication": $this->numberCalculated = multiply();
            case "division": $this->numberCalculated = divide();
        }
        $this->numberOne = $numberCalculated;
        $this->numberTwo = 0;
        $this->operator = "initial";
        return $numberCalculated;
    }

    public function clear(){
        $this->numberOne = 0;
        $this->numberTwo = 0;
        $this->operator = "initial";
    }
}