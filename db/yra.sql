-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 06 2021 г., 17:26
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yra`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_login` text NOT NULL,
  `admin_psw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_login`, `admin_psw`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `command`
--

CREATE TABLE `command` (
  `member_id` int(11) NOT NULL,
  `member_name` text NOT NULL,
  `member_photo` text NOT NULL,
  `member_position` text NOT NULL,
  `member_contact` text NOT NULL,
  `member_info` text NOT NULL,
  `deleted` int(11) NOT NULL,
  `lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `command`
--

INSERT INTO `command` (`member_id`, `member_name`, `member_photo`, `member_position`, `member_contact`, `member_info`, `deleted`, `lang`) VALUES
(1, 'Токжан Абай', 'img/5c122c30.png', 'PR', 'member_contact', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 'ru');

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `word_id` int(11) NOT NULL,
  `assoc` text NOT NULL,
  `ru` text NOT NULL,
  `en` text NOT NULL,
  `kz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `mailing`
--

CREATE TABLE `mailing` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_mail` text NOT NULL,
  `subscription_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `mailing`
--

INSERT INTO `mailing` (`user_id`, `user_name`, `user_lastname`, `user_mail`, `subscription_date`) VALUES
(1, 'Ibraim ', 'Kadyrov', 'ibraim@gmail.com', '2021-03-06'),
(2, 'Адиль', 'Умирзак', 'asd@aa.xl', '2021-03-09');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_header` text NOT NULL,
  `news_anons` text NOT NULL,
  `news_info` text NOT NULL,
  `news_photo` text NOT NULL,
  `news_date` date NOT NULL,
  `news_deleted` int(11) NOT NULL,
  `lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `news_header`, `news_anons`, `news_info`, `news_photo`, `news_date`, `news_deleted`, `lang`) VALUES
(1, 'news_1', 'anons1', 'info1 ', 'photo 1 ', '2021-03-23', 1, 'ru'),
(2, 'news 2', 'anons 2', 'info 2', 'asd', '2021-03-17', 1, 'kz'),
(3, 'My first news ', 'hooooooray!', 'I can upload news', 'img/0524d7b1.png', '2021-03-18', 0, 'ru'),
(4, 'Menin habar', 'habar ', 'habar info', 'img/9230a67d.png', '2021-03-26', 1, 'ru'),
(5, 'Menin hahbar', 'habr', 'habar inooo', 'img/3ba69ff9.png', '2021-04-01', 0, 'KZ'),
(6, 'News', 'news annons', 'news infppp', 'img/3a61dc5a.png', '2021-03-23', 0, 'EN');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_header` text NOT NULL,
  `project_photo` text NOT NULL,
  `project_anons` text NOT NULL,
  `project_info` text NOT NULL,
  `deleted` int(11) NOT NULL,
  `lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`project_id`, `project_header`, `project_photo`, `project_anons`, `project_info`, `deleted`, `lang`) VALUES
(1, 'Proj', 'img/45cee181.png', 'Proj annnons', 'Proj INfoas ad asd asd asd as ', 0, 'ru');

-- --------------------------------------------------------

--
-- Структура таблицы `smi`
--

CREATE TABLE `smi` (
  `smi_id` int(11) NOT NULL,
  `smi_header` text NOT NULL,
  `smi_photo` text NOT NULL,
  `smi_info` text NOT NULL,
  `smi_date` date NOT NULL,
  `deleted` int(11) NOT NULL,
  `lang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `smi`
--

INSERT INTO `smi` (`smi_id`, `smi_header`, `smi_photo`, `smi_info`, `smi_date`, `deleted`, `lang`) VALUES
(1, 'SMI HEADER', 'img/bd7c00b0.png', 'SME INFP', '2021-03-19', 0, 'ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Индексы таблицы `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`member_id`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`word_id`);

--
-- Индексы таблицы `mailing`
--
ALTER TABLE `mailing`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Индексы таблицы `smi`
--
ALTER TABLE `smi`
  ADD PRIMARY KEY (`smi_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `command`
--
ALTER TABLE `command`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `mailing`
--
ALTER TABLE `mailing`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `smi`
--
ALTER TABLE `smi`
  MODIFY `smi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
