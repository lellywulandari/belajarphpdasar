<?php
// Function (build in funtion atau user defined function)
//  build in function yang sudah dibuat oleh php
// user defined Function itu kita sendiri yg buat dan kita pakai

$teks = "Hello world";
echo "Panjang dari text ialah ". strlen($teks) . " Karakter."; 

//  date() -> menampilkan tanggal
echo "<br>";
echo date("y-m-d H:i:s");


function salam($nama = "Lelly") {
    return "Selamat Datang , $nama";
}
?>

<html>
    <body>
        <h1><?php echo salam(); ?></h1>
    </body>
</html>     