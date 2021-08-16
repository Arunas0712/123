<?php


//Parašykite funkciją, kuri mestų kauliuką iki kol iškris 5 arba 6. Visus savo metimus išvestų į ekrana.(while).

//Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
//Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
//	taisyklės:
//	Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
//Jeigu kauliukų suma daugiau už 5 ir:
//	Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
//Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
//Kitais atvejais – kauliukas metamas dar kartą.
//Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
//    Visa žaidimo eiga turėtų būti išvesta į ekraną.


//$r = 0;
//$c = 0;
//
//while ($r < 5) {
//    $r = mt_rand(1, 6);
//    echo 'I rolled ' . $r . ', ';
//    $c++;
//}
//echo 'I finally rolled a ' . $r . '. It took me ' . $c . ' rolls!';
//----------------------------------------------------------------------------------------------------------------------
//$selectDiceLevel = 2;
//
//function dice($diceLevel)
//{
//    if ($diceLevel == 1) {
//        $diceValue = 0;
//
//        while ($diceValue < 5) {
//            $diceValue = mt_rand(1, 6);
//            var_dump("Kauliuko reikšmė: {$diceValue}.");
//        }
//        return "Laimėjote! Kauliuko reikšmė: {$diceValue}!";
//    } elseif ($diceLevel == 2) {
//
//        $playerWin = false;
//        $playerLose = false;
//        $firstDiceValue = 0;
//        $secondDiceValue = 0;
//        $sumDiceValues = 0;
//
//        while ($playerWin === false && $playerLose === false) {
//
//            $firstDiceValue = mt_rand(1, 6);
//            $secondDiceValue = mt_rand(1, 6);
//            $sumDiceValues = $firstDiceValue + $secondDiceValue;
//
//            var_dump("Antro kauliuko reikšmė: {$secondDiceValue}.");
//            var_dump("Pirmo kauliuko reikšmė: {$firstDiceValue}.");
//            var_dump("Bendra kauliukų reikšmių suma: {$sumDiceValues}");
//
//            if ($sumDiceValues < 5) {
//                $playerLose = true;
//                return 'Pralaimėjote!';
//
//            } elseif ($firstDiceValue == 6 && $secondDiceValue == 6) {
//                $playerWin = true;
//                return 'Sveikiname, laimėjote dviratį!';
//
//            } elseif ($sumDiceValues > 5 && $firstDiceValue == $secondDiceValue && $firstDiceValue !== 6) {
//                $playerWin = true;
//                return 'Laimėjote bilietą į kiną!';
//            }
//        }
//    }
//    return 'Galimi lygiai: 1 arba 2.';
//}
//
//var_dump(dice($selectDiceLevel));

//----------------------------------------------------------------------------------------------------------------------


//$rollRes = 0;
//while ($rollRes < 5) {
//    $rollRes = rand(1, 6);
//    echo('<pre>');
//    echo($rollRes);
//}
//echo('<br>');
//// Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
//// Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
//// 	taisyklės (ziureti zemiau):
//
////??????????????????????Nesugebejau pritaikyti While ciklo - reikia
//
//
//$rollRes1 = rand(1, 6);
//$rollRes2 = rand(1, 6);
//$totalRes = $rollRes1 + $rollRes2;
//
//
//var_dump($rollRes1);
//var_dump($rollRes2);
//var_dump($totalRes);
//
//
//// 	Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
//if ($totalRes < 5){
//    var_dump('Rezultatas '.$totalRes .' reiškia - jūs iškarto pralaimejote.');
//}
//// 	Jeigu kauliukų suma daugiau už 5 ir:
//// 	Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
//else if($rollRes1 == 6 && $rollRes2 == 6){
//    var_dump('Rezultatas '.$rollRes1 .'+' .$rollRes2 .'='.$totalRes .' reiškia - laimėjote dviratį.');
//}
//
//// 	Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
//else if ($totalRes > 5 && $rollRes1 == $rollRes2  && $rollRes1 !== 6 && $rollRes2 !== 6){
//    var_dump('Rezultatas '.$rollRes1 .'+' .$rollRes2 .'='.$totalRes .' Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.');
//
//}
//
//// 	Kitais atvejais – kauliukas metamas dar kartą.
//else {
//
//    var_dump('Rezultatas '.$rollRes1 .'+' .$rollRes2 .'='.$totalRes .' kauliukas metamas dar kartą.');
//
//
//}
//
//
//// Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
//
//// Visa žaidimo eiga turėtų būti išvesta į ekraną.

//----------------------------------------------------------------------------------------------------------------------

//$rollCount = 0;
//do {
//    $roll = rand(1,6);
//    $rollCount ++;
//    if ($roll != 6){
//        echo '<p> Išriedėjo ' . $roll . '</p>';
//    }
//    else {
//        echo 'Pagaliau iškrito ' . $roll ;
//    }
//} while ($roll != 6);
//$verb = 'Bandymų';
//$last = 'škaičius';
//
//echo "<p>{$verb} {$last} {$rollCount}!</p>";
//echo '<hr>';
//
//// Papildomas funkcionalumas žaidimui(papildomas sudėtingumas):
//// Metame 2 kauliukus (arba vieną kauliuką 2 kartus).
//// taisyklės:
//// Jeigu kauliukų suma yra mažiau už 5 reiškia - jūs iškarto pralaimejote.
//// Jeigu kauliukų suma daugiau už 5 ir:
//// Išmesta buvo 6 ir 6, reiškia - laimėjote dviratį.
//// Abiejų kauliukų išmestas skaičius yra vienodas, bet ne 6 ir 6 - reiškia jūs laimėjote bilietą į kiną.
//// Kitais atvejais – kauliukas metamas dar kartą.
//
//// Žaidimas turi vykti iki kol žaidėjas laimės / pralaimės(while)
//
//// Visa žaidimo eiga turėtų būti išvesta į ekraną.
//
//
////function rollDice()
////{
////    $dice1roll = rand(1, 6);
////    $dice2roll = rand(1, 6);
////    $sum = $dice1roll + $dice2roll;
////
////    if ($sum > 5 && $dice1roll === $dice2roll && $dice1roll !== 6 && $dice2roll !==6) {
////        return 'Jūs laimėjote BILIETĄ Į KINĄ! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
////    }
////    if ($dice1roll === 6 && $dice2roll === 6) {
////        return 'Laimėjote DVIRATĮ! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
////    }
////    if ($sum > 5 && $sum <= 11) {
////        return 'Bandykite dar kartą! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
////    }
////    if ($sum <= 5) {
////        return 'PRALAIMĖJOTE! Išriedėjo ' .$dice1roll .' ir ' .$dice2roll;
////    }
////}
////var_dump(rollDice());