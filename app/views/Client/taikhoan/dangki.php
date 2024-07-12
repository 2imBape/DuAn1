<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Sign UP</h1>
            <div class="d-inline-flex">
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin đăng kí</h4>
                    <form action="index.php?act=dangki" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Tên đăng nhập</label>
                                <input class="form-control" name="account" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" name="pass" type="password">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Họ và tên</label>
                                <input class="form-control" name="ten_kh" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="sdt" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Ngày sinh</label>
                                <input class="form-control" name="ngay_sinh" type="date">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" type="text" name="dia_chi" name="" id="">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" name="dangki" value="Đăng kí tài khoản">
                                <a href="index.php?act=dangnhap"><input type="button"  value="Đăng nhập"></a>                            
                            </div>
                            <div class="col-md-12 form-group">
                                <a href="">Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>
                    <?php
                        if(isset($thongBao) && $thongBao != ""){
                            echo $thongBao;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>