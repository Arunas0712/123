// For and While


// Atspausdinkite skaičių stulpelį nuo 1 iki 100.

let i = 1;

while (i <= 100){
    console.log(i);
    i++;
}
for (let i = 1; i <= 100; i++) {
    console.log(i);
}

// Atspausdinkite skaičių stulpelį nuo 11 iki 33.

// let i = 11;
//
// while (i <= 33){
//     console.log(i);
//     i++;
// }
// for (let i = 11; i <= 33; i++) {
//     console.log(i);
// }

// Atspausdinkite stulpelį su lyginiais skaičiais nuo 0 iki 100.

// let i = 0;
//
// for (let i = 0; i <= 100; i++) {
//     if (i % 2 === 0) {
//         console.log(i);
//     }
// }
//
// while (i <= 100) {
//     i++;
//     if (i % 2 === 0) {
//          console.log(i);
//         }
//  }
// Naudodami ciklą parodykite sumą nuo 1 iki 100.

// let number = 100;
// let sum = 0;
// for (let i = 1; i <= number; i++) {
//     sum += i;
// }

// For ir masyvai


// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite visus masyvo elementus ekrane.

let arr = [1, 2, 3, 4, 5];
for (let i = 0; i < arr.length; i++) {
    document.write('Numb: ', arr[i] + ' ')
}

// Duotas masyvas su elementais [1, 2, 3, 4, 5]. Parodykite šio masyvo elementų sumą.

let sum = 0;

for (let i = 0; i < arr.length; i++) {
    sum += arr[i];
}

console.log('sum ' + sum);