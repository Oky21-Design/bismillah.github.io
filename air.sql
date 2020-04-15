-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 14.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_addjob`
--

CREATE TABLE `activity_addjob` (
  `seq_addjob` varchar(5) NOT NULL,
  `dess_addjob` varchar(255) NOT NULL,
  `pno_addjob` varchar(20) NOT NULL,
  `sno_addjob` varchar(20) NOT NULL,
  `pni_addjob` varchar(20) NOT NULL,
  `sni_addjob` varchar(20) NOT NULL,
  `seq_addjob2` varchar(5) NOT NULL,
  `dess_addjob2` varchar(255) NOT NULL,
  `pno_addjob2` varchar(20) NOT NULL,
  `sno_addjob2` varchar(20) NOT NULL,
  `pni_addjob2` varchar(20) NOT NULL,
  `sni_addjob2` varchar(20) NOT NULL,
  `seq_addjob3` varchar(5) NOT NULL,
  `dess_addjob3` varchar(255) NOT NULL,
  `pno_addjob3` varchar(20) NOT NULL,
  `sno_addjob3` varchar(20) NOT NULL,
  `pni_addjob3` varchar(20) NOT NULL,
  `sni_addjob3` varchar(20) NOT NULL,
  `seq_addjob4` varchar(5) NOT NULL,
  `dess_addjob4` varchar(20) NOT NULL,
  `pno_addjob4` varchar(20) NOT NULL,
  `sno_addjob4` varchar(20) NOT NULL,
  `pni_addjob4` varchar(20) NOT NULL,
  `sni_addjob4` varchar(20) NOT NULL,
  `seq_addjob5` varchar(5) NOT NULL,
  `dess_addjob5` varchar(255) NOT NULL,
  `pno_addjob5` varchar(20) NOT NULL,
  `sno_addjob5` varchar(20) NOT NULL,
  `pni_addjob5` varchar(20) NOT NULL,
  `sni_addjob5` varchar(20) NOT NULL,
  `seq_addjob6` varchar(5) NOT NULL,
  `dess_addjob6` varchar(255) NOT NULL,
  `pno_addjob6` varchar(20) NOT NULL,
  `sno_addjob6` varchar(20) NOT NULL,
  `pni_addjob6` varchar(20) NOT NULL,
  `sni_addjob6` varchar(20) NOT NULL,
  `seq_addjob7` varchar(5) NOT NULL,
  `dess_addjob7` varchar(255) NOT NULL,
  `pno_addjob7` varchar(20) NOT NULL,
  `sno_addjob7` varchar(20) NOT NULL,
  `pni_addjob7` varchar(20) NOT NULL,
  `sni_addjob7` varchar(20) NOT NULL,
  `seq_addjob8` varchar(5) NOT NULL,
  `dess_addjob8` varchar(255) NOT NULL,
  `pno_addjob8` varchar(20) NOT NULL,
  `sno_addjob8` varchar(20) NOT NULL,
  `pni_addjob8` varchar(20) NOT NULL,
  `sni_addjob8` varchar(20) NOT NULL,
  `seq_addjob9` varchar(5) NOT NULL,
  `dess_addjob9` varchar(255) NOT NULL,
  `pno_addjob9` varchar(20) NOT NULL,
  `sno_addjob9` varchar(20) NOT NULL,
  `pni_addjob9` varchar(20) NOT NULL,
  `sni_addjob9` varchar(20) NOT NULL,
  `seq_addjob10` varchar(5) NOT NULL,
  `dess_addjob10` varchar(255) NOT NULL,
  `pno_addjob10` varchar(20) NOT NULL,
  `sno_addjob10` varchar(20) NOT NULL,
  `pni_addjob10` varchar(20) NOT NULL,
  `sni_addjob10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_aml`
--

CREATE TABLE `activity_aml` (
  `seq_aml` varchar(5) NOT NULL,
  `dess_aml` varchar(255) NOT NULL,
  `cat_aml` text NOT NULL,
  `seq_aml2` varchar(5) NOT NULL,
  `dess_aml2` varchar(255) NOT NULL,
  `cat_aml2` text NOT NULL,
  `seq_aml3` varchar(5) NOT NULL,
  `dess_aml3` varchar(255) NOT NULL,
  `cat_aml3` text NOT NULL,
  `seq_aml4` varchar(5) NOT NULL,
  `dess_aml4` text NOT NULL,
  `cat_aml4` text NOT NULL,
  `seq_aml5` varchar(5) NOT NULL,
  `dess_aml5` varchar(255) NOT NULL,
  `cat_aml5` text NOT NULL,
  `seq_aml6` varchar(5) NOT NULL,
  `dess_aml6` varchar(255) NOT NULL,
  `cat_aml6` text NOT NULL,
  `seq_aml7` varchar(5) NOT NULL,
  `dess_aml7` varchar(255) NOT NULL,
  `cat_aml7` text NOT NULL,
  `seq_aml8` varchar(5) NOT NULL,
  `dess_aml8` varchar(255) NOT NULL,
  `cat_aml8` text NOT NULL,
  `seq_aml9` varchar(5) NOT NULL,
  `dess_aml9` varchar(255) NOT NULL,
  `cat_aml9` text NOT NULL,
  `seq_aml10` varchar(5) NOT NULL,
  `dess_aml10` varchar(255) NOT NULL,
  `cat_aml10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_ar`
--

CREATE TABLE `activity_ar` (
  `seq_ar` varchar(5) NOT NULL,
  `dess_ar` varchar(255) NOT NULL,
  `pno_ar` varchar(20) NOT NULL,
  `sno_ar` varchar(20) NOT NULL,
  `pni_ar` varchar(20) NOT NULL,
  `sni_ar` varchar(20) NOT NULL,
  `seq_ar2` varchar(5) NOT NULL,
  `dess_ar2` varchar(255) NOT NULL,
  `pno_ar2` varchar(20) NOT NULL,
  `sno_ar2` varchar(20) NOT NULL,
  `pni_ar2` varchar(20) NOT NULL,
  `sni_ar2` varchar(20) NOT NULL,
  `seq_ar3` varchar(5) NOT NULL,
  `dess_ar3` varchar(255) NOT NULL,
  `pno_ar3` varchar(20) NOT NULL,
  `sno_ar3` varchar(20) NOT NULL,
  `pni_ar3` varchar(20) NOT NULL,
  `sni_ar3` varchar(20) NOT NULL,
  `seq_ar4` varchar(5) NOT NULL,
  `dess_ar4` varchar(20) NOT NULL,
  `pno_ar4` varchar(20) NOT NULL,
  `sno_ar4` varchar(20) NOT NULL,
  `pni_ar4` varchar(20) NOT NULL,
  `sni_ar4` varchar(20) NOT NULL,
  `seq_ar5` varchar(5) NOT NULL,
  `dess_ar5` varchar(255) NOT NULL,
  `pno_ar5` varchar(20) NOT NULL,
  `sno_ar5` varchar(20) NOT NULL,
  `pni_ar5` varchar(20) NOT NULL,
  `sni_ar5` varchar(20) NOT NULL,
  `seq_ar6` varchar(5) NOT NULL,
  `dess_ar6` varchar(255) NOT NULL,
  `pno_ar6` varchar(20) NOT NULL,
  `sno_ar6` varchar(20) NOT NULL,
  `pni_ar6` varchar(20) NOT NULL,
  `sni_ar6` varchar(20) NOT NULL,
  `seq_ar7` varchar(5) NOT NULL,
  `dess_ar7` varchar(255) NOT NULL,
  `pno_ar7` varchar(20) NOT NULL,
  `sno_ar7` varchar(20) NOT NULL,
  `pni_ar7` varchar(20) NOT NULL,
  `sni_ar7` varchar(20) NOT NULL,
  `seq_ar8` varchar(5) NOT NULL,
  `dess_ar8` varchar(255) NOT NULL,
  `pno_ar8` varchar(20) NOT NULL,
  `sno_ar8` varchar(20) NOT NULL,
  `pni_ar8` varchar(20) NOT NULL,
  `sni_ar8` varchar(20) NOT NULL,
  `seq_ar9` varchar(5) NOT NULL,
  `dess_ar9` varchar(255) NOT NULL,
  `pno_ar9` varchar(20) NOT NULL,
  `sno_ar9` varchar(20) NOT NULL,
  `pni_ar9` varchar(20) NOT NULL,
  `sni_ar9` varchar(20) NOT NULL,
  `seq_ar10` varchar(5) NOT NULL,
  `dess_ar10` varchar(255) NOT NULL,
  `pno_ar10` varchar(20) NOT NULL,
  `sno_ar10` varchar(20) NOT NULL,
  `pni_ar10` varchar(20) NOT NULL,
  `sni_ar10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_logbook`
--

CREATE TABLE `activity_logbook` (
  `seq_logbook` varchar(5) NOT NULL,
  `dess_logbook` varchar(255) NOT NULL,
  `pno_logbook` varchar(20) NOT NULL,
  `sno_logbook` varchar(20) NOT NULL,
  `pni_logbook` varchar(20) NOT NULL,
  `sni_logbook` varchar(20) NOT NULL,
  `seq_logbook2` varchar(5) NOT NULL,
  `dess_logbook2` varchar(255) NOT NULL,
  `pno_logbook2` varchar(20) NOT NULL,
  `sno_logbook2` varchar(20) NOT NULL,
  `pni_logbook2` varchar(20) NOT NULL,
  `sni_logbook2` varchar(20) NOT NULL,
  `seq_logbook3` varchar(5) NOT NULL,
  `dess_logbook3` varchar(255) NOT NULL,
  `pno_logbook3` varchar(20) NOT NULL,
  `sno_logbook3` varchar(20) NOT NULL,
  `pni_logbook3` varchar(20) NOT NULL,
  `sni_logbook3` varchar(20) NOT NULL,
  `seq_logbook4` varchar(5) NOT NULL,
  `dess_logbook4` varchar(20) NOT NULL,
  `pno_logbook4` varchar(20) NOT NULL,
  `sno_logbook4` varchar(20) NOT NULL,
  `pni_logbook4` varchar(20) NOT NULL,
  `sni_logbook4` varchar(20) NOT NULL,
  `seq_logbook5` varchar(5) NOT NULL,
  `dess_logbook5` varchar(255) NOT NULL,
  `pno_logbook5` varchar(20) NOT NULL,
  `sno_logbook5` varchar(20) NOT NULL,
  `pni_logbook5` varchar(20) NOT NULL,
  `sni_logbook5` varchar(20) NOT NULL,
  `seq_logbook6` varchar(5) NOT NULL,
  `dess_logbook6` varchar(255) NOT NULL,
  `pno_logbook6` varchar(20) NOT NULL,
  `sno_logbook6` varchar(20) NOT NULL,
  `pni_logbook6` varchar(20) NOT NULL,
  `sni_logbook6` varchar(20) NOT NULL,
  `seq_logbook7` varchar(5) NOT NULL,
  `dess_logbook7` varchar(255) NOT NULL,
  `pno_logbook7` varchar(20) NOT NULL,
  `sno_logbook7` varchar(20) NOT NULL,
  `pni_logbook7` varchar(20) NOT NULL,
  `sni_logbook7` varchar(20) NOT NULL,
  `seq_logbook8` varchar(5) NOT NULL,
  `dess_logbook8` varchar(255) NOT NULL,
  `pno_logbook8` varchar(20) NOT NULL,
  `sno_logbook8` varchar(20) NOT NULL,
  `pni_logbook8` varchar(20) NOT NULL,
  `sni_logbook8` varchar(20) NOT NULL,
  `seq_logbook9` varchar(5) NOT NULL,
  `dess_logbook9` varchar(255) NOT NULL,
  `pno_logbook9` varchar(20) NOT NULL,
  `sno_logbook9` varchar(20) NOT NULL,
  `pni_logbook9` varchar(20) NOT NULL,
  `sni_logbook9` varchar(20) NOT NULL,
  `seq_logbook10` varchar(5) NOT NULL,
  `dess_logbook10` varchar(255) NOT NULL,
  `pno_logbook10` varchar(20) NOT NULL,
  `sno_logbook10` varchar(20) NOT NULL,
  `pni_logbook10` varchar(20) NOT NULL,
  `sni_logbook10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_msao`
--

CREATE TABLE `activity_msao` (
  `seq_msao` varchar(5) NOT NULL,
  `dess_msao` varchar(255) NOT NULL,
  `pno_msao` varchar(20) NOT NULL,
  `sno_msao` varchar(20) NOT NULL,
  `pni_msao` varchar(20) NOT NULL,
  `sni_msao` varchar(20) NOT NULL,
  `seq_msao2` varchar(5) NOT NULL,
  `dess_msao2` varchar(255) NOT NULL,
  `pno_msao2` varchar(20) NOT NULL,
  `sno_msao2` varchar(20) NOT NULL,
  `pni_msao2` varchar(20) NOT NULL,
  `sni_msao2` varchar(20) NOT NULL,
  `seq_msao3` varchar(5) NOT NULL,
  `dess_msao3` varchar(255) NOT NULL,
  `pno_msao3` varchar(20) NOT NULL,
  `sno_msao3` varchar(20) NOT NULL,
  `pni_msao3` varchar(20) NOT NULL,
  `sni_msao3` varchar(20) NOT NULL,
  `seq_msao4` varchar(5) NOT NULL,
  `dess_msao4` varchar(20) NOT NULL,
  `pno_msao4` varchar(20) NOT NULL,
  `sno_msao4` varchar(20) NOT NULL,
  `pni_msao4` varchar(20) NOT NULL,
  `sni_msao4` varchar(20) NOT NULL,
  `seq_msao5` varchar(5) NOT NULL,
  `dess_msao5` varchar(255) NOT NULL,
  `pno_msao5` varchar(20) NOT NULL,
  `sno_msao5` varchar(20) NOT NULL,
  `pni_msao5` varchar(20) NOT NULL,
  `sni_msao5` varchar(20) NOT NULL,
  `seq_msao6` varchar(5) NOT NULL,
  `dess_msao6` varchar(255) NOT NULL,
  `pno_msao6` varchar(20) NOT NULL,
  `sno_msao6` varchar(20) NOT NULL,
  `pni_msao6` varchar(20) NOT NULL,
  `sni_msao6` varchar(20) NOT NULL,
  `seq_msao7` varchar(5) NOT NULL,
  `dess_msao7` varchar(255) NOT NULL,
  `pno_msao7` varchar(20) NOT NULL,
  `sno_msao7` varchar(20) NOT NULL,
  `pni_msao7` varchar(20) NOT NULL,
  `sni_msao7` varchar(20) NOT NULL,
  `seq_msao8` varchar(5) NOT NULL,
  `dess_msao8` varchar(255) NOT NULL,
  `pno_msao8` varchar(20) NOT NULL,
  `sno_msao8` varchar(20) NOT NULL,
  `pni_msao8` varchar(20) NOT NULL,
  `sni_msao8` varchar(20) NOT NULL,
  `seq_msao9` varchar(5) NOT NULL,
  `dess_msao9` varchar(255) NOT NULL,
  `pno_msao9` varchar(20) NOT NULL,
  `sno_msao9` varchar(20) NOT NULL,
  `pni_msao9` varchar(20) NOT NULL,
  `sni_msao9` varchar(20) NOT NULL,
  `seq_msao10` varchar(5) NOT NULL,
  `dess_msao10` varchar(255) NOT NULL,
  `pno_msao10` varchar(20) NOT NULL,
  `sno_msao10` varchar(20) NOT NULL,
  `pni_msao10` varchar(20) NOT NULL,
  `sni_msao10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `airframe`
--

CREATE TABLE `airframe` (
  `id` int(11) NOT NULL,
  `seo_one` int(11) NOT NULL,
  `seo_two` int(11) NOT NULL,
  `bwpb_one` int(11) NOT NULL,
  `bwpa_one` int(11) NOT NULL,
  `bwpb_two` int(11) NOT NULL,
  `bwpa_two` int(11) NOT NULL,
  `hydra` int(11) NOT NULL,
  `fob` int(11) NOT NULL,
  `cop` int(11) NOT NULL,
  `rc` text NOT NULL,
  `txtrc` varchar(255) NOT NULL,
  `sol` text NOT NULL,
  `txtsol` varchar(255) NOT NULL,
  `before_com` text NOT NULL,
  `txtbefore_com` varchar(255) NOT NULL,
  `after_com` text NOT NULL,
  `txtafter_com` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `avionic`
--

CREATE TABLE `avionic` (
  `id` int(11) NOT NULL,
  `head` int(11) NOT NULL,
  `b_head` int(11) NOT NULL,
  `mbv` decimal(4,1) NOT NULL,
  `ebv` decimal(4,1) NOT NULL,
  `pec` text NOT NULL,
  `txtpec` varchar(255) NOT NULL,
  `eec` text NOT NULL,
  `txteec` varchar(255) NOT NULL,
  `mfc` text NOT NULL,
  `txtmfc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabin_problem`
--

CREATE TABLE `cabin_problem` (
  `id` int(11) NOT NULL,
  `hil` varchar(255) DEFAULT NULL,
  `exp_cml` date DEFAULT NULL,
  `cat` text DEFAULT NULL,
  `hil2` varchar(255) DEFAULT NULL,
  `exp_cml2` date DEFAULT NULL,
  `cat2` text DEFAULT NULL,
  `hil3` varchar(255) DEFAULT NULL,
  `exp_cml3` date DEFAULT NULL,
  `cat3` text DEFAULT NULL,
  `hil4` varchar(255) NOT NULL,
  `exp_cml4` date NOT NULL,
  `cat4` text NOT NULL,
  `hil5` varchar(255) NOT NULL,
  `exp_cml5` date NOT NULL,
  `cat5` text NOT NULL,
  `hil6` varchar(255) NOT NULL,
  `exp_cml6` date NOT NULL,
  `cat6` text NOT NULL,
  `hil7` varchar(255) NOT NULL,
  `exp_cml7` date NOT NULL,
  `cat7` text NOT NULL,
  `hil8` varchar(255) NOT NULL,
  `exp_cml8` date NOT NULL,
  `cat8` text NOT NULL,
  `hil9` varchar(255) NOT NULL,
  `exp_cml9` date NOT NULL,
  `cat9` text NOT NULL,
  `hil10` varchar(255) NOT NULL,
  `exp_cml10` date NOT NULL,
  `cat10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabin_tools`
--

CREATE TABLE `cabin_tools` (
  `id` int(11) NOT NULL,
  `lavatory` varchar(10) NOT NULL,
  `txtlavatory` varchar(255) NOT NULL,
  `scc` varchar(10) NOT NULL,
  `txtscc` varchar(255) NOT NULL,
  `ea` varchar(10) NOT NULL,
  `txtea` varchar(255) NOT NULL,
  `carpet_co` varchar(10) NOT NULL,
  `txtcarpet_co` varchar(255) NOT NULL,
  `cabin_cl` varchar(10) NOT NULL,
  `txtcabin_cl` varchar(255) NOT NULL,
  `ee` varchar(10) NOT NULL,
  `txtee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `cor` date NOT NULL,
  `coa` date NOT NULL,
  `aasl` date NOT NULL,
  `ci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `flykitstatus`
--

CREATE TABLE `flykitstatus` (
  `id` int(11) NOT NULL,
  `mw_isn` varchar(255) NOT NULL,
  `mw_ipn` varchar(255) NOT NULL,
  `mw_tanggal` date NOT NULL,
  `nw_isn` varchar(255) NOT NULL,
  `nw_ipn` varchar(255) NOT NULL,
  `nw_tanggal` date NOT NULL,
  `mtw_isn` varchar(255) NOT NULL,
  `mtw_ipn` varchar(255) NOT NULL,
  `mtw_tanggal` date NOT NULL,
  `ntw_isn` varchar(255) NOT NULL,
  `ntw_ipn` varchar(255) NOT NULL,
  `ntw_tanggal` date NOT NULL,
  `nmj_isn` varchar(255) NOT NULL,
  `nmj_ipn` varchar(255) NOT NULL,
  `nmj_tanggal` date NOT NULL,
  `mat_isn` varchar(255) NOT NULL,
  `mat_ipn` varchar(255) NOT NULL,
  `mat_tanggal` date NOT NULL,
  `nat_isn` varchar(255) NOT NULL,
  `nat_ipn` varchar(255) NOT NULL,
  `nat_tanggal` date NOT NULL,
  `tpg_isn` varchar(255) NOT NULL,
  `tpg_ipn` varchar(255) NOT NULL,
  `tpg_tanggal` date NOT NULL,
  `css_isn` varchar(255) NOT NULL,
  `css_ipn` varchar(255) NOT NULL,
  `css_pcs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode`
--

CREATE TABLE `kode` (
  `id` int(11) NOT NULL,
  `id_pesawat` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode`
--

INSERT INTO `kode` (`id`, `id_pesawat`, `nama`) VALUES
(1, 'GARUDA', 'PK-GAC'),
(2, 'GARUDA', 'PK-GAD'),
(3, 'GARUDA', 'PK-GAE'),
(4, 'GARUDA', 'PK-GAF'),
(5, 'GARUDA', 'PK-GAH'),
(6, 'GARUDA', 'PK-GAI'),
(7, 'GARUDA', 'PK-GAJ'),
(8, 'GARUDA', 'PK-GAK'),
(9, 'GARUDA', 'PK-GAL'),
(10, 'GARUDA', 'PK-GAM'),
(11, 'GARUDA', 'PK-GAN'),
(12, 'GARUDA', 'PK-GAO'),
(13, 'GARUDA', 'PK-GAQ'),
(14, 'CITILINK', 'PK-GJA'),
(15, 'CITILINK', 'PK-GJP'),
(16, 'CITILINK', 'PK-GJR'),
(17, 'CITILINK', 'PK-GJS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab_report`
--

CREATE TABLE `lab_report` (
  `id` int(11) UNSIGNED NOT NULL,
  `pesawat` text DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `sampling_date` date DEFAULT NULL,
  `next_date` date DEFAULT NULL,
  `no_or` int(20) DEFAULT NULL,
  `tan` decimal(4,2) DEFAULT NULL,
  `action_tan` varchar(255) DEFAULT NULL,
  `wc` decimal(4,2) DEFAULT NULL,
  `action_wc` varchar(255) DEFAULT NULL,
  `density` int(3) DEFAULT NULL,
  `action_density` varchar(255) DEFAULT NULL,
  `kv` decimal(4,1) DEFAULT NULL,
  `action_kv` varchar(255) DEFAULT NULL,
  `cc` int(3) DEFAULT NULL,
  `action_cc` varchar(255) DEFAULT NULL,
  `ec` decimal(4,2) DEFAULT NULL,
  `action_ec` varchar(255) DEFAULT NULL,
  `nas_class` int(3) DEFAULT NULL,
  `particle_i` int(3) DEFAULT NULL,
  `particle_ii` int(3) DEFAULT NULL,
  `particle_iii` int(3) DEFAULT NULL,
  `particle_iv` int(3) DEFAULT NULL,
  `particle_v` int(3) DEFAULT NULL,
  `action_particle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lab_report`
--

INSERT INTO `lab_report` (`id`, `pesawat`, `kode`, `sampling_date`, `next_date`, `no_or`, `tan`, `action_tan`, `wc`, `action_wc`, `density`, `action_density`, `kv`, `action_kv`, `cc`, `action_cc`, `ec`, `action_ec`, `nas_class`, `particle_i`, `particle_ii`, `particle_iii`, `particle_iv`, `particle_v`, `action_particle`) VALUES
(0, NULL, NULL, NULL, NULL, NULL, '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '0.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '1.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '1.51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '1.60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, '1.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12.5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesawat`
--

CREATE TABLE `pesawat` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesawat`
--

INSERT INTO `pesawat` (`id`, `nama`) VALUES
('CITILINK', 'CITILINK'),
('GARUDA', 'GARUDA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `ar` varchar(255) NOT NULL,
  `ar2` varchar(255) NOT NULL,
  `mechanic` varchar(255) NOT NULL,
  `pesawat` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `mt` varchar(255) NOT NULL,
  `station` varchar(255) NOT NULL,
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `tanggal`, `ar`, `ar2`, `mechanic`, `pesawat`, `kode`, `mt`, `station`, `id_laporan`) VALUES
(1, '2020-03-11', 'sada', 'dsad', 'asdsad', 'CITILINK', 'PK-GJA', 'BD', 'PLM', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampung_all`
--

CREATE TABLE `tampung_all` (
  `id` int(11) NOT NULL,
  `ar` text NOT NULL,
  `ar2` text NOT NULL,
  `mechanic` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pesawat` text NOT NULL,
  `kode` text NOT NULL,
  `mt` text NOT NULL,
  `station` text NOT NULL,
  `sgb_one` int(4) NOT NULL,
  `last_inspect_one` date NOT NULL,
  `sgb_two` int(4) NOT NULL,
  `last_inspect_two` date NOT NULL,
  `fct_afh` int(4) NOT NULL,
  `fct_normal` int(4) NOT NULL,
  `fdt_afh` int(4) NOT NULL,
  `fdt_normal` int(4) NOT NULL,
  `cct_afh` int(4) NOT NULL,
  `cct_normal` int(4) NOT NULL,
  `cmt_afh` int(4) NOT NULL,
  `cmt_normal` int(4) NOT NULL,
  `cdt_afh` int(4) NOT NULL,
  `cdt_normal` int(4) NOT NULL,
  `fueldraining` text NOT NULL,
  `due_dates` date NOT NULL,
  `mbv` decimal(11,1) NOT NULL,
  `ebv` int(4) NOT NULL,
  `seo_one` int(4) NOT NULL,
  `seo_two` int(4) NOT NULL,
  `hydra` int(4) NOT NULL,
  `fob` int(4) NOT NULL,
  `cop` int(4) NOT NULL,
  `nw_bi` int(4) NOT NULL,
  `nw_ai` int(4) NOT NULL,
  `nw_bii` int(4) NOT NULL,
  `nw_aii` int(4) NOT NULL,
  `lmw_bi` int(4) NOT NULL,
  `lmw_ai` int(4) NOT NULL,
  `lmw_bi_rl` text NOT NULL,
  `lmw_bii` int(4) NOT NULL,
  `lmw_aii` int(4) NOT NULL,
  `lmw_bii_rl` text NOT NULL,
  `rmw_biii` int(4) NOT NULL,
  `rmw_aiii` int(4) NOT NULL,
  `rmw_biii_rl` text NOT NULL,
  `rmw_biv` int(4) NOT NULL,
  `rmw_aiv` int(4) NOT NULL,
  `rmw_biv_rl` text NOT NULL,
  `bwpb_one` int(4) NOT NULL,
  `bwpa_one` int(4) NOT NULL,
  `bwpb_two` int(4) NOT NULL,
  `bwpa_two` int(4) NOT NULL,
  `b_head` int(4) NOT NULL,
  `head` int(4) NOT NULL,
  `before_com` text NOT NULL,
  `txtbefore_com` varchar(255) NOT NULL,
  `after_com` text NOT NULL,
  `txtafter_com` varchar(255) NOT NULL,
  `pec` text NOT NULL,
  `eec` text NOT NULL,
  `mfc` text NOT NULL,
  `rc` text NOT NULL,
  `sol` text NOT NULL,
  `txtpec` varchar(255) NOT NULL,
  `txteec` varchar(255) NOT NULL,
  `txtmfc` varchar(255) NOT NULL,
  `txtrc` varchar(255) NOT NULL,
  `txtsol` varchar(255) NOT NULL,
  `cor` date NOT NULL,
  `coa` date NOT NULL,
  `aasl` date NOT NULL,
  `ci` date NOT NULL,
  `hil` text NOT NULL,
  `cat` text NOT NULL,
  `exp_cml` date NOT NULL,
  `carpet_co` text NOT NULL,
  `scc` text NOT NULL,
  `cabin_cl` text NOT NULL,
  `ea` text NOT NULL,
  `ee` text NOT NULL,
  `txtscc` varchar(255) NOT NULL,
  `txtea` varchar(255) NOT NULL,
  `txtcarpet_co` varchar(255) NOT NULL,
  `txtcabin_cl` varchar(255) NOT NULL,
  `txtee` varchar(255) NOT NULL,
  `mw_ipn` varchar(20) NOT NULL,
  `mw_isn` varchar(20) NOT NULL,
  `mw_tanggal` date NOT NULL,
  `nw_ipn` varchar(20) NOT NULL,
  `nw_isn` varchar(20) NOT NULL,
  `nw_tanggal` date NOT NULL,
  `mtw_ipn` varchar(20) NOT NULL,
  `mtw_isn` varchar(20) NOT NULL,
  `mtw_tanggal` date NOT NULL,
  `ntw_ipn` varchar(20) NOT NULL,
  `ntw_isn` varchar(20) NOT NULL,
  `ntw_tanggal` date NOT NULL,
  `nmj_ipn` varchar(20) NOT NULL,
  `nmj_isn` varchar(20) NOT NULL,
  `nmj_tanggal` date NOT NULL,
  `mat_ipn` varchar(20) NOT NULL,
  `mat_isn` varchar(20) NOT NULL,
  `mat_tanggal` date NOT NULL,
  `nat_ipn` varchar(20) NOT NULL,
  `nat_isn` varchar(20) NOT NULL,
  `nat_tanggal` date NOT NULL,
  `tpg_ipn` varchar(20) NOT NULL,
  `tpg_isn` varchar(20) NOT NULL,
  `tpg_tanggal` date NOT NULL,
  `css_ipn` varchar(20) NOT NULL,
  `css_isn` varchar(20) NOT NULL,
  `css_pcs` varchar(20) NOT NULL,
  `seq_ar` varchar(3) NOT NULL,
  `dess_ar` varchar(255) NOT NULL,
  `pno_ar` varchar(20) NOT NULL,
  `sno_ar` varchar(20) NOT NULL,
  `pni_ar` varchar(20) NOT NULL,
  `sni_ar` varchar(20) NOT NULL,
  `seq_log` varchar(20) NOT NULL,
  `dess_logbook` varchar(255) NOT NULL,
  `pno_logbook` varchar(20) NOT NULL,
  `sno_logbook` varchar(20) NOT NULL,
  `pni_logbook` varchar(20) NOT NULL,
  `sni_logbook` varchar(20) NOT NULL,
  `seq_addjob` varchar(3) NOT NULL,
  `dess_addjob` varchar(255) NOT NULL,
  `pno_addjob` varchar(20) NOT NULL,
  `sno_addjob` varchar(20) NOT NULL,
  `pni_addjob` varchar(20) NOT NULL,
  `sni_addjob` varchar(20) NOT NULL,
  `seq_msao` varchar(3) NOT NULL,
  `dess_msao` varchar(255) NOT NULL,
  `pno_msao` varchar(20) NOT NULL,
  `sno_msao` varchar(20) NOT NULL,
  `pni_msao` varchar(20) NOT NULL,
  `sni_msao` varchar(20) NOT NULL,
  `seq_aml` varchar(20) NOT NULL,
  `dess_aml` varchar(255) NOT NULL,
  `cat_aml` varchar(10) NOT NULL,
  `hil_aml` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tampung_all`
--

INSERT INTO `tampung_all` (`id`, `ar`, `ar2`, `mechanic`, `tanggal`, `pesawat`, `kode`, `mt`, `station`, `sgb_one`, `last_inspect_one`, `sgb_two`, `last_inspect_two`, `fct_afh`, `fct_normal`, `fdt_afh`, `fdt_normal`, `cct_afh`, `cct_normal`, `cmt_afh`, `cmt_normal`, `cdt_afh`, `cdt_normal`, `fueldraining`, `due_dates`, `mbv`, `ebv`, `seo_one`, `seo_two`, `hydra`, `fob`, `cop`, `nw_bi`, `nw_ai`, `nw_bii`, `nw_aii`, `lmw_bi`, `lmw_ai`, `lmw_bi_rl`, `lmw_bii`, `lmw_aii`, `lmw_bii_rl`, `rmw_biii`, `rmw_aiii`, `rmw_biii_rl`, `rmw_biv`, `rmw_aiv`, `rmw_biv_rl`, `bwpb_one`, `bwpa_one`, `bwpb_two`, `bwpa_two`, `b_head`, `head`, `before_com`, `txtbefore_com`, `after_com`, `txtafter_com`, `pec`, `eec`, `mfc`, `rc`, `sol`, `txtpec`, `txteec`, `txtmfc`, `txtrc`, `txtsol`, `cor`, `coa`, `aasl`, `ci`, `hil`, `cat`, `exp_cml`, `carpet_co`, `scc`, `cabin_cl`, `ea`, `ee`, `txtscc`, `txtea`, `txtcarpet_co`, `txtcabin_cl`, `txtee`, `mw_ipn`, `mw_isn`, `mw_tanggal`, `nw_ipn`, `nw_isn`, `nw_tanggal`, `mtw_ipn`, `mtw_isn`, `mtw_tanggal`, `ntw_ipn`, `ntw_isn`, `ntw_tanggal`, `nmj_ipn`, `nmj_isn`, `nmj_tanggal`, `mat_ipn`, `mat_isn`, `mat_tanggal`, `nat_ipn`, `nat_isn`, `nat_tanggal`, `tpg_ipn`, `tpg_isn`, `tpg_tanggal`, `css_ipn`, `css_isn`, `css_pcs`, `seq_ar`, `dess_ar`, `pno_ar`, `sno_ar`, `pni_ar`, `sni_ar`, `seq_log`, `dess_logbook`, `pno_logbook`, `sno_logbook`, `pni_logbook`, `sni_logbook`, `seq_addjob`, `dess_addjob`, `pno_addjob`, `sno_addjob`, `pni_addjob`, `sni_addjob`, `seq_msao`, `dess_msao`, `pno_msao`, `sno_msao`, `pni_msao`, `sni_msao`, `seq_aml`, `dess_aml`, `cat_aml`, `hil_aml`) VALUES
(1, 'ANDY', 'ANDY', 'ANDY', '2020-01-01', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 122, '1212-12-12', 121212, '1212-12-12', 121212, 12, 121, 12, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(2, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 2, '1212-12-12', 2, '1212-12-12', 12, 12, 12, 12, 12, 12, 12, 12, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(3, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'GARUDA', 'PK-GAC', 'BD', 'CGK', 2, '1212-12-12', 2, '1212-12-12', 12, 12, 12, 12, 12, 12, 12, 12, 12, 21, 'Nill', '2020-01-01', '35.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(4, 'ANDY', 'ANDY', 'ANDY', '2020-01-03', 'GARUDA', 'PK-GAC', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 15, 20, 18, 2, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(5, 'ANDY', 'ANDY', 'ANDY', '2020-01-03', 'GARUDA', 'PK-GAD', 'BD', 'CGK', 1, '2020-01-01', 1, '2020-01-01', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(6, 'ANDY', 'ANDY', 'ANDY', '2020-01-04', 'GARUDA', 'PK-GAD', 'BD', 'CGK', 2, '1212-12-12', 2, '1212-12-12', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(7, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJP', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 121, 2, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(8, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJP', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(9, 'ANDY', 'ANDY', 'ANDY', '2020-01-04', 'GARUDA', 'PK-GAC', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 10, 11, 18, 2, 12, 12, 12, 12, 'Nill', '2020-01-01', '26.0', 26, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 10, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(10, 'ANDY', 'ANDY', 'ANDY', '2020-01-16', 'CITILINK', 'PK-GJR', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(11, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJS', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(12, 'ANDY', 'ANDY', 'ANDY', '2020-01-09', 'CITILINK', 'PK-GJS', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(15, 'ANDY', 'ANDY', 'ANDY', '2020-01-01', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 122, '1212-12-12', 121212, '1212-12-12', 121212, 12, 121, 12, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(16, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 2, '1212-12-12', 2, '1212-12-12', 12, 12, 12, 12, 12, 12, 12, 12, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(17, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'GARUDA', 'PK-GJA', 'BD', 'CGK', 2, '1212-12-12', 2, '1212-12-12', 12, 12, 12, 12, 12, 12, 12, 12, 12, 21, 'Nill', '2020-01-01', '35.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(18, 'ANDY', 'ANDY', 'ANDY', '2020-01-03', 'GARUDA', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 15, 20, 18, 2, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(19, 'ANDY', 'ANDY', 'ANDY', '2020-01-03', 'GARUDA', 'PK-GJA', 'BD', 'CGK', 1, '2020-01-01', 1, '2020-01-01', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(20, 'ANDY', 'ANDY', 'ANDY', '2020-01-04', 'GARUDA', 'PK-GJA', 'BD', 'CGK', 2, '1212-12-12', 2, '1212-12-12', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(21, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 121, 2, 12, 12, 12, 12, 12, 12, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(22, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(23, 'ANDY', 'ANDY', 'ANDY', '2020-01-04', 'GARUDA', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 15, 20, 18, 2, 12, 12, 12, 12, 'Nill', '2020-01-01', '32.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(24, 'ANDY', 'ANDY', 'ANDY', '2020-01-16', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(25, 'ANDY', 'ANDY', 'ANDY', '2020-01-02', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(26, 'ANDY', 'ANDY', 'ANDY', '2020-01-09', 'CITILINK', 'PK-GJA', 'BD', 'CGK', 1, '1212-12-12', 1, '1212-12-12', 12, 12, 12, 12, 12, 12, 1212, 1, 12, 21, 'Nill', '2020-01-01', '27.0', 25, 1, 1, 1, 1, 1, 65, 65, 65, 65, 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 125, 125, 'R00', 15, 17, 20, 16, 0, 1, '', '', '', '', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '', '', '2020-01-01', '2020-01-01', '2020-01-02', '2020-02-20', '', '', '0000-00-00', 'No Finding', 'No Finding', 'No Finding', 'No Finding', 'No Finding', '', '', '', '', '', '2382193', '912392138', '2020-02-20', '23123', '12321', '2020-02-29', '1231', '12313', '2020-02-20', '231310', '1232103', '2020-02-20', '2310', '123210', '2020-02-20', '120321', '120321', '2020-02-20', '20202', '2002', '2020-02-20', '1230', '120321', '2020-02-20', '1023', '1023', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', 'AWD', 'A', 'No Finding'),
(28, '', '', '', NULL, 'GARUDA', 'PK-GAI', '', '', 0, '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', '0.0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', NULL, 'CITILINK', 'PK-GJA', '', '', 0, '0000-00-00', 0, '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00', '0.0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tire_pressure`
--

CREATE TABLE `tire_pressure` (
  `id` int(11) NOT NULL,
  `due_dates` date NOT NULL,
  `nw_bi` int(11) NOT NULL,
  `nw_ai` int(11) NOT NULL,
  `nw_bii` int(11) NOT NULL,
  `nw_aii` int(11) NOT NULL,
  `lmw_bi` int(11) NOT NULL,
  `lmw_ai` int(11) NOT NULL,
  `lmw_bi_rl` text NOT NULL,
  `lmw_bii` int(11) NOT NULL,
  `lmw_aii` int(11) NOT NULL,
  `lmw_bii_rl` text NOT NULL,
  `rmw_biii` int(11) NOT NULL,
  `rmw_aiii` int(11) NOT NULL,
  `rmw_biii_rl` text NOT NULL,
  `rmw_biv` int(11) NOT NULL,
  `rmw_aiv` int(11) NOT NULL,
  `rmw_biv_rl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `_nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `_nama`) VALUES
(1, 'andy', 'andy123', 'ANDY'),
(2, 'dimas', 'dimas123', 'DIMAS'),
(3, 'oky', 'oky123', 'OKY'),
(4, 'yordi', 'yordi123', 'YORDI'),
(5, 'rofiq', 'rofiq123', 'ROFIQ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `weekly_report`
--

CREATE TABLE `weekly_report` (
  `id` int(11) NOT NULL,
  `sgb_one` int(11) NOT NULL,
  `last_inspect_one` date NOT NULL,
  `sgb_two` int(11) NOT NULL,
  `last_inspect_two` date NOT NULL,
  `fct_afh` int(11) NOT NULL,
  `fct_normal` int(11) NOT NULL,
  `fdt_afh` int(11) NOT NULL,
  `fdt_normal` int(11) NOT NULL,
  `cct_afh` int(11) NOT NULL,
  `cct_normal` int(11) NOT NULL,
  `cmt_afh` int(11) NOT NULL,
  `cmt_normal` int(11) NOT NULL,
  `cdt_afh` int(11) NOT NULL,
  `cdt_normal` int(11) NOT NULL,
  `fueldraining` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `airframe`
--
ALTER TABLE `airframe`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `avionic`
--
ALTER TABLE `avionic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cabin_problem`
--
ALTER TABLE `cabin_problem`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cabin_tools`
--
ALTER TABLE `cabin_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `flykitstatus`
--
ALTER TABLE `flykitstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tampung_all`
--
ALTER TABLE `tampung_all`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tire_pressure`
--
ALTER TABLE `tire_pressure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `airframe`
--
ALTER TABLE `airframe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `avionic`
--
ALTER TABLE `avionic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cabin_problem`
--
ALTER TABLE `cabin_problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cabin_tools`
--
ALTER TABLE `cabin_tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `flykitstatus`
--
ALTER TABLE `flykitstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tampung_all`
--
ALTER TABLE `tampung_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tire_pressure`
--
ALTER TABLE `tire_pressure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
