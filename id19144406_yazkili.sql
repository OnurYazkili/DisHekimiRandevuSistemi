-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 22 Haz 2022, 11:39:30
-- Sunucu sürümü: 10.5.13-MariaDB
-- PHP Sürümü: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `id19144406_yazkili`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `hasta_ad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hasta_soyad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rahatsizlik` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `hasta_ad`, `hasta_soyad`, `rahatsizlik`, `tarih`) VALUES
(12, 'Ahmet', 'Taş', 'Kanal Tedavisi', '2022-06-25'),
(13, 'Ayşe', 'Keskin', 'Takma Diş', '2022-07-09'),
(14, 'Erkan', 'Emil', 'İltihap', '2022-06-29'),
(15, 'Kağan', 'Saka', 'Yirmilik diş çekimi', '2022-07-01'),
(16, 'Fatma', 'Cengiz', 'Diş Beyazlatma', '2022-07-03'),
(17, 'Nigar', 'Sağlam', 'Dolgu', '2022-07-03'),
(18, 'Ömer', 'Yılmaz', 'Diş Çekimi', '2022-07-06');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
