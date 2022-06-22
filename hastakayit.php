<html>
    <title>Kayıt</title>
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<form action="randevu.php" method="POST" align="center">
    <br /> <br /> <br /> <br /> 
    İsim <br /> <br />
    <input type="text" name="ad" />
    <br /> 
    <br />
    Soyisim <br /> <br />
    <input type="text" name="soyad" />
    <br />
    <br />
    Rahatsızlık <br /> <br />
    <input type="text" name="rahatsizlik" />
    <br />
    <br />
    Tarih <br /> <br />
    <input type="date" name="tarih" /> 
    <br /> <br />
    <input class="btn btn-primary" type="submit" value="Randevu oluştur"/>
    <br/> <br />
    <button type="button" class="btn btn-success" onclick="parent.location='randevugoruntule.php'">Randevular</button> </br>
</form>
</body>
</html>