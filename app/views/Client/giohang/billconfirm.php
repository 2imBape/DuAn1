
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Đặt hàng thành công</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Đặt hàng thành công</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                
                <?php
                    if(isset($bill)&&(is_array($bill))){
                        extract($bill);
                    }
                ?>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Thông tin đơn hàng</h4>
                    </div>
                    <div style="margin-top:5px;">
                            <li >Mã đơn hàng: DAM-<?= $bill['id']; ?></li><br>
                            <li>Ngày đặt hàng: <?= $bill['ngay_dat_hang']; ?></li><br>
                            <li>Tổng hóa đơn: <?= $bill['tong_hoa_don']; ?>.000 ₫</li><br>
                            <li>Phương thức thanh toán: 
                            <?php
                            if($bill['phuong_thuc_thanh_toan']==1){
                                echo 'Thanh toán khi nhận hàng';
                            }
                             
                            ?></li><br>
                            
                </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Thông tin người đặt hàng</h4>
                    </div>
                    <table class="table table-bordered text-center mb-0">
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?= $bill['ten_kh']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= $bill['dia_chi']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $bill['email']; ?></td>
                        </tr>
                        <tr>
                            <td>SĐT</td>
                            <td><?= $bill['sdt']; ?></td>
                        </tr>
                                             
                   
                    </table>
                </div>

               
                    
            </div>
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Hình sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Size</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <?php
                        bill_chi_tiet($billct);
                    ?> 
                </table>
                <a href="index.php?act=mybill"><input type="button" value="Đơn hàng của tôi"></a>
            </div> 
        </div>
        
    </div>
    <!-- Cart End -->   