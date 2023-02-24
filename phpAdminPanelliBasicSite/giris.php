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
   	 	//datadan kontrol 
   	 	
   	 	$query="select * from veritabanı where kullanıcı_adı='$kullanıcı_adı' limit 1";

   	 	$sonuc=mysqli_query($baglan,$query);

   	 	if($sonuc)
		{
			if($sonuc && mysqli_num_rows($sonuc) > 0)
			{
				$kullanici_data=mysqli_fetch_assoc($sonuc);
				
				if($kullanici_data['şifre'] === $şifre)
				{
					$_SESSION['kullanıcı_id'] = $kullanici_data['kullanıcı_id'];
					header("Location: index.php");
   	 				die;

				}

			}
			   	 		
					
						
		}


   	 				

   	 	echo "Yalnış kullanıcı adı veya parola";

   	 }else
   	 {
   	 	echo "Yalnış kullanıcı adı veya parola";
   	 }
   }



?>


<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>

	<title>Giriş</title>
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
			<div style="font-size: 20px;margin: 10px;color: white;">Giriş</div>
			<input id="text" type="text" name="kullanıcı_adı"><br><br>
			<input id="text" type="password" name="şifre"><br><br>

			<input id="button" type="submit" value="giriş"><br><br>
			

			<a href="kayıt.php">Kayıt olmak için tıklayın</a><br><br>
			
		</form>
	</div>

</body>
</html>