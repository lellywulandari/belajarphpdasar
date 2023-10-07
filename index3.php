<?php 

    // Operator Aritmatika (+, -, *, /, %)
    // $a = 10;
    // $b=20;
    // echo $hasil = $b + $a;

    // Operator Penggabungan String / Contactenation / concat
    // Tipe data String pakai Tanda ""
    // $nama1 = "Lelly";
    // $nama2 = "Wulandari";

    // Tipe data angka tidak perlu pakai tanda kutip
    // $angka = 2;

    // echo $gabung = $nam1." ".$nama2;

    // Operator penugasan (=, +=, /=, %=, =)
    $nama = "Lelly";
    $nama .= " "; //$nama = $nama . " "; 
    $nama .= "Wulandari"; // $nama = $nama . "wulandari";
    echo $nama;

    echo "<br>";

    $angka = 10;
    $angka += 20; // $angka = $angka(sebelumnya) + 20;
    echo $angka;
    echo "<br><br>";

    // Operator Perbandingan (<, >, >=, <=, !=)

    // boolean
    // var_dump(10<20);
    // var_dump(10>20);
    var_dump(10!=20);
    echo "<br>";
    
    // Operator Identitas (===, !==)
    var_dump(10=="10");
    echo "<br>";

    // Operator Logika 
    // && --> And
    //  || --> Or
    //  ! --> Not
    var_dump(10<30 && 10==30);
?>