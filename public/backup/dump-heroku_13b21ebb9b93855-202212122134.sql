-- MySQL dump 10.10
--
-- Host: us-cdbr-east-02.cleardb.com    Database: heroku_13b21ebb9b93855
-- ------------------------------------------------------
-- Server version	5.6.50-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bot_flag`
--

DROP TABLE IF EXISTS `bot_flag`;
CREATE TABLE `bot_flag` (
  `id` int(11) unsigned auto_increment,
  `user_id` varchar(100),
  `flag` varchar(100),
  `data` varchar(100),
  `created_at` datetime on update CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `bot_flag`
--


/*!40000 ALTER TABLE `bot_flag` DISABLE KEYS */;
LOCK TABLES `bot_flag` WRITE;
INSERT INTO `bot_flag` VALUES (4,'734229344','FLAG','','2021-11-21 12:38:03');
UNLOCK TABLES;
/*!40000 ALTER TABLE `bot_flag` ENABLE KEYS */;

--
-- Table structure for table `bot_log`
--

DROP TABLE IF EXISTS `bot_log`;
CREATE TABLE `bot_log` (
  `id` int(11) unsigned auto_increment,
  `message_id` varchar(100),
  `user_id` varchar(100),
  `first_name_user` varchar(100),
  `last_name_user` varchar(100),
  `message` text,
  `jenis_kirim` varchar(100),
  `created_at` datetime on update CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `bot_log`
--


/*!40000 ALTER TABLE `bot_log` DISABLE KEYS */;
LOCK TABLES `bot_log` WRITE;
INSERT INTO `bot_log` VALUES (204,'601','734229344','Nopezi','Saputra','tes1','terima','2021-11-20 08:48:29'),(214,'602','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 08:48:30'),(224,'601','734229344','Nopezi','Saputra','tes1','terima','2021-11-20 08:49:17'),(234,'604','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 08:49:17'),(244,'605','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 08:50:02'),(254,'606','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 08:50:03'),(264,'607','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 08:54:04'),(274,'608','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 08:54:05'),(284,'607','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 08:54:15'),(294,'610','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 08:54:16'),(304,'607','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 08:54:39'),(314,'612','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 08:54:40'),(324,'533','734229344','Nopezi','Saputra','nasi goreng','terima','2021-11-20 08:56:19'),(334,'613','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 08:56:19'),(344,'533','734229344','Nopezi','Saputra','nasi goreng','terima','2021-11-20 08:56:37'),(354,'614','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 08:56:38'),(364,'533','734229344','Nopezi','Saputra','nasi goreng1','terima','2021-11-20 09:03:18'),(374,'615','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 09:03:19'),(384,'533','734229344','Nopezi','Saputra','nasi goreng1','terima','2021-11-20 09:03:31'),(394,'616','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 09:03:32'),(404,'533','734229344','Nopezi','Saputra','nasi goreng1','terima','2021-11-20 09:03:37'),(414,'617','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 09:03:37'),(424,'618','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 09:20:11'),(434,'624','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 09:20:11'),(444,'619','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 09:20:16'),(454,'625','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 09:20:17'),(464,'623','734229344','Nopezi','Saputra','/selesai','terima','2021-11-20 09:20:20'),(474,'626','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-20 09:20:21'),(484,'627','734229344','Nopezi','Saputra','selamat malam','terima','2021-11-20 16:17:37'),(494,'628','734229344','laravel bot','nopezi1bot','Selamat Sore ada yang bisa kami bantu','kirim','2021-11-20 16:17:42'),(504,'629','734229344','Nopezi','Saputra','jadwal sholat','terima','2021-11-20 16:19:13'),(514,'631','734229344','laravel bot','nopezi1bot','Silahkan pilih salah satu kota di atas','kirim','2021-11-20 16:19:14'),(524,'632','734229344','Nopezi','Saputra','1','terima','2021-11-20 16:19:35'),(534,'633','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-20 16:19:35'),(544,'634','734229344','Nopezi','Saputra','hai','terima','2021-11-21 03:50:35'),(554,'635','734229344','laravel bot','nopezi1bot','hai selamat datang','kirim','2021-11-21 03:50:38'),(564,'636','734229344','Nopezi','Saputra','jadwal sholat','terima','2021-11-21 03:52:42'),(574,'638','734229344','laravel bot','nopezi1bot','Silahkan pilih salah satu kota di atas','kirim','2021-11-21 03:52:43'),(584,'639','734229344','Nopezi','Saputra','1','terima','2021-11-21 12:34:11'),(594,'640','734229344','laravel bot','nopezi1bot','jadwal sholat hari ini tanggal 2021-11-21 \n\nFajar : 4:02 am \nSubuh : 5:22 am \nZuhur : 11:38 am \nAsar : 2:00 pm \nMaghrib : 5:54 pm \nIsya : 7:05 pm','kirim','2021-11-21 12:34:12'),(604,'641','734229344','Nopezi','Saputra','selesai','terima','2021-11-21 12:35:05'),(614,'642','734229344','laravel bot','nopezi1bot','Mohon maaf, kami belum mengerti apa yang anda maksud','kirim','2021-11-21 12:35:06'),(624,'643','734229344','Nopezi','Saputra','/selesai','terima','2021-11-21 12:35:23'),(634,'644','734229344','laravel bot','nopezi1bot','Terima Kasih','kirim','2021-11-21 12:35:24'),(644,'645','734229344','Nopezi','Saputra','selamat malam','terima','2021-11-21 12:37:40'),(654,'646','734229344','laravel bot','nopezi1bot','hai selamat datang','kirim','2021-11-21 12:37:43'),(664,'647','734229344','Nopezi','Saputra','jadwal sholat','terima','2021-11-21 12:37:55'),(674,'649','734229344','laravel bot','nopezi1bot','Silahkan pilih salah satu kota di atas','kirim','2021-11-21 12:37:56'),(684,'650','734229344','Nopezi','Saputra','3','terima','2021-11-21 12:38:03'),(694,'651','734229344','laravel bot','nopezi1bot','jadwal sholat hari ini tanggal 2021-11-21 \n\nFajar : 4:02 am \nSubuh : 5:22 am \nZuhur : 11:38 am \nAsar : 2:00 pm \nMaghrib : 5:54 pm \nIsya : 7:05 pm','kirim','2021-11-21 12:38:03');
UNLOCK TABLES;
/*!40000 ALTER TABLE `bot_log` ENABLE KEYS */;

--
-- Table structure for table `jenis_posting`
--

DROP TABLE IF EXISTS `jenis_posting`;
CREATE TABLE `jenis_posting` (
  `id` int(11) auto_increment,
  `jenis` varchar(100),
  `icon` varchar(10),
  `created_at` datetime,
  `updated_at` datetime,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `jenis_posting`
--


/*!40000 ALTER TABLE `jenis_posting` DISABLE KEYS */;
LOCK TABLES `jenis_posting` WRITE;
INSERT INTO `jenis_posting` VALUES (1,'portofolio','article','2020-11-08 13:48:32','2020-11-08 09:08:20'),(3,'pendidikan','menu','2020-11-08 08:55:41','2020-11-08 08:55:41'),(4,'pekerjaan','ad_units','2020-11-08 09:11:57','2020-11-08 09:53:18');
UNLOCK TABLES;
/*!40000 ALTER TABLE `jenis_posting` ENABLE KEYS */;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(10) unsigned auto_increment,
  `nama_kategori` varchar(100),
  `created_at` timestamp,
  `updated_at` timestamp,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `kategori`
--


/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
LOCK TABLES `kategori` WRITE;
INSERT INTO `kategori` VALUES (1,'coba','2021-08-25 00:07:09',NULL);
UNLOCK TABLES;
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned,
  `migration` varchar(255),
  `batch` int(11),
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `migrations`
--


/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
LOCK TABLES `migrations` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id_pegawai` int(11),
  `nama_pegawai` varchar(50),
  `jabatan` varchar(20),
  `umur` int(11),
  `alamat` text,
  PRIMARY KEY (`id_pegawai`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `pegawai`
--


/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
LOCK TABLES `pegawai` WRITE;
INSERT INTO `pegawai` VALUES (1,'jono','Staf',26,'Jl Karangkajen1010'),(2,'dadang1','Anggota1',212,'solo testing dong'),(4,'Bambang','Lead',25,'Jl. suka lurus'),(5,'Salsabila Oktaviani','nemo',33,'Jr. Sumpah Pemuda No. 863, Banjar 61789, SumUt'),(6,'Ellis Ilsa Prastuti S.Pt','est',26,'Psr. Bakti No. 652, Pagar Alam 46257, Bengkulu'),(7,'Cici Ciaobella Andriani S.Farm','neque',27,'Gg. Agus Salim No. 412, Padangsidempuan 94624, SulTeng'),(8,'Silvia Palastri','officia',32,'Kpg. W.R. Supratman No. 833, Parepare 96712, SulUt'),(9,'Maras Situmorang M.M.','sed',32,'Jr. Jamika No. 706, Bitung 71419, KepR'),(10,'Kayla Farida','quas',35,'Gg. Yosodipuro No. 137, Pagar Alam 81440, SulTra'),(11,'Gasti Tiara Wastuti','et',34,'Jln. Ketandan No. 875, Makassar 41255, KepR'),(12,'Paramita Usamah','inventore',33,'Dk. Mulyadi No. 624, Mataram 50436, Jambi'),(13,'Gilang Cahyo Simbolon','ea',37,'Gg. Pasteur No. 655, Probolinggo 63366, KalTim'),(14,'Praba Simbolon S.E.I','omnis',30,'Jln. Bayan No. 353, Batam 31064, JaTeng'),(15,'Ivan Dimas Prakasa','aut',34,'Jln. Ahmad Dahlan No. 11, Semarang 35215, Lampung'),(16,'Kemal Irsad Hutasoit','magni',31,'Ki. Bak Air No. 490, Palu 53235, DKI'),(17,'Zelaya Nasyidah S.Sos','nihil',37,'Dk. Setia Budi No. 964, Administrasi Jakarta Utara 93200, KepR'),(18,'Gamani Kacung Sitompul S.Psi','et',32,'Jr. Ki Hajar Dewantara No. 456, Bitung 89613, SumUt'),(19,'Estiawan Saputra M.Farm','incidunt',25,'Dk. Baranangsiang No. 368, Payakumbuh 46108, KalTim'),(20,'Mustika Utama','omnis',31,'Ds. Madrasah No. 762, Padang 76506, KalTim'),(21,'Eva Uli Nuraini','consequuntur',38,'Jln. Babah No. 135, Payakumbuh 69150, NTB'),(22,'Bakiadi Santoso','minus',27,'Dk. Samanhudi No. 226, Solok 53508, PapBar'),(23,'Karna Nugroho','rem',27,'Gg. Orang No. 567, Sukabumi 83661, SulTeng'),(24,'Kasiyah Utami','velit',31,'Ds. Baranang Siang No. 612, Ambon 96296, Bali'),(25,'Hasna Nasyiah','quos',30,'Psr. Tambun No. 700, Pekanbaru 66046, SumSel'),(26,'Kezia Raina Sudiati S.Ked','accusantium',32,'Ds. Bagas Pati No. 832, Mojokerto 61630, SulTra'),(27,'Zamira Namaga','commodi',30,'Dk. Rajawali No. 348, Dumai 32982, BaBel'),(28,'Lega Jarwa Hidayat S.Ked','non',28,'Kpg. Wahidin Sudirohusodo No. 999, Mojokerto 90606, BaBel'),(29,'Heru Budi Sihombing','quae',38,'Ki. Moch. Ramdan No. 738, Langsa 79135, KepR'),(30,'Atmaja Prabowo','similique',33,'Gg. Bambon No. 433, Pangkal Pinang 55011, JaBar'),(31,'Laila Haryanti','ab',35,'Ki. Yos Sudarso No. 562, Pekalongan 86462, PapBar'),(32,'Farah Farida','pariatur',30,'Dk. Bata Putih No. 271, Tangerang 73920, DIY'),(33,'Vera Wijayanti','iure',32,'Dk. Barasak No. 962, Pagar Alam 77664, Maluku'),(34,'Cayadi Gaduh Gunawan S.Sos','reiciendis',26,'Ki. Gardujati No. 861, Pontianak 14688, Riau'),(35,'Latika Maida Maryati','autem',34,'Kpg. Basuki No. 886, Bekasi 64670, Bengkulu'),(36,'Gangsar Napitupulu S.Ked','sunt',35,'Ki. Baranang Siang No. 865, Batu 30454, Banten'),(37,'Atma Narpati','provident',27,'Psr. Yos Sudarso No. 191, Prabumulih 57215, SumUt'),(38,'Erik Reksa Mustofa','sunt',39,'Jln. Bank Dagang Negara No. 260, Probolinggo 13101, Riau'),(39,'Eman Hutasoit','ab',40,'Jln. Bhayangkara No. 570, Pasuruan 50393, KalTim'),(40,'Harjasa Situmorang','nesciunt',38,'Gg. Basuki Rahmat  No. 56, Administrasi Jakarta Selatan 17418, NTT'),(41,'Mutia Nova Hartati S.Psi','voluptas',39,'Jln. Ters. Buah Batu No. 47, Pariaman 93824, KalUt'),(42,'Samsul Prayoga','natus',30,'Jln. Flora No. 983, Sabang 48263, NTB'),(43,'Irnanto Rusman Hutapea S.Psi','mollitia',38,'Kpg. Tubagus Ismail No. 992, Administrasi Jakarta Barat 62356, KalUt'),(44,'Raden Zulkarnain','veniam',29,'Gg. Abdul. Muis No. 855, Langsa 17444, Bengkulu'),(45,'Ika Uyainah','occaecati',32,'Dk. Basket No. 387, Administrasi Jakarta Timur 59346, JaTeng'),(46,'Prima Salahudin','error',35,'Jr. Wahidin Sudirohusodo No. 657, Sibolga 80412, SulBar'),(47,'Hasna Wahyuni','fugit',27,'Psr. Labu No. 663, Gorontalo 75751, Banten'),(48,'Laksana Enteng Gunawan S.T.','qui',40,'Dk. Bakau Griya Utama No. 465, Langsa 10517, Maluku'),(49,'Eja Wijaya','a',40,'Jln. Tambak No. 84, Magelang 94591, BaBel'),(50,'Imam Saragih S.Psi','ex',26,'Kpg. Dahlia No. 497, Sorong 17463, KalTeng'),(51,'Sakura Safitri S.IP','voluptatem',34,'Kpg. Dr. Junjunan No. 515, Payakumbuh 62646, SulBar'),(52,'Okto Xanana Sihombing','quia',27,'Ds. Bawal No. 398, Palu 51881, Gorontalo'),(53,'Banawa Saptono','ut',37,'Gg. Orang No. 101, Ambon 46441, Riau');
UNLOCK TABLES;
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

--
-- Table structure for table `pesan_weeding`
--

DROP TABLE IF EXISTS `pesan_weeding`;
CREATE TABLE `pesan_weeding` (
  `id` int(11) auto_increment,
  `name` varchar(200),
  `no_wa` varchar(200),
  `pesan` text,
  `created_at` datetime DEFAULT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `pesan_weeding`
--


/*!40000 ALTER TABLE `pesan_weeding` DISABLE KEYS */;
LOCK TABLES `pesan_weeding` WRITE;
INSERT INTO `pesan_weeding` VALUES (334,'Sepupumuu yang cantiks dan gemoyyy','085896166430','Selamat berbahgiaaa woo caa ku dan ABG pezii ,semogaaa samawaaa dunia akhirat dan segeraa berikan keponakan² yg cantik dan gemoyyy','2022-08-14 04:56:37'),(344,'Ira nur azizah','082248548178','Selamat menempuh hidup baru, pezi dna istri. Smoga bahagia dan menjadi keluarga sakinah, mawaddah wa rahmah aamiin..','2022-08-20 14:28:12');
UNLOCK TABLES;
/*!40000 ALTER TABLE `pesan_weeding` ENABLE KEYS */;

--
-- Table structure for table `posting`
--

DROP TABLE IF EXISTS `posting`;
CREATE TABLE `posting` (
  `id` int(11) auto_increment,
  `id_kategori` int(100),
  `judul` varchar(100),
  `isi` text,
  `gambar` varchar(100),
  `created_at` datetime DEFAULT 'CURRENT_TIMESTAMP',
  `updated_at` datetime,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `posting`
--


/*!40000 ALTER TABLE `posting` DISABLE KEYS */;
LOCK TABLES `posting` WRITE;
INSERT INTO `posting` VALUES (24,3,'SDN 27 Penurunan, 2000 - 2007','Kota Bengkulu, Provinsi bengkulu','','2021-08-25 01:35:56','2021-08-25 01:35:56'),(34,3,'Mts Harsallakum, 2007 - 2010','Kota Bengkulu, Provinsi bengkulu','','2021-08-25 02:28:30','2021-08-25 02:28:30'),(44,3,'MA Nurul Hadid Cirebon, 2010 - 2013','Cirebon, Provinsi Jawa Barat','','2021-08-25 02:28:54','2021-08-25 02:28:54'),(54,3,'STMIK El Rahma Yogyakarta, 2014 - 2018','Provinsi Yogyakarta','','2021-08-25 02:29:25','2021-08-25 02:29:25'),(74,4,'CV Kahyangan Multimedia','Administrator & IT Support, 2017 - 2018','','2021-08-29 03:10:33','2021-08-29 03:46:00'),(94,4,'Tim Pengusaha Rumahan Shopee & Tokopedia','Marketing Online & CS, 2018','','2021-08-29 04:27:43',NULL),(104,4,'CV Sematics Yogyakarta','Web Developer, 2019','','2021-08-29 04:28:05',NULL),(124,4,'PT Botika Tekhnologi Indonesia','PT Botika Tekhnologi Indonesia','','2021-08-29 05:24:43',NULL),(134,4,'PT Sarihusada','Freelancer Web Developer, 2019','','2021-08-29 05:25:03',NULL),(144,4,'PT Indiga Nusa Digitama','Backend Developer, 2021','','2021-08-29 05:25:37',NULL),(154,4,'PT Medika Digital Nusantara','Backend Developer, 2019 - 2021','','2021-08-29 05:26:04','2022-03-15 06:29:05'),(164,1,'coba update','ujicoba update data',NULL,'2021-09-25 14:16:17',NULL),(174,4,'PT Bank Rakyat Indonesia, Tbk','Fullstack Developer, 2021 - Now','','2022-03-15 06:28:07','2022-03-15 06:30:51');
UNLOCK TABLES;
/*!40000 ALTER TABLE `posting` ENABLE KEYS */;

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil` (
  `id` int(11) auto_increment,
  `nama_lengkap` text,
  `tempat_lahir` varchar(100),
  `tanggal_lahir` date,
  `agama` varchar(50),
  `email` varchar(50),
  `no_hp` varchar(50),
  `hobi` varchar(50),
  `foto` text,
  `alamat` text,
  `deskripsi` text,
  `facebook` text,
  `instagram` text,
  `linkedin` text,
  `github` text,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `profil`
--


/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
LOCK TABLES `profil` WRITE;
INSERT INTO `profil` VALUES (1,'nopezi saputra pratama','Bengkulu','2020-11-28','islam','nopezisaputra@gmail.com','081943214722','menonton anime, menanam sayur','sayamorbis.jpeg','karangkajen yogyakarta','Greeting, my name is nopezi, graduated from STMIK El Rahma Yogyakarta majoring in informatics engineering. after that I worked in several startup companies using the php programming language. I have experience of programming for more than 4 years using PHP, javascript, mysql, postgres, oracle codeigniter, laravel, lumen programming languages, especially for the development of microservice rest api backends, experienced in developing whatsapp & telegram chatbots. have developed a web front end project using vue js with vuex state management along with nuxt and typescript, with golang as the backend rest api. have used supporting services such as elastic, kibana, minio and socket io',NULL,NULL,'https://www.linkedin.com/in/nopezi-saputra-pratama','https://github.com/nopezi');
UNLOCK TABLES;
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) auto_increment,
  `nama` varchar(100),
  `keterangan` text,
  `gambar` text,
  `link_web` text,
  `created_at` datetime DEFAULT 'CURRENT_TIMESTAMP',
  `updated_at` datetime,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB comment='berisi data data mengenai project apa saja yang sudah di kerjakan atau karya apa saja yang sudah di hasilkan' */;

--
-- Dumping data for table `project`
--


/*!40000 ALTER TABLE `project` DISABLE KEYS */;
LOCK TABLES `project` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
  `id` int(11) unsigned auto_increment,
  `nama_skill` varchar(200),
  `persentasi` int(11),
  `warna` varchar(100),
  `created_at` datetime on update CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `skill`
--


/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
LOCK TABLES `skill` WRITE;
INSERT INTO `skill` VALUES (4,'Bootstrap',90,'bg-info','2021-09-05 11:57:11'),(14,'PHP',80,'bg_info','2021-09-05 11:53:23'),(24,'Javascript',70,'bg-secondary','2021-09-05 12:01:09'),(34,'Golang',60,'bg-warning','2021-09-05 12:04:47'),(44,'Python',50,'bg-danger','2021-09-05 12:04:58'),(54,'Css',70,'bg-primary','2021-09-05 12:05:43'),(64,'Html',99,'bg-success','2021-09-05 12:06:11'),(74,'Codeigniter',80,'bg-info','2021-09-05 12:08:12'),(84,'Laravel',70,'bg-info','2021-09-05 12:08:28'),(94,'Lumen',70,'bg-info','2021-09-05 12:08:37'),(104,'Materialize Css',90,'bg-info','2021-09-05 12:09:05'),(114,'Echo Go',60,'bg-warning','2021-09-05 12:09:24'),(124,'Flask',40,'bg-danger','2021-09-05 12:09:44'),(134,'Django',30,'bg-danger','2021-09-05 12:09:52'),(144,'NodeJs',40,'bg-secondary','2021-09-05 12:10:31'),(154,'Jquery',68,'bg-secondary','2021-09-05 12:11:04'),(164,'VueJs',60,'bg-secondary','2021-09-05 12:11:20'),(174,'Mysql',80,'bg-primary','2021-09-05 12:13:05'),(184,'Oracle',70,'bg-warning','2021-09-05 12:13:18'),(194,'Postgres',65,'bg-danger','2021-09-05 12:13:36'),(204,'Firebase',50,'bg-info','2021-09-05 12:14:27'),(214,'Aws Server',65,'bg-secondary','2021-09-05 12:14:43'),(224,'Google cloud Server',65,'bg-success','2021-09-05 12:15:04'),(234,'Nuxt JS',65,'bg-warning','2022-08-13 13:13:17'),(244,'Tailwind Css',70,'bg-info','2022-08-13 13:13:43');
UNLOCK TABLES;
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned auto_increment,
  `name` varchar(255),
  `email` varchar(255),
  `email_verified_at` timestamp,
  `password` varchar(255),
  `remember_token` varchar(100),
  `created_at` timestamp,
  `updated_at` timestamp,
  PRIMARY KEY (`id`)
)/*! engine=InnoDB */;

--
-- Dumping data for table `users`
--


/*!40000 ALTER TABLE `users` DISABLE KEYS */;
LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'nopezi','snopezi@hotmail.com',NULL,'$2y$10$.csQpwFT/aUJK5oaTKEZA.5kZCzMdlBWQQGJ5YVKS1qUgYWR14vTa','rIm3tPtEbq0TfES4b3lQ8dGBc7KayuToUMYyHDp5gF4D9wGus4Fkyg5H2Zys','2021-03-21 09:55:37','2021-03-21 09:55:37');
UNLOCK TABLES;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'heroku_13b21ebb9b93855'
--
DELIMITER ;;
DELIMITER ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

