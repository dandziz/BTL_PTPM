<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style/header.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style\swiper-bundle.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: "Segoe UI", "Roboto", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol" !important;
            font-weight: 500 !important;
        }

        .card-thanh-toan img {
            width: 50px;
            height: 50px;
            position: relative;
        }

        .card-thanh-toan .so_luong {
            background-color: #07503d;
            height: 17px;
            width: 18px;
            text-align: center;
            color: white;
            border-radius: 100%;
            position: absolute;
            top: -7%;
            right: -3%;
        }

        .p_cost {
            font-size: 14px;
            color: #717171;
            font-weight: 600;
        }
    </style>
</head>

<body class="p-0 m-0 border-0" style="background-color: #FAFAFA">
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <img class="logo" src="images\header\checkout_logo.png" alt="">
        </div>
        <div class="row mt-4">
            <div class="col-md-7">
                <div>
                    <div class="d-flex flex-row">
                        <div class="me-3">
                            <span class="material-icons" style="font-size: 80px; color: #07503d; border-radius: 100%; border: 3px solid #07503d">
                                done
                            </span>
                        </div>
                        <div>
                            <h5>C???m ??n b???n ???? ?????t h??ng</h5>
                            <span class="p-14">M???t email x??c nh???n ???? ???????c g???i t???i daodan2612@gmail.com. Xin vui l??ng ki???m tra email c???a b???n</span>
                        </div>
                    </div>
                </div>
                <div class="container border mt-3 p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <p class="p-16-bold">Th??ng tin mua h??ng</p>
                                <p class="p-14">????o Duy ????n</p>
                                <p class="p-14">Daodan2612@gmail.com</p>
                                <p class="p-14">+84366887398</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p class="p-16-bold">?????a ch??? nh???n h??ng</p>
                                <p class="p-14">????o Duy ????n</p>
                                <p class="p-14">Ha Noi</p>
                                <p class="p-14">X?? Ph?? Y??n, Huy???n Ph?? Xuy??n, H?? N???i</p>
                                <p class="p-14">+84366887398</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <p class="p-16-bold">Ph????ng th???c thanh to??n</p>
                                <p class="p-14">Giao h??ng khi thanh to??n (COD)</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p class="p-16-bold">Ph????ng th???c v???n chuy???n</p>
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="p-14">Ph?? v???n chuy???n</p>
                                    <p class="p-14">29.000??</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-3 p-3">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success" type="button">Ti???p t???c mua h??ng</button>
                        <button class="btn btn-xt d-flex align-items-center" type="button"><span class="material-icons me-1">
                                picture_as_pdf
                            </span> <span>In</span></button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 bg-white p-2">
                <h6>????n h??ng #2738 (1)</h6>
                <hr>
                <div class="card-thanh-toan mb-2">
                    <div class="row">
                        <div class="col-md-2">
                            <div style="position: relative;">
                                <img src="images\nuocHoaNam\Roja Dove\Roja Dove Elysium Pour Homme Parfum Cologne\7.jpg" alt="">
                                <p class="p-12-bold so_luong">1</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <p class="p-14-bold">Le Labo Santal 33 EDP</p>
                                <p class="p-12">Unisex / USA / Chi???t 10ml</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <p class="p_cost">675.000???</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12 mb-2 p-0 pb-2">
                    <div class="d-flex justify-content-between">
                        <p class="p_cost">T???m t??nh</p>
                        <p class="p_cost">1.345.000???</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="p_cost">Ph?? v???n chuy???n</p>
                        <p class="p_cost">-</p>
                    </div>
                </div>
                <hr>
                <div class="col-md-12 mb-2 p-0 pb-2">
                    <div class="d-flex justify-content-between">
                        <p class="p_cost" style="font-size:16px;">T???ng c???ng</p>
                        <p class="p_cost" style="font-size:21px; color:#07503d;">1.345.000???</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>