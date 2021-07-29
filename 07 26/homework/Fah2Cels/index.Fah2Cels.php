
<!-- Prisiminkime 1-os pamokos užduotį, kuomet darėme funkciją, kuri konvertuoja lapsnius iš farenheito į celsijų.
Papildykime užduotį:  Sukurkime naują php failą, kuris turės laukelį temperatūrai įvesti bei mygtuką, kurį paspaudus gauname konvertuotą temperatūrą. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert fahrenheit to Celcius</title>
</head>
<body align="center">
<h1>Convert Fahrenheit(°F) to Celcius(°C)</h1>
    <form action="" method="POST">
        Enter Temprature in Fahrenheit (°F)
        <label>
            <input type="text" name="far">
        </label>
        <br><br>
        <input type="submit" name="submit" value="Convert">
    </form>
        <?php
if(isset($_POST['far']))
{
    $f= $_POST['far'];
    $c= ($f - 32) * (5/9);
    echo "Temprature in Celsius (°C) $c";
}
?>
</body>
</html>