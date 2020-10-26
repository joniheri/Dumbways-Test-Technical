function hitungLoveBird(loveBird, hariHasil){
    hariHasil /= 21;
    for(i = 1; i <= hariHasil;i++){
        loveBirdMati = loveBird/100*11.1;
        loveBird -=loveBirdMati;
        loveBird +=loveBird;
    }
    return jumlahLoveBird=Math.ceil(loveBird);
}

console.log("jumlah burung setelah 441 hari adalah " + hitungLoveBird(6969, 441)+ " burung");