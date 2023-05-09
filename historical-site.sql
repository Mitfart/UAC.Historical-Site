-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 09:01 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `historical-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_block`
--

CREATE TABLE `about_block` (
  `id` int NOT NULL,
  `title` varchar(128) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_block`
--

INSERT INTO `about_block` (`id`, `title`, `img`) VALUES
(1, 'Узнайте больше о своей родине', 'Astana.jpg'),
(2, 'Учавствуйте в мероприятиях', 'праздник.jpg'),
(3, 'Развивайтесь', '20170412201526.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int NOT NULL,
  `path_name` varchar(128) NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `path_name`, `title`) VALUES
(1, 'about', 'О нас'),
(2, 'skills', 'Народное искусство Казахстана'),
(3, 'events', ' События'),
(4, 'booking', 'Заказать билеты');

-- --------------------------------------------------------

--
-- Table structure for table `events_block`
--

CREATE TABLE `events_block` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `title` varchar(128) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events_block`
--

INSERT INTO `events_block` (`id`, `date`, `title`, `img`) VALUES
(1, '2017-04-20', 'О торговле на меновом дворе', 'О_торговле_на_меновом_дворе.jpg'),
(2, '2015-03-20', 'Трансформация казахского кочевого строя в XVIII веке', 'Трансформация_казахского_кочевого_строя_в_XVIII_веке.webp'),
(3, '2021-10-20', 'Баи – жертвы раскулачивания', 'Баи–жертвы_раскулачивания.jpg'),
(4, '2025-05-20', 'Алихан Бокейханов о проблемах образования', 'Алихан_Бокейханов_о_проблемах_образования.jpe'),
(5, '2021-10-20', 'Следуя урокам Ибрая Алтынсарина…', 'Следуя_урокам_Ибрая_Алтынсарин.jfif'),
(6, '2001-05-20', 'Добрый праздник 1 мая', 'праздник.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills_block`
--

CREATE TABLE `skills_block` (
  `id` int NOT NULL,
  `img` varchar(256) NOT NULL,
  `title` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills_block`
--

INSERT INTO `skills_block` (`id`, `img`, `title`, `text`) VALUES
(2, 'Наскальное_искусство.webp', 'Наскальное искусство', 'Свои истоки искусство народов Центральной Азии берет в глубокой древности, о чем свидетельствует богатый археологический материал, обнаруженный на ее территории. Одними из ярчайших памятников художественного творчества древнего человека считаются наскальные изображения. Наскальными росписями наиболее богата территория Казахстана, сохранившая 130 разных по времени (от каменного века до средневековья) комплексов петроглифов: грот на реке Бухтарме (Восточный Казахстан), грот КотырКызылтау (Центральный Казахстан) и наибольшее скопление в Ешкиольмес, Баян-Журек, Тамгалы, Кулжабасы, Саускандык, Арпа-Узень, Каскабулак, Кызылшын, Тектурмас (Южный Казахстан и Жетысу) с характерными для каждого периода образами и техникой исполнения.'),
(3, 'Гончарное_искусство.webp', 'Гончарное искусство', 'Древнейшей областью материальной культуры, в которой художественное творчество проявилось наиболее полно и многообразно, является производство керамических изделий. Ранние памятники Центральной Азии (стоянки, могильники) сохранили в изобилии фрагменты керамических сосудов: керамика поселений Анау и Намазга-Тепе Туркменистана; северной и южной (Вахшской и Бишкентской) долин Таджикистана; керамика погребений урочиРисунок 2. «Солнцеголовое» божество и «пляшущие человечки». Источник: Государственный музей-заповедник «Тамгалы». Фото автора. ща Арпа и поселений Джайылма и Каинды в Чуйской долине Киргизстана; керамика ботайской, андроновской культур на Северо-Западе и в Центральном Казахстане.'),
(4, 'Ювелирное_искусство.jpeg', 'Ювелирное искусство', 'О становлении декоративно-прикладного искусства Центральной Азии свидетельствуют и ювелирные украшения, обнаруженные во время археологических раскопок. Ювелирные украшения, возникнув на первых порах как утилитарно-практическая или магическая необходимость («все без исключения украшения продолжительное время служили амулетами и наделялись конкретным символическим смысловым значением»24) постепенно приобрели определенную художественно-эстетическую ценность. На территории Древнего Хорезма самыми ранними считаются украшения, обнаруженные на поселениях Кокча-15 (2 тыс. лет до н. э.). В женских погребениях, относящихся к периоду IV–II в. до н. э., были найдены бронзовые височные кольца — проволочные и литые, кольца наперстные, браслеты с разомкнутыми концами, булавки с шаровидным навершием, разнообразные бусы)25. Подлинным шедевром мелкой пластики является булавка в виде женской руки, держащей гранат (или яблоко)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_block`
--
ALTER TABLE `about_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_block`
--
ALTER TABLE `events_block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_block`
--
ALTER TABLE `skills_block`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_block`
--
ALTER TABLE `about_block`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events_block`
--
ALTER TABLE `events_block`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills_block`
--
ALTER TABLE `skills_block`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
