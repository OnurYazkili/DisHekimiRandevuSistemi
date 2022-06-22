<?php

include("baglanti.php");

$sql = "SELECT * FROM randevu";

$cevap = mysqli_query($baglanti,$sql);

if(!$cevap ){
echo '<br>Hata:' .
mysqli_error($baglanti);
}
echo "<html>";
echo "<title>Randevu Güncelle</title>";
echo "<meta name='viewport'content='width=device-width, initial-scale=1'>";
echo "<link rel='stylesheet'
href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
echo "<script
src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
echo "<script
src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
echo "<h1 align='center'>Randevuler</h1>";
echo "</br>";
echo "<table class='table table-striped'>";
echo "<tr>";
echo "<th>Hasta No</th>";
echo "<th>Adı</th>";
echo "<th>Soyadı</th>";
echo "<th>Rahatsızlığı</th>";
echo "<th>Tarih</th>";
echo "</tr>";

while($gelen=mysqli_fetch_array($cevap))
{

echo "<tr><td>".$gelen['randevu_id']."</td>";
echo "<td>".$gelen['hasta_ad']."</td>";
echo "<td>".$gelen['hasta_soyad']."</td>";
echo "<td>".$gelen['rahatsizlik']."</td>";
echo "<td>".$gelen['tarih']."</td>";
echo "<td><a class='btn btn-warning' href=hastaguncelle.php?id=";
echo $gelen['randevu_id'];
echo ">Güncelle</a></td></tr>";
}

echo "</table>";
echo "<div align='center'>";
echo "<br/><a class='btn btn-primary' href='anasayfa.php' role='button'>Anasayfa</a>";
echo "</div>";
echo "</html>";

mysqli_close($baglanti);
?>
