<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

        <!-- Navbar -->
        <?php include "menungang/menungang.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include "menudoc/menudoc.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Quản lý liên hệ</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Quản lý liên hệ</li>
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
                        <th>Mã liên hệ</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Nội dung</th>
                    </tr>
                    <?php
                    foreach ($listlh as $lh) {
                        extract($lh);
                        echo " <tr> 
                        <td>" . $id . "</td>
                        <td>" . $ten_kh . "</td>
                        <td>" . $email . "</td>
                        <td>" . $dia_chi . "</td>
                        <td>" . $noi_dung . "</td>
                        <td>
                        <a href='indexadmin.php?act=dellh&id=" . $id . "'><input type='button' value='Xóa'><a/></td>
                    </tr>";
                    }
                    ?>

                </table>
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