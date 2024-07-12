 <!-- Page Header Start -->
 <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Đơn hàng của tôi</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Đơn hàng của tôi</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5     ">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Số lượng sản phẩm</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Chi tiết đơn hàng</th>
                        </tr>
                    </thead>
                   <?php
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $trang_thai=get_trang_thai($bill['id_trang_thai']);
                                $countsp=load_all_cart_count($bill['id']);
                                $view='<a href="index.php?act=view&iddon='.$id.'"><input type="button" value="Xem"></a>';
                                echo '
                                    <tr>
                                        <td>DAM-'.$bill['id'].'</td>
                                        <td>'.$bill['ngay_dat_hang'].'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$bill['tong_hoa_don'].'000 ₫</td>
                                        <td>'.$trang_thai.'</td>
                                        <td>'.$view.'</td>
                                    </tr>';
                            }
                        }
                   ?>
                </table>
            </div>
        </div>
    </div>