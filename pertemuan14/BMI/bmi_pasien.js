import Pasien from './pasien.js';
import BMI from './bmi.js';

class BMIPasien {
    // constructor(id, tanggal, kode, nama, tmp_lahir, tgl_lahir, email, gender, berat, tinggi){
    constructor(id, tanggal, ...rest){  //rest parameter
        this.id = id;
        this.tanggal = tanggal;
        this.pasien = new Pasien (...rest);
        this.bmi = new BMI (rest[6], rest[7]);
    }
}

export default BMIPasien;