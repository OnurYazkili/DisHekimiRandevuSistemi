<?php
    $server = 'localhost';
    $user = 'id19144406_onuryazkili';
    $password = 'Veritabanıweb95';
    $database = 'id19144406_yazkili';
    $baglanti = mysqli_connect($server,$user,$password,$database);
    if (!$baglanti) {
        echo "MySQL sunucu ile baglanti kurulamadi! </br>";
        echo "HATA: " . mysqli_connect_error();
    exit;
}
?>