
let age = prompt('Enter date of birth');
let dt = new Date();
let years = dt.getFullYear();
document.write(`You are ${years - age} years old`);
