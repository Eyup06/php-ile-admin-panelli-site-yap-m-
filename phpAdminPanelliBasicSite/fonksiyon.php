<?php

function giriş_kontrol($baglan)
{
	if(isset($_SESSION['kullanıcı_id']))
	{
		$id=$_SESSION['kullanıcı_id'];
		$query="select * from veritabanı where kullanıcı_id = '$id' limit 1";

		$sonuc=mysqli_query($baglan,$query);
		if($sonuc && mysqli_num_rows($sonuc) > 0)
		{
			$kullanici_data=mysqli_fetch_assoc($sonuc);
			return $kullanici_data;

		}
	}

	header("Location: giris.php");
	die;

}


function random_num($uzunluk)
{
	$text="";
	if($uzunluk < 5)
	{
		$uzunluk=5;
	}

	$uz = rand(4,$uzunluk);

	for ($i=0; $i < $uz ; $i++) { 
		
		$text .=rand(0,9);

	}

	return $text;

}

?>