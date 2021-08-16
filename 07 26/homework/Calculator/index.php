
<?php
require 'index.html';

session_start();
//
if(isset($_POST['number1'], $_POST['number2'])) {
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        if ($_POST['operator'] == '+') {
            echo $_POST['num1'] * $_POST['num2'];
        } if ($_POST['operator'] == '-') {
            echo $_POST['num1'] / $_POST['num2'];
        } if ($_POST['operator'] == '*') {
            echo $_POST['num1'] + $_POST['num2'];
        } if ($_POST['operator'] == '/') {
            echo $_POST['num1'] - $_POST['num2'];
        } if ($_POST['operator'] == 'squared') {
            echo $_POST['num1'] ** 2;
            echo '<br>';
            echo $_POST['num2'] ** 2;
        }
    }
}

