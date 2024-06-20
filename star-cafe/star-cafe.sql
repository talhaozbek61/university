-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 20 Haz 2024, 22:11:40
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `star-cafe`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstParagraph` varchar(255) NOT NULL,
  `secondParagraph` varchar(255) NOT NULL,
  `lastParagraph` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `title`, `image`, `firstParagraph`, `secondParagraph`, `lastParagraph`, `phone`, `email`, `instagram`, `twitter`) VALUES
(1, 'Star Cafe', 'http://localhost/star-cafe/image/about.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt necessitatibus beatae molestiae assumenda dolore ipsam voluptate inventore officiis mollitia laudantium, sunt tempore quisquam veritatis alias a magnam esse! Quo, odio.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores magnam, consectetur eum nostrum voluptates dolorum illo deserunt amet. Quod rerum quos laborum quas illum quo eum voluptatibus veniam optio iusto!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam similique iure quis quibusdam molestiae sequi repudiandae consequuntur possimus perspiciatis cumque pariatur necessitatibus reprehenderit magnam ut eveniet minima harum deleniti.', '+90 111 111 11 11', 'stuff@star.cafe', 'https://www.instagram.com/talhaozbek61', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `image`, `price`) VALUES
(1, 'Türk Kahvesi', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-31_720x720.png', '35'),
(3, 'Sicak Cikolata', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-61_720x720.png', '40'),
(11, 'Frozen Orange Mango Refresha', 'https://d2eiylesx4iyph.cloudfront.net/files/8lwiw21xa-Frozen_Orange_Mango_Starbucks_Refresha_Drink_720x720px.jpg', '120'),
(12, 'Chocolate Cream Cold Brew', 'https://d2eiylesx4iyph.cloudfront.net/files/8lvo7m4b8-Chocolate_Cream_Cold_Brew.jpg', '160'),
(13, 'Cold Brew Float', 'https://d2eiylesx4iyph.cloudfront.net/files/8loo0sqa4-coldbrewfloat-720x720px.jpg', '140'),
(14, 'Cold Brew', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-29_720x720.png', '180'),
(15, 'Buzlu Chai Tea Latte', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-41_720x720.png', '150');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `foods`
--

INSERT INTO `foods` (`id`, `name`, `image`, `price`) VALUES
(1, 'Brownie Cheesecake', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-98_720x720.png', '40'),
(44, 'Çikolatalı Donut', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-294_720x720.png', '180'),
(45, 'Tiramisu', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-335_720x720.png', '100'),
(46, 'Peynirli Simit', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-82_720x720.png', '80'),
(47, 'Zeytinli Açma', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-77_720x720.png', '40'),
(48, 'Belçika Çikolatalı Muffin', 'https://api.sbux.retter.io/3e898s82a/CALL/Image/get/SBUX-88_720x720.png', '190');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Star Cafe', 'stuff@star.cafe', 'star-cafe'),
(10, 'Mod', 'mod@star.cafe', 'star-mod');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
