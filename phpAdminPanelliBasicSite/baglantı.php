<?php 

$vthost="localhost";
$vt_kullanıcı="root";
$vt_sifre="";
$vt_ad="vtprog";


if(!$baglan=mysqli_connect($vthost,$vt_kullanıcı,$vt_sifre,$vt_ad))
{
	die("Bağlantı başarısız oldu!");
}


?>