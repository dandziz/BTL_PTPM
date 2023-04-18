<?php
require("views/template/header.php");
?>
<head>
    <title>Chi tiết đơn hàng</title>
</head>
<main class="bg-white">
    <div class="container-fluid" style="background-color: #F9F9F9">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none p-14 text-dark">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none p-14 text-dark">Trang tài khoản</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span class="p-14 text-dark">Chi tiết đơn hàng</span></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container pb-3 mt-5">
        <div class="row">
            <div class="col-md-3">
                <h5>TRANG TÀI KHOẢN</h5>
                <p class="p-14-bold">Xin chào, Đào Duy Đán</p>
                <div class="mt-3">
                    <p class="p-14"><a href="index.php?controller=khachhang" class="text-decoration-none text-dark">Thông tin tài khoản</a></p>
                    <p class="p-14-bold mb-3"><a href="index.php?controller=khachhang&action=DonHang" class="text-decoration-underline text-dark">Đơn hàng của bạn</a></p>
                    <p class="p-14"><a href="index.php?controller=khachhang&action=DoiMatKhau" class="text-decoration-none text-dark">Đổi mật khẩu</a></p>
                    <p class="p-14"><a href="index.php?controller=khachhang&action=SoDiaChi" class="text-decoration-none text-dark">Sổ địa chỉ (<?php echo count($data) ?>)</a></p>
                </div>
            </div>
            <div class="col-md-9 mb-4">
                <p class="p-14 text-end">Ngày đặt hàng: <?php echo date("d/m/Y", strtotime($donhang['ngaydathang'])); ?></p>
                <h5>Chi tiết đơn hàng #<?php echo $donhang['id_donhang'] ?></h5>
                <div class="row">
                    <?php
                    $flag = true;
                    if ($donhang['trangthaidonhang'] == 3) {
                        $flag = false;
                    }
                    if ($donhang['trangthaithanhtoan'] == 0) {
                        $tttt = "Chưa thanh toán";
                    } else {
                        $tttt = "Đã thanh toán";
                    }
                    if ($donhang['trangthaivanchuyen'] == 0) {
                        $ttvc = "Chưa vận chuyển";
                    } else if ($donhang['trangthaivanchuyen'] == 1) {
                        $ttvc = "Đang vận chuyển";
                    } else {
                        $ttvc = "Đã vận chuyển";
                    }
                    ?>
                    <div class="col-md-6">
                        <span class="p-14">Trạng thái thanh toán: <span class="p-15-bold fst-italic text-main"><?php echo ($flag == true) ? $tttt : "Đã hủy" ?></span></span>
                    </div>
                    <div class="col-md-6">
                        <span class="p-14">Trạng thái vận chuyển: <span class="p-15-bold fst-italic text-main"><?php echo ($flag == true) ? $ttvc : "Đã hủy" ?></span></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 mb-5">
                        <p class="mb-1">ĐỊA CHỈ GIAO HÀNG</p>
                        <div class="col-md-12 ps-3 pe-3 border" style="height: 100%">
                            <div class="col-md-12">
                                <p class="p-15-bold mb-2"><?php echo ($donhang['diachikhac'] == 0) ? $donhang['hoten'] : $donhang['hoten_khac'] ?></p>
                                <p class="p-14 mb-2">Địa chỉ: <?php echo ($donhang['diachikhac'] == 1) ? $donhang['diachi_khac'] . ", " . $donhang['phuongxa_khac'] . ", " . $donhang['quanhuyen_khac'] . ", " . $donhang['tinhthanh_khac'] : $donhang['diachi'] . ", " . $donhang['phuongxa'] . ", " . $donhang['quanhuyen'] . ", " . $donhang['tinhthanh'] ?></p>
                                <p class="p-14">Số điện thoại: +84366887398</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <p class="mb-1">THANH TOÁN</p>
                        <div class="col-md-12 ps-3 pe-3 border" style="height: 100%">
                            <div class="col-md-12 p-2">
                                <p class="p-14"><?php echo $pTTT['ten'] ?></p>
                                <?php
                                if($flag == true && $donhang['trangthaithanhtoan'] == 0){
                                    echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Hướng dẫn thanh toán</button>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <p class="mb-1">GHI CHÚ</p>
                        <div class="col-md-12 ps-3 pe-3 border" style="height: 100%">
                            <div class="col-md-12 p-2">
                                <p class="p-14"><?php echo ($donhang['diachikhac'] == 0) ? $donhang['ghichu'] : $donhang['ghichu_khac'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($donhang_sanpham as $item) {
                                ?>
                                    <tr>
                                        <td style="width: 50%">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="<?php echo $item['img_link'] ?>" alt="">
                                                </div>
                                                <div class="col-md-7 ps-4">
                                                    <p class="p-15 mb-0"><?php echo $item['ten_nuochoa'] ?></p>
                                                    <p class="p-14 mb-4"><?php echo $item['gioitinh'] . " / " . $item['xuatxu'] . " / Chiết " . $item['dungtich'] . "ml" ?></p>
                                                    <p class="p-15-bold mb-0">Mã sản phẩm: <?php echo $item['id_nuochoa'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php echo number_format($item['dongia'], 0, ",", ".") . " ₫"; ?></td>
                                        <td><?php echo $item['soluong'] ?></td>
                                        <td>
                                            <?php
                                            if ($item['magiamgia'] != null && $item['magiamgia'] != '') {
                                            ?>
                                                <p class="m-0 text-decoration-line-through"><?php echo number_format($item['dongia'] * $item['soluong'], 0, ",", ".") . " ₫"; ?></p>
                                                <p class="m-0"><?php echo number_format($item['tong'], 0, ",", ".") . " ₫"; ?></p>
                                            <?php
                                            }else{
                                                ?>
                                                <p class="m-0"><?php echo number_format($item['tong'], 0, ",", ".") . " ₫"; ?></p>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-5">
                    <div>
                        <table class="table table-bordered p-14">
                            <tbody>
                                <tr>
                                    <td>Khuyến mãi</td>
                                    <td><?php echo number_format($donhang['khuyenmai'], 0, ",", ".") . " ₫"; ?></td>
                                </tr>
                                <tr>
                                    <td>Phí vận chuyển</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td>
                                        <p class="p-15-bold text-main mb-0"><?php echo number_format($donhang['tongtien'], 0, ",", ".") . " ₫"; ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hướng dẫn thanh toán</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <strong><?php echo $pTTT['ten'] ?></strong>
                    <?php
                    $mota = preg_split('/\r\n|\r|\n/', $pTTT['mota']);
                    foreach($mota as $item){
                        echo '<p class="p-14">'.$item.'</p>';
                    }
                    ?>
                    <img src="<?php echo $pTTT['image_link'] ?>" alt="" style="height: 100%; width: 100%">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
require("views/template/footer.php");
?>