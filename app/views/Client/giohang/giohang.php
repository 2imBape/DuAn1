    <?php //include "../../../models/ClientModel.php"; ?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
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
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <?php
                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $img_path = "app/views/Admin/uploads/";
                            $img = $img_path.$cart[3]; 
                            $ttien = $cart[2] * $cart[5];
                            $tong+= $ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                            echo '<tr>
                            <td>'.$cart[1].'</td>
                            <td><img src="'.$cart[3].'" alt="" height="80px"></td>
                            <td>$'.$cart[2].'</td>   
                            <td>'.$cart[4].'</td>
                            <td>'.$cart[5].'</td>
                            <td>'.$ttien.'000 ₫</td>
                            <td> '.$xoasp.'</td>
                            </tr>';
                                
                        $i++;
                        }
                        echo '<tr>
                            <td colspan="5">Tổng đơn hàng</td>

                                    
                            <td>'.$tong.'000 ₫</td>
                            <td></td>
                        </tr>';
                    
                    
                    ?>
                    
                </table>
            </div>
        </div>
        <?php
            if(isset($_SESSION['user'])){
                echo'
                <a href="index.php?act=bill"><input type="button" value="Thanh toán"></a>
                <a href="index.php?act=mybill"><input type="button" value="Đơn hàng của tôi"></a>
                <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>';
            }else{
                echo 'Bạn cần đăng nhập để thanh toán giỏ hàng';
            }
        ?>
            
    </div>
    
    <!-- Cart End -->