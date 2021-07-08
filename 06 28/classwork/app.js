// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300.


let person = {
    Mantas: 200,
    Paulius: 300,
    Mindaugas: 300
};
console.log(person);

// Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.
for (let key in person) {
    console.log(`${key} - ${person[key]}Eu`);
}



