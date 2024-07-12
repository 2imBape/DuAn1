-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2024 lúc 08:49 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_binh_luan`
--

CREATE TABLE `tb_binh_luan` (
  `id` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_danh_gia` varchar(50) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `id_khach_hang` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chi_tiet_hoa_don`
--

CREATE TABLE `tb_chi_tiet_hoa_don` (
  `id` int(10) NOT NULL,
  `id_kh` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `ten_san_pham` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `gia` int(10) NOT NULL DEFAULT 0,
  `size` varchar(5) NOT NULL,
  `so_luong` int(3) NOT NULL,
  `thanh_tien` int(10) NOT NULL,
  `id_hoa_don` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chi_tiet_hoa_don`
--

INSERT INTO `tb_chi_tiet_hoa_don` (`id`, `id_kh`, `id_san_pham`, `ten_san_pham`, `img`, `gia`, `size`, `so_luong`, `thanh_tien`, `id_hoa_don`) VALUES
(97, 18, 31, 'Quần Short Nữ Cotton Trơn Form Panama', 'app/views/Admin/uploads/short3.webp', 373, 'M', 1, 373, 74),
(98, 19, 27, 'Áo Sơ Mi Nam Tay Dài Flannel Túi Đắp Kẻ Caro Form Oversize', 'app/views/Admin/uploads/somi2.webp', 638, 'L', 1, 638, 75),
(99, 18, 9, 'Áo Sơ Mi Nam Tay Ngắn Trơn Rayon Dây Rút Form Loose ', 'app/views/Admin/uploads/sơmi1.webp', 540, 'L', 1, 540, 76);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_chuc_vu`
--

CREATE TABLE `tb_chuc_vu` (
  `id` int(10) NOT NULL,
  `ten_chuc_vu` varchar(50) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_chuc_vu`
--

INSERT INTO `tb_chuc_vu` (`id`, `ten_chuc_vu`, `mo_ta`, `trang_thai`) VALUES
(1, 'Admin', 'Người quản lý các chức năng trang web', 'Đang hoạt động'),
(2, 'Nhân viên', 'Người được thuê và nằm trong sự kiểm soát của admin', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danh_muc`
--

CREATE TABLE `tb_danh_muc` (
  `id` int(10) NOT NULL,
  `ten_danh_muc` varchar(50) NOT NULL,
  `mo_ta` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danh_muc`
--

INSERT INTO `tb_danh_muc` (`id`, `ten_danh_muc`, `mo_ta`, `img`, `trang_thai`) VALUES
(8, 'Áo tank ', 'Áo ba lỗ hai dây', '', 'Còn hiệu lực'),
(9, 'Áo polo', 'Áo có cổ', 'polo.webp', 'Còn hiệu lực'),
(10, 'Áo thun', 'Áo phông không cổ', 'thun.webp', 'Còn hiệu lực'),
(11, 'Áo sơ mi ', 'áo sơ mi cúc khóa', 'sơmi.webp', 'Còn hiệu lực'),
(12, 'Áo len', 'Áo len các loại', 'len.webp', 'Còn hiệu lực'),
(14, 'Quần jean', 'Quần bò', 'quanjean.webp', 'Còn hiệu lực'),
(15, 'Quần kaki', 'Quần vải', 'quankaki.webp', 'Còn hiệu lực'),
(16, 'Quần short', 'quần đùi', 'quandui.webp', 'Còn hiệu lực'),
(17, 'Quần jogger', 'Quần ôm cổ chân', 'quanjogger.webp', 'Còn hiệu lực'),
(18, 'Quần cargo ', 'Quần túi hộp', 'cargopant.avif', 'Còn hiệu lực');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_hoa_don`
--

CREATE TABLE `tb_hoa_don` (
  `id` int(10) NOT NULL,
  `id_kh` int(10) DEFAULT 0,
  `ten_kh` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phuong_thuc_thanh_toan` tinyint(1) NOT NULL COMMENT '1. Thanh toán bằng tiền mặt 2.Thanh toán MoMo 3.Thẻ tín dụng/thẻ ghi nợ',
  `ngay_dat_hang` varchar(50) NOT NULL,
  `tong_hoa_don` int(10) NOT NULL,
  `id_trang_thai` int(10) DEFAULT NULL COMMENT '0.Đơn hàng mới 1.Đang xử lý 2.Đang giao hàng 3.Đã giao hàng 4.Đã nhận hàng 5.Đã hủy đơn\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_hoa_don`
--

INSERT INTO `tb_hoa_don` (`id`, `id_kh`, `ten_kh`, `dia_chi`, `sdt`, `email`, `phuong_thuc_thanh_toan`, `ngay_dat_hang`, `tong_hoa_don`, `id_trang_thai`) VALUES
(74, 18, 'Quang Huy', 'Hà Nội', '338359276', 'shinsabrina12@gmail.com', 1, '07:37:38am 14/12/2023', 373, 4),
(75, 19, 'Quang Huy ', 'Hà Nội', '338359276', 'shinsabrina12@gmail.com', 1, '08:12:57am 14/12/2023', 638, 0),
(76, 18, 'Quang Huy', 'Hà Nội', '338359276', 'shinsabrina12@gmail.com', 1, '09:00:20pm 19/02/2024', 540, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_khach_hang`
--

CREATE TABLE `tb_khach_hang` (
  `id` int(10) NOT NULL,
  `account` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_khach_hang`
--

INSERT INTO `tb_khach_hang` (`id`, `account`, `pass`, `ten`, `email`, `sdt`, `ngay_sinh`, `dia_chi`, `mo_ta`) VALUES
(18, 'zone', '1234', 'Quang Huy', 'shinsabrina12@gmail.com', 338359276, '2004-12-06', 'Hà Nội', ''),
(19, 'huy', '1', 'Quang Huy', 'shinsabrina12@gmail.com', 338359276, '2004-05-04', 'Hà Nội', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_lien_he`
--

CREATE TABLE `tb_lien_he` (
  `id` int(10) NOT NULL,
  `noi_dung` text NOT NULL,
  `ten_kh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_nguoi_dung`
--

CREATE TABLE `tb_nguoi_dung` (
  `id` int(10) NOT NULL,
  `account` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(10) NOT NULL,
  `ngay_sinh` varchar(50) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_nguoi_dung`
--

INSERT INTO `tb_nguoi_dung` (`id`, `account`, `pass`, `ten`, `email`, `sdt`, `ngay_sinh`, `dia_chi`, `mo_ta`, `role_id`) VALUES
(10, 'admin', '1', '', '', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_san_pham`
--

CREATE TABLE `tb_san_pham` (
  `id` int(10) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `gia` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `id_danh_muc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_san_pham`
--

INSERT INTO `tb_san_pham` (`id`, `ten_san_pham`, `gia`, `img`, `size`, `mo_ta`, `id_danh_muc`) VALUES
(6, 'Áo Thun Tanktop Nam Sát Nách Kẻ Sọc Gân Trơn Form Slim', 225, 'tanktop1.webp', 'L', 'Áo Thun Tanktop Nam Sát Nách Kẻ Sọc Gân Trơn Form Slim - 10S23TTO001 được thiết kế là kiểu áo năng động, thoáng mát rất thích hợp cho mùa hè này:Chất vải bền đẹp thêm khả năng thấm hút mồ hôi và co giãn tốt cho người mặc cảm giác thoải mái khi sử dụng', 8),
(7, 'Áo Polo Nam Cổ Khóa Kéo Phối Màu Vai Form Fitted', 569, 'polo1.webp', 'L', 'Form :                       Fitted\r\nChất liệu :                Cotton\r\nThiết kế :                  Phối màu\r\nKiểu tay :                  Tay ngắn\r\nKiểu cổ :                    Cổ khóa kéo\r\nGiới tính :                  Nam\r\nNhóm sản phẩm :  Áo Polo', 9),
(8, 'Áo Thun Nam S.Café Thêu chữ Coffee Lovers Form Loose', 520, 'thun1.webp', 'M', 'Áo Thun Nam S.Café Thêu chữ Coffee Lovers Form Loose - 10F23TSS062 là một trong những item nổi bật của BST Coffee Lovers Series 2, với thiết kế đầy phong cách:\r\n\r\nĐược may từ chất vải sợi S.Cafe bảo vệ môi trường, thân thiện với làn da người mặc\r\nVải cafe', 10),
(9, 'Áo Sơ Mi Nam Tay Ngắn Trơn Rayon Dây Rút Form Loose ', 540, 'sơmi1.webp', 'L', 'Áo Thun Tanktop Nam Sát Nách Kẻ Sọc Gân Trơn Form Slim - 10S23TTO001 được thiết kế là kiểu áo năng động, thoáng mát rất thích hợp cho mùa hè này:\r\n\r\nChất vải bền đẹp thêm khả năng thấm hút mồ hôi và co giãn tốt cho người mặc cảm giác thoải mái khi sử dụng', 11),
(10, 'Áo Len Nam Dệt Kim Tay Dài Acrylic Kiểu Polo Form Fitted', 531, 'len1.webp', 'L', 'Áo Thun Nam S.Café Thêu chữ Coffee Lovers Form Loose - 10F23TSS062 là một trong những item nổi bật của BST Coffee Lovers Series 2, với thiết kế đầy phong cách:\r\n\r\nĐược may từ chất vải sợi S.Cafe bảo vệ môi trường, thân thiện với làn da người mặc\r\nVải cafe', 12),
(11, 'Quần Jean Nam Ống Suông Trơn Form Straight Cropped', 589, 'jean1.webp', '31', 'Form\r\nStraight Cropped\r\nChất liệu\r\nJeans\r\nThiết kế\r\nTrơn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nQuần Jean', 14),
(12, 'Quần Kaki Nam Ống Đứng Xếp Ly Trơn Form Straight Crop', 569, 'kaki1.webp', '29', 'Form\r\nStraight Crop\r\nChất liệu\r\nCotton\r\nThiết kế\r\nTrơn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nQuần Kaki', 15),
(13, 'Quần Short Nam Ống Rộng French Terry Phối Nhãn Form Relax', 422, 'short1.webp', 'XL', 'Form\r\nRelax\r\nChất liệu\r\n100% cotton\r\nThiết kế\r\nTrơn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nQuần Short', 16),
(14, 'Quần Sweatpants Unisex Nỉ Cột Dây Ống Rộng Trơn Form Relax ', 569, 'jogger1.webp', 'M', 'Quần Sweatpants Unisex Nỉ Cột Dây Ống Rộng Trơn Form Relax - 10F23PKNU002 là trong item mang vẻ đẹp hiện đại kết hợp cùng form dáng thoải mái:\r\n\r\nChất vải nỉ dày dặn, giữ nhiệt cơ thể tốt và có độ bền cao\r\nDáng quần relax với phần ống suông rộng mang một ', 17),
(15, 'CARGO LOUNGE BROWN PANTS', 600, 'cargo1.jpg', 'L', 'Quần Sweatpants Unisex Nỉ Cột Dây Ống Rộng Trơn Form Relax - 10F23PKNU002 là trong item mang vẻ đẹp hiện đại kết hợp cùng form dáng thoải mái:\r\n\r\nChất vải nỉ dày dặn, giữ nhiệt cơ thể tốt và có độ bền cao\r\nDáng quần relax với phần ống suông rộng mang một ', 18),
(17, 'Áo Tanktop Nam Wool Cổ Tròn Sọc Gân Trơn Form Regular', 274, 'tanktop2.webp', 'M', 'THÔNG TIN CHI TIẾT ÁO TANKTOP NAM WOOL CỔ TRÒN SỌC GÂN TRƠN FORM REGULAR - 10S23KNI006\r\nÁo dệt kim cộc tay cổ tròn. Regular - 10S23KNI006 được may tỉ mỉ, cẩn thận với chất len kết hợp với form áo cổ điển, ôm vừa vặn vào phần cơ thể, phần eo không ôm và su', 8),
(18, 'Áo Thun Tanktop Nữ Cổ Halter Trơn Form Slim Cropped ', 245, 'tanktop3.jpg', 'S', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nSlim cropped\r\nChất liệu\r\nCotton\r\nThiết kế\r\nTrơn\r\nKiểu tay\r\nSát nách\r\nGiới tính\r\nNữ\r\nNhóm sản phẩm\r\nÁo Sát Nách', 8),
(19, ' Áo Tanktop Nữ Cộc Tay Cổ Halter Form Slim Crop', 179, 'tanktop4.webp', 'M', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nSlim\r\nChất liệu\r\nCotton\r\nThiết kế\r\nTrơn\r\nKiểu tay\r\n2 dây\r\nKiểu cổ\r\nCổ tim\r\nGiới tính\r\nNữ\r\nNhóm sản phẩm\r\nÁo Sát Nách\r\nTHÔNG TIN CHI TIẾT ÁO TANKTOP 2 DÂY NỮ CỔ TIM SỌC GÂN TRƠN FORM SLIM - 10S23TTOW003\r\nÁo 2 Dây Nữ Cổ Tim Sọc Gân T', 8),
(20, 'Áo Polo Nam Interlock Pique Sọc Ngang Nhãn Trang Trí Form Boxy', 540, 'polo2.webp', 'L', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nBoxy\r\nChất liệu\r\nInterlock Pique\r\nThiết kế\r\nKẻ sọc\r\nKiểu tay\r\nTay ngắn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Polo\r\nTHÔNG TIN CHI TIẾT ÁO POLO NAM INTERLOCK PIQUE SỌC NGANG NHÃN TRANG TRÍ FORM BOXY - 10S23POL043\r\nÁo Polo Nam Interlock ', 9),
(21, ' Áo polo tay ngắn phối túi boxy ', 490, 'polo3.jpg', 'L', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nBoxy\r\nChất liệu\r\nCotton\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Polo\r\n', 9),
(22, 'Áo Polo Nam Tay Ngắn Modal Cổ V Phối Viền Form Fitted', 471, 'polo4.webp', 'XL', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nFitted\r\nChất liệu\r\nModal\r\nThiết kế\r\nPhối màu\r\nKiểu tay\r\nTay ngắn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Polo', 9),
(23, 'Áo Polo Nam Tay Bo Nhãn Trang Trí Form Fitted', 422, 'polo5.webp', 'L', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nFitted\r\nChất liệu\r\n100% cotton\r\nThiết kế\r\nHọa tiết thêu\r\nKiểu tay\r\nTay ngắn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Polo\r\nTHÔNG TIN CHI TIẾT ÁO POLO NAM TAY BO NHÃN TRANG TRÍ FORM FITTED - 10S23POL010\r\nÁo Polo Nam Tay Bo Nhãn Trang Trí ', 9),
(24, 'Áo Thun Nam Organic Cotton Tay Ngắn Trơn Phối Nhãn Form Fitted', 274, 'thun2.webp', 'L', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nFitted\r\nChất liệu\r\nOrganic cotton\r\nThiết kế\r\nTrơn\r\nKiểu tay\r\nTay ngắn\r\nKiểu cổ\r\nCổ tròn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Thun', 10),
(25, 'Áo Thun Nam Tay Ngắn Cổ Tròn Carbon Dập Nổi Form Fitted ', 441, 'thun3.webp', 'M', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nFitted\r\nChất liệu\r\n100% cotton\r\nThiết kế\r\nHọa tiết in\r\nKiểu tay\r\nTay ngắn\r\nKiểu cổ\r\nCổ tròn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Thun', 10),
(26, 'Áo Thun Tay Dài Nữ Vải Jacquard Trơn Form Fitted', 343, 'thun4.jpg', 'M', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nFitted\r\nChất liệu\r\nJacquard\r\nThiết kế\r\nTrơn\r\nKiểu tay\r\nTay dài\r\nGiới tính\r\nNữ\r\nNhóm sản phẩm\r\nÁo Thun', 10),
(27, 'Áo Sơ Mi Nam Tay Dài Flannel Túi Đắp Kẻ Caro Form Oversize', 638, 'somi2.webp', 'L', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nOversize\r\nChất liệu\r\nFlannel\r\nThiết kế\r\nKẻ sọc\r\nKiểu tay\r\nTay dài\r\nKiểu cổ\r\nCổ gài nút\r\nKiểu túi\r\nTúi đắp\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nÁo Sơ Mi\r\nTHÔNG TIN CHI TIẾT ÁO SƠ MI NAM TAY DÀI FLANNEL TÚI ĐẮP KẺ CARO FORM OVERSIZE - 10F', 11),
(28, 'Quần Jean Nam Rách Gối Trơn Form Skinny', 249, 'jean2.webp', '32', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nSkinny\r\nChất liệu\r\nJeans\r\nThiết kế\r\nTrơn\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nQuần Jean\r\nTHÔNG TIN CHI TIẾT QUẦN JEAN NAM RÁCH GỐI TRƠN FORM SKINNY - 10F20DPA101CR2\r\nQuần Jean Nam Rách Gối Trơn Form Skinny - 10F20DPA101CR2 luôn có sức h', 14),
(29, 'Quần jean nữ trơn.Loose', 589, 'jean3.webp', '26', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nLoose\r\nChất liệu\r\nJeans\r\nNhóm sản phẩm\r\nQuần Jean', 14),
(30, 'Quần Short Nam Kẻ Sọc Dọc Phối Dây Rút Form Relax', 429, 'short2.jpg', '29', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nRelax\r\nChất liệu\r\nPolyester\r\nThiết kế\r\nKẻ sọc\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nQuần Short', 16),
(31, 'Quần Short Nữ Cotton Trơn Form Panama', 373, 'short3.webp', 'M', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nPanama\r\nChất liệu\r\nCotton\r\nThiết kế\r\nTrơn\r\nGiới tính\r\nNữ\r\nNhóm sản phẩm\r\nQuần Short', 16),
(32, 'Quần Jogger Nam Viscose Phối Tape', 449, 'jogger2.webp', 'L', 'ĐẶC ĐIỂM NỔI BẬT\r\nForm\r\nJogger\r\nChất liệu\r\nViscose\r\nGiới tính\r\nNam\r\nNhóm sản phẩm\r\nQuần Nỉ/Jogger\r\nTHÔNG TIN CHI TIẾT QUẦN JOGGER NAM VISCOSE PHỐI TAPE - 10F22PJO003\r\nQuần jogger ngày càng trở nên phổ biến, chúng thường được mọi người diện mọi nơi từ đi l', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_trang_thai`
--

CREATE TABLE `tb_trang_thai` (
  `id` int(10) NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_trang_thai`
--

INSERT INTO `tb_trang_thai` (`id`, `trang_thai`) VALUES
(1, 'Đơn hàng mới'),
(2, 'Đang xử lý'),
(3, 'Đang giao hàng'),
(4, 'Đã giao hàng'),
(5, 'Đã nhận hàng'),
(6, 'Đã hủy đơn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_chi_tiet_hoa_don`
--
ALTER TABLE `tb_chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_chuc_vu`
--
ALTER TABLE `tb_chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_danh_muc`
--
ALTER TABLE `tb_danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_khach_hang`
--
ALTER TABLE `tb_khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_binh_luan`
--
ALTER TABLE `tb_binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tb_chi_tiet_hoa_don`
--
ALTER TABLE `tb_chi_tiet_hoa_don`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `tb_danh_muc`
--
ALTER TABLE `tb_danh_muc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tb_hoa_don`
--
ALTER TABLE `tb_hoa_don`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tb_khach_hang`
--
ALTER TABLE `tb_khach_hang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tb_lien_he`
--
ALTER TABLE `tb_lien_he`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tb_nguoi_dung`
--
ALTER TABLE `tb_nguoi_dung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tb_san_pham`
--
ALTER TABLE `tb_san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tb_trang_thai`
--
ALTER TABLE `tb_trang_thai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
