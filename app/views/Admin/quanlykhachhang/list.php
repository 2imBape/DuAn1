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
      <div class="content table_danhmuc"><!--/. container-fluid -->
      <table>
            <tr>
                <th>ID</th>
                <th>Tên nhân viên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Tài khoản</th>
                <th>Mật khẩu</th>
                <th>Mô tả</th>
            </tr>
            <?php 
                foreach ($listkh as $tkkh) { 
                extract($tkkh);
                $suakh = "indexadmin.php?act=suakh&id=$id";
                $delkh   = "indexadmin.php?act=delkh&id=$id";
              ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $ten ?></td>
                    <td><?= $email ?></td>
                    <td><?= $sdt ?></td>
                    <td><?= $dia_chi ?></td>
                    <td><?= $account ?></td>
                    <td><?= $pass ?></td>
                    <td><?= $mo_ta ?></td>
                    <td><a href="<?= $suakh ?>"><input type="button" value="Sửa"></a>   <a href="<?= $delkh ?>"><input type="button" value="Xóa"></a></td>
                </tr>
            <?php  } ?>
        </table>
        <a href="indexadmin.php?act=addkh"><input type="submit" value="Thêm mới"></a>

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