<?php

require_once __DIR__ . '/../app/Calculator.php';  
use app\Calculator;

$screenDisplay = '0';
$numberOne = '';
$numberTwo = '';
$operator = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numberOne = isset($_POST['numberOne']) ? (float)$_POST['numberOne'] : 0;
    $numberTwo = isset($_POST['numberTwo']) ? (float)$_POST['numberTwo'] : 0;
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
    
    $calc = new Calculator();
    $calc->inputNumber($numberOne);
    $calc->selectOperator($operator);
    $calc->inputNumber($numberTwo);
    $screenDisplay = $calc->calculate();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href = "css/calculator.css">
</head>
<body>

<div class="container">
    <div class="calculator card">
        <form method="post" action="">
            <input type="hidden" name="numberOne" id="numberOne">
            <input type="hidden" name="numberTwo" id="numberTwo">
            <input type="hidden" name="operator" id="operator">

            <input type="text" class="calculator-screen" id="calculator-screen" value="<?= $screenDisplay ?>" readonly>

            <div class="calculator-keys row">
                <!-- First Row -->
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('7')">7</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('8')">8</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('9')">9</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-warning btn-block" onclick="chooseOperator('division')">÷</button>
                </div>
            </div>

            <div class="calculator-keys row">
                <!-- Second Row -->
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('4')">4</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('5')">5</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('6')">6</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-warning btn-block" onclick="chooseOperator('multiplication')">×</button>
                </div>
            </div>

            <div class="calculator-keys row">
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('1')">1</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('2')">2</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('3')">3</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-warning btn-block" onclick="chooseOperator('subtraction')">−</button>
                </div>
            </div>

            <div class="calculator-keys row">
                <div class="col-3">
                    <button type="button" class="btn btn-danger btn-block" onclick="clearScreen()">C</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('0')">0</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-light btn-block" onclick="appendNumber('.')">.</button>
                </div>
                <div class="col-3">
                    <button type="button" class="btn btn-warning btn-block" onclick="chooseOperator('addition')">+</button>
                </div>
            </div>

            <div class="calculator-keys row">
                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-block">=</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="/javascript/calculator.js"></script>
</body>
</html>
