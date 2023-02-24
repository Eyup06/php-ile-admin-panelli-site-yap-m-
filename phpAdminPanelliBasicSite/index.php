<?php
session_start();

   include("baglantı.php");
   include("fonksiyon.php");

   $kullanici_data=giriş_kontrol($baglan);
?>


<!DOCTYPE html>
<html>
<head>

	
	<title>Dünya Klasiklerim</title>
	<link rel="stylesheet"  href="cssdosyam01.css">

	<style>
    body{
        background-color: beige;
            }
</style>

</head>
<body>
	<nav class="baslik">
	 <header>
        <h1><font size="15">Merhaba, <?php echo $kullanici_data['kullanıcı_adı']; ?></font></h1>
    </header>
        
    </nav>

	
	
	<h2>Dünya Klasikleri yazıldığı dönemin çok daha ötesinde olan yazarların sayfalara döktüğü birikimlerden ve hayal gücünden oluşan eserlerdir. Bu neden bir klasik
      ünvanını almıştır. Dünya klaskleri okuyarak vizyonunuzu ve ufkunuzu geliştirebilirsiniz. Şimdi sizlere benimde okuyup çok sevdiğim bazı dünya klasikleri senin
      için hazırladım. </h2>


        <div id="menum" class="menu" >
        	<ul>
        	 <li><a href="sefiller.php" target="_blank" >Sefiller</a></li>
          <li><a href="gazapuzumleri.php" target="_blank" >Gazap Üzümleri</a></li>
          <li><a href="sucveceza.php" target="_blank" >Suç ve Ceza</a></li>
          <li><a href="yeraltındannotlar.php" target="_blank">Yer Altından Notlar</a></li>
          <li><a href="romeovejuliet.php" target="_blank">Romeo Ve Juliet</a></li>
          <li><a href="olucanlar.php" target="_blank" >Ölü Canlar</a></li>
          <li><a href="askvegurur.php" target="_blank" >Aşk ve Gurur</a></li>
          <li><a href="buyukumutlar.php" target="_blank" >Büyük Umutlar</a></li>
        	</ul>
        </div>


        

      


  
  



	
	<a href="cıkıs.php">Çıkış</a>



</body>
</html>