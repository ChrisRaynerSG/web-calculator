let numberOne = '';
let numberTwo = '';
let operator = 'initial';
let isCalculated = false;

function appendNumber(number) {
    if (operator === 'initial') {
        numberOne += number;
        document.getElementById('numberOne').value = numberOne;
        document.getElementById('calculator-screen').value = numberOne;
    } else {
        numberTwo += number;
        document.getElementById('numberTwo').value = numberTwo;
        document.getElementById('calculator-screen').value = numberTwo;
    }
}

function chooseOperator(selectedOperator) {
    if (numberOne === '') return;
    operator = selectedOperator;
    document.getElementById('operator').value = operator;
}

function clearScreen() {
    numberOne = '';
    numberTwo = '';
    operator = 'initial';
    isCalculated = false;
    document.getElementById('numberOne').value = '';
    document.getElementById('numberTwo').value = '';
    document.getElementById('operator').value = 'initial';
    document.getElementById('calculator-screen').value = '0';
}