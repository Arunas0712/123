<?php

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
//$select = $_POST['select'];

if(!isset($_POST['press']))
{
    require_once 'Booking complete.html';
    echo '';

    if(empty($_POST['name'])  ||
        empty($_POST['email']) ||
        empty($_POST['date']) ||
        empty($_POST['time']))
//        empty($_POST['select']))
    {
        echo "All fields are required.";
        exit;
    }

}



