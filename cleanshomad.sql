-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 05:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cleanshomad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `foto`, `email`, `password`, `hak_akses`, `status`) VALUES
(2, 'Administrator', NULL, 'admin@shomad.co.id', '25ed1bcb423b0b7200f485fc5ff71c8e', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id` int(11) NOT NULL,
  `agenda` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(300) DEFAULT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(20) NOT NULL,
  `jam_selesai` varchar(20) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `agenda`, `deskripsi`, `gambar`, `tempat`, `tanggal`, `jam_mulai`, `jam_selesai`, `status`) VALUES
(1, 'Sosialisasi dan pendidikan pemili disabilitas ', 'Mamben Baru atau Desa Mamben Baru merupakan salah satu desa yang terletak di Kecamatan Wanasaba, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia. Desa ini memiliki kodepos 83658. Desa ini terletak di bagian selatan Kecamatan Wanasaba yang terkenal dengan wisata pertanian dan souvenir tikar gulung yang terbuat dari daun pandan. ', '', 'SLMN Sumbawa', '2019-11-13', '00:12', '00:12', '1'),
(2, 'Buka Bersama Alumni dan Calon Wisudawan', 'Mamben Baru atau Desa Mamben Baru merupakan salah satu desa yang terletak di Kecamatan Wanasaba, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia. Desa ini memiliki kodepos 83658. Desa ini terletak di bagian selatan Kecamatan Wanasaba yang terkenal dengan wisata pertanian dan souvenir tikar gulung yang terbuat dari daun pandan. ', '', 'taman mangga', '2019-11-14', '00:12', '00:12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `thumb` varchar(200) NOT NULL,
  `date` char(10) NOT NULL,
  `date_edit` char(10) DEFAULT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `isi`, `id_kategori`, `penulis`, `status`, `thumb`, `date`, `date_edit`, `hits`) VALUES
(2, 'Jauhi Hidup Bermegah-megahan', 'Saudaraku, ketika mempelajari sejarah kita banyak menemukan kisah-kisah manusia yang hidupnya sibuk dalam kemegahan dunia. Perjalanannya adalah perjalanan mengumpulkan harta. Seolah harta yang dimiliki tidak pernah cukup. Namun ironisnya, kebanyakan dari kisah-kisah seperti itu berakhir dengan kehancuran. Salah satu kisah yang paling termasyhur adalah kisah Qarun.', '<p style="text-align:start">Saudaraku, ketika mempelajari sejarah kita banyak menemukan kisah-kisah manusia yang hidupnya sibuk dalam kemegahan dunia. Perjalanannya adalah perjalanan mengumpulkan harta. Seolah harta yang dimiliki tidak pernah cukup. Namun ironisnya, kebanyakan dari kisah-kisah seperti itu berakhir dengan kehancuran. Salah satu kisah yang paling termasyhur adalah kisah Qarun.</p>\r\n\r\n<p style="text-align:start">Di dalam surah al-Qashash [28] ayat 76-82, kisah Qarun dijelaskan secara terang-benderang. Qarun adalah sepupu dari Nabi Musa, yang diberikan karunia oleh Allah SWT berupa harta yang berlimpah-ruah banyaknya. Tetapi, dengan harta itu ia bersikap takabur dan memamerkan kekayaannya. Sikapnya itu bahkan hampir-hampir saja mencelakakan umat Bani Israil lainnya, dikarenakan mereka merasa iri terhadap Qarun. Sebelum akhirnya, ia binasa disebabkan sikap yang mengkufuri nikmat Allah SWT.</p>\r\n\r\n<p style="text-align:start">Sungguh, Allah tiada pernah melarang hamba-hamba-Nya untuk bekerja guna mendapatkan harta. Malah, justru giat bekerja adalah bagian dari bentuk kepatuhan terhadap-Nya. Bekerja dengan giat juga salah satu bentuk menghidupkan sunnah Rasul-Nya. Bukankah Rasulullah saw juga bekerja, bahkan sejak usianya sangat belia.</p>\r\n\r\n<p style="text-align:start">Allah menciptakan alam raya dengan segala kekayaannya ini adalah untuk digunakan dan dimanfaatkan oleh manusia. Allah berfirman,&nbsp;<em>&ldquo;Dialah yang menjadikan bumi sebagai hamparan bagimu dan langit sebagai atap, dan Dia menurunkan air (hujan) dari langit, lalu Dia menghasilkan dengan hujan itu segala buah-buahan sebagai rezeki untukmu; karena itu janganlah kamu mengadakan sekutu-sekutu bagi Allah, padahal kamu mengetahui.&rdquo;&nbsp;</em>(QS. al-Baqarah [2]: 22)</p>\r\n\r\n<p style="text-align:start">Jelas sudah, kekayaan alam ini memang diperuntukkan bagi manusia. Allah tidaklah melarang hamba-Nya memiliki bagian dari kekayaan yang berlimpah itu. Namun, yang dilarang oleh-Nya adalah persaingan tidak sehat dalam mendapatkan kekayaan dunia. Yang dilarang oleh-Nya adalah bersikap sombong dan kufur atas kekayaannya.</p>\r\n\r\n<p style="text-align:start">Saat ini, bukan hal asing ketika manusia berlomba-lomba mengumpulkan harta kekayaan, kemudian memamerkannya dengan harapan mendapat sanjungan, pujian dan pengakuan dirinya adalah orang yang kaya raya. Bukan hal asing pula ketika manusia menghalalkan berbagai macam cara hanya demi memiliki harta. Ada yang korupsi, ada yang mencuri, memalsukan uang hingga mencoba-coba ilmu hitam.</p>\r\n\r\n<p style="text-align:start">Jika memang yang diharapkan dari limpahan kekayaan itu adalah pujian orang, apa artinya pujian orang. Setelah orang lain memuji kita, maka itu sama sekali tak memberi pengaruh apa-apa. Jika memang yang diharapkan dari limpahan kekayaan itu adalah rasa puas dan bahagia, maka justru semakin berlimpah kekayaan, semakin bertambah pula kegelisahan. Gelisah harta itu dicuri orang, gelisah harta itu berkurang dan lain sebagainya.</p>\r\n\r\n<p style="text-align:start">Saudaraku, marilah kita renungkan pesan Allah SWT yang terkandung dalam surah at-Takatsur ini,&nbsp;<em>&ldquo;</em><em>Bermegah-megahan telah melalaikan kamu</em><em>. S</em><em>ampai kamu masuk ke dalam kubur.</em><em>&nbsp; J</em><em>anganlah begitu, kelak kamu akan mengetahui (akibat perbuatanmu itu)</em><em>. D</em><em>an janganlah begitu, kelak kamu akan mengetahui.</em><em>&nbsp;J</em><em>anganlah begitu, jika kamu mengetahui dengan pengetahuan yang yakin</em><em>. N</em><em>iscaya kamu benar-benar akan melihat neraka Jahiim</em><em>. D</em><em>an&nbsp;</em><em>s</em><em>esungguhnya kamu benar-benar akan melihatnya dengan &lsquo;ainul yaqin.</em><em>&nbsp;K</em><em>emudian kamu pasti akan ditanyai pada hari itu tentang kenikmatan (yang kamu megah-megahkan di dunia itu).</em><em>&rdquo;&nbsp;</em>(QS. at-Tak&acirc;tsur [102]: 1-8)</p>\r\n\r\n<p style="text-align:start">Penting untuk selalu kita sadari, bahwa Allah-lah pemilik segala karunia. Dia-lah Yang Maha Memberi kepada seluruh makhluk-Nya. Tiada satu pun yang luput dari pemberian-Nya. Sedangkan manusia, tidak lebih dari sekadar makhluk yang dititipi oleh-Nya. Sungguh tidak ada artinya apa yang kita miliki dibandingkan kekayaan-Nya.</p>\r\n\r\n<p style="text-align:start">Menyikapi kekayaan yang kita miliki, alangkah baiknya jika kita memakai teori tukang parkir. Seorang tukang parkir tidak pernah merasa jumawa, sombong dan ujub atas berbagai kendaraan yang berada di dalam kekuasaannya. Karena ia menyadari betul, semua kendaraan itu hanyalah titipan semata yang datang dititipkan kepadanya untuk nanti diambil kembali oleh pemiliknya.</p>\r\n\r\n<p style="text-align:start">Demikianlah pula dengan harta kekayaan kita. Tiada lain hanyalah titipan Allah semata. Dia Yang Mahakaya telah menitipkannya kepada kita, sebagai ujian apakah kita amanah ataukah tidak. Apakah kita menggunakan titipan-titipan-Nya itu sesuai dengan kehendak-Nya ataukah malah sebaliknya.</p>\r\n\r\n<p style="text-align:start">Tidak perlu sibuk berlomba-lomba dalam kemegahan dan kekayaan. Sibuklah berlomba-lomba dalam berbagi, bersedekah, berwakaf dan amal kebaikan lainnya. Berlomba dalam kemegahan akan berujung di garis&nbsp;<em>finish</em>&nbsp;penyesalan. Sedangkan berlomba dalam kebaikan akan berujung di garis&nbsp;<em>finish</em>&nbsp;kebahagiaan.&nbsp;<strong>(KH. Abdullah Gymnastiar)&nbsp; &nbsp; &nbsp;</strong></p>\r\n', 0, 'Erwin Mardinata', '1', '/deeniyat/assets/konten/files/gambar/Jauhi-Hidup-Bermegah-megahan_Daarut-Tauhiid.jpg', '2019-12-27', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `balas_bukutamu`
--

CREATE TABLE IF NOT EXISTS `balas_bukutamu` (
`id` int(11) NOT NULL,
  `id_bukutamu` int(11) NOT NULL,
  `balasan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `balas_pengaduan`
--

CREATE TABLE IF NOT EXISTS `balas_pengaduan` (
`id` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `balasan` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `thumb` varchar(200) NOT NULL,
  `date` char(10) NOT NULL,
  `date_edit` char(10) DEFAULT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `deskripsi`, `isi`, `id_kategori`, `penulis`, `status`, `thumb`, `date`, `date_edit`, `hits`) VALUES
(1, 'Tingkatkan Silaturahim, SSG Angkatan 38 Gelar Musyawarah Besar', 'Salah satu cara untuk merekatkan ukhuwah islamiyah antar alumni Santri Siap Guna (SSG) angkatan ke 38, ialah dengan mengadakan Musyawarah Besar (Mubes). Lokasi yang dipilih ialah selasar Masjid Rahmatan Lil’alamin, Eco Pesantren DT. Pada Ahad (22/12). Sebanyak 92 peserta, terdiri dari 37 ikhwan dan 55 akhwat, menghadiri kegiatan tersebut.', '<p style="text-align:start">Salah satu cara untuk merekatkan ukhuwah islamiyah antar alumni Santri Siap Guna (SSG) angkatan ke 38, ialah dengan mengadakan Musyawarah Besar (Mubes). Lokasi yang dipilih ialah selasar Masjid Rahmatan Lil&rsquo;alamin, Eco Pesantren DT. Pada Ahad (22/12). Sebanyak 92 peserta, terdiri dari 37 ikhwan dan 55 akhwat, menghadiri kegiatan tersebut.</p>\r\n\r\n<p style="text-align:start">Dadan Kurniawan, Direktur Pendidikan dan Dakwah DT Berdaya mengenalkan rumah baru bagi SSG DT, yang awalnya di bawah Lembaga Strategis (Lemstra) DT, kini berada di bawah Yayasan Pemberdayaan Ummat Daarut Tauhiid (DT Berdaya), dalam Direktorat Pendidikan dan Dakwah.Restrukturisasi yang dilakukan oleh Pimpinan YayasanDaarut Tauhiid (DT) ini bertujuan agar SSG dapat lebih dirasakan peran dan manfaatnya oleh masyarakat.</p>\r\n\r\n<p style="text-align:start">Dadan juga berpesan kepada seluruh santri agar tetap menjaga niat lillahi ta&rsquo;ala. &ldquo;Siapa pun Pimpinan SSG berikutnya, loyalitas kita bukan pada figurnya, tapi syariatnya lewat SSG kita berbuat lillahi ta&rsquo;ala. Komunikasi harus tetap terjalin, dan untuk SSG 38, selamat melakukan Kegiatan Mubes, semoga berkah, semoga ditolong oleh Allah SWT,&rdquo; tutur Dadan.</p>\r\n\r\n<p style="text-align:start">Rangkaian acara Mubes dilanjutkan dengan talkshow yang berjudul &lsquo;Saat Dipertemukan dengan Takdir&rsquo;. Adapun pemateri ikhwan ialah Sobari dan Rizki, tim pelatih yang juga SSG Angkatan 35. Sedagkan pemateri akhwat oleh Novi dan Okta. Mereka mengungkapkan kesannya ketika awal bergabung menjadi santri SSG.</p>\r\n\r\n<p style="text-align:start">Puncak acara ialah pemilihan Ketua SSG Angkatan 38. Dari beberapa kandidat, terpilih masing-masing ketua dari ikhwan dan akhwat. Adapun yang menjadi ketua ikhwan adalah Asep Herdian Permana, dan ketua akhwat ialah Erlita Risanti.&nbsp;<strong>(Fatimah)</strong></p>\r\n', 0, 'Erwin Mardinata', '1', '/deeniyat/assets/konten/files/gambar/DSC2306-845x321.jpg', '2019-12-27', NULL, 28),
(2, 'Tingkatkan Silaturahim, SSG Angkatan 38 Gelar Musyawarah Besar', 'Salah satu cara untuk merekatkan ukhuwah islamiyah antar alumni Santri Siap Guna (SSG) angkatan ke 38, ialah dengan mengadakan Musyawarah Besar (Mubes). Lokasi yang dipilih ialah selasar Masjid Rahmatan Lil’alamin, Eco Pesantren DT. Pada Ahad (22/12). Sebanyak 92 peserta, terdiri dari 37 ikhwan dan 55 akhwat, menghadiri kegiatan tersebut.', '<p style="text-align:start">Salah satu cara untuk merekatkan ukhuwah islamiyah antar alumni Santri Siap Guna (SSG) angkatan ke 38, ialah dengan mengadakan Musyawarah Besar (Mubes). Lokasi yang dipilih ialah selasar Masjid Rahmatan Lil&rsquo;alamin, Eco Pesantren DT. Pada Ahad (22/12). Sebanyak 92 peserta, terdiri dari 37 ikhwan dan 55 akhwat, menghadiri kegiatan tersebut.</p>\r\n\r\n<p style="text-align:start">Dadan Kurniawan, Direktur Pendidikan dan Dakwah DT Berdaya mengenalkan rumah baru bagi SSG DT, yang awalnya di bawah Lembaga Strategis (Lemstra) DT, kini berada di bawah Yayasan Pemberdayaan Ummat Daarut Tauhiid (DT Berdaya), dalam Direktorat Pendidikan dan Dakwah.Restrukturisasi yang dilakukan oleh Pimpinan YayasanDaarut Tauhiid (DT) ini bertujuan agar SSG dapat lebih dirasakan peran dan manfaatnya oleh masyarakat.</p>\r\n\r\n<p style="text-align:start">Dadan juga berpesan kepada seluruh santri agar tetap menjaga niat lillahi ta&rsquo;ala. &ldquo;Siapa pun Pimpinan SSG berikutnya, loyalitas kita bukan pada figurnya, tapi syariatnya lewat SSG kita berbuat lillahi ta&rsquo;ala. Komunikasi harus tetap terjalin, dan untuk SSG 38, selamat melakukan Kegiatan Mubes, semoga berkah, semoga ditolong oleh Allah SWT,&rdquo; tutur Dadan.</p>\r\n\r\n<p style="text-align:start">Rangkaian acara Mubes dilanjutkan dengan talkshow yang berjudul &lsquo;Saat Dipertemukan dengan Takdir&rsquo;. Adapun pemateri ikhwan ialah Sobari dan Rizki, tim pelatih yang juga SSG Angkatan 35. Sedagkan pemateri akhwat oleh Novi dan Okta. Mereka mengungkapkan kesannya ketika awal bergabung menjadi santri SSG.</p>\r\n\r\n<p style="text-align:start">Puncak acara ialah pemilihan Ketua SSG Angkatan 38. Dari beberapa kandidat, terpilih masing-masing ketua dari ikhwan dan akhwat. Adapun yang menjadi ketua ikhwan adalah Asep Herdian Permana, dan ketua akhwat ialah Erlita Risanti.&nbsp;<strong>(Fatimah)</strong></p>\r\n', 0, 'Erwin Mardinata', '1', '/deeniyat/assets/konten/files/gambar/DSC2306-845x321.jpg', '2019-12-27', NULL, 29),
(3, 'Tingkatkan Silaturahim, SSG Angkatan 38 Gelar Musyawarah Besar', 'Salah satu cara untuk merekatkan ukhuwah islamiyah antar alumni Santri Siap Guna (SSG) angkatan ke 38, ialah dengan mengadakan Musyawarah Besar (Mubes). Lokasi yang dipilih ialah selasar Masjid Rahmatan Lil’alamin, Eco Pesantren DT. Pada Ahad (22/12). Sebanyak 92 peserta, terdiri dari 37 ikhwan dan 55 akhwat, menghadiri kegiatan tersebut.', '<p style="text-align:start">Salah satu cara untuk merekatkan ukhuwah islamiyah antar alumni Santri Siap Guna (SSG) angkatan ke 38, ialah dengan mengadakan Musyawarah Besar (Mubes). Lokasi yang dipilih ialah selasar Masjid Rahmatan Lil&rsquo;alamin, Eco Pesantren DT. Pada Ahad (22/12). Sebanyak 92 peserta, terdiri dari 37 ikhwan dan 55 akhwat, menghadiri kegiatan tersebut.</p>\r\n\r\n<p style="text-align:start">Dadan Kurniawan, Direktur Pendidikan dan Dakwah DT Berdaya mengenalkan rumah baru bagi SSG DT, yang awalnya di bawah Lembaga Strategis (Lemstra) DT, kini berada di bawah Yayasan Pemberdayaan Ummat Daarut Tauhiid (DT Berdaya), dalam Direktorat Pendidikan dan Dakwah.Restrukturisasi yang dilakukan oleh Pimpinan YayasanDaarut Tauhiid (DT) ini bertujuan agar SSG dapat lebih dirasakan peran dan manfaatnya oleh masyarakat.</p>\r\n\r\n<p style="text-align:start">Dadan juga berpesan kepada seluruh santri agar tetap menjaga niat lillahi ta&rsquo;ala. &ldquo;Siapa pun Pimpinan SSG berikutnya, loyalitas kita bukan pada figurnya, tapi syariatnya lewat SSG kita berbuat lillahi ta&rsquo;ala. Komunikasi harus tetap terjalin, dan untuk SSG 38, selamat melakukan Kegiatan Mubes, semoga berkah, semoga ditolong oleh Allah SWT,&rdquo; tutur Dadan.</p>\r\n\r\n<p style="text-align:start">Rangkaian acara Mubes dilanjutkan dengan talkshow yang berjudul &lsquo;Saat Dipertemukan dengan Takdir&rsquo;. Adapun pemateri ikhwan ialah Sobari dan Rizki, tim pelatih yang juga SSG Angkatan 35. Sedagkan pemateri akhwat oleh Novi dan Okta. Mereka mengungkapkan kesannya ketika awal bergabung menjadi santri SSG.</p>\r\n\r\n<p style="text-align:start">Puncak acara ialah pemilihan Ketua SSG Angkatan 38. Dari beberapa kandidat, terpilih masing-masing ketua dari ikhwan dan akhwat. Adapun yang menjadi ketua ikhwan adalah Asep Herdian Permana, dan ketua akhwat ialah Erlita Risanti.&nbsp;<strong>(Fatimah)</strong></p>\r\n', 0, 'Erwin Mardinata', '1', '/deeniyat/assets/konten/files/gambar/DSC2306-845x321.jpg', '2019-12-27', NULL, 34);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(11) NOT NULL,
  `id_jasa` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_jasa`, `nama`, `telp`, `email`, `pesan`, `tanggal`, `status`) VALUES
(10, 2, 'Renovasi Kantor', 'q434', 'admin@shomad.co.id', 'fdsfsd', '2020-05-20', 1),
(11, 1, 'Erwin', 'q434', 'dikes@sumbawakab.go.id', 'sfsdf', '2020-05-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
`id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `telp`, `pesan`, `tanggal`, `status`) VALUES
(13, 'Erwin Mardinata', '537.mardinata@gmail.com', '087863577415', 'Assalamualaikum', '2019-10-03', 1),
(14, 'Erwin Mardinata', '537.mardinata@gmail.com', '087863577415', 'Assalamualaikum', '2019-10-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE IF NOT EXISTS `disposisi` (
`id` int(11) NOT NULL,
  `id_surat_masuk` int(11) NOT NULL,
  `tujuan_disposisi` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `isi_disposisi` text NOT NULL,
  `catatan` text NOT NULL,
  `sifat_disposisi` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id`, `id_surat_masuk`, `tujuan_disposisi`, `tanggal`, `jam`, `isi_disposisi`, `catatan`, `sifat_disposisi`, `status`) VALUES
(24, 15, 'PT Shomad Technology', '2020-04-03', '02:10', 'Kamu harus pergi sendiri ya', 'segera hadir', 'Biasa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `file` varchar(500) DEFAULT NULL,
  `link_file` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
`id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(450) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'Ruang Belajar Satri', 'Ruang Belajar Santri di lengkapi dengan Meja dan Kursi yang nyaman', '/deeniyat/assets/konten/files/gambar/guru3.jpg'),
(2, 'Masjid Santri', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '/deeniyat/assets/konten/files/gambar/c5866e93cab1776890fe343c9e7063fb-menikmati-megahnya-masjid-agung-di-kota-santri-tasikmalaya-.jpg'),
(3, 'Taman Bermain', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '/deeniyat/assets/konten/files/gambar/shutterstock_1320577019.jpg'),
(4, 'Asrama Santri', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '/deeniyat/assets/konten/files/gambar/DSCN2061.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
`id` int(11) NOT NULL,
  `id_kategori_foto` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(225) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `id_kategori_foto`, `judul`, `foto`) VALUES
(8, 5, '1', '/shomadbuild/assets/konten/files/portofolio/IMG_20191106_114605.jpg'),
(9, 5, '2', '/shomadbuild/assets/konten/files/portofolio/IMG_20191106_114500.jpg'),
(10, 5, '3', '/shomadbuild/assets/konten/files/portofolio/IMG_20191106_114716.jpg'),
(12, 5, '4', '/shomadbuild/assets/konten/files/portofolio/IMG_20191106_114823.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
`id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE IF NOT EXISTS `jasa` (
`id` int(11) NOT NULL,
  `id_program_detail` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahukah_anda` text NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `id_program_detail`, `nama`, `tahukah_anda`, `deskripsi`, `icon`) VALUES
(6, 4, 'Desain Arsitek', '<div class="vc_row wpb_row row" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px 0px 35px; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; flex: 0 1 auto; flex-flow: row wrap;">\r\n<div class="wpb_column vc_column_container col-sm-6" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: top; width: 674.5px; flex: 0 0 50%; max-width: 50%;">\r\n<div class="vc_column-inner" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding-right: 15px; padding-bottom: 0px; padding-left: 15px; vertical-align: baseline; width: 674.5px; padding-top: 0px !important;">\r\n<div class="wpb_wrapper" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">\r\n<div class="wpb_text_column wpb_content_element " style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-top: 0px; margin-right: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; margin-bottom: 0px !important;">\r\n<div class="wpb_wrapper" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">\r\n<div class="row " style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px -0.9375rem; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; flex: 0 1 auto; flex-flow: row wrap;">\r\n<div class="wpv-grid grid-1-2 unextended has-extended-padding" id="wpv-column-6793b9412510cb9d01b06548f2b15150" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">\r\n<div class="row " style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px -0.9375rem; outline: 0px; padding: 0px; vertical-align: baseline; display: flex; flex: 0 1 auto; flex-flow: row wrap;">\r\n<ol>\r\n	<li>Menggunakan jasa&nbsp;arsitek&nbsp;profesional akan memaksimalkan bangunan dibanding Anda mencari desain-desain dari internet</li>\r\n	<li>Jasa arsitek BintoroBuild sangat memperhatikan unsur-unsur kenyamanan, keamanan, serta peduli terhadap lingkungan</li>\r\n	<li>Keterlibatan client berperan aktif sangat dibutuhkan dalam proses desain.</li>\r\n	<li>Menggunakan jasa arsitek sekaligus memastikan bangunan Anda dibangun sesuai dengan standar nasional</li>\r\n	<li>Menggunakan jasa arsitek dapat membantu Anda juga menyusun anggaran pembuatan bangunan</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '<p style="text-align:justify">Saat mendesain rumah rumah merupakan saat yang paling membingungkan, mendebarkan, serta membuat galau. Bagaimana tidak? Karena pasti banyak sekali ide-ide yang muncul di kepala atau di internet sehingga kita bingung mau menentukan yang seperti apa. Terlebih lagi, mungkin sebagian dari kita ada yang khawatir nanti takut kemahalan saat memakai jasa desain rumah atau saat membangun rumahnya.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">BintoroBuild hadir untuk Anda yang saat ini sedang galau ingin mendesain rumah impiannya. Silahkan konsultasikan kepada para arsitek terbaik kami mengenai keinginan Anda, maka para arsitek kami akan memberikan masukan kepada Anda serta membuatkan rencana anggaran biaya dalam pembuatan rumah impian Anda.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify">Ingat, desain rumah dapat menentukan kenyamanan Anda selama tinggal dirumah. Berikan kepercayaan kepada BintoroBuild untuk menjadi bagian terpenting dalam mendesain rumah impian Anda.</p>\r\n', 'fa fa-html5'),
(7, 1, 'Jasa Pembersihan Kantor', '', '', 'fa fa-music'),
(8, 1, 'Jasa Pembersihan Rumah', '', '', 'fa fa-music'),
(9, 2, 'Poles Lantai', '', '', 'fa fa-music'),
(10, 2, 'Cuci Kursi Kantor', '', '', 'fa fa-music'),
(11, 2, 'Cuci Kursi Makan', '', '', 'fa fa-music'),
(12, 2, 'Cuci Sofa', '', '', 'fa fa-music'),
(13, 2, 'Cuci Karpet', '', '', 'fa fa-music'),
(14, 2, 'Cuci Jok Mobil', '', '', 'fa fa-music'),
(15, 2, 'Cuci Spring bed', '', '', 'fa fa-music'),
(16, 2, 'Cuci Kamar Mandi', '', '', 'fa fa-music'),
(17, 3, 'Laundry Baju', '', '', 'fa fa-music'),
(19, 3, 'Cuci Helm', '', '', 'fa fa-music'),
(20, 3, 'Cuci Sepatu', '', '', 'fa fa-music'),
(21, 3, 'Sedot WC', '', '', 'fa fa-music');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE IF NOT EXISTS `kategori_berita` (
`id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_foto`
--

CREATE TABLE IF NOT EXISTS `kategori_foto` (
`id` int(11) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `deskripsi` text,
  `nama_client` varchar(50) NOT NULL,
  `kategori_portofolio` varchar(100) NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `nilai` int(11) NOT NULL,
  `luas` varchar(20) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_foto`
--

INSERT INTO `kategori_foto` (`id`, `kategori`, `deskripsi`, `nama_client`, `kategori_portofolio`, `tanggal_selesai`, `nilai`, `luas`, `lokasi`) VALUES
(5, 'Pembangunan Penginapan Khalifah Goest House', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Rudi', 'Penginapan', '2020-05-19', 2000000000, '10 Are', 'PPN Bukit Indah');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_info`
--

CREATE TABLE IF NOT EXISTS `kategori_info` (
`id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
`id` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `isi`) VALUES
(1, '<div class="wpb_text_column wpb_content_element " style="box-sizing: border-box; margin-bottom: 35px; font-family: ">\r\n<div class="wpb_wrapper" style="box-sizing: border-box; margin-bottom: 0px;">\r\n<p><span style="font-size:16px"><strong>Kurikulum Lembaga Deeniyat</strong></span></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n</div>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `judul`, `link`, `foto`) VALUES
(7, 'Kabupaten Sumbawa', 'http://sumbawakab.go.id', '/skpd/assets/konten/files/thum_berita/actividen.gif'),
(8, 'Provinsi Nusa Tenggara Barat', 'http://ntbprov.go.id', '/skpd/assets/konten/files/thum_berita/audiojungle.gif'),
(9, 'Bapenda Kabupaten Sumbawa', 'http://bapenda.sumbawakab.go.id', '/skpd/assets/konten/files/thum_berita/coadcanyon.gif'),
(10, 'Bapedda Kabapaten Sumbawa', 'http://bapedda.sumbawakab.go.id', '/skpd/assets/konten/files/thum_berita/docean.gif'),
(11, 'Siandini Kabupaten Sumbawa', 'http://siandini.sumbawakab.go.id', '/skpd/assets/konten/files/thum_berita/graphicriver.gif');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE IF NOT EXISTS `misi` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `icon` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `judul`, `deskripsi`, `icon`) VALUES
(1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'fa fa-heart'),
(2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'fa fa-check-circle'),
(3, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'fa fa-trophy'),
(4, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable.', 'fa fa-smile-o');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` text,
  `status_kawin` varchar(20) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `type_pegawai` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `devisi` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `pangkat_golongan` varchar(50) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `alamat`, `status_kawin`, `no_hp`, `pendidikan_terakhir`, `type_pegawai`, `jabatan`, `parent`, `devisi`, `nip`, `pangkat_golongan`, `facebook`, `twitter`, `instagram`, `foto`) VALUES
(6, 'Ustadz Fulan', 'Sumbawa', '1995-07-03', 'Islam', 'Laki-laki', 'Sumbawa', 'Menikah', '087863577415', 'S1', NULL, 'Pimpinan Lembaga', 0, NULL, '-', '-', '#', '#', '#', '/deeniyat/assets/konten/files/foto/pakustadz.png'),
(7, 'Ustadzah Fulana', 'Sumbawa', '1994-12-03', '', 'Perempuan', 'Sumbawa', 'Menikah', '087863577415', 'S1', NULL, 'Istri Ustadz', 0, NULL, NULL, NULL, '#', NULL, '#', '/deeniyat/assets/konten/files/foto/ustadzah.png'),
(8, 'Abang', 'Sebewe', '1984-11-03', '', 'Laki-laki', 'Sumbawa', 'Belum Menikah', '087863577415', 'S1', NULL, 'Wali Kelas 6', 0, NULL, NULL, NULL, '#', NULL, '#', '/deeniyat/assets/konten/files/foto/ustandz.png'),
(9, 'Ade''', 'Sumbawa', '1997-12-12', '', 'Perempuan', 'Sumbawa', 'Belum Menikah', '087863577415', 'S1', NULL, 'Guru Tahzin', 0, NULL, NULL, NULL, '#', NULL, '#', '/deeniyat/assets/konten/files/foto/muslimah.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
`id` int(11) NOT NULL,
  `nama_pengadu` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `judul_pengaduan` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `file` varchar(500) DEFAULT NULL,
  `link_file` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `nama`, `file`, `link_file`) VALUES
(29, 'SELAMAT DATANG AJA BRO. TAPI JANGAN BIKIN RUSUH DIKAMPUNG ORANG', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `poling`
--

CREATE TABLE IF NOT EXISTS `poling` (
`id` int(11) NOT NULL,
  `value` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `judul`, `isi`, `status`) VALUES
(10, 'Sejarah', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1'),
(11, 'Sambutan Kepala Desa', '<p><strong>Bismillahirrahmanirrahim...</strong></p>\r\n\r\n<p><strong>Assalamu&#39;alaikum warahmatullahi wabarakatuh</strong></p>\r\n\r\n<p>Dengan rahmat Tuhan yang Maha Esa pada hari jum&#39;at tanggal 2 Agustus 2019 kita semua masyarakat Desa Mapin Beru memanjat puji syukur kehadirat Allah SWT yang telah melimpahkan Rahmat serta karunianya sehingga pada hari ini kita dapat mewujudkan salah satu Program Desa Mapin Beru yang menjadi harapan Pemerintah Desa dan Masyarakat khususnya Masyarakat Desa Mapin Beru sehingga kedepan program ini akan mampu membawa output dari apa yang di harapkan oleh masyarakat mengenai keterbatasan informasi publik dalam berprosesnya kegiatan pembangunan baik fisik maupun sumberdaya manusianya. selanjutnya hal ini mejadi tonggak sejarah baru bagi Desa Mapin Beru agar mampu menjadi Desa yang mandiri dan kompetitip. karena di era melineal ini kami dari pemerintah Desa Mapin Beru semampu mungkin akan menyajikan informasi informasi yang bersifat membangun, transparan dan akun table yang dapat diterima oleh masyarakat ramai. untuk itu fungsi dari kehadiran Website Desa akan mampu memberikan harapan baru bagi msyarakat yang senantiasa dalam mencari informasi berkaitan dengan semua kegiatan pembangunan yang ada di Desa Mapin Beru. sehingga media ini akan meberikan informasi-informasi secara langsung dan di persilahkan kepada seluruh masyarakat untuk mengikuti akun Website Desa ini.</p>\r\n\r\n<p>Demikian yang dapat saya sampaikan semoga Allah yang Maha Kuasa memberikan Rahmatnya kepada kita semua agar senantiasa mendapat berkah dalam segala kegiatan yang ada di Desa Mapin Beru. melalui kesempatan ini kami dari Pemerintah Desa mohon maaf yang sebesar-besarnya&nbsp; apabila dalam penyampaian ini ada hal-hal yang kuran berkenan maka kiranya kami dimaafkan dan atas perhatiannya kami ucapkan terimakasih.</p>\r\n\r\n<p><strong>Wabillahi taufik walhidayah wassalamu&#39;alaikum warahmatullahi wabarakatuh.</strong></p>\r\n\r\n<p><strong>Kepala Desa Mapin Beru</strong></p>\r\n\r\n<p><strong>KHAERUDDIN MANCA</strong></p>\r\n', '1'),
(12, 'Visi dan Misi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

CREATE TABLE IF NOT EXISTS `profil_desa` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `video` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_web`
--

CREATE TABLE IF NOT EXISTS `profil_web` (
`id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `keyword` text,
  `url` varchar(50) DEFAULT NULL,
  `alamat` text,
  `email` varchar(100) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `nama_desa` varchar(100) DEFAULT NULL,
  `nama_kecamatan` varchar(100) DEFAULT NULL,
  `nama_kabupaten` varchar(100) DEFAULT NULL,
  `nama_provinsi` varchar(100) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `googleplus` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `googlemap` varchar(500) DEFAULT NULL,
  `bg` varchar(500) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `favicon` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_web`
--

INSERT INTO `profil_web` (`id`, `nama`, `deskripsi`, `keyword`, `url`, `alamat`, `email`, `telp`, `kode_pos`, `nama_desa`, `nama_kecamatan`, `nama_kabupaten`, `nama_provinsi`, `facebook`, `twitter`, `instagram`, `googleplus`, `youtube`, `googlemap`, `bg`, `logo`, `favicon`) VALUES
(2, 'Shomad Build : Jasa Renovasi, Arsitek, dan Kontraktor Bangunan', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n\r\n', '#', 'https://build.shomad.co.id', 'Komplek Perumahan Bumi Indah Residen Blok C/9 Kelurahan Seketeng', 'info@shomad.co.id', '087863577415', '84381', 'Lantung', 'Lantung', 'Sumbawa', 'Nusa Tenggara Barat', '#', '#', '#', NULL, '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1215.0499531098442!2d117.52351656185616!3d-8.757274389507824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcb9f373479f61d%3A0x99a738fcab1c47b2!2sKantor%20Desa%20Lantung%20Kec.%20Lantung!5e1!3m2!1sid!2sid!4v1570080191811!5m2!1sid!2sid', '/shomadbuild/assets/konten/files/galeri/video-1.jpg', '/shomadbuild/assets/konten/files/logo/shomadbuild.png', '/shomadbuild/assets/konten/files/logo/shomadbuildlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `icon` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `judul`, `deskripsi`, `icon`) VALUES
(7, 'Tenaga Profesional', 'Hasil pekerjaan memuaskan dengan selalu memerhatikan seluruh aspek keamanan dan kenyamanan dalam bangunan anda', 'fa fa-graduation-cap'),
(8, '24/7 Services', 'Jika Anda berada dalam situasi darurat, mohon jangan khawatir. Kami menyediakan layanan 24/7. Setiap kali Anda menelepon, kami melayani Anda.', 'fa fa-clock-o'),
(9, 'Harga Terjangkau', 'Kami berikan lebih dari sekedar layanan renovasi, kami periksa gangguan yang perlu diperhatikan agar Anda tetap aman dan menghemat uang Anda.', 'fa fa-money'),
(10, 'Jaminan Pekerjaan', 'Jaminan pemeliharaan atas pekerjaan kami berikan selama 3 bulan sebagai bentuk penjagaan kualitas pekerjaan BintoroBuild', 'fa fa-th-list'),
(11, 'Material Terbaik', 'Bahan material memegang peranan penting pada kualitas, dan kami hanya menggunakan bahan material yang berkualitas baik.', 'fa fa-cogs'),
(12, 'Gratis Anti Rayap', 'Untuk pekerjaan tertentu, kami memberikan fasilitas FREE anti rayap guna menjaga bahan bangunan kayu Anda', 'fa fa-puzzle-piece');

-- --------------------------------------------------------

--
-- Table structure for table `program_detail`
--

CREATE TABLE IF NOT EXISTS `program_detail` (
`id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_detail`
--

INSERT INTO `program_detail` (`id`, `judul`, `deskripsi`, `isi`, `foto`, `icon`) VALUES
(1, 'ROUTINE CLIENING ', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '<p><em>Lorem ipsum</em><strong>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</strong></p>\r\n', '/shomadclean/assets/konten/files/galeri/slider-1.jpg', 'fa fa-road'),
(2, 'SPECIALIST CLEANING', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '<p><em>Lorem ipsum</em><strong>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</strong></p>\r\n', '/shomadclean/assets/konten/files/galeri/slider-2.jpg', 'fa fa-home'),
(3, 'JASA LAINNYA', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '<p><em>Lorem ipsum</em><strong>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</strong></p>\r\n', '/shomadclean/assets/konten/files/galeri/video-1.jpg', 'fa fa-wrench');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE IF NOT EXISTS `sambutan` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`id`, `nama`, `jabatan`, `isi`, `foto`) VALUES
(3, 'Erwin Mardinata, S.Kom', 'Kepala Desa Sebewe', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae semper quis lectus nulla at volutpat diam. Mattis pellentesque id nibh tortor. Quis risus sed vulputate odio ut enim blandit volutpat maecenas. Volutpat blandit aliquam etiam erat velit. Tincidunt arcu non sodales neque sodales ut. Arcu felis bibendum ut tristique et egestas. Penatibus et magnis dis parturient. In eu mi bibendum neque. Eu lobortis elementum nibh tellus molestie. Nec ultrices dui sapien eget mi proin sed. Luctus accumsan tortor posuere ac ut consequat semper viverra. Mauris a diam maecenas sed enim ut sem viverra aliquet. Augue neque gravida in fermentum et sollicitudin ac orci phasellus. Eros donec ac odio tempor orci.</p>\r\n', '/sisdes_lombok/assets/konten/files/thum_berita/user.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `foto`) VALUES
(7, 'Slider', '/shomadbuild/assets/konten/files/galeri/video-1.jpg'),
(8, 'Slider 2', '/shomadbuild/assets/konten/files/galeri/slider-1.jpg'),
(9, 'Slider 3', '/shomadbuild/assets/konten/files/galeri/slider-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
`id` int(11) NOT NULL,
  `nomor_agenda` varchar(20) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `index` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `klasifikasi` int(11) NOT NULL,
  `sifat_surat` int(11) NOT NULL,
  `isi_ringkasan` text NOT NULL,
  `catatan` text NOT NULL,
  `lampiran` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `nomor_agenda`, `tujuan`, `kode`, `nomor_surat`, `index`, `tanggal_surat`, `perihal`, `klasifikasi`, `sifat_surat`, `isi_ringkasan`, `catatan`, `lampiran`, `status`) VALUES
(16, 'BB', 'Sumbawa', 'SDSD', 'qwe9872/1231', '', '2020-04-03', '', 0, 0, 'Keinginan terbesar dalam hidup saya adalah memberikan hadiah Surga buat kedua orang tua', '-', '9037107629130000303202000F1232040111.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
`id` int(11) NOT NULL,
  `nomor_agenda` varchar(20) NOT NULL,
  `asal` varchar(250) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `index` varchar(50) NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `perihal` varchar(200) NOT NULL,
  `klasifikasi` int(11) NOT NULL,
  `sifat_surat` int(11) NOT NULL,
  `isi_ringkasan` text NOT NULL,
  `catatan` text NOT NULL,
  `lampiran` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `nomor_agenda`, `asal`, `kode`, `nomor_surat`, `index`, `tanggal_surat_masuk`, `perihal`, `klasifikasi`, `sifat_surat`, `isi_ringkasan`, `catatan`, `lampiran`, `status`) VALUES
(15, 'AA', 'PC Shomad', 'Superman', 'DS.12/2019', 'Undangan', '2020-04-01', 'Permohonan', 0, 0, '-', '-', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tentang_desa`
--

CREATE TABLE IF NOT EXISTS `tentang_desa` (
`id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `video` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_desa`
--

INSERT INTO `tentang_desa` (`id`, `deskripsi`, `judul`, `isi`, `foto`, `video`) VALUES
(1, '<p style="text-align:justify"><span style="color:rgb(119, 119, 119); font-family:lato,helvetica,arial,sans-serif; font-size:15px">Pada zaman modern ini, seluruh aspek dalam bangunan meliputi keindahan, ketahanan, serta harga pembangunan harus sangat diperhatikan. Untuk membangun sebuah bangunan yang kokoh dibutuhkan proses pembangunan yang terukur serta waktu yang efisien. Maka dari itu Bintoro Build hadir untuk mewujudkan impian anda memiliki bangunan yang kokoh dan indah dengan harga TERJANGKAU melalui jasa renovasi,&nbsp;</span><a href="https://bintorobuild.co.id/jasa-kontraktor-bangunan/" style="box-sizing: border-box; border: 0px; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 15px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-decoration-line: none; transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1) 0s; color: rgb(17, 17, 17); text-align: justify;">kontraktor bangunan</a><span style="color:rgb(119, 119, 119); font-family:lato,helvetica,arial,sans-serif; font-size:15px">, dan arsitektur.</span></p>\r\n', 'Shomad Build - Membantu Membangun Hunian Impian Anda', '<p style="text-align:justify"><span style="font-size:18px"><strong>Seputar Shomad Build</strong></span></p>\r\n\r\n<div class="wpb_text_column wpb_content_element vc_custom_1547197902054" style="box-sizing: border-box; border: 0px; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 15px; margin-top: 0px; margin-right: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(119, 119, 119); margin-bottom: 0px !important;">\r\n<div class="wpb_wrapper" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">\r\n<div class="column dt-sc-one-half " style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">\r\n<p style="text-align:justify"><span style="font-family:inherit">Tak dapat dipungkiri bahwa setiap bangun yang didesain dan dibangun dengan baik akan membuat kita merasa nyaman menempati tempat tersebut. Kenyamanan dapat diperoleh dari desain yang sesuai dengan keinginan kita, struktur bangunan yang kuat, pemilihan bahan material yang baik, interior yang memperhatikan fungsi sekaligus gengsi, serta kontraktor yang dapat Anda percaya 100% dalam mendesain dan membangun bangunan Anda.</span></p>\r\n\r\n<div class="dt-sc-margin10" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-align: justify;"><span style="font-family:inherit"><a href="https://bintorobuild.co.id/" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-decoration-line: none; transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1) 0s; color: rgb(17, 17, 17);">Bintoro Build</a>&nbsp;kami dirikan untuk memenuhi keinginan serta kebutuhan Anda, serta menjawab kekhawatiran Anda terhadap perusahaan kontraktor yang ada. BintoroBuild kami dirikan dengan pondasi dasar spiritual company yang menjunjung tinggi nilai kejujuran, kepercayaan, kecerdasan, serta penyampaian yang baik. Tenaga kerja yang kami rekrut merupakan tenaga kerja terbaik untuk menunjang kualitas pekerjaan yang kami berikan.&nbsp;Kami menjadikan KUALITAS sebagai BUDAYA tertinggi kami sehingga apabila Anda tidak puas dengan manajemen BintoroBuild, silahkan langsung menghubungi saya melalui&nbsp;<a href="https://facebook.com/didiksubi" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; text-decoration-line: none; transition: all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1) 0s; color: rgb(17, 17, 17);">facebook</a>.</span></div>\r\n</div>\r\n\r\n<div class="column dt-sc-one-column first " style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; order: -1; text-align: center;">\r\n<div class="dt-sc-margin20" style="box-sizing: border-box; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">&nbsp;</div>\r\n</div>\r\n\r\n<p>~ Didik Subi S,E ~</p>\r\n</div>\r\n</div>\r\n', '/shomadbuild/assets/konten/files/galeri/who-we.jpg', 'GldqclCEZeU');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
`id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `video` varchar(500) DEFAULT NULL,
  `link_video` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE IF NOT EXISTS `visi` (
`id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `isi`, `foto`) VALUES
(1, '<p><strong>Lorem Ipsum</strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '/sisdes_lombok/assets/konten/files/thum_berita/3122587-le-footballeur-du-fc-barcelone-neymar-po-950x0-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balas_bukutamu`
--
ALTER TABLE `balas_bukutamu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balas_pengaduan`
--
ALTER TABLE `balas_pengaduan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_foto`
--
ALTER TABLE `kategori_foto`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_info`
--
ALTER TABLE `kategori_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_web`
--
ALTER TABLE `profil_web`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_detail`
--
ALTER TABLE `program_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_desa`
--
ALTER TABLE `tentang_desa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `balas_bukutamu`
--
ALTER TABLE `balas_bukutamu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `balas_pengaduan`
--
ALTER TABLE `balas_pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bukutamu`
--
ALTER TABLE `bukutamu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_foto`
--
ALTER TABLE `kategori_foto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_info`
--
ALTER TABLE `kategori_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil_web`
--
ALTER TABLE `profil_web`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `program_detail`
--
ALTER TABLE `program_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tentang_desa`
--
ALTER TABLE `tentang_desa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
