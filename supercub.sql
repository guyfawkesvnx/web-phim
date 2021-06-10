-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 16, 2018 at 08:06 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `suppercub`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `loai_phim`
-- 

CREATE TABLE `loai_phim` (
  `MSLP` int(10) NOT NULL,
  `Ten_loai_phim` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MSLP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `loai_phim`
-- 

INSERT INTO `loai_phim` (`MSLP`, `Ten_loai_phim`) VALUES 
(1, 'Phim Lẻ'),
(2, 'Phim Bộ');

-- --------------------------------------------------------

-- 
-- Table structure for table `quan_ly_phim`
-- 

CREATE TABLE `quan_ly_phim` (
  `id` int(100) NOT NULL,
  `Ten_phim` char(200) collate utf8_unicode_ci NOT NULL,
  `Ten_phim_2` varchar(255) collate utf8_unicode_ci NOT NULL,
  `Noi_dung` varchar(255) collate utf8_unicode_ci NOT NULL,
  `So_tap` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Thoi_luong` int(4) NOT NULL,
  `Dao_dien` varchar(255) collate utf8_unicode_ci NOT NULL,
  `Dien_vien` varchar(255) collate utf8_unicode_ci NOT NULL,
  `Hinh` char(255) collate utf8_unicode_ci NOT NULL,
  `Hinh_2` varchar(255) collate utf8_unicode_ci NOT NULL,
  `NamSX` char(4) collate utf8_unicode_ci NOT NULL,
  `MSTL` int(10) default NULL,
  `MSQG` int(10) default NULL,
  `MSLP` int(10) default NULL,
  `idUser` int(4) default NULL,
  `Luot_xem` int(100) NOT NULL,
  `video` char(200) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`),
  KEY `idUser` (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `quan_ly_phim`
-- 

INSERT INTO `quan_ly_phim` (`id`, `Ten_phim`, `Ten_phim_2`, `Noi_dung`, `So_tap`, `Thoi_luong`, `Dao_dien`, `Dien_vien`, `Hinh`, `Hinh_2`, `NamSX`, `MSTL`, `MSQG`, `MSLP`, `idUser`, `Luot_xem`, `video`) VALUES 
(1, 'Đao Kiếm Thần Vực', 'Sword Art Online', 'Năm 2022, thế hệ game chạy trên NERvGear tiếp theo đã được công bố, người dùng có thể kết nối với thế giới ảo thông qua chức năng FullDive. SAO (Sword Art Online) – dòng game VRMMORPG chính thống đầu tiên trên nền NERvGear đã gây xôn xao trên toàn thế giớ', '25/25 Thuyết Minh', 24, 'Tomohiko Ito', 'Đang cập nhật', 'Sword_Art_Online.jpg', 'Sword_Art_Online_2.jpg', '2014', 4, 3, 2, 1, 6, 'Xem Phim Đao Kiếm Thần Vực 2 _ Sword Art Online 2 Tập 1 _ server R.PRO.mp4'),
(2, 'Đổi Mạng', 'The Target', 'Phim Đổi Mạng xoay quanh một lính đánh thuê chuyên nghiệp, Yeo-hoon, người đang có một cuộc sống bình thường. Trong một ngày đi làm tại văn phòng, anh đã nhìn thấy một người đàn ông bị sát hại. Những kẻ giết người cũng tấn công và đuổi Yeo-hoon, anh bị bắ', 'Thuyết Minh', 98, 'Chang', 'Jin wook Lee, Jun Sang Yu, Kim Sung Ryoung, Ryu Seung Ryong,', 'doimang.jpg', 'doimang_2.jpg', '2014', 1, 2, 1, 1, 5, 'Đổi Mạng - The Target Tập 1-End - server VIP.D.mp4'),
(3, 'Thành Phố Ảo', 'Fabricated City', 'Phim Thành Phố Ảo trong Fabricated City 2017, Ji Chang Wook vào vai Kwon Yoo, một cái tên lừng lẫy trong giới game thủ Hàn Quốc. Một ngày nọ anh ta bị vu oan là kẻ sát nhân phạm trọng tội và bị cả nước truy lùng. Vốn là kẻ nghiện game hành động mạo hiểm, ', 'Thuyết Minh', 126, 'Park Kwang hyun', 'Chang wook Ji, Eun kyung Shim, Jae hong Ahn,', 'thanhphoao.jpg', 'thanhphoao_2.jpg', '2017', 1, 2, 1, NULL, 17, 'Thành Phố Ảo - Fabricated City Tập 1-End - server VIP.D.mp4'),
(4, 'Ngã Rẽ Tử Thần', 'Wrong Turn', 'Phim Ngã Rẽ Tử Thần 6 là một bộ phim kinh dị Mỹ của đạo diễnValeri Milev, là bộ phim thứ sáu trong loạt phim Wrong Turn. Một bản thừa kế bất ngờ và bí ẩn mang Danny và bạn bè của anh đến với Hobb Springs, một khu nghỉ mát lãng quên sâu trong những ngọn đồ', 'Thuyết Minh', 90, 'Valeri Milev', 'Anthony Ilott, Aqueela Zoll, Sadie Katz,', 'ngaretuthan.jpg', 'ngaretuthan_2.jpg', '2014', 3, 5, 1, NULL, 3, 'nga_re_tu_than.mp4'),
(5, 'Sát Thủ Vô Danh', 'The Man From Nowhere', 'Sau một bi kịch, sát thủ chuyên nghiệp Cha Tae Shik rửa tay gác kiếm, lui về ở ẩn. Người duy nhất trò chuyện với anh là cô bé hàng xóm So Mi. Tuy nhiên, mẹ của So Mi lại dính dáng đến 1 đường dây buôn ma túy, cô bé bị bắt cóc. Cha Tae Shik buộc phải lao v', 'Thuyết Minh', 119, 'Jeong-Beom Lee, ', 'Bin Won, Sae ron Kim, Tae-hoon Kim, Hee won Kim, Seong oh Kim', 'satthuvodanh.jpg', 'satthuvodanh_2.jpg', '2010', 1, 2, 1, NULL, 3, 'Sát Thủ Vô Danh 2017 thuyết minh full HD- Đáng xem.mp4'),
(6, 'ĐƯỜNG HẦM', 'Tunnel', 'Đường Hầm – Tunnel dựa trên cuốn tiểu thuyết cùng tên của nhà văn So Jae Won, với nội dung là cuộc đấu tranh sinh tồn của một người đàn ông bị kẹt dưới đường hầm do những sai phạm trong quá trình xây dựng.  Đó là một ngày đầy hứng khởi với Jung Soo (Ha Ju', 'Thuyết Minh', 145, 'Seong hun Kim', 'Dal-su Oh, Doona Bae, Jung woo Ha,', 'duong_ham.jpg', 'duong_ham_2.jpg', '2016', 1, 2, 1, NULL, 1, 'Xem Phim Đường Hầm _ Tunnel Tập 1-End _ server R.PRO.MP4'),
(7, 'TÂY DU KÝ 3: NỮ NHI QUỐC', 'The Monkey King 3: Kingdom of Women', 'Phim Tây Du Ký 3: Nữ Nhi Quốc kể về bốn thầy trò Đường Tăng (Phùng Thiệu Phong) một lần nữa sẽ phải trải qua một kiếp nạn trên hành trình thỉnh kinh của mình. Trong dịp Tết nguyên đán này, hãy cùng Tôn Ngộ Không (Quách Phú Thành), Trư Bát Giới (Tiểu Thẩm ', 'Thuyết Minh', 115, 'Trịnh Bảo Thụy', 'Phùng Thiệu Phong, Quách Phú Thành, Tiểu Thẩm Dương, Triệu Lệ Dĩnh,', 'tayduki.jpg', 'tayduki_2.jpg', '2018', 5, 1, 1, NULL, 14, 'Xem Phim Tây Du Ký 3_ Nữ Nhi Quốc _ The Monkey King 3_ Kingdom of Women Tập 1-End _ server F.PRO.MP4'),
(8, 'BIỆT ĐỘI SIÊU ANH HÙNG 3: CUỘC CHIẾN VÔ CỰC', 'Avengers: Infinity War', 'Biệt Đội Siêu Anh Hùng 3: Cuộc Chiến Vô Cực sẽ đưa người xem đến với cuộc chiến định mệnh giữa nhóm Avengers, các anh hùng của Trái Đất, Đội Vệ binh Dải ngân hà với bạo chúa vũ trụ Thanos. Đây là một kẻ thù vô cùng hùng mạnh, hắn từng đứng đằng sau giật d', 'Thuyết Minh', 169, 'Anthony Russo', 'Chris Hemsworth, Mark Ruffalo, Robert Downey Jr,', 'bietdoisieuanhhung3.jpg', 'bietdoisieuanhhung3_2.jpg', '2018', 1, 5, 1, NULL, 68, 'BIỆT ĐỘI SIÊU ANH HÙNG 3 CUỘC CHIẾN VÔ CỰC.mp4'),
(9, '4 Năm 2 Chàng 1 Tình Yêu', '4 Years 2 Love 1', 'Nội dung phim Bốn Năm Hai Chàng Một Tình Yêu kể về bộ ba Quỳnh, Tuấn (Harry Lu) và Thành (Anh Tú). Thời học sinh, Quỳnh bị một cú sốc lớn khi ngày cô nhận ra tình cảm mà mình dành cho Tuấn cũng là ngày Tuấn mất. Bốn năm sau, Thành trở thành một diễn viên ', 'Thuyết Minh', 96, 'Luk Vân', ' Midu, Harry Lu, Anh Tú', '4-nam-2-chang-1-tinh-yeu.jpg', '4nam2chang1tinhyeu.jpg', '2018', 2, 4, 1, 1, 3, 'Phim Chiếu Rạp Mới Nhất 2018 - 4 Năm 2 Chàng 1 Tình Yêu - Midu, Harry Lu, Anh Tú.mp4');

-- --------------------------------------------------------

-- 
-- Table structure for table `quoc_gia`
-- 

CREATE TABLE `quoc_gia` (
  `MSQG` int(10) NOT NULL,
  `Ten_quoc_gia` char(200) collate utf8_unicode_ci NOT NULL,
  `MSLP` int(10) default NULL,
  PRIMARY KEY  (`MSQG`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `quoc_gia`
-- 

INSERT INTO `quoc_gia` (`MSQG`, `Ten_quoc_gia`, `MSLP`) VALUES 
(1, 'Trung Quốc', 2),
(2, 'Hàn Quốc', 2),
(3, 'Nhật Bản', 2),
(4, 'Việt Nam', 2),
(5, 'Mỹ', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `the_loai`
-- 

CREATE TABLE `the_loai` (
  `MSTL` int(10) NOT NULL,
  `Ten_the_loai` char(100) collate utf8_unicode_ci NOT NULL,
  `MSLP` int(10) default NULL,
  PRIMARY KEY  (`MSTL`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `the_loai`
-- 

INSERT INTO `the_loai` (`MSTL`, `Ten_the_loai`, `MSLP`) VALUES 
(1, 'Hành Động', 1),
(2, 'Ngôn Tình', 1),
(3, 'Kinh Dị', 1),
(4, 'anime', 1),
(5, 'Hài', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `idUser` int(4) NOT NULL,
  `Username` varchar(40) collate utf8_unicode_ci NOT NULL,
  `Password` varchar(40) collate utf8_unicode_ci NOT NULL,
  `Gmail` varchar(40) collate utf8_unicode_ci NOT NULL,
  `idGroup` int(4) NOT NULL,
  PRIMARY KEY  (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`idUser`, `Username`, `Password`, `Gmail`, `idGroup`) VALUES 
(1, 'cong', '1', 'a@gmail.com', 1),
(2, 'cong1', '1', '@gmail.com', 0);
