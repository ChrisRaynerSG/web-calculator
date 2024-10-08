<?php

namespace app;

class Calculator{

    private $numberOne;
    private $numberTwo;
    private $numberCalculated;
    private $operator = "initial";


    private function add() : float
    {
        return $this->numberOne + $this->numberTwo;
    }

    private function subtract() : float
    {
        return $this->numberOne - $this->numberTwo;
    }

    private function multiply() : float
    {
        return $this->numberOne * $this->numberTwo;
    }

    private function divide() : float
    {
        if($this->numberTwo === 0)
        {
            echo "ARITHMETIC ERR: Cannot divide by 0!";
            return 0;
        }
        else
        {
            return $this->numberOne / $this->numberTwo;
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
            case "addition" : $this->operator = "addition"; break;
            case "subtraction": $this->operator = "subtraction"; break;
            case "multiplication": $this->operator = "multiplication"; break;
            case "division" : $this->operator = "division"; break;
        }
    }

    public function calculate()
    {
        switch($this->operator)
        {
            case "addition": $this->numberCalculated = $this->add(); break;
            case "subtraction": $this->numberCalculated = $this->subtract(); break;
            case "multiplication": $this->numberCalculated = $this->multiply(); break;
            case "division": $this->numberCalculated = $this->divide(); break;
        }
        $this->numberOne = $this->numberCalculated;
        $this->numberTwo = 0;
        $this->operator = "initial";
        return $this->numberCalculated;
    }

    public function clear(){
        $this->numberOne = 0;
        $this->numberTwo = 0;
        $this->operator = "initial";
    }
}