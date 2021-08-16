<?php

//Parašykite funckciją, kuri priimtų 1 argumentą - masyvą iš 5 skaičių ir grąžintu visų masyvo elementų aritmetinį vidurkį.
//
function average($arr)
{
    $average = array_sum($arr) / count($arr);
    return $average;
}

$arr = [1,2,3,4,5];

var_dump(average($arr));

//Parašykite funkciją, kurį priimtų 1 argumentą - string`ų masyvą bei parinktų antrą bei priešpaskutinį elementą.
//

function secondAndBeforeLast($arr)
{
    $second     = array_slice($arr, 1, 3);
    $beforelast = array_slice($arr, -2, 1);

    return array_merge($second, $beforelast);
}

$text = explode(' ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel dignissim magna');

var_dump($text);
var_dump(secondAndBeforeLast($text));


// Parašykite funkciją, kuri priimtų 1 argumentą - masyvą ir jame sukeistu vietomis pirmą ir paskutinį masyvo elementus.

function swapFirstAndLastElements($arr)
{
    $first = array_shift($arr);
    $last  = array_pop($arr);

    array_unshift($arr, $last);
    $arr[] = $first;
    return $arr;
}
var_dump(implode(' ', swapFirstAndLastElements($text)));

//Parašykite funkciją, kuri priimtų argumentą - masyvą ir sumaišytu jo elementus atsitiktine tvarka, bet pirmą ir paskutinį paliktu vietoje.

function mix($arr) {
    if (!is_array($arr)) return $arr;

    $new = array_slice($arr, 1, -1);
    $keys = array_keys($new);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key)
        $random[$key] = $new[$key];
    return $random;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$first = array_shift($arr);
$last = array_pop($arr);
var_dump($first, mix($arr), $last);

