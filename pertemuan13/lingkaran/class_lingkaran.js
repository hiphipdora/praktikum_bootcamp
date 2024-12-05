class Lingkaran {
    static phi = 3.14;

    constructor(r) {
        this.jarijari = r;
    }

    // method / rumus 
    hitungLuas() {
        return Lingkaran.phi * this.jarijari * this.jarijari;
    }
    hitungKeliling() {
        return 2 * Lingkaran.phi * this.jarijari;
    }
}

// instance 
// const lingkaran1 = new Lingkaran(7);
// console.log(lingkaran1.hitungLuas());
// console.log(lingkaran1.hitungKeliling());
