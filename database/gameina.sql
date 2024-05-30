-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2024 at 11:58 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameina`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(64) NOT NULL,
  `email_admin` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$e8aQ6j6wg/lh8/Y71sVo6ukh7nF/YYLY.SPUAtEvncoq1fEzVhtFS');

-- --------------------------------------------------------

--
-- Table structure for table `playgames`
--

CREATE TABLE `playgames` (
  `id_game` int NOT NULL,
  `nama_game` varchar(255) NOT NULL,
  `gambar_game` varchar(255) NOT NULL,
  `deskripsi_game` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `link_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playgames`
--

INSERT INTO `playgames` (`id_game`, `nama_game`, `gambar_game`, `deskripsi_game`, `kategori`, `link_game`) VALUES
(16, 'Zombiester', 'zombie_buster.png', 'Kalahkan para zombie dan bertahan hidup agar kamu selamat!', 'populer', 'zombie.html'),
(18, 'Combatdier', 'soldiers-combat.jpg', 'Kalahkan musuh dan bertahan hidup untuk menang!', 'populer', 'combat.html'),
(19, 'Jelly Jump', 'jelly_jump.jpg', 'Loncat loncat fucekkkk', 'fps', 'jelly.html'),
(21, 'BoxKid', 'box_kid.jpg', 'Mainkan game keren puzzle dan mengasah otak!', 'populer', 'box.html'),
(22, 'Turbo Racing', 'turbo_racing.jpg', 'Permainan Balapan Menegangkan ! seru dan menarik!', 'balapan', 'turbo_racing.html'),
(23, 'BoxKid', 'box_kid.jpg', 'Mainkan game keren puzzle dan mengasah otak!', 'misteri', 'box.html'),
(24, 'Throatgery', 'throat_surgery.jpg', 'Mainkan simulasi operasi gigi sekarang!', 'edukasi', 'surgery.html'),
(25, 'Olympic Rio', 'olympic.jpg', 'Permainan Sport Terseru dan populer telah hadir!', 'olahraga', 'olympic.html'),
(26, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'petualangan', 'thunderbirds.html'),
(27, 'Free Falling', 'free_falling.jpg', 'Rasakan sensasi parkour yang seru dan menegangkan disini!', 'Aksi', 'free_falling.html'),
(28, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'aksi', 'thunderbirds.html'),
(29, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'aksi', 'red_code.html'),
(30, 'Monkey Kick', 'monkey_kick.jpg', 'Tendang MONYET yang lucu dan pikakeheulen jiga kamu :)', 'aksi', 'monkey_kick.html'),
(31, 'Firewatergirl', 'fireboy.jpg', 'Mainkan game bersama temanmu! selesaikan level bersama sama!', 'multiplayer', 'fire boys.html'),
(32, 'Cartapult', 'cartapult.jpg', 'Tabrakan dan ledakan mobil sekitarmu hahahahhaha!', 'balapan', 'cartapult.html'),
(33, 'Birdy Rush', 'birdy_rush.png', 'Game tentang burung', 'populer', 'bird.html'),
(34, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'balapan', 'thunderbirds.html'),
(35, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'misteri', 'cut_the_rope.html'),
(36, 'Bloxorz', 'bloxorz.png', 'Mystery box oriented game yang bikin kamu pusing dan menantang!', 'misteri', 'bloxorz.html'),
(37, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'misteri', 'red_code.html'),
(38, 'Free Falling', 'free_falling.jpg', 'Rasakan sensasi parkour yang seru dan menegangkan disini!', 'olahraga', 'free_falling.html'),
(39, 'Thunderbirds', 'thunderbirds.jpg', 'Mainkan game thunderbirds yang seru,menarik dan gege', 'olahraga', 'thunderbirds.html'),
(41, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'petualangan', 'cut_the_rope.html'),
(42, 'Red Code', 'red.jpg', 'Game perang terseru dan terkeren! yuk main sekarang dude!', 'petualangan', 'red_code.html'),
(43, 'Monkey Kick', 'monkey_kick.jpg', 'Tendang MONYET yang lucu dan pikakeheulen jiga kamu :)', 'petualangan', 'monkey_kick.html'),
(44, '8 Ball Pool', 'ball_pool.jpg', 'Mainkan game billiar terpopuler di sini ! mainkan gratis!', 'multiplayer', 'ball_pool.html'),
(45, 'Battle Golf', 'battle_golf.jpg', 'Mainkan game golf bersama temanmu sekarang!', 'multiplayer', 'battle_golf.html'),
(46, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'multiplayer', 'cut_the_rope.html'),
(47, 'Bloxorz', 'bloxorz.png', 'Mystery box oriented game yang bikin kamu pusing dan menantang!', 'edukasi', 'bloxorz.html'),
(48, 'Cut The Rope', 'header.jpg', 'Bermain dan beri makan omnom! si alien lucu .', 'edukasi', 'cut_the_rope.html'),
(49, 'Basketball', 'basket.jpg', 'Mainkan olahraga basket dengan mudah disini!', 'olahraga', 'basket.html'),
(50, 'Olympic Rio', 'olympic.jpg', 'Permainan Sport Terseru dan populer telah hadir!', 'edukasi', 'olympic.html'),
(54, 'Final Fantasy', 'k4n5pyovt5c41.jpg', '', 'Action', ''),
(56, 'dreadout1', 'Picture1.png', '', 'Action', ''),
(61, 'Kitten Match', '1.png', 'Cari Kucing yang sama', 'prasekolah', 'talktome.html'),
(62, 'Mewarnai', '2.png', 'Cara menyenangkan bagi siswa untuk menggambar dan mewarnai', 'kanak', 'bingo.html'),
(63, 'Puzzle Sea', 'G1.png', 'Menentukan bentuk yang sama', 'prasekolah', '1.html'),
(64, 'Blue Ribbon', 'comingsoon.gif', 'Latihan membandingkan ukuran', 'prasekolah', 'comparesize.html'),
(69, 'FarmConnect', '8t.png', 'kamu harus mencocokkan ubin yang benar untuk melanjutkan!', 'kanak', 'monstermansion.html'),
(70, 'Draw Smash', '9.png', 'Hancurkan telurnya', 'kanak', 'trip.html'),
(71, 'Shape&Color', 'comingsoon.gif', 'Latihan membandingkan warna dan bentuk.', 'kanak', 'shapescolor.html'),
(72, 'More Or Less', 'comingsoon.gif', 'Menghitung \"lebih dari,\" \"kurang dari,\" dan \"sama dengan\".', 'kanak', 'mollys.html'),
(74, 'Words Match', '13t.png', 'Teka teki kata-kata', 'awal', 'symetree.html'),
(75, 'Penjumlahan', 'penjumlahan.jpg', 'Berlatih menghitung penjumlahan dasar', 'awal', 'penjumlahan.html'),
(76, 'Pengurangan', 'pengurangan.jpg', 'Berlatih menghitung pengurangan dasar', 'awal', 'pengurangan.html'),
(77, 'Make a Cake', 'comingsoon.gif', 'Game akan segera hadir', 'prasekolah', 'cake.html'),
(78, 'Cut The Rope', '14t.png', 'Game teka-teki mengasah otak', 'akhir', 'math.html'),
(79, 'Math vs Bath', '15t.png', 'Serang Kelelawar dengang menjawab pertanyaan ', 'akhir', 'dino.html'),
(80, 'Brain Trainer', '16t.png', 'Menghitung \"lebih dari,\" \"kurang dari,\" dan \"sama dengan\".', 'akhir', 'magician.html'),
(81, 'World', 'comingsoon.gif', 'Menguji pengetahuan mereka tentang ibu kota negara', 'akhir', 'world.html'),
(82, 'Find in mind', '18t.png', 'Latihan memecahkan permasalahan', 'remaja', 'detective.html'),
(83, 'GardenBloom', '19t.png', 'Cocokkan setidaknya 3 bunga dengan warna yang sama ', 'remaja', 'wonder.html'),
(84, 'Fun Factory', 'comingsoon.gif', 'Latihan tanda baca dan kapitalisasi.', 'remaja', 'factory.html'),
(85, 'Synonyms', 'comingsoon.gif', 'Latihan pengetahuan sinonim dan antonim.', 'remaja', 'synonyms.html'),
(86, 'Counting Fish', 'comingsoon.gif', 'Berlatih menghitung objek dari 1 hingga 20.', 'awal', 'fish.html');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_active` int NOT NULL,
  `date_created` int NOT NULL,
  `inacash` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `is_active`, `date_created`, `inacash`) VALUES
(82, 'Nurul Annisa', 'anissa30403@gmail.com', 'default.jpg', '$2y$10$iTE5h.PUrc7Cnc.O.4oAFO08u8M3doA1QXtoFcdLkKXMNcI1bla2.', 1, 1583975818, 0),
(83, 'Ditta Audia Roza', 'audiadiit@gmail.com', 'default.jpg', '$2y$10$WaGebURGdE6l1cNzO/3SguARI3lVMktWsMpKhvrRPrvjFagSEJXK6', 1, 1583978764, 0),
(85, 'Askal Drajat Fachrezi', 'askaldrajat@gmail.com', 'default.jpg', '$2y$10$hGskZSQQOfs2ZC4SmjtWNuvFu2sIhErh/40yI93MTvX9UrJ1khek6', 1, 1583979637, 0),
(88, 'Syauqi Zaidan Khairan Khalaf', 'syaaufy@gmail.com', 'default.jpg', '$2y$10$8RSmU944nBT6coUtfspRl.6UzbzmejRhiuitcCUsjZQVFaGaF9MtK', 1, 1592548950, 0),
(89, 'Dummy', 'Dummy@gmail.com', 'default.jpg', '$2y$10$gsjeehNm3yfEd.UwaWmr0ehdFtgucO4k7g5t3iUgVVG2GnG23gL1C', 1, 1592549022, 0),
(90, 'premium', 'premium@gmail.com', 'default.jpg', '$2y$10$TfREnKFzP.ymrhwxeo.mue6Mk/prRWueZyXOkdcDromQxftn13qyu', 1, 1714560996, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(55, 'annisa30403@gmail.com', 'M84IrsJ2B03Ddg0aCRIbfluXXm99bv33tlBTzEVpE0I=', 1583975411),
(59, 'dinamarsela17@gmail.com', 'wH1DOZ8hymnp2CCiSBUFILri4I+AsaCtPlRXmwWwcqA=', 1583979496),
(63, 'syaaufy@gmail.com', 'WEohsMGvSSoQFwLCm4lT923mQNi4SqrxkjwaUDzVLmU=', 1592548950),
(64, 'Dummy@gmail.com', 'oY3JdrQ2ZFJw2G9PHCdjueWdSIuKmk+EPbjAH25SkGA=', 1592549022),
(65, 'maantan@gmail.com', 'sAA7OTqO8+6KMeG6O6xjReIoAld3mCuoZDM/T3z3uM8=', 1592549207),
(66, 'premium@gmail.com', '9gzsPvEKjxVfx5GuzCTn9OPf+tNPtbDUpg49rZuxpfc=', 1714560996);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `playgames`
--
ALTER TABLE `playgames`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `playgames`
--
ALTER TABLE `playgames`
  MODIFY `id_game` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
