<?php
session_start();

   include("baglantı.php");
   include("fonksiyon.php");


   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
   	 $kullanıcı_adı=$_POST['kullanıcı_adı'];
   	 $şifre=$_POST['şifre'];

   	 if(!empty($kullanıcı_adı) && !empty($şifre) && !is_numeric($kullanıcı_adı))
   	 {
   	 	//veritabanına kayıt
   	 	$kullanıcı_id=random_num(20);
   	 	$query="insert into veritabanı(kullanıcı_id,kullanıcı_adı,şifre) values('$kullanıcı_id','$kullanıcı_adı','$şifre')";

   	 	mysqli_query($baglan,$query);

   	 	header("Location: giris.php");
   	 	die;

   	 }else
   	 {
   	 	echo "Lütfen geçerli bilgi giriniz!";
   	 }
   }

?>


<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>

	<title>Kayıt</title>
</head>
<body>

	<style type="text/css">
		
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
		}

		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}

		#box{
			background-color: skyblue;
			margin: auto;
			width: 300px;
			padding: 20px;

		}

	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Kayıt</div>
			<input id="text" type="text" name="kullanıcı_adı"><br><br>
			<input id="text" type="password" name="şifre"><br><br>

			<input id="button" type="submit" value="giriş"><br><br>

			<a href="giris.php">Giriş yapmak  için tıklayın</a><br><br>
			
		</form>
	</div>

</body>
</html>