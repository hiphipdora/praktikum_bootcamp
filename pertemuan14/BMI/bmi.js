// export {BMI, BMO} kalau kelasnya ada banyak

class BMI {
    constructor(berat, tinggi){
        this.berat = Number(berat);
        this.tinggi = Number(tinggi);
    }

    nilaiBMI() {
        return (this.berat / (this.tinggi / 100 * this.tinggi / 100).toFixed(0));
    }
    
    statusBMI(){
        const bmi = this.nilaiBMI();

        if (bmi < 18.5){
            return `Kekurangan Berat Badan`;
        }
        else if (bmi >= 18.5 && bmi <= 24.9){
            return `Normal (Ideal)`;
        }
        else if (bmi >= 25 && bmi <= 29.9){
            return `Kelebihan Berat Badan`;
        }
        else if (bmi >= 30) {
            return `Kegemukan (Obesitas)`;
        }
        else {
            return `Tidak Valid`;
        }
    }
}

export default BMI;



    // Versi Panjang
    // statusBMI(){
    //     if (this.nilaiBMI < 18.5){
    //         return `Kekurangan Berat Badan`;
    //     }
    //     else if (this.nilaiBMI >= 18.5 && nilaiBMI <= 24.9){
    //         return `Normal (Ideal)`;
    //     }
    //     else if (this.nilaiBMI >= 25 && nilaiBMI <= 29.9){
    //         return `Kelebihan Berat Badan`;
    //     }
    //     else if (this.nilaiBMI >= 30) {
    //         return `Kegemukan (Obesitas)`;
    //     }
    //     else {
    //         return `Tidak Valid`;
    //     }
    // }



// math pow untuk pangkat (base angka, pangkat eksponen)
