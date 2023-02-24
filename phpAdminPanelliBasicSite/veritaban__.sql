-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Haz 2022, 11:27:33
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vtprog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `veritabanı`
--

CREATE TABLE `veritabanı` (
  `id` bigint(20) NOT NULL,
  `kullanıcı_id` bigint(20) NOT NULL,
  `kullanıcı_adı` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `şifre` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `veritabanı`
--

INSERT INTO `veritabanı` (`id`, `kullanıcı_id`, `kullanıcı_adı`, `şifre`, `tarih`) VALUES
(1, 89351635, 'etername', '1234', '2022-06-19 21:04:10'),
(2, 570433097085, 'bitcoın', '34567', '2022-06-19 21:24:31'),
(3, 5187586303779668, 'etername', '8901', '2022-06-19 21:27:24'),
(4, 8831307670016, 'eyup12', '234567', '2022-06-19 21:30:36'),
(5, 8492124603259951, 'aliosman', '789uu', '2022-06-21 17:07:24'),
(6, 8436706259, 'emir21', '3333ee', '2022-06-25 10:31:18');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `veritabanı`
--
ALTER TABLE `veritabanı`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kullanıcı_id` (`kullanıcı_id`),
  ADD KEY `tarih` (`tarih`),
  ADD KEY `kullanıcı_adı` (`kullanıcı_adı`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `veritabanı`
--
ALTER TABLE `veritabanı`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
