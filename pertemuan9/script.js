// console.log(`Hello World!`);
// alert(`Halooo!`);
// confirm(`Apakah Anda yakin ingin logout?`);
// document.write(`<h3>Selamat Datang!</h3>`);

// let dino = `Rex`;
// dino = `Brachio`; //re-assign//

// const dinoAge = `500 Tahun`;
// dinoAge = `700 Tahun`; //cant reassign//

// console.log(dino);
// console.log(dinoAge);\

const redDino = 'T-Rex';
const dinoAge = 800;
const isMarried = true;

console.log(`Saya melihat dinosaurus merah, bernama ${redDino}, dia berusia ${dinoAge}! Apakah dino sudah menikah? ${isMarried}.`);


// Object
console.log(typeof(redDino));

const blueDino = {
    name: `Ptera`,
    age: 350,
    isHungry: false
};

// Array
console.log(`Nama dinosaurus biru itu adalah ${blueDino.name} yang berusia ${blueDino.age} tahun.`);

const dinoGroup = ['Ptera', 'Rex', 'Tricera', 'Parasaur'];
const index = 3

console.log(dinoGroup[1]);
console.log(`Nama Dino urutan index ke-2 adalah ${dinoGroup[2]}`);

console.log(`Nama Dino urutan index ke-${index} adalah ${dinoGroup[index]}`);