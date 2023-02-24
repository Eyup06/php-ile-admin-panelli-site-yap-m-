<?php

session_start();

if(isset($_SESSION['kullanıcı_id']))
{
	unset($_SESSION['kullanıcı_id']);

}

header("Location: giris.php");
die;

?>
