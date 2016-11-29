-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 03:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplecms`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(11) NOT NULL,
  `artikel_title` varchar(100) NOT NULL,
  `artikel_content` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `id_author` int(15) NOT NULL,
  `link` varchar(50) NOT NULL,
  `artikel_hit` int(11) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `file` varchar(60) NOT NULL,
  `time_record` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `artikel_title`, `artikel_content`, `author`, `id_author`, `link`, `artikel_hit`, `foto`, `file`, `time_record`) VALUES
(50, 'Jokowi Kagum Lihat Peserta Kontes Domba dan Kambin', '\r\nMantan Gubernur DKI Jakarta itu memiliki lima domba yang kini masih dipelihara. Dia membeli domba itu dengan harga Rp 3-4 juta per ekor.\r\n\r\n"Saya tadi masuk ke sini kaget sekali. Saya punya domba lima. Belinya Rp 3-4 juta. Saya pikir harga segitu mahal sekali, tapi begitu lihat di sini minder bagus semua," ujar Jokowi di Istana Kepresidenan, Bogor, Jawa Barat, Sabtu (27/8/2016).\r\n\r\nPria berperawakan kurus itu penasaran dengan harga kambing yang ikut dalam kontes. Saat ditanyakan, harganya mencapai Rp 50 juta.\r\n\r\n"Saya pikir punya saya sudah paling bagus. Tadinya mau saya bawa, tapi dikasih tahu jangan Pak lihat sendiri nanti. Benar saja. Nanti saya ajak petani lihat domba saya ke Istana," ujar mantan Wali Kota Solo itu.\r\n\r\n"Ini sangat cantik sekali. Saya rasa itu saja, saya kagum sekali dengan milik Indonesia seperti ini," kata Jokowi.\r\n\r\nDalam acara ini, turut hadir Kepala Kantor Staf Kepresidenan Teten Masduki, Menteri Pertanian Amran Sulaiman, Wali Kota Bogor Bima Arya\r\n\r\nKontes ini diperkirakan diikuti lebih kurang seribu orang peserta dari unsur-unsur Menteri Kabinet Kerja, Kepolisian RI, Komisi IV DPR RI, Gubernur Provinsi Jawa Barat, DPRD Provinsi Jawa Barat, para bupati/wali kota se-Provinsi Jawa Barat, DPRD Kota Bogor, peternak domba dan kambing, pemerintah pusat, serta Dinas Peternakan dan Kesehatan Hewan seluruh Indonesia.\r\n\r\nAcara ini diadakan untuk menunjukkan kualitas domba Indonesia, serta untuk meningkatkan komoditas di bidang peternakan domba.\r\n\r\nData Kementerian Pertanian menyebutkan, dalam kurun waktu 2011-2015 populasinya tumbuh rata-rata 5,8 persen per tahun. Pada 2015, populasi ternak domba dan kambing mencapai 36 juta ekor, dipelihara sederhana skala rumah tangga peternak di seluruh Indonesia.\r\n\r\nPertumbuhan populasi ternak diharapkan terus meningkat pada periode lima tahun berikutnya (2017-2021).\r\n\r\nMempertimbangkan aspek teknis, pemenuhan lokal dan perkembangan isu perdagangan global, diprediksi pada 2018 Indonesia akan mampu mengekspor domba dan kambing.\r\n\r\nPada tahun itu, populasi domba dan kambing yang siap diekspor sebanyak 800 ribu ekor. Diperkirakan ekspor semakin meningkat pada 2021 menjadi 1,5 juta ekor.\r\n\r\n', 'admin', 27, 'jokowi-kagum-lihat-peserta-kontes-domba-dan-kambin', 0, '57c11b853db37.jpg', '57c11b853dcf9.docx', '08/27/2016 12:44:52 pm'),
(51, 'Calon Haji Menggigil Saat Keluar Gate Bandara Jedd', 'Liputan6.com, Jeddah - Sejumlah jemaah haji menggigil saat keluar dari gate Bandara King Abdul Aziz Jeddah, Arab Saudi. Beberapa di antaranya menggigil dan muntah. Ada apa?\r\n\r\nSetelah ditanya petugas, ternyata para calon haji ini kedinginan lantaran nekat mandi dalam bandara. Mereka mandi untuk melakukan umrah wajib.\r\n\r\n"Saat mendarat di Jeddah, jemaah tidak perlu terburu-buru mandi di dalam bandara karena dingin," ujar Kepala Seksi Kesehatan Daerah Kerja Airport Jeddah-Madinah Muhammad Imran di Jeddah, Jumat (26/8/2016).\r\n\r\nOleh karena itu, dia meminta para jemaah untuk bersabar dan mandi di tempat yang telah disediakan Kementerian Agama.\r\n\r\n"Ada baiknya mereka mandi di luar gate, yaitu di ruang tunggu yang disediakan oleh Kemenag," kata Imran.\r\n\r\nDia pun meminta para calon haji tetap memperhatikan kesehatannya. Dia berharap jemaah langsung menghubungi petugas atau dokter ketika tidak enak badan.\r\n\r\nPara jemaah juga harus memperhatikan rekan serombongannya. Ini untuk meminimalisasi adanya jemaah berisiko tinggi (risti) yang mengalami disorientasi.\r\n\r\n"Ada beberapa jemaah yang linglung atau disorientasi, itu membuat munculnya penyakit tertentu. Karena itu baiknya jemaah tetap merapat, terutama yang berusia lanjut, harus didampingi," ujar dia.\r\n\r\nDehidrasi\r\n\r\nImran mengatakan jemaah rentan terkena dehidrasi ketika berada di Bandara Jeddah. Sebab, ruang tunggu bandara yang terbuka. Udaranya pun kering atau minim kelembaban. Kondisi ini meningkatkan potensi dehidrasi.\r\n\r\n"Di Jeddah dengan ruang tunggu terbuka, cukup panas. Kelembabannya cukup rendah. Ini juga bisa memicu dehidrasi. Namun begitu ini bisa ditangani, alhamdulillah jemaah kita sudah teredukasi," ujar Imran.\r\n\r\nSementara itu, ada empat jemaah yang telah dirujuk ke Klinik Kesehatan Haji Indonesia (KKHI) di Mekah. Sedangkan mereka yang dirawat di Rumah Sakit King Abdullah berjumlah dua jemaah.\r\n\r\n', 'admin', 27, 'calon-haji-menggigil-saat-keluar-gate-bandara-jedd', 0, '57c11bdff3853.jpg', '', '08/27/2016 12:48:24 pm'),
(52, ' HomeNewsPeristiwa Langgar Waktu Lontar Jumrah, Calon Haji Dideportasi?', 'Jemaah haji Indonesia disarankan melaksanakannya di luar jam tersebut, misalnya tengah malam hingga Subuh.\r\n\r\n"Hal ini sudah disampaikan kepada pembimbing ibadah, ketua rombongan, kepala sektor, dan kloter. Tapi pembimbing rombongan mau enggak dengan jadwal itu, karena alasan mengejar waktu yang afdhal (utama)," ucap Jaetul di Kantor Urusan Haji di Jeddah, Arab Saudi, Jumat, 26 Agustus 2016.\r\n\r\nJemaah haji Indonesia juga dilarang melontar jumrah pada 11 Zulhijah 1437 pukul 14.00-18.00 waktu Saudi. Jemaah boleh melontar jumrah sesudah waktu larangan tersebut, yaitu dari petang sampai malam.\r\n\r\n"Pada 12 Zulhijah, jemaah jangan melontar pukul 10.30-14.00 waktu Saudi. Disarankan bagi jemaah yang akan nafar awal (meninggalkan Mina tanggal 12 Zulhijah) melontar jumrah sebelum matahari tenggelam," ujar Jaetul.\r\n\r\nDia menegaskan, peraturan itu harus dipatuhi seluruh jemaah. Karena menurut dia, pemerintah Saudi tidak main-main untuk memberikan sanksi bagi yang melanggar.\r\n\r\n"Kalau media Saudi sebut jemaah yang melanggar akan dideportasi. Tapi kami belum mengetahui kepastiannya," ujar Jaetul.\r\n\r\n', 'admin', 27, 'homenewsperistiwa-langgar-waktu-lontar-jumrah-calo', 0, '57c11c95aea1b.jpg', '', '08/27/2016 12:51:56 pm'),
(53, 'JK: WNI Calon Jemaah Haji di Filipina Anggap Paspor Surat Jalan', '"Kan dia mana tahu, orang kampung itu, bahwa paspor, dia pikir surat jalan saja," kata JK di kantor Wakil Presiden, Jakarta, Jumat (26/8/2016).\r\n\r\nPenipuan yang dialami ratusan calon jemaah haji itu memang menjadi celah yang dimanfaatkan oknum tak bertanggung jawab. Biaya yang besar dengan waktu tunggu yang lama membuat calon jemaah haji tergiur dengan tawaran oknum travel.\r\n\r\n"Ini niatnya mau naik haji. Keluarkan biaya begitu besar hanya karena tidak ingin memenuhi 20 tahun, tipu lagi. Kan dia bilang, dibilangin untuk manasik haji, kan ditipu," imbuh JK.\r\n\r\nSementara terkait status kewarganegaraan para calon jemaah haji, JK menilai tidak perlu dipermasalahkan. Sebabnya tak lain karena mereka korban penipuan dan bukan keinginan diri sendiri.\r\n\r\n"Undang-undang mengatakan atas kemauan sendiri. Ini kan ditipu aja semua orang untuk naik haji. Tergantung niatnya, niatnya akan naik haji bukan untuk pindah kewarganegaraan," JK memungkas.\r\n\r\n', 'admin', 27, 'jk-wni-calon-jemaah-haji-di-filipina-anggap-paspor', 0, '57c11d13abe3b.jpg', '', '08/27/2016 12:54:09 pm'),
(54, 'Jemaah Haji Asal Embarkasi Jakarta-Bekasi Wafat di Tanah Suci', 'Dengan begitu, menurut data Sistem Komputerisasi Haji Terpadu (Siskohat) Kesehatan yang diterima Liputan6.com, Jumat (26/8/2016), jumlah jemaah haji yang wafat di Tanah Suci menjadi 25 orang.\r\n\r\nSelain Udju, jemaah haji lainnya yang wafat adalah Wahono Wilik bin Walijo Kartodimejo (65), dan Siti Fatonah binti Supangat Kasmungin (68). Ketiganya meninggal dunia pada Kamis 25 Agustus 2016.\r\n\r\nWahono Wilik wafat di Rumah Sakit Arab Saudi-Mekah pukul 11.57 waktu Arab Saudi. Sedangkan Siti Fathonah wafat di Rumah Sakit Arab Saudi-Madinah pada pukul 14.13 waktu Arab Saudi. Keduanya wafat karena cardiovascular diseases atau gangguan jantung dan pembuluh darah.\r\n\r\nWahono Wilik tergabung dalam kloter 2 Embarkasi Batam (BTH 02) bernomor paspor A9370551. Sedangkan Siti Fatonah tergabung dalam kloter 28 Embarkasi Surabaya (SUB 28) dengan nomor paspor B3922458.\r\n\r\nTotal ada 25 jemaah haji Indonesia yang wafat di Arab Saudi. Berikut data lengkap jemaah wafat hingga 26 Agustus 2016:\r\n\r\n1. Senen bin Dono Medjo (79), laki-laki, Kloter 007 Embarkasi Surabaya\r\n2. Siti Nurhayati binti Muhammad Saib (68), perempuan, Kloter 002 Embarkasi Aceh\r\n3. Martina binti Sabri Hasan (47), perempuan, Kloter 006 Embarkasi Batam\r\n4. Khadijah Nur binti Imam Nurdin (66), perempuan, Kloter 004 Embarkasi Aceh\r\n5. Dijem Djoyo Kromo (53), perempuan, Kloter 18 Embarkasi Solo\r\n\r\n6. Sarjono Bin Muhammad (60), laki-laki, Kloter 006 Embarkasi Batam\r\n7. Oom Eli Asik (66), perempuan, Kloter 003 Embarkasi Jakarta-Bekasi\r\n8. Nazar Bakhtiar bin Batiar (82), laki-laki, Kloter 001 Embarkasi Padang\r\n9. Juani bin Mubin Ben (61), laki-laki, Kloter 006 Embarkasi Aceh\r\n10. Asma binti Mian (78), perempuan, Kloter 001 Embarkasi Padang\r\n\r\n11. Tasniah binti Durakim Datem (73), Kloter 003 Embarkasi Padang\r\n12. Jamaludin bin Badri Kar (58), Kloter 005 Embarkasi Palembang\r\n13. Abdullah bin Umar Gamyah (68), Kloter 001 Embarkasi Aceh\r\n14. Rubiyah binti Mukiyat Muntari (71), Kloter 020 Embarkasi Surabaya\r\n15. Muhammad Tahir bin Abdul Razak (68), Kloter 011 Embarkasi Batam (BTH)\r\n\r\n16. Siti Maryam Ismail (60), Kloter 001 Embarkasi Solo (SOC) \r\n17. Din Azhari Nurina bin Sadid (73), Kloter 005 Embarkasi Padang (PDG)\r\n18. Misnawar bin Kasimo Kamujo (76), Kloter 015 Embarkasi Surabaya (SUB) \r\n19. Noorsi Fatimah binti M Saleh Mardiwiyono,  Kloter 009 Embarkasi Balikpapan (BPN)\r\n20. Mohammad Nasir bin Abdul Hamid (64), Kloter 010 Embarkasi Batam (BTH)\r\n\r\n21. Joko Pramono bin H Ali Purnomo (41), Kloter 026 Embarkasi Surabaya (SB)\r\n22. Manih binti Siyan Muhamad (71), Kloter 006 Embarkasi Jakarta-Pondok Gede (JKG)\r\n23. Udju Sumiati binti Marhali (62), Kloter 038 Embarkasi Jaakrta-Bekasi (JKS)\r\n24. Wahono WIlik bin Walijo Kartodimejo (65),  Kloter 002 Embarkasi Batam (BTH)\r\n25. Siti Fatonah binti Supangat Kasmungin (68),  Kloter 028 Embarkasi Surabaya (SUB).\r\n\r\nSedangkan jumlah jemaah Indonesia yang sudah tiba di Tanah Suci, hingga 26 Agustus 2016 pukul 08.00 WAS, tercatat 101.927 orang dari 249 kloter. Mereka terdiri dari 100.682 jemaah reguler dan 1.245 petugas kloter.\r\n\r\nSelain itu, 3.288 jemaah haji khusus juga sudah tiba di Arab Saudi. Mereka tergabung dalam 59 Penyelenggara Ibadah Haji Khusus (PIHK).\r\n\r\n', 'admin', 27, 'jemaah-haji-asal-embarkasi-jakarta-bekasi-wafat-di', 0, '57c11d702dfad.jpg', '', '08/27/2016 12:55:40 pm'),
(55, 'Yusril: Ahok Resmi Cagub DKI, Nusron Harus Mundur dari BNP2TKI', 'Liputan6.com, Jakarta - Jelang Pilkada DKI Jakarta 2017 mendatang, calon petahana Gubernur DKI Jakarta Basuki Tjahaja Purnama atau Ahok telah membentuk tim pemenangan. Posisi orang nomor satu di tim sukses itu dijabat Nusron Wahid.\r\n\r\nNusron saat ini masih aktif menjabat sebagai Kepala Badan Nasional Penempatan dan Perlindungan Tenaga Kerja Indonesia (BNP2TKI). Berbagai pihak pun mendesak Nusron melepaskan jabatannya dari Kepala BNP2TKI.\r\n\r\nTerkait hal itu, pakar hukum tata negara Yusril Ihza Mahendra memiliki pendapat lain. Menurut dia, tidak masalah jika Nusron yang masih aktif menjadi Kepala BNP2TKI menjadi Ketua Tim Pemenangan calon petahana Ahok.\r\n\r\n"Sebab Ahok kan belum resmi. Namun kalau sudah resmi, ya Pak Nusron harus melepaskan jabatannya," kata Yusril di Jakarta, Jumat (26/8/2016).\r\n\r\nKendati demikian, ia mengharapkan pejabat negara tidak ikut-ikutan menjadi tim sukses calon gubernur (cagub) dan calon wakil gubernur (cawagub) pada Pilkada DKI Jakarta.\r\n\r\nWakil Ketua Umum (Waketum) Partai Gerindra Arief Poyuono sebelumnya juga meminta Nusron Wahid mundur dari jabatannya. Sebab, Nusron kini menjabat sebagai Ketua Tim Pemenangan Ahok di Pilkada DKI Jakarta.\r\n\r\n"Begini ya keberadaan Nusron sebagai Ketua Tim Pemenangan Ahok sebaiknya dia mengundurkan diri saja," kata  Arief Poyuono saat dihubungi, Jumat.\r\n\r\nArief meminta Presiden Joko Widodo (Jokowi) segera memberhentikan Nusron Wahid. Menurutnya, Nusron digaji negara sebagai Kepala BNP2TKI untuk mengurus TKI bukan mengurusi Ahok.\r\n\r\n"Bukan untuk mengurus Pilkada DKI Jakarta," ujar dia.\r\n\r\nArief mengaku khawatir adanya rangkap jabatan yang disandang Nusron Wahid membuat kinerja BNP2TKI tidak optimal. Jika itu terjadi, imbuh dia, korbannya adalah para TKI di luar negeri.\r\n\r\n', 'admin', 27, 'yusril-ahok-resmi-cagub-dki-nusron-harus-mundur-da', 0, '57c11dcc9bec2.jpg', '', '08/27/2016 12:57:08 pm'),
(56, 'Meski Dapat Kucuran Dana Baru, Go-Jek Masih Fokus di Indonesia', 'Liputan6.com, Jakarta - Chief Executive Officer (CEO) Go-Jek, Nadiem Makarim, mengaku masih menjadikan Indonesia sebagai fokus bisnisnya, meski baru saja mendapatkan kucuran dana segar senilai US$ 550 atau setara Rp 7,2 triliun, baru-baru ini. Menurut Nadiem, masih banyak yang harus dilakukan Go-Jek di dalam negeri.\r\n\r\n"Selama ini fokus kami di Indonesia adalah untuk mengembangkan berbagai produk, karena kami ingin menjadi rumah digital bagi masyarakat Indonesia, terutama yang tinggal di kota-kota besar," ujar Nadiem saat ditemui di kawasan Jakarta, Kamis (25/8/2016).\r\n\r\nWalau masih fokus di Indonesia, bukan berarti layanan transportasi online tersebut tidak memikirkan rencana ekspansi ke luar negeri. Terlebih lagi layanan serupa yang ada di Indonesia seperti Grab Bike dan UberMotor, sebetulnya merupakan perluasan sayap dari luar Indonesia.\r\n\r\nDiungkapkan Nadiem, Go-Jek saat ini sudah mulai memikirkan strategi ekspansi ke luar negeri. Namun ia enggan memerinci lebih lanjut, mengingat fokus Go-Jek masih di Indonesia. \r\n\r\nPasar transportasi online Indonesia sendiri diprediksi akan makin tumbuh, bahkan bisa menguasai 43 persen pangsa pasar di Asia Tenggara pada 2025. Pasar tumbuh 22 persen per tahun dari US$ 800 pada 2015 menjadi US$ 5,6 miliar pada 2025.\r\n\r\nBerbekal modal baru yang dimilikinya, Go-Jek yakin posisinya akan makin kuat di pasar transportasi online. Nadiem berharap, bisnis Go-Jek yang kian besar dapat memberikan lebih banyak kontribusi bagi kehidupan masyarakat Indonesia. "Ini adalah salah satu kebahagiaan kami ketika mendapatkan pendanaan besar ini, yaitu akan lebih banyak orang lagi yang bisa kita bantu," tutur Nadiem.\r\n\r\nGo-Jek sendiri tidak hanya menyediakan jasa ojek online (Go-Ride, red.), tetapi juga memiliki sejumlah layanan lain seperti Go-Food, Go-Mart, Go-Send, Go-Car, dan Go-Box. Baru-baru ini Go-Jek mendapatkan modal baru sekira Rp 7,2 triliun dari konsorsium perusahaan investasi global, yang di antaranya terdiri dari KKR, Warburg Pincus, Farallon Capital, Capital Group Private Markets, pemegang saham Go-Jek saat ini, serta sejumlah investor internasional lainnya.\r\n', 'admin', 27, 'meski-dapat-kucuran-dana-baru-go-jek-masih-fokus-d', 1, '57c12d35a1188.jpg', '', '08/27/2016 02:01:57 pm');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `komen` text NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `slug`, `komen`, `author`) VALUES
(1, '1', '<p>Tes satu dua</p>', 'Al Riefqy'),
(2, '1', 'Mantap', 'Jack'),
(3, '18', 'apa njo?', 'Jack'),
(4, '18', 'MAnggu', 'Jack'),
(5, '18', 'Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.', 'Admin'),
(6, '20', 'Perfect', 'Admin'),
(7, '22', 'Tesss', 'nanang'),
(8, '43', 'zzxaas', 'Al Riefqy Dasmito'),
(9, '40', 'Semangat', 'Al Riefqy Dasmito'),
(10, '43', 'Nana', 'Nanang'),
(11, '43', 'nana', 'Nurmaratu Thahirah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` longtext NOT NULL,
  `college` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `profil` longtext NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `name`, `college`, `foto`, `profil`, `level`) VALUES
(27, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'asas', '', '', 'admin'),
(28, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'asas', '', '', 'user'),
(29, 'rifki', '2a5c4c5a5ba1c332279685ddec507cd9', 'rifki', 'rifki', '', '', 'user'),
(30, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'asa', '', '', 'admin'),
(31, 'rifki', '2a5c4c5a5ba1c332279685ddec507cd9', 'rifki', 'Asa', '', '', 'user'),
(32, 'ito', 'eea4b00254e083eb7d82697cd6c48d6c', 'ito', 'ito', '', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
