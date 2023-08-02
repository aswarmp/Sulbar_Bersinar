-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2023 pada 18.17
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `assesment`
--

CREATE TABLE `assesment` (
  `id_assesment` int(15) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `catatan` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site administrator'),
(2, 'layanan', 'admin layanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 01:27:54', 1),
(2, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 01:31:48', 1),
(3, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 01:31:50', 1),
(4, '::1', 'macoa@gmail.com', 5, '2023-07-10 01:48:20', 1),
(5, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 02:11:18', 1),
(6, '::1', 'Macoa@gmail.com', 6, '2023-07-10 02:23:51', 1),
(7, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 02:24:42', 1),
(8, '::1', 'Macoa@gmail.com', 6, '2023-07-10 02:38:42', 1),
(9, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 02:39:17', 1),
(10, '::1', 'Macoa@gmail.com', 6, '2023-07-10 02:53:29', 1),
(11, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 02:53:58', 1),
(12, '::1', 'Macoa@gmail.com', 6, '2023-07-10 02:54:26', 1),
(13, '::1', 'aswarmp60@gmail.com', 4, '2023-07-10 02:54:55', 1),
(14, '::1', 'aswarmp60@gmail.com', NULL, '2023-07-11 00:04:48', 0),
(15, '::1', 'aswarmp60@gmail.com', NULL, '2023-07-11 00:06:46', 0),
(16, '::1', 'aswarmp60@gmail.com', NULL, '2023-07-11 00:16:25', 0),
(17, '::1', 'aswarmp60@gmail.com', 7, '2023-07-11 00:17:06', 1),
(18, '::1', 'aswarmp60@gmail.com', 7, '2023-07-11 00:19:14', 1),
(19, '::1', 'aswarmp60@gmail.com', NULL, '2023-07-11 00:26:12', 0),
(20, '::1', 'macoa@gmail.com', 8, '2023-07-11 00:26:49', 1),
(21, '::1', 'aswarmp60@gmail.com', 7, '2023-07-11 00:33:02', 1),
(22, '::1', 'aswarmp60@gmail.com', 7, '2023-07-16 01:38:28', 1),
(23, '::1', 'aswarmp60@gmail.com', 7, '2023-07-16 06:29:34', 1),
(24, '::1', 'aswarmp60@gmail.com', 7, '2023-07-20 23:54:39', 1),
(25, '::1', 'aswarmp60@gmail.com', 7, '2023-07-21 00:04:27', 1),
(26, '::1', 'aswarmp60@gmail.com', 7, '2023-07-21 00:08:28', 1),
(27, '::1', 'aswarmp60@gmail.com', 7, '2023-07-22 01:14:46', 1),
(28, '::1', 'aswarmp60@gmail.com', 7, '2023-07-22 15:29:08', 1),
(29, '::1', 'aswarmp60@gmail.com', 7, '2023-07-23 01:38:53', 1),
(30, '::1', 'aswarmp60@gmail.com', NULL, '2023-07-23 08:09:05', 0),
(31, '::1', 'aswarmp60@gmail.com', 7, '2023-07-23 08:09:21', 1),
(32, '::1', 'aswarmp60@gmail.com', 7, '2023-07-23 13:26:18', 1),
(33, '::1', 'aswarmp60@gmail.com', 7, '2023-07-23 16:26:12', 1),
(34, '::1', 'aswarmp60@gmail.com', 7, '2023-07-24 09:16:02', 1),
(35, '::1', 'aswarmp60@gmail.com', NULL, '2023-07-24 14:14:57', 0),
(36, '::1', 'aswarmp60@gmail.com', 7, '2023-07-24 14:15:11', 1),
(37, '::1', 'aswarmp60@gmail.com', 7, '2023-07-25 13:34:16', 1),
(38, '::1', 'aswarmp60@gmail.com', 7, '2023-07-26 15:20:44', 1),
(39, '::1', 'aswarmp60@gmail.com', 7, '2023-07-26 15:24:49', 1),
(40, '::1', 'aswarmp60@gmail.com', 7, '2023-07-26 15:47:56', 1),
(41, '::1', 'aswarmp60@gmail.com', 7, '2023-07-26 16:40:28', 1),
(42, '::1', 'aswarmp60@gmail.com', 7, '2023-07-27 10:14:10', 1),
(43, '::1', 'aswarmp60@gmail.com', 7, '2023-07-27 13:41:07', 1),
(44, '::1', 'aswarmp60@gmail.com', 7, '2023-07-30 02:35:33', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-super-admin', 'bisa buka semua menu'),
(2, 'manage-layanan', 'hanya bisa akses layanan saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` text NOT NULL,
  `keterangan_berita` text NOT NULL,
  `tangal_berita` date NOT NULL,
  `gambar_1` text NOT NULL,
  `gambar_2` text NOT NULL,
  `gambar_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `betah`
--

CREATE TABLE `betah` (
  `id_betah` int(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `no_telp` int(11) NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `nama_tahanan` text NOT NULL,
  `catatan` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasi`
--

CREATE TABLE `edukasi` (
  `id_edukasi` int(15) NOT NULL,
  `nama_lembaga` text NOT NULL,
  `no_telp` text NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `lokasi_kegiatan` text NOT NULL,
  `jumlah_narasumber` text NOT NULL,
  `gambar` text NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(11) NOT NULL,
  `keterangan_galery` text NOT NULL,
  `gambar_1` varchar(255) NOT NULL,
  `gambar_2` varchar(255) NOT NULL,
  `gambar_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_masyarakat`
--

CREATE TABLE `informasi_masyarakat` (
  `id_info_masyarakat` int(50) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `catatan` text NOT NULL,
  `lokasi_laporan` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsul_dokter`
--

CREATE TABLE `konsul_dokter` (
  `id_konsul_dokter` int(15) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1688871589, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_kesehatan`
--

CREATE TABLE `pemeriksaan_kesehatan` (
  `id_pemeriksaan_kesehatan` int(15) NOT NULL,
  `nama` varchar(26) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan_narkoba`
--

CREATE TABLE `pemeriksaan_narkoba` (
  `id_pemeriksaan` int(15) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `skhpn` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tat`
--

CREATE TABLE `tat` (
  `id_tat` int(15) NOT NULL,
  `nama_lembaga` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `urin`
--

CREATE TABLE `urin` (
  `id_urin` int(15) NOT NULL,
  `nama` text NOT NULL,
  `no_telp` text NOT NULL,
  `email` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `alamat` text NOT NULL,
  `lokasi_kegiatan` text NOT NULL,
  `jml_tesurin` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `catatan` text NOT NULL,
  `jenis_layanan` text NOT NULL,
  `status` enum('approve','konfirmasi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'aswarmp60@gmail.com', 'aswarmp60', NULL, 'default.jpg', '$2y$10$gS6AWJioXxiTFL.6K/4n6eLAlicxgh61StUzoVygINL5hXYFVeGJO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-11 00:16:05', '2023-07-11 00:16:05', NULL),
(8, 'macoa@gmail.com', 'macoa', NULL, 'default.jpg', '$2y$10$T6ojcbAf5Vt4bjLMcWqP6eqYkwHCLmPqj.ZAtR/REvJfwpbm/ni0y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-07-11 00:25:57', '2023-07-11 00:25:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`id_assesment`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `betah`
--
ALTER TABLE `betah`
  ADD PRIMARY KEY (`id_betah`);

--
-- Indeks untuk tabel `edukasi`
--
ALTER TABLE `edukasi`
  ADD PRIMARY KEY (`id_edukasi`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indeks untuk tabel `informasi_masyarakat`
--
ALTER TABLE `informasi_masyarakat`
  ADD PRIMARY KEY (`id_info_masyarakat`);

--
-- Indeks untuk tabel `konsul_dokter`
--
ALTER TABLE `konsul_dokter`
  ADD PRIMARY KEY (`id_konsul_dokter`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemeriksaan_kesehatan`
--
ALTER TABLE `pemeriksaan_kesehatan`
  ADD PRIMARY KEY (`id_pemeriksaan_kesehatan`);

--
-- Indeks untuk tabel `pemeriksaan_narkoba`
--
ALTER TABLE `pemeriksaan_narkoba`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indeks untuk tabel `tat`
--
ALTER TABLE `tat`
  ADD PRIMARY KEY (`id_tat`);

--
-- Indeks untuk tabel `urin`
--
ALTER TABLE `urin`
  ADD PRIMARY KEY (`id_urin`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `assesment`
--
ALTER TABLE `assesment`
  MODIFY `id_assesment` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `betah`
--
ALTER TABLE `betah`
  MODIFY `id_betah` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `edukasi`
--
ALTER TABLE `edukasi`
  MODIFY `id_edukasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `informasi_masyarakat`
--
ALTER TABLE `informasi_masyarakat`
  MODIFY `id_info_masyarakat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `konsul_dokter`
--
ALTER TABLE `konsul_dokter`
  MODIFY `id_konsul_dokter` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_kesehatan`
--
ALTER TABLE `pemeriksaan_kesehatan`
  MODIFY `id_pemeriksaan_kesehatan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan_narkoba`
--
ALTER TABLE `pemeriksaan_narkoba`
  MODIFY `id_pemeriksaan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tat`
--
ALTER TABLE `tat`
  MODIFY `id_tat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `urin`
--
ALTER TABLE `urin`
  MODIFY `id_urin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
