<?php
include("baglanti.php");
$sql = "SELECT * FROM randevu WHERE
randevu_id=".$_GET['id'];
$cevap = mysqli_query($baglanti,$sql);
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
$gelen=mysqli_fetch_array($cevap);
?>
<html>
<title>Güncelle</title>
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type"
    content="text/html; charset=UTF-8" />
<body>
    <form action="guncel.php?id=<?php echo
    $_GET['id'] ?>"
    method="POST" align="center">
    <br /> <br /> <br /> <br /> 
    Adı
    <br /> <br /> 
    <input type="text" name="ad" value="<?php echo $gelen['hasta_ad']?>" /> <br />
    <br /> <br /> 
    Soyadı
    <br /> <br /> 
    <input type="text" name="soyad" value="<?php echo $gelen['hasta_soyad'] ?>" /> <br />
    <br /> <br /> 
    Rahatsızlık <br /> <br /> 
    <input type="text" name="rahatsizlik" value="<?php echo $gelen['rahatsizlik'] ?>" /> <br />
    <br /> <br /> 
    Tarih <br /> <br /> 
    <input type="date" name="tarih" value="<?php echo $gelen['tarih'] ?>" /> <br />
    <br /> <br /> 
    <input class="btn btn-warning" type="submit" value="Güncelle">
    <br /> <br />
    <a class='btn btn-primary' href='anasayfa.php' role='button'>Anasayfa</a>
    </form>
</body>
</html>
