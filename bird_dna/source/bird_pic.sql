-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-07-19 10:57:18
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `bird_cart`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bird_pic`
--

CREATE TABLE `bird_pic` (
  `id` int(11) NOT NULL,
  `picName` varchar(255) NOT NULL,
  `pic_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `bird_pic`
--

INSERT INTO `bird_pic` (`id`, `picName`, `pic_name`) VALUES
(2, '標語-雙病毒鳥卡用.png', '標語-雙病毒鳥卡用'),
(3, '未知鳥圖-藍.png', '未知鳥圖-藍'),
(4, '未知鳥圖-紅.png', '未知鳥圖-紅'),
(5, '未知鳥圖-綠.png', '未知鳥圖-綠'),
(6, '白和尚鸚鵡.png', '白和尚鸚鵡'),
(7, '金剛鸚鵡.png', '金剛鸚鵡'),
(8, '鳳梨小太陽.png', '鳳梨小太陽'),
(9, '玄鳳.png', '玄鳳'),
(10, '小鸚.png', '小鸚'),
(11, '小太陽.png', '小太陽'),
(12, '和尚鸚鵡.png', '和尚鸚鵡'),
(13, '折衷鸚鵡.png', '折衷鸚鵡'),
(14, '大黃兜.png', '大黃兜'),
(15, '葵花巴丹.png', '葵花巴丹'),
(16, '白頭翁.png', '白頭翁'),
(17, '灰鸚.png', '灰鸚'),
(18, '黃翼藍帽.png', '黃翼藍帽'),
(19, '月輪.png', '月輪'),
(20, '小鸚2.png', '紫藍黑頭牡丹'),
(21, 'RED LORY.jpg', '紅伶吸蜜鸚鵡'),
(22, 'Black-headed Caique.jpg', '黑頭凱克'),
(23, 'Agapornis.jpg', '牡丹');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bird_pic`
--
ALTER TABLE `bird_pic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `bird_pic`
--
ALTER TABLE `bird_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
