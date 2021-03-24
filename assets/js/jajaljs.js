// // ---- awal ----
// // var nama = prompt('masukkan nama');
// // alert(nama);
// // ---- akhir ----

// alert('selamat datang');
// var laginama = false;

// while(laginama === false){
//     var lagi = true;
//     while(lagi === true){
//         var nama = prompt('masukkan nama');
//         alert('halo ' + nama);
//         if(confirm('jenengmu wes bener iki ?') === true){
//             alert('oke tak konfirmasi');
//         }
//         else{
//             alert('salah deng');
//         }
//         lagi = confirm('baleni meneh rak ?');
//     }
//     alert('yowes nek orak');

//     laginama = confirm('iki bener to jenenge ' + nama + " ? nek salah tak kon baleni");
// }

// var laginim = true;
// while(laginim === true){
//     var nim = prompt('saiki leboke nim mu');
//     alert('iki nim mu ' + nim);
//     if(confirm('wes bener rong nim mu ?') === true){
//         alert('oke tak konfirmasi');
//     }
//     else{
//         alert('salah deng');
//     }
//     laginim = confirm('la meh baleni rak ?');
// }   

// alert('yowes ngono wae makasi');

// var angkotPertama = 1;
// var jumlahAngkot = 10;
// var angkotBeroperasi = 6;

// while (angkotPertama <= angkotBeroperasi) {
//     console.log('Angkot '+ angkotPertama + " sedang beroperasi!");
//     angkotPertama++;
// }
// for(angkotPertama = 7; angkotPertama <= jumlahAngkot; angkotPertama++){
//     console.log('Angkot '+ angkotPertama + " sedang rusak!");
// }

// var x;
// for(x = 0; x <= 100; x++){
//     if(x == 1 || (x>=21 && x<=29) || (x>30 && x % 10 == 2 )){
//         console.log(x);
//     }
// }

//hasil panen naik 15% = 0.15 dari 2 hari hasil sebelumnya tergantung jumlah lahan
//untuk luas 10 meter didapatkan 2kg lombok
//petani menanam cabainya pada luas lahan N meter persegi dengan masa panen selama M hari
//buatlah program untuk menghitung berapa Kg cabai tiap kali dipanen dan berapa Kg total cabai yang dipanen.

//jumlah luas lahan = 30 meter
//jumlah hari panen = 6

// var x;
// // x adalah per 2 hari 
// for(x = 1; x<=6; x++){
//     if(x % 6 == 1){
//         var perLombok = 2;
//         var perLahan = 10;
//         var jumlahLahan = 30;
//         var totalLahan = jumlahLahan / perLahan;
//         var tanamCabai = totalLahan * perLombok;
//         var panenCabai = tanamCabai / x;
//         var panenNaik = 0.15 * tanamCabai;
//         var totalHasilPanen = (panenCabai + panenNaik);
        
//         console.log("Hasil panen hari ke-" + x + " = " + panenCabai);
//     }
// }

// var d = new Date();
// var day = ["Sunday", "Selasa", "Monday", "Wednesday", "Thursday", "Friday", "Saturday"];
// document.getElementById("hari").innerHTML = day[d.getDay()];

// var txt = "";
// var identitas = {nama:"Rizki Dwi Martanto", alamat:"Sri Rejeki IV", no: "No "+ 9};
// var x;
// for(x in identitas){
//     txt += identitas[x] + " ";
// }
// document.getElementById("coba").innerHTML = txt;

// var cars = ["Volvo", "Jeep", "Mercedes"];
// cars[0]= "Ford";
// var x;
// for(x = 0; x < cars.length; x++){
//     document.getElementById("coba").innerHTML = cars[x];
// }

var x;
for(x = 1; x <= 6; x++){
    var y = -x;
    console.log(y);
}