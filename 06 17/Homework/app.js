
// Sukurkite num kintamąjį ir priskirkite jam reikšmę 3. Parodykite šio kintamojo reikšmę ekrane, naudodami alert funkciją.

let num = 3;
alert (num);

// Sukurkite kintamuosius a = 10 ir b = 2. Ekrane parodykite jų sumą, skirtumą, daugybos ir padalijimo rezultatus.

let a = 10;
    b = 2;
let result_1 = (a + b);
result_2 = (a - b);
result_3 = (a * b);
result_4 = (a / b);
document.write ('a = 10; b = 2');
document.write ('<br>');
document.write ('a + b ='  + (result_1));
document.write ('<br>');
document.write ('a - b ='  + (result_2));
document.write ('<br>');
document.write ('a * b ='  + (result_3));
document.write ('<br>');
document.write ('a / b ='  + (result_4));
document.write ('<br>');
document.write (' ');
document.write ('<br>');

// Sukurkite kintamuosius c = 15 ir d = 2. Susumuokite juos ir priskirkite kintamajam result. Parodykite result kintamojo vertę.

const c = 15,
      d = 2;
const result = +c + +d;
document.write(result);
document.write('<hr>');

// Sukurkite kintamuosius a = 17 ir b = 10. Atimkite kintamąjį b iš a ir priskirkite rezultatą kintamajam c. Tada sukurkite kintamąjį d, priskirkite jam reikšmę 7. Sudėkite kintamuosius c ir d ir priskirkite rezultatą kintamajam result.

let A = 17,
    B = 10;
let substr = B - A;

let C = substr;
let D = 7;
let result2 = C + D;
console.log(result2);
document.write(result2);
document.write('<br>');
document.write('<hr>');

// Sukurkite kintamąjį str ir priskirkite jam „Hello World!” reikšmę. Parodykite šio kintamojo reikšmę ekrane.

let string = '"Hello World!"';
document.write(string);
document.write('<br>');
document.write('<hr>');

// Sukurkite kintamuosius str1 = ‘Hello’ ir str2 = ‘World!’. Naudodami šiuos kintamuosius parodykite frazę „Hello World!“.

let str1 = 'Hello',
    str2 = 'World!';
document.write('"' + str1 + ' ' + str2 + '"');
document.write('<br>');
document.write('<hr>');

// Sukurkite kintamąjį name ir priskirkite jam savo vardą. Parodykite frazę „Hello, %name%!“.

const name = 'Arunas';
document.write('"' + str1 + ','+ name +'!"');
document.write('<br>');
document.write('<hr>');

// Sukurkite kintamąjį age ir priskirkite jam savo amžių. Parodykite ‘I’m %age% old!’

let year_born = prompt("Please enter your date of birth:", "Type here");
let d = new Date();
let n = d.getFullYear();
function getAge(birthYear){
    let currentDate = new Date();
    let currentYear = currentDate.getFullYear();let
    age = currentYear - birthYear;
    return age;
}
calculatedAge = getAge(year_born);
alert("Hello, " + "you are " + calculatedAge + " years old!");
// let age = 31;
// document.write("Age of the date entered: " + age + " years");
// document.write( 'I' + "'" + 'm' + ' ' + age + ' ' + 'years old!');
// document.write('<br>');
// document.write('<hr>');

// Paklauskite vartotojo vardo naudodamiesi prompt metodais. Su alert parodykite pranešimą „Your name %name%“ kur %name% - įvestas vardas.

let ask = prompt ('What ir your name?');
alert ('Your name is' + ' ' + name);
