function helloWorld() {
    alert('Hello World!');
}
console.log(helloWorld);

function upp(){
    let uc = document.getElementById('input').value;
    document.getElementById('input').value = uc.toUpperCase();
}
function low(){
    let lc = document.getElementById('input').value;
    document.getElementById('input').value = lc.toLowerCase();
}
function fupp(){
    let fp = document.getElementById('input').value;
    document.getElementById('input').value = fp[0].toUpperCase() + fp.slice(1);
}
function flow(){
    let fl = document.getElementById('input').value;
    document.getElementById('input').value = fl[0].toLowerCase() + fl.slice(1);
}

let block = document.querySelector('#block');
let unblock = document.querySelector('#unblock');
let bl_unbl_entry = document.querySelector('#bl_unbl_entry');

block.addEventListener('click', function(){
    bl_unbl_entry.disabled = true;
});
unblock.addEventListener('click', function(){
    bl_unbl_entry.disabled = false;
});

document.getElementById("red").onclick = function(){
    document.getElementById("output").style.color = 'red';
}
document.getElementById("blue").onclick = function(){
    document.getElementById("output").style.color = 'blue';
}
document.getElementById("green").onclick = function(){
    document.getElementById("output").style.color = 'green';
}

