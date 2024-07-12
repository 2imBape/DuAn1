<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Sign IN</h1>
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
                    <h4 class="font-weight-semi-bold mb-4">Đăng nhập</h4>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Tên đăng nhập</label>
                                <input class="form-control" name="user" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" name="pass" type="password">
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <input type="submit" name="dangnhap"   value="Đăng nhập">
                                <a href="index.php?act=dangki"><input type="button"  value="Đăng kí tài khoản"></a><br><br>
                                <a href="#">Quên mật khẩu</a>
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