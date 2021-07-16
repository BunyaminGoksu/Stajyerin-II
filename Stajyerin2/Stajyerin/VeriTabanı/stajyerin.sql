-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 16 Tem 2021, 10:40:53
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stajyerin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakim` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`, `ayar_bakim`) VALUES
(0, '', 'Stajyerin', 'Stajyerlerin çalıştığı çirketleri hakkındaki yorumları', 'Stajyer,Üniversite,Lise,Staj yeri,Yorum', 'Bunyamin Goksu', '02122121212', '02122121212', '02122121212', 'goksu-bunyamin@hotmail.com', 'Beşiktaş', 'İstanbul', 'bla bla', '7x24', 'ayar_maps', 'ayar_analystic', 'ayar_zopim', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'mail.alanadiniz.com', 'user', 'password', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'Stajyerin', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', ' Şirketimizin vizyonu, sürekli büyüyen bir müşteri portföyü oluşturarak, müşterilerimize verdiğimiz güvenin sürekliliğini sağlayıp, kazandığımızı tamamen işimizi geliştirmeye harcayarak ve kalite politikamızdan hiçbir koşul altında vazgeçmeden sektöre öncülük eden teknoloji altyapısı ve küresel ortakları ile Türkiye’nin en büyük Yazılım şirketlerinden biri olmak.', ' Koşulsuz Müşteri Memnuniyeti odaklı hizmet anlayışı ve etik kuralları ile Kurumlara ve bireylere; kullanım kolaylığı ön planda ileri teknoloji alt yapımızla, müşteri odaklı, yaygın ve kaliteli hizmet verirken, müşteri sadakati ve memnuniyeti, güvenlik, kararlılık ve hizmet açısından sektöre öncülük yapmak.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_resim` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_unvan` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_durum` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_gsm`, `kullanici_password`, `kullanici_adsoyad`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_unvan`, `kullanici_yetki`, `kullanici_durum`) VALUES
(2, '2021-05-05 16:33:44', '', '12345678901', 'Bünyamin', 'admin@admin.com', '05349199437', '12345678', 'Bünyamin Göksu', '', 'İstanbul', 'Fulya', '', '5', 0),
(9, '2021-05-10 21:33:16', '', '', '', 'goksu-bunyamin@hotmail.com', '12345678', '25d55ad283aa400af464c76d713c07ad', 'Bünyamin Göksu', '', '', '', '', '1', 1),
(12, '2021-05-28 21:24:56', '', '', '', 'ygoksu@outlook.com', '012389854', '25d55ad283aa400af464c76d713c07ad', 'Yusuf Göksu', '', '', '', '', '1', 1),
(13, '2021-05-28 21:56:20', '', '', '', 'bunyamingoksu@hotmail.com', '', 'fcea920f7412b5da7be0cf42b8c93759', 'Bünyamin Göksu', '', '', '', '', '1', 1),
(17, '2021-06-04 23:13:32', '', '', '', 'ilayda@hotmail.com', '6196562', '25d55ad283aa400af464c76d713c07ad', 'İlayda Ayaz', '', '', '', '', '1', 1),
(18, '2021-06-07 16:12:25', '', '', '', 'abdullahdag34@outlook.com', '05336913431', '25d55ad283aa400af464c76d713c07ad', 'Abdullah Dağ', '', '', '', '', '1', 1),
(19, '2021-06-07 16:17:45', '', '', '', 'engin_selin_123@hotmail.com', '05523418286', '25d55ad283aa400af464c76d713c07ad', 'Engin Özdemir', '', '', '', '', '1', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_ust` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `menu_sira` int(2) NOT NULL,
  `menu_durum` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `menu_seourl` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_ust`, `menu_ad`, `menu_detay`, `menu_url`, `menu_sira`, `menu_durum`, `menu_seourl`) VALUES
(1, '', 'İletişim', '<p>jkbllm&ouml;şi</p>\r\n', 'iletisim.php', 2, '0', 'iletisim'),
(2, '', 'Hakkımızda', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'hakkimizda.php', 1, '1', 'hakkimizda'),
(8, '', 'Yorum Yap', '', 'yorum-yap.php', 4, '1', 'yorum-yap'),
(9, '', 'Yorumlar', '', 'yorumlar.php', 4, '1', 'yorumlar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sirketyorum`
--

CREATE TABLE `sirketyorum` (
  `sirketyorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sirketyorum_sirketad` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_departman` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_sure` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_il` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_ilce` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `sirketyorum_durum` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sirketyorum`
--

INSERT INTO `sirketyorum` (`sirketyorum_id`, `kullanici_id`, `kullanici_mail`, `kullanici_adsoyad`, `sirketyorum_zaman`, `sirketyorum_sirketad`, `sirketyorum_departman`, `sirketyorum_sure`, `sirketyorum_il`, `sirketyorum_ilce`, `sirketyorum_detay`, `sirketyorum_durum`) VALUES
(6, 9, 'goksu-bunyamin@hotmail.com', 'Yusuf Göksu', '2021-05-30 17:29:47', 'Namık Kemal Universitesi', 'Muhasebe', '3ay', 'Tekirdağ', 'Çorlu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1'),
(11, 12, 'ygoksu@outlook.com', 'Abdullah Dağ', '2021-05-30 19:40:10', 'Türk Hava Yolları', 'Teknik Destek', '3 ay', 'İstanbul ', 'Florya ', 'Why do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '1'),
(12, 12, 'ygoksu@outlook.com', 'Çağlar Arslan', '2021-05-30 19:44:56', 'Yapıkredi', 'Yazılım', '1,5 Ay', 'İstanbul', 'Kağıthane', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu vestibulum dui, a gravida leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id euismod felis. Cras egestas eros nec libero ornare, sit amet molestie elit vestibulum. Pellentesque lobortis, erat ac iaculis convallis, urna dolor blandit felis, in egestas urna eros a metus. Pellentesque ac justo sit amet nulla molestie elementum. Pellentesque ut ligula pharetra, vulputate massa nec, sodales odio.\r\n\r\nIn sollicitudin tortor eget urna venenatis, eget tempus nisl luctus. Duis efficitur ut quam nec ullamcorper. Nam pulvinar elementum eros, id tincidunt sem consequat ut. Phasellus sed eleifend urna. Donec ac tristique tellus. Suspendisse purus nisi, facilisis id nisl id, malesuada varius ligula. Proin vitae justo vel magna finibus hendrerit a vitae magna. Morbi justo enim, vehicula non nulla sed, commodo suscipit arcu.\r\n\r\nUt metus neque, vehicula dapibus condimentum nec, luctus pretium urna. Nam id lacinia nisi. Phasellus rutrum feugiat maximus. Aenean scelerisque mi id tortor rutrum, nec eleifend ligula dapibus. Pellentesque malesuada luctus elementum. Etiam viverra malesuada velit, et ultrices libero rhoncus ac. Sed dignissim lectus vel purus venenatis, in vestibulum velit ullamcorper. Sed lobortis felis sed mattis cursus.\r\n\r\nEtiam dictum dolor eu enim vulputate, ut pulvinar arcu tempus. Donec interdum sapien non ex luctus, at sagittis nulla dictum. Duis convallis leo in diam pulvinar, at porta nibh euismod. Nullam auctor sed lorem et laoreet. Cras eget libero nisl. Pellentesque posuere fringilla sem et auctor. Etiam semper, libero eget bibendum molestie, elit neque venenatis massa, interdum egestas dui nunc ut odio. Etiam sem sem, auctor eu semper eu, ultrices ut nunc.', '1'),
(13, 12, 'ygoksu@outlook.com', 'Eren Öztürk', '2021-05-30 19:46:43', 'AGU Avukat', 'Stajyer Avukat', '6 ay', 'Ankarra', 'Mamak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu vestibulum dui, a gravida leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id euismod felis. Cras egestas eros nec libero ornare, sit amet molestie elit vestibulum. Pellentesque lobortis, erat ac iaculis convallis, urna dolor blandit felis, in egestas urna eros a metus. Pellentesque ac justo sit amet nulla molestie elementum. Pellentesque ut ligula pharetra, vulputate massa nec, sodales odio.\r\n\r\nIn sollicitudin tortor eget urna venenatis, eget tempus nisl luctus. Duis efficitur ut quam nec ullamcorper. Nam pulvinar elementum eros, id tincidunt sem consequat ut. Phasellus sed eleifend urna. Donec ac tristique tellus. Suspendisse purus nisi, facilisis id nisl id, malesuada varius ligula. Proin vitae justo vel magna finibus hendrerit a vitae magna. Morbi justo enim, vehicula non nulla sed, commodo suscipit arcu.\r\n\r\nUt metus neque, vehicula dapibus condimentum nec, luctus pretium urna. Nam id lacinia nisi. Phasellus rutrum feugiat maximus. Aenean scelerisque mi id tortor rutrum, nec eleifend ligula dapibus. Pellentesque malesuada luctus elementum. Etiam viverra malesuada velit, et ultrices libero rhoncus ac. Sed dignissim lectus vel purus venenatis, in vestibulum velit ullamcorper. Sed lobortis felis sed mattis cursus.\r\n\r\nEtiam dictum dolor eu enim vulputate, ut pulvinar arcu tempus. Donec interdum sapien non ex luctus, at sagittis nulla dictum. Duis convallis leo in diam pulvinar, at porta nibh euismod. Nullam auctor sed lorem et laoreet. Cras eget libero nisl. Pellentesque posuere fringilla sem et auctor. Etiam semper, libero eget bibendum molestie, elit neque venenatis massa, interdum egestas dui nunc ut odio. Etiam sem sem, auctor eu semper eu, ultrices ut nunc.', '1'),
(14, 12, 'ygoksu@outlook.com', 'Orhan Gökçe', '2021-05-30 19:47:06', 'Garanti', 'Para', '4 ay', 'İstanbul', 'Gayrettepe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu vestibulum dui, a gravida leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id euismod felis. Cras egestas eros nec libero ornare, sit amet molestie elit vestibulum. Pellentesque lobortis, erat ac iaculis convallis, urna dolor blandit felis, in egestas urna eros a metus. Pellentesque ac justo sit amet nulla molestie elementum. Pellentesque ut ligula pharetra, vulputate massa nec, sodales odio.\r\n\r\nIn sollicitudin tortor eget urna venenatis, eget tempus nisl luctus. Duis efficitur ut quam nec ullamcorper. Nam pulvinar elementum eros, id tincidunt sem consequat ut. Phasellus sed eleifend urna. Donec ac tristique tellus. Suspendisse purus nisi, facilisis id nisl id, malesuada varius ligula. Proin vitae justo vel magna finibus hendrerit a vitae magna. Morbi justo enim, vehicula non nulla sed, commodo suscipit arcu.\r\n\r\nUt metus neque, vehicula dapibus condimentum nec, luctus pretium urna. Nam id lacinia nisi. Phasellus rutrum feugiat maximus. Aenean scelerisque mi id tortor rutrum, nec eleifend ligula dapibus. Pellentesque malesuada luctus elementum. Etiam viverra malesuada velit, et ultrices libero rhoncus ac. Sed dignissim lectus vel purus venenatis, in vestibulum velit ullamcorper. Sed lobortis felis sed mattis cursus.\r\n\r\nEtiam dictum dolor eu enim vulputate, ut pulvinar arcu tempus. Donec interdum sapien non ex luctus, at sagittis nulla dictum. Duis convallis leo in diam pulvinar, at porta nibh euismod. Nullam auctor sed lorem et laoreet. Cras eget libero nisl. Pellentesque posuere fringilla sem et auctor. Etiam semper, libero eget bibendum molestie, elit neque venenatis massa, interdum egestas dui nunc ut odio. Etiam sem sem, auctor eu semper eu, ultrices ut nunc.', '1'),
(18, 17, 'ilayda@hotmail.com', 'İlayda Ayaz', '2021-06-04 20:15:03', 'Uniteks', 'Tasarımcı', '3 ay', 'İstanbul', 'yenibosna', '\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum\r\n\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"Acıyı seven, arayan ve ona sahip olmak isteyen hiç kimse yoktur. Nedeni basit. Çünkü o acıdır...\"\r\nLorem Ipsum Nedir?\r\nLorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.\r\n\r\nNeden Kullanırız?\r\nYinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında \'lorem ipsum\' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.\r\n\r\n\r\nNereden Gelir?\r\nYaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.\r\n\r\n1500\'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.\r\n\r\nNereden Bulabilirim?\r\nLorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir. İnternet\'teki tüm Lorem Ipsum üreteçleri önceden belirlenmiş metin bloklarını yineler. Bu da, bu üreteci İnternet üzerindeki gerçek Lorem Ipsum üreteci yapar. Bu üreteç, 200\'den fazla Latince sözcük ve onlara ait cümle yapılarını içeren bir sözlük kullanır. Bu nedenle, üretilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan sözcüklerden uzaktır.\r\n\r\n5\r\n	paragraf\r\n	sözcük\r\n	karakter\r\n	liste\r\n	\'Lorem ipsum dolor sit amet...\' ile başlat\r\n\r\nÇeviriler: Bu sitenin yabancı bir dile çevrilmesine yardımcı olabilir misiniz? Eğer yardımcı olabilecekseniz, lütfen bize eposta ile ulaşın.\r\nÜç farklı renk ve çeşitli standart büyüklüklerde sahte reklam şeritlerinden oluşan bir sete artık buradan erişebilirsiniz.\r\nBannersBannersBanners\r\nBağış Yapın: Bu siteyi düzenli olarak kullanıyorsanız ve sitenin İnternet\'teki varlığını sürdürmesine yardımcı olmak istiyorsanız, lütfen küçük bir bağışta bulunarak barındırma ve bant genişliği ücretlerini ödememize yardımcı olun. Belirli bir asgari bağış miktarı yoktur, her miktarda bağış kabul edilecektir. PayPal üzerinden bağış yapmak için buraya tıklayın. Desteğiniz için teşekkür ederiz.\r\nDonate Bitcoin: 16UQLq1HZ3CNwhvgrarV6pMoA2CDjb4tyF\r\nNodeJS Python Interface GTK Lipsum Rails .NET Groovy\r\n1500\'lerden beri kullanılan standart Lorem Ipsum pasajı\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\r\n\r\nM.Ö. 45 tarihinde Çiçero tarafından yazılan \"de Finibus Bonorum et Malorum\"un 1.10.32 sayılı bölümü\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\r\n1914 tarihli H. Rackham Çevirisi\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"\r\n\r\nM.Ö. 45 tarihinde Çiçero tarafından yazılan \"de Finibus Bonorum et Malorum\"un 1.10.33 sayılı bölümü\r\n\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"\r\n\r\n1914 tarihli H. Rackham Çevirisi\r\n\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"\r\n\r\nTürkçe - Cem Karahanoglu\r\nhelp@lipsum.com\r\nPrivacy Policy\r\n', '1'),
(22, 9, 'goksu-bunyamin@hotmail.com', 'Bünyamin Göksu', '2021-05-29 17:01:00', 'GURU Yazılım', 'Yazılım', '3 ay', 'İstanbul', 'Şirinevler', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1'),
(23, 18, 'abdullahdag34@outlook.com', 'Abdullah Dağ', '2021-06-07 13:14:44', 'Goxu engineering', 'Muhasebe', '6 ay', 'İstanbul', 'Florya', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nTavsiye ederim', '1'),
(24, 19, 'engin_selin_123@hotmail.com', 'Engin Özdemir', '2021-06-07 13:19:51', 'Fenka TEKSTİL A.Ş', 'Depo', '1,5 Yıl', 'İstanbul', 'Şişli', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kullanici_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `yorum_onay` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `sirketyorum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `kullanici_id`, `kullanici_mail`, `kullanici_adsoyad`, `yorum_detay`, `yorum_zaman`, `yorum_onay`, `sirketyorum_id`) VALUES
(2, 9, '', 'Bünyamin Göksu', 'adsagdhfdhsfdsgfdhgjf', '2021-06-01 23:34:42', '1', 13),
(3, 9, '', 'Bünyamin Göksu', 'adsagdhfdhsfdsgfdhgjfadsfdghfdhgjasfgasldgansdlgjaskdgjlasdghjalsdghalsdjghasdgkahsdgkasjdgşlasdgjasdg', '2021-06-01 23:35:09', '1', 13),
(4, 9, '', 'Bünyamin Göksu', 'adsfdgsgdfgsdf', '2021-06-01 23:35:39', '1', 6),
(5, 9, '', 'Bünyamin Göksu', 'fdsfghdfjhgk', '2021-06-01 23:35:58', '1', 2),
(6, 9, '', 'Bünyamin Göksu', 'adsgfdhjghkl', '2021-06-01 23:41:36', '1', 13),
(7, 12, '', 'Yusuf Göksu', 'THY\r\n', '2021-06-02 22:26:13', '1', 13),
(8, 12, '', 'Yusuf Göksu', 'thy', '2021-06-02 22:30:23', '1', 11),
(9, 12, '', 'Yusuf Göksu', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '2021-06-02 23:10:31', '1', 12),
(10, 9, '', 'Bünyamin Göksu', 'Bende unitekse gitmeyi düşünüyodum ama artıkın gitmicem çünkü senin tecrübelerine bakarak kötü bi yer olduğunu düşündüm....', '2021-06-04 23:17:57', '1', 18);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `sirketyorum`
--
ALTER TABLE `sirketyorum`
  ADD PRIMARY KEY (`sirketyorum_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `sirketyorum`
--
ALTER TABLE `sirketyorum`
  MODIFY `sirketyorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
