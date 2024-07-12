<?php

    //danh mục




    //sản phẩm
    //Đăng kí
    function dang_ki_tk($tenKH,$email,$sdt,$diaChi,$account,$pass,$ngaySinh){
        $sql = "insert into tb_khach_hang(ten,email,sdt,ngay_sinh,dia_chi,account,pass) values('$tenKH','$email','$sdt','$ngaySinh','$diaChi','$account','$pass')";
        pdo_execute($sql);
    }
    //Đăng nhập
    function dangnhap($user,$pass) {
        $sql="SELECT * FROM tb_khach_hang WHERE account='".$user."' and pass='".$pass."'";
        $taikhoan = pdo_query_one($sql);

        return $taikhoan;
    }
    function dangnhap_admin($user,$pass) {
        $sql="SELECT * FROM tb_nguoi_dung WHERE account='".$user."' and pass='".$pass."'";
        $taikhoan = pdo_query_one($sql);

        return $taikhoan;
    }
    //Giỏ hàng
    function view_cart($del){
        $tong=0;
        $i=0;
        if($del==1){
            $xoasp_th=' <th>Remove</th>';            
            $xoasp_td2='<td></td>';
        }else{
            $xoasp_th='';
            $xoasp_td2='';
        }
        echo '
                <tr>
                    <th>Sản phẩm</th>
                    <th>Hình sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                        '.$xoasp_th.'
                </tr>';
        foreach ($_SESSION['mycart'] as $cart) {                          
            $tongTien = $cart[5] * $cart[2];
            $tong+=$tongTien;
            if($del==1){
                $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
            }else{
                $xoasp_td='';
            }
            echo '
                <tr>
                    <td>'.$cart[1].'</td>
                    <td><img src="'.$cart[3].'" alt="" height="80px"></td>
                    <td>'.$cart[2].'000 ₫</td>   
                    <td>'.$cart[4].'</td>
                    <td>'.$cart[5].'</td>
                     <td>'.$tongTien.'.000 ₫</td>
                        '.$xoasp_td.'
                </tr>';
                $i+=1;
        }
        echo '<tr>
                <td colspan="5">Tổng đơn hàng</td>

                        
                <td>'.$tong.'.000 ₫</td>
                    '.$xoasp_td2.'
            </tr>';
    }
    function tong_hoa_don(){
        $tong=0;
       
        foreach ($_SESSION['mycart'] as $cart) {                          
            $tongTien = $cart[5] * $cart[2];
            $tong+=$tongTien;
            
        }
        return $tong;
    }
    //Thêm đơn hàng
    function insert_bill($id_kh,$name,$dia_chi,$sdt,$email,$pttt,$ngay_dat_hang,$tong_hoa_don){
        $sql = "INSERT INTO tb_hoa_don(id_kh,ten_kh, dia_chi, sdt, email, phuong_thuc_thanh_toan, ngay_dat_hang, tong_hoa_don, id_trang_thai) VALUES ('$id_kh','$name','$dia_chi','$sdt','$email','$pttt','$ngay_dat_hang','$tong_hoa_don','')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function insert_cart($id_kh,$id_san_pham,$ten_san_pham,$img,$gia,$size,$so_luong,$thanh_tien,$idbill){
        $sql = "insert into tb_chi_tiet_hoa_don(id_kh,id_san_pham,ten_san_pham,img,gia,size,so_luong,thanh_tien,id_hoa_don) values('$id_kh','$id_san_pham','$ten_san_pham','$img','$gia','$size','$so_luong','$thanh_tien','$idbill')";
        return pdo_execute($sql);
    }
    function load_one_bill($id){
        $sql="SELECT * FROM tb_hoa_don where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function load_all_cart($idbill){
        $sql="SELECT * FROM tb_chi_tiet_hoa_don where id_hoa_don=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }
    function load_all_cart_count($idbill){
        $sql="SELECT * FROM tb_chi_tiet_hoa_don where id_hoa_don=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }
    function load_all_bill($id_kh){
        $sql="SELECT * FROM tb_hoa_don where id_kh=".$id_kh;
        $listbill=pdo_query($sql);
        return $listbill;
    }
    function bill_chi_tiet($listbill){
        $tong=0;
        $i=0;
        
        echo '
                ';
        foreach ($listbill as $cart) {                          
            $ttien = $cart['so_luong'] * $cart['gia'];
            $tong+=$ttien;
            
            echo '
                <tr>
                    <td>'.$cart['ten_san_pham'].'</td>
                    <td><img src="/duan1/'.$cart['img'].'" alt="" height="80px"></td>
                    <td>'.$cart['gia'].'.000 ₫</td>   
                    <td>'.$cart['size'].'</td>
                    <td>'.$cart['so_luong'].'</td>
                     <td>'.$ttien.'.000 ₫</td>
                </tr>';
                $i+=1;
        }
        echo '<tr>
                <td colspan="5">Tổng đơn hàng</td>

                        
                <td>'.$tong.'.000 ₫</td>
            </tr>';
    }
    function get_trang_thai($n){
        switch ($n) {
            case '1':
                $tt="Đơn hàng mới";
                break;
            
            case '2':
                $tt="Đang xử lý";
                break;
            
            case '3':
                $tt="Đang giao hàng";
                break;
            
            case '4':
                $tt="Đã giao hàng";
                break;
            
            case '5':
                $tt="Đã nhận hàng";
                break;
            
            case '6':
                $tt="Đã hủy đơn";
                break;
            
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }
    
//Liene heje
    function insert_lienhe($ten_khach_hang,$email,$dia_chi,$noi_dung){
        $sql = "INSERT INTO tb_lien_he(ten_kh,email,dia_chi,noi_dung) VALUES('$ten_khach_hang','$email','$dia_chi','$noi_dung')";
        pdo_execute($sql);  
    }

    function cao_thap($id){
        $sql="SELECT * FROM  where id=".$id;
        $sql.=" order by gia desc";
        $list=pdo_execute($sql);
        return $list;   
    }
    
?>