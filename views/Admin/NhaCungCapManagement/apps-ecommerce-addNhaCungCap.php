<?php
require "views/Admin/templates/header.php";
if(!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['LoginOK']) && $_SESSION['LoginOK'][0] == "1" || $_SESSION['LoginOK'][0] == "2") {
    $ql = explode("_", $_SESSION['LoginOK']);
$characters = '01234567890123456789ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = str_shuffle($characters);
$id_nhacungcap = substr($randomString, 0, 11);
?>
<head>
    <title>Thêm nhà cung cấp</title>
</head>
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Parfumerie</a></li>
                        <li class="breadcrumb-item"><a href="index.php?controller=NhanVien">Quản lý cửa hàng</a></li>
                        <li class="breadcrumb-item"><a href="index.php?controller=NhaCungCap">Nhà cung cấp</a></li>
                        <li class="breadcrumb-item active">Thêm nhà cung cấp</li>
                    </ol>
                </div>
                <h4 class="page-title">Thêm nhà cung cấp</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 ms-auto me-auto">
            <a class="btn btn-danger mt-2 mb-2">Thêm nhà cung cấp</a>
            <div style="color: red">
                <?php echo '<span>' . $error . '</span>' ?>
            </div>
            <div style="color: warning" id="thong_bao">
                
            </div>
            <form onsubmit="return validationForm()" action="" method="post" class="needs-validation dropzone" id="myAwesomeDropzone" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-md-6 ms-0">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom01">Mã nhà cung cấp</label>
                            <input type="text" class="form-control" name="id_nhacungcap" value="<?php echo $id_nhacungcap ?>" id="validationCustom01" readonly required>
                        </div>
                    </div>
                    <div class="col-md-6 me-0">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom01">Nhập tên nhà cung cấp</label>
                            <input type="text" class="form-control" name="ten_nhacungcap" id="validationCustom01" placeholder="Tên nhà cung cấp" required>
                            <div class="invalid-feedback">
                                Hãy nhập tên nhà cung cấp!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 me-0">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom01">Nhập địa chỉ nhà cung cấp</label>
                            <input type="text" class="form-control" name="diachi" id="validationCustom01" placeholder="Địa chỉ nhà cung cấp" required>
                            <div class="invalid-feedback">
                                Hãy nhập địa chỉ nhà cung cấp!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 me-0">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom01">Nhập số điện thoại nhà cung cấp</label>
                            <input type="text" class="form-control" name="sodienthoai" id="sodienthoai" placeholder="Số điện thoại nhà cung cấp" required>
                            <div class="invalid-feedback">
                                Hãy nhập số điện thoại nhà cung cấp!
                            </div>
                            <span id="sdtHelp" class="p-13"></span>
                        </div>
                    </div>
                    <div class="col-md-6 me-0">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom01">Nhập email nhà cung cấp</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email nhà cung cấp" required>
                            <div class="invalid-feedback">
                                Hãy nhập email nhà cung cấp!
                            </div>
                            <span id="emailHelp" class="p-13"></span>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <button class="btn btn-primary mt-2" id="submit-all" name="submit" type="submit">Thêm nhà cung cấp</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- container -->

</div>
<!-- content -->

<?php
require "views/Admin/templates/footer.php";
?>
<script src="js/ajax_admin.js"></script>
<script>
    check("sodienthoai", "index.php?controller=NhaCungCap&action=checkDienThoai", "sdtHelp", "Số điện thoại hợp lệ!", "Số điện thoại đã tồn tại!");
    check("email", "index.php?controller=NhaCungCap&action=checkEmail", "emailHelp", "Email hợp lệ!", "Email đã tồn tại!");
    function validationForm(){
        check_return("sodienthoai", "index.php?controller=NhaCungCap&action=checkDienThoai", function(result){
            if(result==true){
                check_return("email", "index.php?controller=NhaCungCap&action=checkEmail", function(result){
                    if(result==true){
                        if(checkMail("email")){
                            return true;
                        }else{
                            $("#thong_bao").text("Các thông tin về email và số điện thoại chưa hợp lệ!").css('color', 'red')
                            return false;
                        }
                    }else{
                        $("#thong_bao").text("Các thông tin về email và số điện thoại chưa hợp lệ!").css('color', 'red')
                        return false;
                    }
                })
            }else{
                $("#thong_bao").text("Các thông tin về email và số điện thoại chưa hợp lệ!").css('color', 'red')
                return false;
            }
        })
    }
</script>
<?php
}
else{
    header("location: index.php");
}
?>