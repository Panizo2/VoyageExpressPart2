-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2022 at 11:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `CPF` varchar(100) NOT NULL primary key,
  `name` varchar(100) NOT NULL,
  `CEP` varchar (70) NOT NULL,
  `City` varchar(150) NOT NULL,
  `State` varchar (50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `StreetNumber` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

select * from `tbl_user`;

CREATE TABLE Pacotes(
	id int not null auto_increment primary key,
    Lugar varchar (100) not null,
    Nome varchar (100) not null,
    PrecoBase float not null 
);

INSERT INTO Pacotes (Lugar, Nome, PrecoBase) VALUES
    ("Califórnia", "Apenas passagem", 1000),
    ("Califórnia", "Passagem e hospedagem", 2000),
    ("Califórnia", "Passagem, hospedagem e passeios", 3000),
    ("Paris", "Apenas passagem", 1200),
    ("Paris", "Passagem e hospedagem", 2200),
    ("Paris", "Passagem, hospedagem e passeios", 3200),
    ("Dublin", "Apenas passagem", 900),
    ("Dublin", "Passagem e hospedagem", 1800),
    ("Dublin", "Passagem, hospedagem e passeios", 2700),
    ("Veneza", "Apenas passagem", 1500),
    ("Veneza", "Passagem e hospedagem", 2500),
    ("Veneza", "Passagem, hospedagem e passeios", 3500),
    ("Grécia", "Apenas passagem", 1800),
    ("Grécia", "Passagem e hospedagem", 2800),
    ("Grécia", "Passagem, hospedagem e passeios", 3800),
    ("Seoul", "Apenas passagem", 2000),
    ("Seoul", "Passagem e hospedagem", 3000),
    ("Seoul", "Passagem, hospedagem e passeios", 4000),
    ("Noruega", "Apenas passagem", 1600),
    ("Noruega", "Passagem e hospedagem", 2600),
    ("Noruega", "Passagem, hospedagem e passeios", 3600);

select * from Pacotes;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
