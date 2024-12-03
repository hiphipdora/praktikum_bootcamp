function convert() {
    let v1 = document.getElementById('valuta1').value;
    let s1 = document.getElementById('nilaiTukar').value;

    let hasil; 

    if (s1 == 'toIDR') {
        hasil = v1 * 15945;
    }
    else if (s1 == 'toUSD') {
        hasil = v1 / 15945;
    }
    else {
        hasil = 'Tidak valid'
    }

    document.getElementById('valuta2').value = hasil;
}