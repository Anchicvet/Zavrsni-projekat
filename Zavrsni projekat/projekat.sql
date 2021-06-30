-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 01:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id_korpe` int(11) NOT NULL,
  `id_usera` int(11) NOT NULL,
  `ukupna_cena` decimal(10,0) NOT NULL,
  `adresa_isporuke` varchar(40) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id_korpe`, `id_usera`, `ukupna_cena`, `adresa_isporuke`) VALUES
(1, 1, '2000', 'bg'),
(2, 2, '4000', 'cd'),
(3, 1, '0', 'nema veze'),
(4, 1, '0', 'nema veze');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id_proizvoda` int(11) NOT NULL,
  `naziv` varchar(100) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `grupa` enum('manja tegla','veca tegla','kompot','') COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `slika` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `opis` text COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id_proizvoda`, `naziv`, `grupa`, `cena`, `slika`, `opis`) VALUES
(1, 'Domaći ekstra džem od šipurka 660g', 'veca tegla', '295', '/Dzemovi/LD-33.jpg', 'Sastojci: kaša šipurka, šećer, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 55g voća na 100g proizvoda.\r\nEnergetska vrednost	\r\n947KJ/235kcal\r\n\r\nProteini	\r\n0,46g\r\n\r\nMasti	\r\n0,06g\r\n\r\nUgljeni hidrati	\r\n56,71g'),
(2, 'Domaći ekstra džem od kajsija 630g', 'veca tegla', '295', '/Dzemovi/LD-36.jpg', 'Sastojci: plod kajsije, šećer, sredstvo za želiranje pektin E440, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 60g voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	707,6KJ/169kcal\r\n\r\nProteini	\r\n0,60g\r\n\r\nMasti	\r\n0,10g\r\n\r\nUgljeni hidrati	\r\n40,40g\r\n'),
(3, 'Domaći ekstra džem od jagoda 630g', 'veca tegla', '295', '/Dzemovi/LD-27.jpg', 'Sastojci: plod jagode, šećer, sredstvo za želiranje pektin E440, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 60g voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	\r\n699KJ/166,9kcal\r\n\r\nProteini	\r\n0,5g\r\n\r\nMasti	\r\n0,10g\r\n\r\nUgljeni hidrati'),
(4, 'Domaći ekstra džem od šljiva 630g', 'veca tegla', '295', '/Dzemovi/LD-30.jpg', 'Sastojci: sečena šljiva, šećer, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 90g voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	\r\n997KJ/237kcal\r\n\r\nProteini	\r\n0,8g\r\n\r\nMasti	\r\n0g\r\n\r\nUgljani hidrati'),
(5, 'Domaći ekstra džem od višnje 640g', 'veca tegla', '295', '/Dzemovi/LD-24.jpg', 'Sastojci: sečena višnja, šećer, sredstvo za želiranje E440 i regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 45 voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	\r\n725KJ/171kcal\r\n\r\nProteini	\r\n0,8g\r\n\r\nMasti	\r\n0,002g\r\n\r\nUgljeni hidrati	\r\n41,8g'),
(7, 'Domaći Ekstra Džem od Šipurka 350g', 'manja tegla', '200', '/Dzemovi/LD.jpg', 'Sastojci: kaša šipurka, šećer, regulator kiselosti, limunska kiselina. Proizvod je pasterizovan, bez dodataka veštačkih boja, aroma i konzervansa. Proizvedeno od 55g voća na 100g gotovog proizvoda.\r\n\r\nEnergetska vrednost	\r\n947KJ/235kcal\r\n\r\nProteini	\r\n0,46g\r\n\r\nMasti	\r\n0,06g\r\n\r\nUgljeni hidrati	\r\n56,71g'),
(8, 'Domaći Extra Džem od Kajsije 350g', 'manja tegla', '200', '/Dzemovi/LD-2.jpg', 'Sastojci: plod kajsije, šećer, sredstvo za želiranje pektin E440 i regulator kiselosti, limunska kiselina. Proizvod je pasterizovan, bez dodataka veštačkih boja, aroma i konzervansa. Proizvedeno od 60g voća na 100g gotovog proizvoda.\r\n\r\nEnergetska vrednost	\r\n707,6KJ/169kcal\r\n\r\nProteini	\r\n0,6g\r\n\r\nMasti	\r\n0,1g\r\n\r\nUgljeni hidrati	\r\n38,4g'),
(9, 'Domaći Extra Džem od Jagode 350g', 'manja tegla', '200', '/Dzemovi/LD-3.jpg', 'Sastojci: plod jagode, šećer, sredstvo za želiranje pektin E440 i regulator kiselosti, limunska kiselina. Proizvod je pasterizovan, bez dodataka veštačkih boja, aroma i konzervansa. Proizvedeno od 60g voća na 100g gotovog proizvoda.\r\n\r\nEnergetska vrednost	\r\n699KJ/166,9kcal\r\n\r\nProteini	\r\n0,5g\r\n\r\nMasti	\r\n0,1g\r\n\r\nUgljeni hidrati	\r\n38g'),
(10, 'Domaći Extra Džem od Šljive 350g', 'manja tegla', '200', '/Dzemovi/LD-4.jpg', 'Sastojci: sečena šljiva, šećer, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 90g voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	\r\n997KJ/237kcal\r\n\r\nProteini	\r\n0,8g\r\n\r\nMasti	\r\n0,0g\r\n\r\nUgljeni hidrati	\r\n57,8g'),
(11, 'Domaći Extra Džem od Višnje 350g\r\n', 'manja tegla', '200', '/Dzemovi/LD-5.jpg', 'Sastojci: kaša višnje, šećer, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 45g voća na 100g proizvoda.  Energetska vrednost	 725KJ/171kcal  Proteini	 0,8g  Masti	 0,002g  Ugljeni hidrati	 41,8g'),
(12, 'Domaći Kompot od Šljive 750g', 'kompot', '180', '/Dzemovi/LD-21.jpg', 'Sastojci: plod šljive, šećer, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 53 voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	\r\n391KJ/92kcal\r\n\r\nProteini	\r\n0,3g\r\n\r\nMasti	\r\n0,1g\r\n\r\nUgljeni hidrati	\r\n22,5g'),
(13, 'Domaći Kompot od Kajsije 730g\r\n', 'kompot', '180', '/dzemovi/LD-18.jpg', 'Sastojci: plod kajsije, šećer, regulator kiselosti limunska kiselina. Proizvod je paseterizovan bez veštačkih boja, aroma i konzervansa. Proizvedeno od 41g voća na 100g proizvoda.\r\n\r\nEnergetska vrednost	\r\n340KJ/80kcal\r\n\r\nProteini	\r\n0,5g\r\n\r\nMasti	\r\n0,1g\r\n\r\nUgljeni jidrati	\r\n19,3g');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `id_korpe` int(11) NOT NULL,
  `id_proizvoda` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `popust` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `stavke_korpe`
--

INSERT INTO `stavke_korpe` (`id`, `id_korpe`, `id_proizvoda`, `kolicina`, `cena`, `popust`) VALUES
(1, 1, 3, 2, '295', 5),
(2, 1, 2, 5, '295', 12),
(3, 2, 2, 5, '100', 5),
(4, 2, 4, 5, '200', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_usera` int(11) NOT NULL,
  `ime` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_usera`, `ime`, `prezime`) VALUES
(1, 'ana', 'Cvetkovic'),
(2, 'Isidora', 'Korac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id_korpe`),
  ADD KEY `id_usera` (`id_usera`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id_proizvoda`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proizvoda` (`id_proizvoda`),
  ADD KEY `id_korpe` (`id_korpe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usera`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id_korpe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id_proizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_usera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korpa`
--
ALTER TABLE `korpa`
  ADD CONSTRAINT `korpa_ibfk_1` FOREIGN KEY (`id_usera`) REFERENCES `user` (`id_usera`);

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`id_proizvoda`) REFERENCES `proizvodi` (`id_proizvoda`),
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`id_korpe`) REFERENCES `korpa` (`id_korpe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
