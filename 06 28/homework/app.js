// // for-in
//
// // Sukurkite objektą green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus.
let Colors = {
    green: 'žalia',
    red: 'raudona',
    blue: 'mėlyna'
};
console.log(Colors);
//
// // Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.
//
let person = {
    Mantas: 200,
    Paulius: 300,
    Mindaugas: 300
};
// console.log(person);
// // Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.
//
for (let key in person) {
    console.log(`${key} - ${person[key]}Eu`);
}
// // Sukurkite objektą su savaitės dienomis.
// // Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios
// // (1 -> pirmadienis ir t.t.).
let weekdays = {
    'monday': 1,
    'tuesday': 2,
    'wednesday': 3,
    'thursday': 4,
    'friday': 5,
    'saturday': 6,
    'sunday': 7
}
console.log(weekdays);
//
// // Parodykite dabartinę savaitės dieną.
//
let dateObj = new Date()
let weekday = dateObj.toLocaleString('default', { weekday: 'long' })
console.log(weekday);

// Sukurkite kintamjį day kuriame saugomas savaitės dienos numeris.

let day =4;
console.log(day);
// Atspausdinkite savaitės dieną naudojant sita kintamajį.

    day = new Date();
let today = day.getDay();
console.log(today);


// Duotas objektas {js: ['jQuery', 'Angular'], php: 'hello', css: 'world'}.
// Parodykite žodį jQuery.

let obj = {
    js: [
        'jQuery',
        'Angular'
    ],
    php: 'hello',
    css: 'world'
};

console.log(obj.js[0]);

// Sukurkite objektą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai atitinkamai.

let weeknames = {
    lt: ['Pirmadienis', 'Antradienis', 'Treciadienis', 'Ketvirtadienis', 'Penktadienis', 'Sestadienis', 'Sekmadienis'],
    en: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
};
// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.

console.log (weeknames.lt[3], weeknames.en[3]);

// Sukurkite kintamsios lang ir day (reikšmės lt arba en) ir naudojant lang ir day parodykite dieną

let lang = weeknames.en;
day = 4;