﻿<?php
require "views/Admin/templates/header.php";
if(!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['LoginOK']) && $_SESSION['LoginOK'][0] == "1" || $_SESSION['LoginOK'][0] == "2") {
?>
<head>
    <title>Danh sách câu hỏi</title>
</head>
<head>
<link href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/date-1.4.0/fc-4.2.2/fh-3.3.2/r-2.4.1/rg-1.3.1/sc-2.1.1/sb-1.4.2/sl-1.6.2/datatables.min.css" rel="stylesheet"/>
</head>
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="index.php">Parfumerie</a></li>
                        <li class="breadcrumb-item"><a href="index.php?controller=NhanVien">Quản lý cửa hàng</a></li>
                        <li class="breadcrumb-item active">Câu hỏi đang chờ</li>
                    </ol>
                </div>
                <h4 class="page-title">Câu hỏi đang chờ</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" id="xoaCauHoi" class="btn btn-success mb-2 me-1"><i class="mdi mdi-delete-forever-outline"></i></button>
                            </div>
                        </div><!-- end col-->
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <?php
                                if(isset($_SESSION['success'])){
                                    echo '<span class="text-success">'.$_SESSION['success'].'</span>';
                                    unset($_SESSION['success']);
                                }
                                else if(isset($_SESSION['error'])){
                                    echo '<span class="text-danger">'.$_SESSION['error'].'</span>';
                                    unset($_SESSION['error']);
                                }
                            ?>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="table table-centered w-100 dt-responsive nowrap display" id="products-datatable mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th class="all">Mã câu hỏi</th>
                                    <th>Thời gian hỏi</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Nội dung</th>
                                    <th>Địa chỉ IP</th>
                                    <th>Trạng thái</th> 
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
<?php
    require "views/Admin/templates/footer.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/date-1.4.0/fc-4.2.2/fh-3.3.2/r-2.4.1/rg-1.3.1/sc-2.1.1/sb-1.4.2/sl-1.6.2/datatables.min.js"></script>
<script src="js/admin.js"></script>
<script>
    $(document).ready( function () {
        var table  = $('#myTable').DataTable({
            dom: 'Blfrtip',
            select: {
                style: 'multi'
            },
            lengthMenu: [10, 15, 25, 50, 75, 100],
            "ajax": "index.php?controller=CauHoi&action=getCauHoiDangXuLy",
            "columns":[
                {"data":"id_cauhoi"},
                {"data":"thoigianhoi"},
                {"data":"hoten"},
                {"data":"email"},
                {"data":"noidung", render: function ( data, type, row ) {
                    if ( type === 'display' ) {
                        return data.length > 20 ?
                            `<span data-tooltip="tooltip" title="${data}">${data.substr(0, 20) + '...'}</span>` :
                            data;
                    }
                    return data;
                }},
                {"data":"ip_address"},
                {"data": "trangthai",
                "render": function ( data, type, row ) {
                    if ( data == 0 ) {
                        return '<span class="badge bg-danger">Chưa trả lời</span>';
                    }
                }},
                {
                    data: 'id_cauhoi',
                    targets: 5,
                    render: function ( data, type, row, meta ) {
                        a = `<a onclick="return confirm('Bạn có chắc chắn muốn xóa câu hỏi này?')" href="index.php?controller=CauHoi&action=deleteCauHoi&id_cauhoi=${data}" class="action-icon" data-toggle="tooltip" data-placement="top" title="Xóa câu hỏi"><i class="mdi mdi-delete-outline"></i></a>`;
                        return a+`<a href="index.php?controller=CauHoi&action=reply&id_cauhoi=${data}" class="action-icon" data-toggle="tooltip" data-placement="top" title="Trả lời câu hỏi"><i class="mdi mdi-email-edit-outline"></i></a>
                                        `;
                    }
                },
                
            ],
            "language": {
                "url": '//cdn.datatables.net/plug-ins/1.10.25/i18n/Vietnamese.json',
            },
        });
    } );
</script>
<?php
}else{
    header("location: index.php");
}
?>
