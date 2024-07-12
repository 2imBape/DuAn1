<?php
// model danh mục
function insert_danhmuc($ten_danh_muc,$mo_ta,$img,$trang_thai){
    $sql = "INSERT INTO tb_danh_muc(ten_danh_muc,mo_ta,img,trang_thai) VALUES('$ten_danh_muc','$mo_ta','$img','$trang_thai')";
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql = "SELECT * FROM tb_danh_muc ORDER BY id ASC";
    $listdm = pdo_query($sql);
    return $listdm;
}
function loadall_danhmuc_home(){
    $sql = "SELECT * FROM tb_danh_muc WHERE 1 ";
    $listdm = pdo_query($sql);
    return $listdm;
}
function load_ten_dm($id_danh_muc){
    if($id_danh_muc>0){
        $sql = "SELECT * FROM tb_danh_muc WHERE id=".$id_danh_muc;
        $dm = pdo_query_one($sql);
        extract($dm);
        // return $ten_san_pham;
    }else{
        return "";
    }
    
}
function loadall_sanpham_cungloai($kyw="",$id_danh_muc=0){
    $sql = "select * from tb_san_pham where 1";
    if($kyw!=""){
        $sql.=" and ten_san_pham like '%$kyw%'";
    }
    if($id_danh_muc>0){
        $sql.=" and id_danh_muc =$id_danh_muc";
    }
    $sql.=" order by id desc";
    $dssp = pdo_query($sql);
    return $dssp;
}
function delete_danhmuc($id){
    $sql = "DELETE FROM tb_danh_muc WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_danhmuc($id){
    $sql = "SELECT * FROM tb_danh_muc WHERE id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$ten_danh_muc,$mo_ta,$img,$trang_thai){
    $sql = "UPDATE tb_danh_muc SET ten_danh_muc='".$ten_danh_muc."',mo_ta='".$mo_ta."',img='".$img."',trang_thai='".$trang_thai."' WHERE id=".$id;
    pdo_execute($sql);
}
//model sản phẩm
function insert_sanpham($ten_san_pham,$gia,$img,$iddm,$size,$mo_ta){
    $sql = "INSERT INTO tb_san_pham(ten_san_pham,gia,img,size,mo_ta,id_danh_muc) VALUES('$ten_san_pham','$gia','$img','$size','$mo_ta','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql = "SELECT * FROM tb_san_pham ORDER BY id ASC";
    $listsp = pdo_query($sql);
    return $listsp;
}
function loadall_sanpham_home(){
    $sql = "SELECT * FROM tb_san_pham WHERE 1 ORDER BY id desc limit 0,8 ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function delete_sanpham($id){
    $sql = "DELETE FROM tb_san_pham WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql = "SELECT * FROM tb_san_pham WHERE id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id,$id_danh_muc,$ten_san_pham,$gia,$img,$size,$mo_ta){
    $sql = "UPDATE tb_san_pham SET id_danh_muc='".$id_danh_muc."',ten_san_pham='".$ten_san_pham."',gia='".$gia."',img='".$img."',size='".$size."',mo_ta='".$mo_ta."' WHERE id=".$id;
    pdo_execute($sql);
}



// model banner
function insert_banner($ten_banner,$hinh_anh,$link,$trang_thai){
    $sql = "INSERT INTO tb_banner(ten_banner,hinh_anh,link,trang_thai) VALUES('$ten_banner','$hinh_anh','$link','$trang_thai')";
    pdo_execute($sql);
}
function loadall_banner(){
    $sql = "SELECT * FROM tb_banner ORDER BY id ASC";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
function loadall_banner_home(){
    $sql = "SELECT * FROM tb_banner WHERE 1 ORDER BY id DESC";
    $listbanner = pdo_query($sql);
    return $listbanner;
}
function delete_banner($id){
    $sql = "DELETE FROM tb_banner WHERE id=".$id;
    pdo_execute($sql);
}
function loadone_banner($id){
    $sql = "SELECT * FROM tb_banner WHERE id=".$id;
    $banner = pdo_query_one($sql);
    return $banner;
}
function update_banner($id,$ten_banner,$hinh_anh,$link,$trang_thai){
    $sql = "UPDATE tb_banner SET id='".$id."',ten_banner='".$ten_banner."',hinh_anh='".$hinh_anh."',link='".$link."',trang_thai='".$trang_thai."' WHERE id=".$id;
    pdo_execute($sql);
}


function load_bv(){
    $sql = "select * from tb_bai_viet where 1 order by id desc";
    $result = pdo_query($sql);
    return $result;
}

// Đổ một tài khoản khách hàng
function loadone_bai_viet($id){
    $sql = "select * from tb_bai_viet where id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function  update_bv($id,$tieu_de,$noi_dung,$ngay_dang,$trang_thai){
    $sql = "update tb_bai_viet set tieu_de = '$tieu_de', noi_dung = '$noi_dung',ngay_dang = '$ngay_dang' ,trang_thai = '$trang_thai' where id = '$id'";
    pdo_execute($sql);
    return "Cập nhật thông tin thành công";
}

function loadall_bai_viet(){
    $sql = "select * from tb_bai_viet";
    $listbv = pdo_query($sql);
    return $listbv;
}

//Model Tài khoản user

    // Thêm tài khoản
    function insert_taikhoan_user($tenUser,$email,$sdt,$ngaySinh,$diaChi,$account,$pass,$moTa,$role){
        $sql = "insert into tb_nguoi_dung(ten,email,sdt,ngay_sinh,dia_chi,account,pass,mo_ta,role_id) values('$tenUser','$email','$sdt','$ngaySinh','$diaChi','$account','$pass','$moTa','$role')";
        pdo_execute($sql);
    }

    // Đổ toàn bộ tài khoản
    function loadall_taikhoan(){
        $sql = "select * from tb_nguoi_dung ";
        $result = pdo_query($sql);
        return $result;
    }

    // Đổ một tài khoản
    function loadone_tai_khoan($id){
        $sql = "select * from tb_nguoi_dung where id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Xóa tài khoản
    function delete_taikhoan($id){
        $sql = "delete from tb_nguoi_dung where id = '$id'";
        pdo_execute($sql);
    }

    // Cập nhật thông tin user
    function  update_user($id,$tenUser,$email,$sdt,$ngaySinh,$diaChi,$account,$pass,$moTa,$role){
        $sql = "update tb_nguoi_dung set ten = '$tenUser', email = '$email', sdt = '$sdt', ngay_sinh = '$ngaySinh', dia_chi = '$diaChi', account = '$account', pass = '$pass', mo_ta = '$moTa', role_id = '$role' where id = '$id'";
        pdo_execute($sql);
        return "Cập nhật thông tin thành công";
    }

    function load(){
        $sql = "select * from tb_nguoi_dung where 1 order by id desc";
        $result = pdo_query($sql);
        return $result;
    }


//Model tài khoản khách hàng

    //Thêm tài khoản khách hàng
    function insert_taikhoan_kh($tenKH,$email,$sdt,$diaChi,$account,$pass,$moTa){
        $sql = "insert into tb_khach_hang(ten,email,sdt,dia_chi,account,pass,mo_ta) values('$tenKH','$email','$sdt','$diaChi','$account','$pass','$moTa')";
        pdo_execute($sql);
    }

    // Đổ toàn bộ tài khoản khách hàng
    function loadall_taikhoan_kh(){
        $sql = "select * from tb_khach_hang ";
        $result = pdo_query($sql);
        return $result;
    }

    function load_kh(){
        $sql = "select * from tb_khach_hang where 1 order by id desc";
        $result = pdo_query($sql);
        return $result;
    }

    // Đổ một tài khoản khách hàng
    function loadone_tai_khoan_kh($id){
        $sql = "select * from tb_khach_hang where id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Xóa tài khoản khách hàng
    function delete_taikhoan_kh($id){
        $sql = "delete from tb_khach_hang where id = '$id'";
        pdo_execute($sql);
    }

    // Cập nhật thông tin khách hàng
    function  update_kh($id,$tenKH,$email,$sdt,$diaChi,$account,$pass,$moTa){
        $sql = "update tb_khach_hang set ten = '$tenKH', email = '$email', sdt = '$sdt', dia_chi = '$diaChi', account = '$account', pass = '$pass', mo_ta = '$moTa' where id = '$id'";
        pdo_execute($sql);
        return "Cập nhật thông tin thành công";
    }
    // hóa đơn
    function loadall_hoadon(){
        $sql="SELECT * FROM tb_hoa_don ";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    
    function loadall_tt(){
        $sql="SELECT * FROM tb_trang_thai order by id ";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    
    function load_one_hd($id){
        $sql = "SELECT * FROM tb_chi_tiet_hoa_don where id_hoa_don =".$id;
        $listhd = pdo_query_one($sql);
        return $listhd;
    }
    
    function load_one_bill_adm($id){
        $sql = "SELECT * FROM tb_hoa_don where id =".$id;
        $listhd = pdo_query_one($sql);
        return $listhd;
    }
    
    //Cập nhật tráng thái đơn hàng
    function  update_tthai($id,$trang_thai){
        $sql = "update tb_hoa_don set id_trang_thai = '$trang_thai' where id = '$id'";
        pdo_execute($sql);
        return "Cập nhật thông tin thành công";
    }

//Model thống kê
    function loadall_thongke(){
        $sql="select tb_danh_muc.id as madm, tb_danh_muc.ten_danh_muc as tendm, count(tb_san_pham.id) as countsp, min(tb_san_pham.gia) as minprice,max(tb_san_pham.gia) as maxprice, avg(tb_san_pham.gia) as avgprice";
        $sql.=" from tb_san_pham left join tb_danh_muc on tb_danh_muc.id=tb_san_pham.id_danh_muc";
        $sql.=" group by tb_danh_muc.id order by tb_danh_muc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }

//Model Liên hệ

    function loadall_lien_he(){
        $sql="SELECT * FROM tb_lien_he ";
        $listlh=pdo_query($sql);
        return $listlh;
    }

//Model bình luận
    function load_binhluan(){
        $sql = "SELECT tb_binh_luan.id, tb_binh_luan.noi_dung, tb_khach_hang.account, tb_san_pham.ten_san_pham, tb_binh_luan.ngay_danh_gia FROM tb_binh_luan
        LEFT JOIN tb_khach_hang ON tb_binh_luan.id_khach_hang = tb_khach_hang.id
            LEFT JOIN tb_san_pham ON tb_binh_luan.id_san_pham = tb_san_pham.id";
        $result = pdo_query($sql);
        return $result;
    }

    function delete_binhluan($id){
        $sql = "delete from tb_binh_luan where id =".$id;
        pdo_execute($sql);
    }

    function loadall_binhluan($idsp){
        $sql = "SELECT tb_binh_luan.id, tb_binh_luan.noi_dung, tb_khach_hang.account, tb_binh_luan.ngay_danh_gia FROM tb_binh_luan
        LEFT JOIN tb_khach_hang ON tb_binh_luan.id_khach_hang = tb_khach_hang.id
            LEFT JOIN tb_san_pham ON tb_binh_luan.id_san_pham = tb_san_pham.id
            WHERE tb_san_pham.id=". $idsp;
        
        $result =  pdo_query($sql);
        return $result;
    }

    function insert_binhluan($idpro,$iduser, $noidung, $ngay_danh_gia){
        $sql = " INSERT INTO tb_binh_luan(noi_dung, id_khach_hang, id_san_pham, ngay_danh_gia) VALUES ('$noidung','$iduser','$idpro','$ngay_danh_gia')";
        // echo $sql;
        // die;
        pdo_execute($sql);
    }
?>