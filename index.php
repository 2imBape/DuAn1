<?php
    ob_start();
    session_start();
    include "app/models/pdo.php";
    include "app/models/AdminModel.php";
    include "app/models/ClientModel.php";
    $load_danh_muc = loadall_danhmuc_home();
    include "app/views/Client/header.php";
    $load_san_pham = loadall_sanpham_home();
    $load_sanpham = loadall_sanpham();

    
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'shop':
                include "app/views/Client/shop.php";
                break;
            case 'dangki':
                if(isset($_POST['dangki']) && $_POST['dangki']){
                        $tenKH = $_POST['ten_kh'];
                        $email = $_POST['email'];
                        $sdt = $_POST['sdt'];
                        $diaChi= $_POST['dia_chi'];
                        $account = $_POST['account'];
                        $pass = $_POST['pass'];
                        $ngaySinh = $_POST['ngay_sinh'];
                        
    
                        dang_ki_tk($tenKH,$email,$sdt,$diaChi,$account,$pass,$ngaySinh);
                        $thongBao = " Thêm thành công";
                }
                    
                include "app/views/Client/taikhoan/dangki.php";
                break;
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                }
                if(isset($_GET['id_danh_muc']) && $_GET['id_danh_muc'] > 0){
                        $id_danh_muc = $_GET['id_danh_muc'];
                    }else{
                        $id_danh_muc = 0;          
                }
                $dssp = loadall_sanpham_cungloai($kyw,$id_danh_muc);
                $tendm = load_ten_dm($id_danh_muc);
                include "app/views/Client/sanpham.php";
                break;    
                
            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $taikhoan = dangnhap($user, $pass);
                    if (is_array($taikhoan)) {
                        $_SESSION['user'] = $taikhoan;
                        header('Location: index.php');
                    } else {
                        $thongbao = "Thông tin tài khoản sai";
                    }
                }
                include "app/views/Client/taikhoan/dangnhap.php";
                break;
            case 'dangnhapadmin':
                if(isset($_POST['dangnhapadmin'])&&($_POST['dangnhapadmin'])) {
                    $user = $_POST['useradmin'];
                    $pass = $_POST['passadmin'];
                    $taikhoan = dangnhap_admin($user, $pass);
                    if (is_array($taikhoan)) {
                        $_SESSION['useradmin'] = $taikhoan;
                        header('Location: index.php');
                    } else {
                        $thongbao = "Thông tin tài khoản sai";
                    }
                }
                include "app/views/Client/taikhoan/dangnhapadmin.php";
                break;
            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;
            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $ten_san_pham = $_POST['ten_san_pham'];
                    $gia = $_POST['gia'];
                    $img = $_POST['img'];
                    $size = $_POST['size'];
                    $soLuong=$_POST['amount'];
                    $i=0;
                    $check=0;

                    //tìm và so sánh sp trong giỏ hàng
                    if(isset($_SESSION['mycart'])&&(count($_SESSION['mycart'])>0)){
                        foreach ($_SESSION['mycart'] as $sp) {
                            if($sp[0]==$id){
                                $soLuong+=$sp[5];
                                $check=1;
                                //cập nhật số lượng mới vào giỏ hàng
                                $_SESSION['mycart'][$i][5]=$soLuong;
                                break;
                            }
                            $i++;
                        }
                    }
                    $tongTien = $soLuong * $gia; 
                    if($check==0){
                        $spadd = [$id,$ten_san_pham,$gia,$img,$size,$soLuong,$tongTien];
                        array_push($_SESSION['mycart'],$spadd);
                    }
                }

                include "app/views/Client/giohang/giohang.php";
                break;
                                
            case 'delcart':
                if(isset($_GET['idcart'])){
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                }
                // array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                // include "../views/Client/giohang/giohang.php";
                header("Location: index.php?act=giohang");
                break;
                            
            case 'bill':
                include "app/views/Client/giohang/bill.php";      
                break;
            case 'billconfirm':
            //Tạo bill
                if(isset($_POST['dathang']) && ($_POST['dathang'])){
                    if(isset($_SESSION['user'])) $id_kh=$_SESSION['user']['id'];
                    else $id=0;
                    $name = $_POST['ten_kh'];
                    $dia_chi = $_POST['dia_chi'];
                    $sdt = $_POST['sdt'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                    $ngay_dat_hang = date('h:i:sa d/m/Y');
                    $tong_hoa_don = tong_hoa_don();
                    //Tạo bill
                    $idbill = insert_bill($id_kh,$name,$dia_chi,$sdt,$email,$pttt,$ngay_dat_hang,$tong_hoa_don);
                    //Insert into cart: vowis casi $_SESSION['mycart'] & $id_bill;
                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[1],$cart[3],$cart[2],$cart[4],$cart[5],$cart[6],$idbill);
                    }
                    // Xoa session
                    $_SESSION['cart']=[];
                } 
                //   var_dump($idbill);
                $bill=load_one_bill($idbill);
                $billct=load_all_cart($idbill);
                include "app/views/Client/giohang/billconfirm.php";      
            break;
                        
                
            case 'mybill':
                $listbill = load_all_bill($_SESSION['user']['id']);
                include "app/views/Client/giohang/mybill.php";      
                break;
                
            case 'giohang':
                include "app/views/Client/giohang/giohang.php";      
                break;
                
            case 'view':
                if(isset($_GET['iddon'])&&$_GET['iddon']>0){
                    $id = $_GET['iddon'];
                }
                $bill=load_one_bill($id);
                $billct=load_all_cart($id);
                include "app/views/Client/giohang/chitietdonhang.php";      
                break;
            case 'spct':
                    if(isset($_POST['guibinhluan'])){
                        $user = $_SESSION['user'];
                        $idpro = $_POST['id_san_pham'];
                        $noidung = $_POST['noi_dung'];
                        $ngay_danh_gia = date('h:i:sa d/m/Y');
                        insert_binhluan($idpro, $user['id'], $noidung, $ngay_danh_gia);
                        header("location: index.php?act=spct&idsp=".$idpro);
                    }
                    if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                        $idsp = $_GET['idsp'];
                        $sanpham = loadone_sanpham($idsp);
                        $binhluan = loadall_binhluan($idsp);
                        include "app/views/Client/sanphamchitiet/spct.php";
                    }else{
                        include "app/views/Client/home.php";              
                    }
                
                break;
        //Liên hệ
            case 'contact':
                include "app/views/Client/contact.php";
                break;   
            
            case 'addlh' :
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_khach_hang = $_POST['ten_khach_hang'];
                    $email = $_POST['email'];
                    $dia_chi = $_POST['dia_chi'];
                    $noi_dung = $_POST['noi_dung'];
                    insert_lienhe($ten_khach_hang,$email,$dia_chi,$noi_dung);
                    $thongbao = "Thêm thành công";
                }
                include "app/views/Client/contact.php";
                break;

            case 'cao_thap' :
                if(isset($_GET['id'])&&($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    $list = cao_thap($id);
                }
                $listsp=loadall_sanpham();
                include "app/views/Client/sanpham.php";
                break;
        }
    }else{
        include "app/views/Client/home.php";
    }
    
    include "app/views/Client/footer.php";
    ob_end_flush();
?>
