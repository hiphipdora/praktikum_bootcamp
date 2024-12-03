function hello() {
    let obj = document.getElementById('hello');
    obj.innerText = 'Halo Fay!'
    obj.style.backgroundColor = 'pink';
}

function ubahWarna(){
    let random = Math.round(Math.random()*10)
    let colors = ['pink', 'cadetblue', 'beige', 'grey', 'darkgreen', 'azure', 'lightgreen', 'cyan', 'red', 'violet', 'lemon'];

    let obj = document.getElementById('body-bg');
    obj.style.backgroundColor = colors[random]


    console.log(colors[random])
}

ubahWarna()
