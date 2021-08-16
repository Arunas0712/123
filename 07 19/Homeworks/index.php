<?php

// Mayvai
// Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.

$array = [1, 2, 3, 4, 5, 6];

print_r($array);


// Padauginti esamo masyvo narius iš 2

function multiplyArrayValues($arr) {

    foreach ($arr as &$value) {
        $result[] = $value * 2;
    }

    return $result;
}

print_r(multiplyArrayValues($array));




// Pakelti masyvo narius kvadratu

function squareArrayValues($arr) {

    foreach ($arr as &$value) {
        $result[] = $value ** 2;
    }

    return $result;
}

print_r(squareArrayValues($array));



// Padauginti masyvo narius iš jų index'o

function multiplyArrayAndKeyValues($arr) {

    foreach ($arr as $key => &$value) {
        $value = $key * $value;
        $result[] = $value;
    }

    return $result;
}

print_r(multiplyArrayAndKeyValues($array));




// Atrinkti tiktai teigimų elementų masyvą

function positiveArrayValues($arr) {

    foreach ($arr as &$value) {
        if($value > 0) {
            $result[] = $value;
        }
    }

    return $result;
}

print_r(positiveArrayValues($array));




// Atrinkti tiktai neigiamų elementų masyvą

function negativeArrayValues($arr) {

    foreach ($arr as &$value) {
        if($value < 0) {
            $result[] = $value;
        }
    }

    return $result;
}

print_r(negativeArrayValues($array));



// Atrinkti tiktai lyginių skaičių masyvą

function evenArrayValues($arr) {

    foreach ($arr as &$value) {
        if($value % 2 == 0) {
            $result[] = $value;
        }
    }

    return $result;
}

print_r(evenArrayValues($array));


// Atrinkti tiktai nelyginių skaičių masyvą

function oddArrayValues($arr) {

    foreach ($arr as &$value) {
        if($value & 1) {
            $result[] = $value;
        }
    }

    return $result;
}

print_r(oddArrayValues($array));



// Asociatyvūs masyvai
// Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre

$literatureData = ['title', 'author', 'year', 'genre'];

var_dump($literatureData);


// Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas

$literatureData = array_flip($literatureData);

$literatureData['title'] = ['Promised Land', 'In Search of Lost Time', 'Ulysses', 'Don Quixote', 'The Great Gatsby'];
$literatureData['author'] = ['Barack Obama', 'Marcel Proust', 'James Joyce', 'Miguel de Cervantes', 'F. Scott Fitzgerald'];
$literatureData['year'] = ['2020', '1913', '1920', '1605', '2013'];
$literatureData['genre'] = ['Biography', 'Philosophical fiction', 'Novel', 'Novel', 'Tragedy'];


// Išvesti visus knygų masyvo elementus su var_dump;

var_dump($literatureData);


// Išvesti visus knygų masyvo elementus lentele;

echo "<table style='border: 1px solid black'>";
foreach($literatureData as $key => $row) {
    echo "<tr>" . "<th style='border: 1px solid black'>" . $key . "</th>";
    foreach($row as $key2 => $row2){
        echo "<td style='border: 1px solid black'>" . $row2 . "</td>";
    }
    echo "</tr>";
}
echo "</table>";


// Išvesti visų visų knygų metų vidurkį;

$average = array_sum($literatureData['year'])/count($literatureData['year']);

var_dump($average);


// Funkcijos
// Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.


function largestNumber(array $arr)
{
    return max($arr);
}

var_dump(largestNumber($array));


// Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.

function smallestNumber(array $arr)
{
    return min($arr);
}

var_dump(smallestNumber($array));


// Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.

function fromSmallestToLargest(array $arr)
{
    sort($arr);
    return $arr;
}

var_dump(fromSmallestToLargest($array));