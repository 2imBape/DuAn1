<?php

    if(is_array($listcthd)){
        extract($listcthd);
    }
?>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <?php  include "menungang/menungang.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php  include "menudoc/menudoc.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Quản lý đơn hàng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Quản lý đơn hàng</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
        if(array($bill)){
          extract($bill);
        }       
      ?>
      <div class="content"><!--/. container-fluid -->
      <form action="indexadmin.php?act=updhd" method="post" enctype="multipart/form-data">
        
        <div class="content">
          <label for="">Mã đơn hàng:</label><br>
          
        </div>
        <div class="content">
          <label for="">Tên khách hàng:</label><br>
          <input type="text" name="img" value="<?=$ten_kh?>">
        </div>
        <div class="content">
          <label for="">Địa chỉ:</label><br>
          <input type="text" name="gia" value="<?=$dia_chi?>">
        </div>
        <div class="content">
          <label for="">Số điện thoại:</label><br>
          <input type="text" name="gia" value="<?=$sdt?>">
        </div>
        <div class="content">
          <label for="">Ngày đặt hàng:</label><br>
          <input type="text" name="gia" value="<?=$ngay_dat_hang?>">
        </div>
        <div class="content">
          <label for="">Email:</label><br>
          <input type="text" name="gia" value="<?=$email?>">
        </div>
        <select name="id_trang_thai">
          <?php
          foreach ($list_tt as $hoadon) {
            extract($hoadon);
                if($id_trang_thai==$hoadon['id']){
                  echo '<option value="'.$hoadon['id'].'" selected>'.$hoadon['trang_thai'].'</option>';
              }else{
                echo '<option value="'.$hoadon['id'].'" >'.$hoadon['trang_thai'].'</option>';
              }
               
            }
          ?>
        </select>
        <br>
        <div class="content">
            <input type="hidden" name="id" value="<?=$bill['id']?>">
          <input type="submit" name="capnhat" value="Cập nhật">
          <a href="indexadmin.php?act=listdh"><input type="button" name="danhsach" value="Danh sách"></a>
        </div>
        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
      </form>
    </div>
      <div class="content-wrapper row mb-2 col-sm-6">
        
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->