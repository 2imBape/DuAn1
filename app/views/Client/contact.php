<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Liên hệ</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <form action="index.php?act=addlh" method="post">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin liên hệ</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" type="text" name="ten_khach_hang">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="dia_chi">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" name="noi_dung" rows="5"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="submit" name="themmoi" value="Gửi">
                        </div>
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </div>
            </form>
            
        </div>
        <div class="col-lg-5 mb-5">
            <h5 class="font-weight-semi-bold mb-3">Thông tin liên hệ của chúng tôi</h5>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3">Cửa hàng</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Số 8, Trịnh Văn Bô, Phương Canh,
                    Nam Từ Liêm, Hà Nội</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>


        </div>
    </div>
</div>
</div>
<!-- Contact End -->