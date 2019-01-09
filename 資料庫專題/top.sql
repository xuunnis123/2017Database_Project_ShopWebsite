SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";
CREATE TABLE `tops` (

  `Tops_ID` int(10) NOT NULL,

  `store_name` varchar(20) NOT NULL,

  `name` varchar(20) NOT NULL,

  `price` int(10) NOT NULL,

  `picture` varchar(30) NOT NULL,

  `web` varchar(200) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- 資料表的匯出資料 `tops`

--



INSERT INTO `tops` (`Tops_ID`, `store_name`, `name`, `price`, `picture`, `web`) VALUES

(1, 'MOBO', '配色格紋坑條假兩件上衣', 699, '配色格紋坑條假兩件上衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012300&yacolor=Z22'),

(2, 'MOBO', 'MIT配色拉鍊刷毛大學T', 799, 'MIT配色拉鍊刷毛大學T.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012309&yacolor=Z62'),

(3, 'MOBO', 'MIT立體剪接磨毛T', 499, 'MIT立體剪接磨毛T.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012320&yacolor=Z20'),

(4, 'MOBO', 'MIT厚絨拼條格落肩上衣', 699, 'MIT厚絨拼條格落肩上衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012331&yacolor=Z21'),

(5, 'MOBO', '毛料混紡格子傘狀長版襯衫', 899, '毛料混紡格子傘狀長版襯衫.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01030219&yacolor=Z21'),

(6, 'MOBO', '變化格紋口袋馬海毛衣', 899, '變化格紋口袋馬海毛衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01050216&yacolor=Z21'),

(7, 'MOBO', '高領落肩前短後長粗針毛衣', 980, '高領落肩前短後長粗針毛衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01050217&yacolor=Z12'),

(8, 'MOBO', '寬條紋下襬開衩針織上衣', 799, '寬條紋下襬開衩針織上衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01050226&yacolor=Z30'),

(9, 'MOBO', '中線設計磨毛上衣', 399, '中線設計磨毛上衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012303&yacolor=Z21'),

(10, 'MOBO', 'MIT落肩連袖素面磨毛上衣', 499, 'MIT落肩連袖素面磨毛上衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012304&yacolor=Z20'),

(11, 'MOBO', '前開衩寬鬆針織上衣', 1080, '前開衩寬鬆針織上衣.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012310&yacolor=Z10'),

(12, 'MOBO', 'MIT前短後長落肩純棉T', 499, 'MIT前短後長落肩純棉T.jpg', 'https://www.mo-bo.com.tw/PDContent.asp?yano=01012314&yacolor=Z23');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;