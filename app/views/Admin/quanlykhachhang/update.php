<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

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
              <h1 class="m-0">Quản lý khách hàng</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Quản lý khách hàng</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
        if(is_array($tk)){
            extract($tk);
        }
      ?>
      <div class="content"><!--/. container-fluid -->
      <li class="">Cập nhật khách hàng</li>
      <form action="indexadmin.php?act=updkh" method="POST">
        <div class="content">
          <label for="">ID</label><br>
          
        </div>
        <div class="content">
          <label for="">Tên user:</label><br>
          <input type="text" name="ten_kh" value="<?= $ten ?>">
        </div>
        <div class="content">
          <label for="">Email:</label><br>
          <input type="text" name="email" value="<?= $email ?>">
        </div>
        <div class="content">
          <label for="">SĐT:</label><br>
          <input type="text" name="sdt" value="<?= $sdt ?>">
        </div>
        <div class="content">
          <label for="">Địa chỉ:</label><br>
          <input type="text" name="dia_chi" value="<?= $dia_chi ?>">
        </div>
        <div class="content">
          <label for="">Tài khoản:</label><br>
          <input type="text" name="account" value="<?= $account ?>">
        </div>
        <div class="content">
          <label for="">Mật khẩu:</label><br>
          <input type="password" name="pass" value="<?= $pass ?>">
        </div>
        <div class="content">
          <label for="">Mô tả:</label><br>
          <input type="text" name="moTa" value="<?= $mo_ta ?>">
        </div>
        <br>
        <div class="content">
            <input type="hidden" name="id" value="<?= $id ?>">
          <input type="submit" name="capnhat" value="Cập nhật">
          <a href="indexadmin.php?act=listkh"><input type="button" name="danhsach" value="Danh sách"></a>
        </div>
        
         <?php
            if(isset($thongBao) && $thongBao != ""){
                echo $thongBao;
            }
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