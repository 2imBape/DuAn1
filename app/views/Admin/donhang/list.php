
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
      <div class="content table_danhmuc"><!--/. container-fluid -->
        <table>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>ngay_dat_hang</th>
                <th>Email</th>
                <th>Trạng thái</th>
            </tr>
            <?php
              foreach ($listhd as $hoadon) {
                extract($hoadon);
                $xem = "indexadmin.php?act=xemdh&id=".$id;
                $updatett = "indexadmin.php?act=editdh&id=".$id;
                $trang_thai_dh=get_trang_thai($hoadon['id_trang_thai']);
                echo '<tr>
                <td>DAM-'.$id.'</td>
                <td>'.$ten_kh.'</td>
                <td>'.$dia_chi.'</td>
                <td>'.$sdt.'</td>
                <td>'.$ngay_dat_hang.'</td>
                <td>'.$email.'</td>
                <td>'.$trang_thai_dh.'</td>
                <td style="text-align: center"><a href="'.$xem.'"><input type="submit" name="capnhat" value="Xem đơn"></a></td>
                <td style="text-align: center"><a href="'.$updatett.'"><input type="submit" name="capnhat" value="Cập nhật trạng thái"></a></td>
                
            </tr>';
              }
            
            ?>
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href=""><input type="button" value="Sửa"></a>
                  <a href=""><input type="button" value="Xóa"></a>
                </td>
            </tr> -->
        </table>
    </div>
    <br>
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