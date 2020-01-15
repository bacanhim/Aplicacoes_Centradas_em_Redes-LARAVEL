-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2020 às 12:08
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `myprojet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pontuacao` double(8,2) NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `categoria`, `pontuacao`, `imagem`, `created_at`, `updated_at`, `owner_id`) VALUES
(1, 'Hunger Games', 'Ação', 11.00, 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fhungergamessingapore.files.wordpress.com%2F2012%2F02%2Fthe-hunger-games-songs-from-district-12-and-beyond.jpg&f=1&nofb=1', '2020-01-12 17:14:19', '2020-01-12 17:14:19', 1),
(2, 'Harry Potter', 'Ficção', 9.00, 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimages6.fanpop.com%2Fimage%2Fphotos%2F34600000%2FHP-Poster-harry-potter-club-232-34695990-1000-1500.jpg&f=1&nofb=1', '2020-01-12 17:15:14', '2020-01-12 17:15:14', 1),
(3, 'Fast and furious', 'Ação', 8.00, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ffanart.tv%2Ffanart%2Fmovies%2F9799%2Fmovieposter%2Fthe-fast-and-the-furious-58de58415fa6e.jpg&f=1&nofb=1', '2020-01-12 17:16:04', '2020-01-12 17:16:04', 1),
(4, 'Toy story', 'Infantil', 7.00, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fen%2Fthumb%2F4%2F4c%2FToy_Story_4_poster.jpg%2F1200px-Toy_Story_4_poster.jpg&f=1&nofb=1', '2020-01-12 17:22:43', '2020-01-12 18:07:25', 1),
(5, 'Rambo', 'Ação', 6.00, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.d2urS8UFXJHoXu7cvVXwLgHaFj%26pid%3DApi&f=1', '2020-01-12 17:23:27', '2020-01-12 17:23:27', 1),
(6, 'sdsd', 'dsfdsfsdfd', 10.00, NULL, '2020-01-12 19:35:17', '2020-01-12 19:35:48', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_13_181622_create_filmes_table', 1),
(4, '2019_12_13_181649_create_series_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `series`
--

CREATE TABLE `series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pontuacao` double(8,2) NOT NULL,
  `imagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `series`
--

INSERT INTO `series` (`id`, `nome`, `categoria`, `pontuacao`, `imagem`, `created_at`, `updated_at`, `owner_id`) VALUES
(1, 'Peaky Blinders', 'Ação', 10.00, 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fstatic.tvgcdn.net%2Frovi%2Fshowcards%2Ffeed%2F683%2Fthumbs%2F31132683_1300x1733.jpg&f=1&nofb=1', '2020-01-12 18:12:48', '2020-01-12 18:12:48', 1),
(2, 'Breaking Bad', 'Crime', 9.00, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.ad-AuCZOFujCjC9dfLZMlAHaHa%26pid%3DApi&f=1', '2020-01-12 18:32:13', '2020-01-12 18:32:13', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$ChJAPYM3wvOVqJW2UWPrKeqh9qi4G9KAfPMtefU2JaUBL6mNnwMqy', 't5OoJ122gTzKBifWoscjZ1s9ddU4hhP2Nu7kitVlvTyV4RZTYt5aP3Y4gxTC', '2020-01-12 17:13:20', '2020-01-12 17:13:20'),
(2, 'Pedro Jardim', 'pedro@gmail.com', NULL, '$2y$10$VACXkJj2gW.n1o2j.MT/Gecdf2Izqmrwi9q.mMvG5e9HVmGv/Opp2', 'iXTyGDTOpzOCiN2oJzfoEp1gsoTe6zDVRRUV8unkgopKpqAlYahqiuHRpya6', '2020-01-12 18:52:11', '2020-01-12 18:52:11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filmes_owner_id_foreign` (`owner_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `series_owner_id_foreign` (`owner_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `series`
--
ALTER TABLE `series`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `filmes`
--
ALTER TABLE `filmes`
  ADD CONSTRAINT `filmes_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
