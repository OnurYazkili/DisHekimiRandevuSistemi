<?php
    include("baglanti.php");

    extract($_POST);
    echo "<html>";
    echo "<title>Yeni Randevu</title>";
    echo "<meta name='viewport'content='width=device-width, initial-scale=1'>";
    echo "<link rel='stylesheet'
    href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
    echo "<script
    src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
    echo "<script
    src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
    echo "<meta http-equiv='Content-Type' ";
    echo "content='text/html; charset=UTF-8' />";
    
    $sql = "INSERT INTO randevu ".
    "(hasta_ad,hasta_soyad,rahatsizlik,tarih) "."VALUES ( '$ad','$soyad', '$rahatsizlik', '$tarih')";
    
    $cevap = mysqli_query( $baglanti,$sql);
        if(!$cevap){
            echo '<br>Hata:' . mysqli_error($baglanti);
        }
        else
        {
            echo "<div class='container-fluid' align='center'";
            echo "</br>";
            echo "</br>";
            echo "Randevu Oluşturuldu</br>";
            echo "</br>";
            echo "</br>";
            echo " <a class='btn btn-success' href='randevugoruntule.php'>Randevuler</a>";
            echo "</div>";
        }
        echo "</html>";
        mysqli_close($baglanti);
?>
