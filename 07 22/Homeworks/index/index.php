<?php

//Išvesti į ekraną 10 kartų žodį 'Labas';//

foreach(range(1, 10) as $i)
    echo 'Hello';

//Išvesti į ekraną skaičius nuo 1 iki 10;

for( $i=1; $i<=10; $i++ )
    var_dump($i);

//Išvesti į ekraną skaičius nuo 10 iki 1;

for ($a = 10; $a > 0 ; $a--)

    var_dump($a);
//Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;



for ($b = 10; $b <=100 ; $b+=2)

    var_dump($b);

//Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);

$arr = [1,2,3,4,5,6,7,8,9,10];

var_dump($arr);
//Išvesti į ekraną visų masyvo elementų sumą.;

var_dump(array_sum($arr));
//Išvesti į ekraną visų masyvo elementų sandaugą.;

var_dump(array_product($arr));

//Išvesti į ekraną kas antrą masyvo elementą;

for ($i = 1; $i < count($arr); $i += 2)
    echo $arr[$i];

//Funkciją, kuri apverstų masyvo elementus;

var_dump(array_flip($arr));

//Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu.)
//https://www.geeksforgeeks.org/php-fibonacci-series/#:~:text=PHP%20%7C%20Fibonacci%20Series%20Last%20Updated%20%3A%2013,series%20in%20PHP%20using%20iterative%20and%20recursive%20way.
function Fibonacci($number){

    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (Fibonacci($number-1) +
            Fibonacci($number-2));
}
$number = 10;
for ($counter = 0; $counter < $number; $counter++){
    echo Fibonacci($counter),' ';
}


//Išvesti visų masyvo elementų vidurkį;(foreach)

$avg = array_sum($arr) / count($arr);
echo $avg;
//Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);


$cars = array
(
    array('BMW'),
    array('AUDI'),
    array('VOLVO'),
);
var_dump($cars);

