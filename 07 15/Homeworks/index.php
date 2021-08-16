<?php

//Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.
$nmb = 3;
$str = 'a';
$tmp = NULL;

var_dump($nmb, $str, $tmp);

//Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.

$str = 'Lorem ipsum dolor sit amet, consectetur';
 var_dump(substr($str, -3));

//Sukurkite funkciją negative, kuri priimtų vieną argumentą "$skaicius" ir išvestų į ekraną atitinkamą neigiamą skaičių.
// (Įvedame 3, išveda -3)

function negative($number)
{
    if (is_numeric($number) == FALSE){
        return NULL;
    }
    return $number * -1;
}

var_dump(negative(3));
var_dump(negative('5'));

//Sukurkite funkciją kauliukas, kuri imituotų kauliuko metimą. (Į ekraną atspaudintų atsitiktinį skaičių nuo 1 iki 6); Užuomina: rand();
function diceroll() {

    return rand(1, 6);
}
var_dump(diceroll());

//Parašykite funkciją pusePloto, kuri priimtų 2 argumentus ir išvestų į ekraną pusę abiejų skaičių sandaugą.

function halfArea($a, $b)
{
    return ($a * $b) / 2;
}
var_dump(halfArea(5, 7));
var_dump(halfArea(1, 2));



//Sukurkite funkciją 'c', kuri priimtų vieną argumentą amžius ir į ekraną išvestų pranešimą, kiek metų trūksta iki 100.
// (Pvž.: "Iki šimto jūms trūksta 70 metų! Dar gyventi liko daug!")

$age = 30;

function areYouStillYoung($nowAge)
{
    if ($nowAge < 100 & $nowAge > 0) {
        $leftAge = 100 - $nowAge;
        return "Iki šimto jūms trūksta {$leftAge} metų! Dar gyventi liko daug!";
    }
    return NULL;
}

var_dump(areYouStillYoung($age));


//Sukurkite funkciją, kuri priimtų argumentą farenheitas ir laipsnius iš farenheito konvertuotų į celsijų.


$givenvalue = 88;

function fahrenheittocelsius($givenvalue)
{
    $celsius=5/9*($givenvalue-32);
    return " $celsius celsius" ;
}

var_dump(fahrenheittocelsius($givenvalue));