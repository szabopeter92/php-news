-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Már 22. 09:25
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `c9_test009`
--
CREATE DATABASE IF NOT EXISTS `c9_test009` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `c9_test009`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `intro` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `date`, `intro`, `body`, `image`) VALUES
(1, 'Teszt hír', 'Teszt Elek', '2024-03-22', 'Ez egy teszt hír a Hammer News projekthez', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab harum est inventore nesciunt. Nemo voluptatem neque aut necessitatibus assumenda, perspiciatis facilis sed quibusdam incidunt unde a autem soluta vero voluptate velit. Sed temporibus quos explicabo ab odit similique voluptatem rem harum voluptate modi! Commodi quae eos nihil assumenda exercitationem recusandae explicabo praesentium perferendis eligendi veniam reiciendis maxime, tenetur soluta, repudiandae repellat? Porro rem nemo similique nihil iusto consectetur sint laboriosam consequatur repellendus fugit iste exercitationem nobis, voluptates culpa odit totam accusantium voluptatibus earum quasi aperiam velit cumque hic at officia. Facilis veritatis pariatur reiciendis eveniet id quam molestias! Aliquam rerum non laboriosam cum nulla! Magnam necessitatibus deserunt quibusdam, nihil praesentium accusantium molestiae laudantium consequuntur libero fugit ipsum expedita vitae velit tenetur placeat magni? Non corporis libero error quis modi facere nisi consequatur asperiores sint, iure sed possimus consequuntur fugit dolores tenetur voluptatum iusto ea quos fugiat ratione officia ipsa?', 'https://images.pexels.com/photos/276452/pexels-photo-276452.jpeg?auto=compress&cs=tinysrgb&w=1260&h='),
(2, 'A PHP nyelv halott?', 'Szabó Péter', '2024-03-22', 'A PHP nyelv vajon halott vagy van még remény számára?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab harum est inventore nesciunt. Nemo voluptatem neque aut necessitatibus assumenda, perspiciatis facilis sed quibusdam incidunt unde a autem soluta vero voluptate velit. Sed temporibus quos explicabo ab odit similique voluptatem rem harum voluptate modi! Commodi quae eos nihil assumenda exercitationem recusandae explicabo praesentium perferendis eligendi veniam reiciendis maxime, tenetur soluta, repudiandae repellat? Porro rem nemo similique nihil iusto consectetur sint laboriosam consequatur repellendus fugit iste exercitationem nobis, voluptates culpa odit totam accusantium voluptatibus earum quasi aperiam velit cumque hic at officia. Facilis veritatis pariatur reiciendis eveniet id quam molestias! Aliquam rerum non laboriosam cum nulla! Magnam necessitatibus deserunt quibusdam, nihil praesentium accusantium molestiae laudantium consequuntur libero fugit ipsum expedita vitae velit tenetur placeat magni? Non corporis libero error quis modi facere nisi consequatur asperiores sint, iure sed possimus consequuntur fugit dolores tenetur voluptatum iusto ea quos fugiat ratione officia ipsa?', 'https://images.pexels.com/photos/52608/pexels-photo-52608.jpeg?auto=compress&cs=tinysrgb&w=1260&h=75'),
(3, 'React vs Angular vs Vue', 'Szabó Péter', '2024-03-22', 'React vs Angular vs Vue - Melyiket használjam?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ab harum est inventore nesciunt. Nemo voluptatem neque aut necessitatibus assumenda, perspiciatis facilis sed quibusdam incidunt unde a autem soluta vero voluptate velit. Sed temporibus quos explicabo ab odit similique voluptatem rem harum voluptate modi! Commodi quae eos nihil assumenda exercitationem recusandae explicabo praesentium perferendis eligendi veniam reiciendis maxime, tenetur soluta, repudiandae repellat? Porro rem nemo similique nihil iusto consectetur sint laboriosam consequatur repellendus fugit iste exercitationem nobis, voluptates culpa odit totam accusantium voluptatibus earum quasi aperiam velit cumque hic at officia. Facilis veritatis pariatur reiciendis eveniet id quam molestias! Aliquam rerum non laboriosam cum nulla! Magnam necessitatibus deserunt quibusdam, nihil praesentium accusantium molestiae laudantium consequuntur libero fugit ipsum expedita vitae velit tenetur placeat magni? Non corporis libero error quis modi facere nisi consequatur asperiores sint, iure sed possimus consequuntur fugit dolores tenetur voluptatum iusto ea quos fugiat ratione officia ipsa?', 'https://images.pexels.com/photos/4164418/pexels-photo-4164418.jpeg?auto=compress&cs=tinysrgb&w=1260&');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
