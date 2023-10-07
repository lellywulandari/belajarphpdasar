<!-- untuk variabel -->
<?php
    $nama = "Lelly";
?>


<html>
    <body>

<!-- Tag PHP yang berada didalam tag HTML -->
    <h1>Selamat datang, <?php echo $nama; ?></h1>

    <!-- Tanda Kutip 2 -->
    <!-- Maka Akan memanggil isi dari variabel -->
    <?php echo "Artikel ini dibuat oleh $nama"; ?>

    <!-- Tanda Kutip 1 -->
    <!-- Maka yang terpanggil teks yg ada didalam petik satu -->
    <!-- <?php echo 'Artikel ini dibuat oleh $nama'; ?> -->

    <h1>Judul artikel</h1>

    <!-- Tag PHP Yang berada di tag html -->
    <?php echo "<br><br><br>"; ?>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, facilis.</p>
    
    </body>
</html>