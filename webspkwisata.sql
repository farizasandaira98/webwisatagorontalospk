-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 10:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webspkwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tempat_wisata`
--

CREATE TABLE `data_tempat_wisata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tempat_wisata` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_tiket` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebersihan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jarak_tempuh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kunjungan` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pengunjung` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularitas` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_tampung` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_tempat_wisata` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wahana` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `protokol_covid` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skala_harga_tiket` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skala_kebersihan` int(1) NOT NULL,
  `skala_jarak_tempuh` int(1) NOT NULL,
  `skala_waktu_kunjungan` int(1) NOT NULL,
  `skala_jumlah_pengunjung` int(11) NOT NULL,
  `skala_popularitas` int(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_tempat_wisata`
--

INSERT INTO `data_tempat_wisata` (`id`, `nama_tempat_wisata`, `harga_tiket`, `kebersihan`, `jarak_tempuh`, `waktu_kunjungan`, `jumlah_pengunjung`, `popularitas`, `max_tampung`, `luas_tempat_wisata`, `wahana`, `protokol_covid`, `foto`, `deskripsi`, `sumber_data`, `skala_harga_tiket`, `skala_kebersihan`, `skala_jarak_tempuh`, `skala_waktu_kunjungan`, `skala_jumlah_pengunjung`, `skala_popularitas`, `updated_at`, `created_at`) VALUES
(5, 'Benteng Otanaha', '5000', 'Sangat Bersih', '7', '07.00 - 19.00', '1000', 'Sangat Populer', '10000', '10000', '- Tempat Makan', 'Cek Suhu Dan Sarana Cuci Tangan', 'Benteng Otanaha.jpg', 'Benteng Otanaha terletak di Kelurahan Dembe I, Kecamatan Kota Barat, Kota Gorontalo, Provinsi Gorontalo –pemekaran dari Provinsi Sulawesi Utara tahun 2000. Selain Otanaha sebagai benteng utama, ada dua benteng lainnya di lokasi ini: Otahiya dan Ulupahu. Ketiganya telah menjadi daya tarik wisata di Gorontalo. Letaknya tepat menghadap Danau Limboto.\r\n\r\nKetika berkunjung ke sini, Anda akan bertemu lebih dulu dengan Benteng Otahiya. Setelah puas melihat benteng Otahiya, Anda bisa mencapai Benteng Otahana dan Ulupahu dengan dua cara. Pertama dengan berjalan kaki menaiki 351 anak tangga. Sebab, letak kedua benteng tersebut berada di atas bukit. Tak perlu khawatir kelelahan, ada empat pos peristirahatan untuk rehat menghirup udara segar. Cara kedua dengan menggunakan mobil atau motor untuk mencapai bukit.\r\n\r\nSesampainya di Benteng Otanaha dan Ulupahu, pemandangan indah terhampar di depan mata. Danau Limboto dan perbukitan hijau di sekitarnya terlihat jelas sehingga menyegarkan mata. Wisata bangunan bersejarah berpadu dengan keindahan bentang alam. \r\n\r\nBenteng Otanaha adalah yang paling tua. Berbagai sumber menyebut benteng ini dibangun tahun 1522. Sementara cerita tutur masyarakat menyebut benteng ini ditemukan tahun 1585 oleh Naha, salah satu anak Raja Ilato yang memerintah Kerajaan Limboto.', 'https://indonesiakaya.com/pustaka-indonesia/benteng-otanaha-mengenang-jejak-portugis-di-tanah-gorontalo/', '5', 5, 3, 5, 5, 5, '2021-06-10 12:58:05', '2021-04-25 12:58:32'),
(6, 'Taman Wisata Lombongo', '10000', 'Sangat Bersih', '16.1', '07.00 - 19.00', '1000', 'Sangat Populer', '3000', '600', '- Tempat Makan', 'Cek Suhu Dan Sarana Cuci Tangan', 'Taman Wisata Lombongo.jpg', 'Taman Wisata Pemandian Air Panas LombongoBerada di tengah-tengah keasrian alam Desa Duwano, Pemandian Air Panas Lombongo sekaligus menghantarkan Anda pada sensasi kehangatan sumber air panas. Di lokasi pemandian ini, Anda akan menemukan dua buah kolam air panas dengan luas 500 M2 dan kedalamannya berkisar 1 hingga 2 meter. Dikolam ini Anda bisa berendam dan me-rileks-kan tubuh, sembari menikmati sejuknya pemandangan hutan hujan tropis.\r\nKolam Air Panas LombongoPemandian Lombongo merupakan pemandian air panas alami yang bersumber dari mata air panas. Tanah Gorontalo merupakan daratan vulkanik, oleh karena itu di Desa Duwano terdapat banyak mata air panas yang tersebar di sekitar desa. Beberapa diantaranya dialirkan dan menjadi sumber air  dari pemandian ini. Sumber air panasnya kaya akan mineral seperti sulfur (belerang). Sehingga, berendam di Pemandian Air Panas Lombongo juga akan menyehatkan kulit Anda.\r\nBagi Anda yang ingin menikmati kesejukan air pegunungan, di lokasi ini juga ada satu kolam air dingin yang bersumber dari aliran mata air pegunungan sekitar.\r\nTak hanya itu saja, pemandangan di sekitar pemandian juga akan menenangkan Anda. Rimbunnya hutan hujan tropis mengelilingi pemandian ini, sehingga pemandangan yang asri dan sejuk dapat Anda nikmati selagi berendam. Di beberapa sudut Anda juga bisa melihat beberapa perbukitan yang diselimuti sabana hijau.', 'http://www.gocelebes.com/pemandian-air-panas-lombongo/', '4', 4, 3, 3, 5, 4, '2021-06-16 07:48:02', '2021-05-02 07:33:44'),
(7, 'Perkampungan Bajo Torosiaje', '5000', 'Sangat Bersih', '239', 'Pagi-Sore', 'Banyak', 'Sangat Populer', '', '', '', '', 'Perkampungan Bajo Torosiaje.jpg', 'Kampung yang berdiri sejak 1901 itu dihuni suku Bajo yang dikenal sebagai pelaut tangguh. Kini, Torosiaje menjelma menjadi perkampungan wisata yang elok dan menampilkan pesona lain dari Gorontalo. Torosiaje kini merupakan perkampungan yang terletak 600 meter dari daratan Kecamatan Popayato, Kabupaten Pohuwato, atau sekitar tujuh jam perjalanan darat menuju arah barat dari ibu kota Provinsi Gorontalo. Setiba di dermaga Torosiaje, pengunjung akan disambut ojek perahu yang banyak bersandar di dermaga. Setiap penumpang dipungut Rp 2.000 menuju Torosiaje yang memakan waktu 10 menit berperahu. Rumah-rumah di Torosiaje berupa rumah panggung yang semuanya berbahan kayu. Setiap rumah terhubung dengan koridor yang menjadi jalan utama selebar 2 meter dan panjangnya 2,2 kilometer berpola huruf ”U”. Asyiknya, berkeliling di sela-sela rumah di Torosiaje ibarat menyusuri gang-gang sempit permukiman di Jakarta dengan perahu. Dalam sejarah yang diceritakan secara turun-temurun, toro dalam bahasa Bajo adalah ’tanjung’ dan siaje merupakan julukan kepada seseorang yang berarti ’si aje’ (si haji). Artinya, Torosiaje adalah tanjung yang ditemukan oleh seorang pria bergelar haji dan dipanggil siaje, saat itu. Awal berdirinya Kampung Torosiaje hanya terdapat puluhan jiwa.', 'https://travel.kompas.com/read/2013/07/14/1716025/Torosiaje.Keindahan.di.Teluk.Tomini', '5', 5, 1, 3, 4, 5, '2021-05-02 07:38:37', '2021-05-02 07:38:37'),
(8, 'Pantai Kurenai', '5000', 'Bersih', '12.2', 'Pagi-Malam', 'Sedang', 'Sangat Populer', '', '', '', '', 'Pantai Kurenai.jpeg', 'Pantai Kurenai merupakan pantai yang unik. Apalagi dari namanya saja seakan mengingatkan akan salah satu animasi Jepang. Pantai yang satu ini terletak di Bone Bolango, Gorontalo. Di mana ia memiliki kawasan laut dan pantai yang begitu indah. Selain itu, terdapat berbagai keunikan di sini. Sehingga pengunjungpun bisa puas eksplor keindahan Indonesia.\r\nPantai Kurenai memiliki hamparan pasir putih yang indah. Di mana garis pantainya pun ikut menambah kesan tersendiri. Salah satu daya Tarik dari pantai cantik ini adalah pasirnya yang bertekstur lembut. Selain itu di sekitarnya juga dapat ditemukan pepohonan yang menjulang tinggi.\r\n\r\nTumbuhan tersebut seakan dapat menambah kesan asri di pantai ini. Pasalnya, jajaran pohon tersebut tumbuh subur. Sehingga angin sepoi pun membuat pengunjung merasa rileks. Anda bisa berjalan santai menikmati pemandangan, atau bermain permainan pantai. Apalagi jika ditemani oleh keluarga, pasti akan sangat menyenangkan.', 'https://www.celebes.co/pantai-kurenai-bone-bolango', '5', 4, 3, 5, 3, 5, '2021-05-02 07:45:48', '2021-05-02 07:45:48'),
(9, 'Wisata Bahari Hiu Paus', '25000', 'Sangat Bersih', '12', 'Pagi-Sore', 'Banyak', 'Populer', '', '', '', '', 'Wisata Bahari Hiu Paus.jpeg', 'Fenomena kemunculan hiu paus menjadi berkah bagi warga desa Botubarani, membawa banyak wisatawan berkunjung mengingat hiu paus yang hampir punah. Pengunjung dapat melihat hiu paus berenang di laut bebas di Desa Botubarani, Kecamatan Kabila Bone, Kabupaten Bone Bolange, Gorontalo. Hiu paus di Desa Botubarani sangat jinak dan bersahabat, sehingga pengunjung dapat berenang bersama dengan hiu paus. Untuk masuk ke tempat wisata hiu paus, pengunjung akan dikenai tiket masuk sebesar Rp25.000 per orang, menyewa alat snorkeling dan diving sebesar Rp50.000 per set. Terdapat juga paket untuk minimal empat orang sampai 10 orang, sebesar Rp 250.000 termasuk jemput, tiket masuk dan perahu, dan paket Rp 100.000 termasuk tiket masuk dan perahu. Bila pengunjung ingin berenang bersama hiu paus, harus menyewa paket alat selam sebesar Rp 500.000 per orang sudah termasuk pemandu.', 'https://travel.kompas.com/read/2020/10/08/073900527/25-wisata-gorontalo-wisata-sejarah-hingga-bertemu-hiu-paus-?page=all', '4', 5, 3, 3, 4, 4, '2021-05-02 07:51:22', '2021-05-02 07:51:22'),
(10, 'Taman Wisata Religius Bubohu', '0', 'Sangat Bersih', '10.2', 'Pagi-Sore', 'Banyak', 'Sangat Populer', '', '', '', '', 'Taman Wisata Religius Bubohu.jpg', 'Kehidupan masyarakat Indonesia sangat berkaitan erat dengan agama. Bahkan di beberapa daerah terdapat banyak lokasi yang dijadikan tempat wisata rohani untuk para penganut dari berbagai macam agama yang ada di Indonesia. Sebut saja Kampung Mahmud di daerah Kabupaten Bandung, Buntu Burake di Kabupaten Tana Toraja, serta Sendangsono di Kulonprogo, Yogyakarta. Tempat-tempat tersebut mengedepankan sebuah pengalaman rohani bagi para pengunjung yang singgah untuk berziarah. Selain tempat-tempat yang disebutkan tadi, di Gorontalo juga terdapat satu tempat yang menawarkan pengalaman rohani, terkenal dengan sebutan Desa Bubohu, atau juga dikenal dengan nama Desa Bongo. Desa adat ini terletak di Kecamatan Batudaa Pantai, Kabupaten Gorontalo. Desa Bubohu yang juga merupakan sebuah desa adat berjarak sekitar 35 kilometer dari Bandara Jalaludin, Gorontalo.\r\n\r\nDesa Adat Bubohu yang telah ditetapkan sebagai Desa Wisata Religius oleh Pemerintah Provinsi Gorontalo karena pesona dari wisata budaya yang tersimpan baik di desa ini. Desa adat ini juga merupakan sebuah pesantren alam dimana di dalamnya terdapat para santri yang tengah menimba ilmu agama Islam. Selain mempelajari agama Islam, Desa Adat Bubohu juga merupakan tempat belajar untuk mengenal lebih jauh sejarah dari Kerajaan Gorontalo. Maa Taduwolo, sebuah tempat di dalam lingkungan desa adat ini menyimpan berbagai macam sumber yang berkaitan dengan sejarah Kerajaan Gorontalo. Ketika menyambangi Desa Adat Bubohu, pengunjung akan disambut oleh kumpulan fosil kayu di depan pintu masuk desa yang berbaris rapi di atas permukaan tanah.', 'https://indonesiakaya.com/pustaka-indonesia/mengenal-lebih-dekat-desa-adat-bubohu-di-gorontalo/', '5', 5, 3, 3, 4, 5, '2021-05-02 07:58:05', '2021-05-02 07:58:05'),
(11, 'Pantai Botutonuo', '5000', 'Sangat Bersih', '16.6', 'Pagi-Sore', 'Sangat Banyak', 'Sangat Populer', '', '', '', '', 'Pantai Botutonuo.jpg', 'Desa Botutonuo merupakan sebuah desa yang berlokasi di Kecamatan Kabila Bone. Desa ini  terletak diantara Desa Molintogupo, Desa Modelomo dan masih berada di Teluk Tomini.\r\n\r\nDibalik nama Desa Botutonuo, ternyata desa ini menyimpan keindahan alam dengan adanya pantai yang menakjubkan. Masyarakat sekitar menyadari keberadaan pantai tersebut salah satunya yaitu Pantai Botutonuo.\r\n\r\nPada tahun 2009, Desa Botutonuo ini mulai melakukan pembenahan dan di sulap menjadi sebuah lokasi wisata bahari. Sejak saat itulah mulai banyak wisatawan yang mengunjungi desa atau pantai ini baik dari warga sekitar maupun dari luar wilayah ini.\r\n\r\nUniknya, warga di sinilah yang mulai mengelolanya menjadi sebuah destinasi wisata. Adanya pantai ini pun tak hanya menjadi sebuah lokasi wisata bagi para pengunjung saja, pantai ini juga sangat membantu warga untuk menambah penghasilan perekonomian penduduk setempat.\r\n\r\nKetika sampai di lokasi Pantai Botutonuo, maka Anda akan melihat papan dengan keterangan lorong. Hal ini yang menjadikan berbeda dari pantai lainnya.\r\n\r\nLorong ini sebagai tanda untuk membedakan kawasan pantai Botutonuo yang panjang. Lorong-lorong ini terdiri dari lorong 1 hingga lorong 7, Anda pun dapat memilihnya sesuai dengan keinginan Anda.', 'https://www.pantainesia.com/pantai-botutonuo#sejarah-pantai-botutonuo', '5', 5, 3, 3, 5, 5, '2021-05-02 08:00:42', '2021-05-02 08:00:42'),
(12, 'Air Terjun Ayuhulalo', '5000', 'Bersih', '109', 'Pagi-Sore', 'Sedang', 'Biasa Saja', '', '', '', '', 'Air Terjun Ayuhulalo.jpg', 'Berkunjung ke Gorontalo belum lengkap apabila kamu tidak coba bermain ke wisata alamnya, karena memang provinsi yang satu ini cukup beruntung dengan dianugrahi bentang alam yang sangat menawan. Banyak deretan pantai yang tercecer di berbagai penjuru Gorontalo, bahkan beberapa di antaranya sudah terkenal hingga ke luar negeri. Namun, Gorontalo juga bukan hanya tentang pantai, karena di sana kamu masih bisa menemukan banyak destinasi wisata alam lainnya, salah satunya adalah Air Terjun Ayuhulalo.\r\n\r\nAir Terjun Ayuhulalo tidak terlalu tinggi, bahkan bisa dibilang cukup kecil untuk disebut sebagai air terjun. Namun, justru disitulah letak keunikan dari air terjun yang satu ini, ditambah dengan pesona alamnya yang sangat menawan, seakan mampu menghipnotis para pengunjung untuk betah berlama-lama di sana.', 'https://wisato.id/wisata-alam/air-terjun-ayuhulalo-air-terjun-mini-di-boalemo/', '5', 4, 1, 3, 3, 3, '2021-05-02 08:04:42', '2021-05-02 08:04:42'),
(13, 'Wisata Tangga 2000', '0', 'Biasa Saja', '4.8', 'Pagi-Malam', 'Sedang', 'Biasa Saja', '', '', '', '', 'Wisata Tangga 2000.jpg', 'Tangga 2000 merupakan sebuah objek wisata dengan nama yang cukup unik di Kabupaten Gorontalo. Taman wisata ini menyuguhkan eksotisme Teluk Gorontalo dan menjadi tempat bersantai menikmati senja.\r\nSesuai dengan nama tempat wisata ini yaitu Tangga 2000 maka hal ini mampu menjadi daya tarik tersendiri bagi para wisatawan. Mungkin banyak sekali yang akan bertanya mengenai maksud dari Tangga 2000 ini. Atau bahkan mungkin kebanyakan dari wisatawan maupun masyarakat setempat yang masih mengira bahwa tangga ini memiliki jumlah 2000.\r\n\r\nBagi yang masih beranggapan bahwa objek wisata ini terdiri dari banyaknya tangga, maka mulai saat ini Anda harus berpikir lebih luas lagi. Karena pada hakikatnya objek wisata ini merupakan sebuah bangunan anak tangga yang pembuatannya tersusun dengan bahan material seperti beton.', 'https://www.celebes.co/tangga-2000-gorontalo', '5', 3, 5, 5, 3, 3, '2021-05-02 08:09:03', '2021-05-02 08:09:03'),
(14, 'Museum Pendaratan Pesawat Amphibi Bung Karno', '0', 'Sangat Bersih', '8.8', 'Pagi-Sore', 'Sedang', 'Populer', '', '', '', '', 'Museum Pendaratan Pesawat Amphibi Bung Karno.jpg', 'Museum Pendaratan Pesawat Amphibi Bung Karno merupakan cagar budaya yang terletak di Desa Iluta, Kecamatan Batudaa, berjarak 12 Km dan daoat ditempuh 15 menit dari pusat Kota Gorontalo. Museum yang berukuran 5 x 15 meter ini merupakan rumah yang dibangun pada masa pemerintahan colonial Belanda tahun 1936.Di museum ini, anda akan menemukan berbagai dokumentasi kedatangan Presiden Pertama RI Ir. Soekarno ke Gorontalo dan barang-barang kuno bersejarah. Karena museum ini terletak tepat ditepian Danau Limboto yang memiliki keindahan alam yang sejuk dan tenang sambil memancing ikan di pondok-pondok yang ada disekitar museum.\r\n\r\nLanding museum of Bung Karno is a curtural heritage that is located in Iluta Village, Batudaa Subdistrict. The distance is 12 Km and can be reached 15 minutes from Gorontalo City. The size of this museum is about 5 x 15 meters, it is a house that built in the Dutch Colonial era in 1936.In this museum, you will find the documentation of the arrivalof the First President of Indonesia Ir. Soekarno in Gorontalo and also some historical things from ancient items. This museum is located near the Limboto Lake which has natural beauty that is cool and quiet, it can be enjoyed while fishing in lodges around the museum.', 'https://pariwisata.gorontaloprov.go.id/museum-pendaratan-pesawat-amphibi-bung-karno/#:~:text=Museum%20Pendaratan%20Pesawat%20Amphibi%20Bung%20Karno%20merupakan%20cagar%20budaya%20yang,pemerintahan%20colonial%20Belanda%20tahun%201936.', '5', 5, 4, 3, 3, 4, '2021-05-02 08:17:48', '2021-05-02 08:17:48'),
(15, 'Pulau Saronde', '400000', 'Sangat Bersih', '65', 'Pagi-Malam', 'Banyak', 'Sangat Populer', '', '', '', '', 'Pulau Saronde.jpg', 'Pulau Saronde di Gorontalo – Tiap wilayah memiliki cara tersendiri untuk menarik hati para wisatawan. Ada yang terkenal karena objek wisata berupa pegunungan. Ada juga yang terkenal akan wisata baharinya. Mengingat Indonesia juga disebut-sebut sebagai negara dengan keindahan alam bawah laut luar biasa. Seperti yang ada di Pulau Saronde, Anda bisa melihat bagaimana hamparan keindahan dengan pesona seperti Maladewa atau Maldives.\r\n\r\nBanyak keunikan yang disimpannya yang mana tak bisa dipungkiri bahwa pulau ini bisa menjadi tempat snorkeling andalan dari Gorontalo. Juga sudah tersedia cottage atau Anda yang ingin berkemah dengan pemandangan yang indah. Ada banyak destinasi dengan sejuta pesona yang mirip Maldives, salah satunya adalah Pulau Saronde.\r\nPulau ini memiliki pasir putih dan juga kondisi alam yang bersih. Bahkan juga menjadi salah satu destinasi wisata unggulan yang menawarkan panorama alam dengan keunikan budaya lokal. Faktor penting kenapa wisatawan harus datang ke Pulau ini adalah karena memang bersih dari polusi industri. Meskipun luasnya hanya kurang lebih 1 km saja tetapi pulau ini juga tak pernah mengecewakan tiap orang yang datang. Ada pasir yang putih dan lembut serta ditambahnya batu karang yang tersusun alami.\r\n\r\nAir dari pulau Saronde terlihat begitu jernih yang membuat pengunjung bisa melihat jelas ke dalam air laut. Ada terumbu karang yang berwarna-warni dan memanjakan mata. Ketika berkeliling pulau Anda akan melihat deretan pulau kecil lain seperti Pulau Lampu yang juga menjadi tujuan wisatawan yang datang.', 'https://www.celebes.co/wisata-pulau-saronde', '1', 5, 1, 5, 4, 5, '2021-05-02 08:23:55', '2021-05-02 08:23:55'),
(16, 'Pulau Diyonumo', '0', 'Sangat Bersih', '96.8', 'Pagi-Sore', 'Sedang', 'Sangat Populer', '', '', '', '', 'Pulau Diyonumo.jpg', 'Di Kabupaten Gorontalo Utara yang merupakan wilayah kabupaten termuda di Provinsi Gorontalo, terdapat satu pulau kecil tak berpenghuni yang masih jarang dikunjungi. Pulau ini menyimpan keindahan yang tak kalah cantik dengan wisata lain di Gorontalo. Pulau yang terletak di Desa Deme, Kecamatan Sumalata, Kabupaten Gorontalo ini bernama Pulau Diyonumo. Nama pulaunya mungkin masih sedikit asing di telinga para wisatawan bahkan di telinga warga Gorontalo sekalipun, karena pulau ini terbilang masih perawan dengan belum adanya fasilitas wisata yang biasa ditemukan di tempat-tempat wisata lainnya. Berkemah bersama teman-teman perjalanan di Pulau Diyonumo sangat direkomendasikan, anda dapat puas mengelilingi pulau ini. Untuk menambah pengalaman seru, bisa juga memancing dan membakar rupa-rupa ikan dan hewan laut untuk mengganjal perut setelah seharian berkeliling pulau. Jika tidak mau repot, tak jarang para nelayan mampir ke pulau ini, para pengunjung bisa membeli berbagai macam ikan atau cumi untuk dimasak.\r\n\r\nJika berangkat dari pusat Kota Gorontalo, lokasi Pulau Diyonumo dapat ditempuh dalam waktu dua atau tiga jam perjalanan darat. Setelah menempuh waktu tersebut, pengunjung akan tiba di wilayah Kecamatan Sulamata. Dari sini pengunjung dapat meneruskan perjalanan hingga Desa Deme 2 yang menjadi tempat penyebrangan menuju Pulau Diyonumo. Penyebrangan dilakukan menggunakan kapal kecil milik warga yang biasa dipakai untuk mencari ikan. Penyebrangan hanya menghabiskan waktu kurang dari 15 menit saja. Sesaat tiba di tepi pantai pulau ini, memang nampak biasa, terlihat seperti pantai pada umumnya. Namun jangan terburu-buru, cobalah untuk sedikit mendaki ke bagian bukitnya. Anda akan tercengang dengan keindahan yang ditampilkan dari pulau yang tak berpenghuni ini, hamparan rumput tinggi seakan menyambut hangat siapapun yang datang ke pulau ini. Rerumputan yang tumbuh tinggi dan luas memenuhi puncak bukit, sangat cocok dijadikan tempat untuk berfoto.', 'https://indonesiakaya.com/pustaka-indonesia/pulau-diyonumo-lukisan-alam-indah-nan-elok-di-gorontalo-utara/', '5', 5, 1, 3, 3, 5, '2021-05-02 08:31:54', '2021-05-02 08:31:54'),
(17, 'Dulanga Beach', '20000', 'Sangat Bersih', '13.3', 'Pagi-Malam', 'Banyak', 'Sangat Populer', '', '', '', '', 'Dulanga Beach.jpg', 'Pantai Dulanga mulai dikenal masyarakat sejak tahun 2018. Mulai saat itu, baik pengunjung dari Gorontalo ataupun luar daerah tak henti-hentinya berdatangan. \r\nDulanga sendiri berasal dari kata \'Ulek\' atau alat yang sering digunakan untuk melumatkan rempah-rempah. Masyarakat sekitar menyebut \'Ulek\' sebagai \'Dulanga\'.\r\nPantai Dulanga terletak di Desa Bongo, Kecamatan Batudaa Pantai, Kabupaten Gorontalo, Gorontalo. Destinasi wisata ini menawarkan keindahan pasir putih dan spot foto yang menarik.', 'https://kumparan.com/banthayoid/pantai-dulanga-objek-wisata-pasir-putih-di-gorontalo-1554269549777160664/full', '4', 5, 3, 5, 4, 5, '2021-05-02 08:39:43', '2021-05-02 08:39:43'),
(18, 'Objek Wisata Bukit Arang', '0', 'Bersih', '13.2', 'Pagi-Malam', 'Banyak', 'Populer', '', '', '', '', 'Objek Wisata Bukit Arang.jpg', 'Saat kaki menjejak lokasi terbuka ini, sekilas nampak biasa saja, hanya sebuah tanah gersang tandus kurang lebih seluas lapangan sepakbola .\r\n\r\nTapi jangan salah, tempat yang biasanya menjadi camping ground ini memang biasa, tapi pemandangan yang tersaji benar-benar luar biasa!\r\n\r\nDari puncak bukit, sobat Wigo bisa melihat landskap daratan utama Gorontalo, meliputi wilayah Kabupaten Bone Bolango, Kota Gorontalo dan Kabupaten Gorontalo.\r\n\r\nPersawahan yang membentang luas bak lapangan sepakbola raksasa, indah di pandang mata bersama perbukitan dan pegunungan mengitari di sekelilingnya.\r\nemandangan menakjubkan berupa langit bertaburan bintang yang masih bersih dari polusi, berpadu dengan kerlip lampu kota Gorontalo, sungguh memanjakan mata para traveller.\r\n\r\nSetelah sunset berlalu dan gelap datang, bercengkrama ditemani kopi hangat menikmati perunjukan cahaya lampu Gorontalo akan menjadi momen asyik pelengkap liburan!', 'https://wisatagorontalo.com/bukit-arang-lonuo/', '5', 4, 3, 5, 4, 4, '2021-05-02 08:43:35', '2021-05-02 08:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_31_110914_create_kriteria', 1),
(5, '2021_03_31_111105_create_sub_kriteria', 1),
(6, '2021_04_17_060006_create_data_tempat_wisata', 1),
(7, '2021_04_17_062916_create_data_wisatawan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fariza', 'muhfariza98@gmail.com', '2021-04-18 23:42:22', '$2y$10$ILBvYoBo.3ukDXRUwSXqPOCqay9OT6ih4a.j/HH.wpAw6pOYMQlkW', NULL, '2021-04-18 23:42:22', '2021-04-18 23:42:22'),
(2, 'Admin Ganteng', 'admin@email.com', '2021-04-21 18:14:12', '$2y$10$QxhKc2KUjLbg0.f1RP6JsO88DFG44nIicE5kkeECTaGppQFimUikW', NULL, '2021-04-21 18:14:12', '2021-04-21 18:14:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tempat_wisata`
--
ALTER TABLE `data_tempat_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tempat_wisata`
--
ALTER TABLE `data_tempat_wisata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
