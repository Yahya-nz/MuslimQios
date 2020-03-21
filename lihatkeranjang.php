<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/css/lihatkeranjang.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/css.css">
    <link rel="stylesheet" href="Assets/font/css/fontawesome.css">
    <link rel="stylesheet" href="Assets/font/css/regular.css">
    <link rel="stylesheet" href="Assets/font/css/solid.css">
    <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/lihatkeranjang.js"></script>
</head>

<body style="background-color:#F2F2F2">
    <div class="container-fluid m-t-40">
        <div class="row">
            <div class="header col-md-10 offset-md-1" style="padding:30px 40px;">
                <!-- konten1 -->
                <div class="product">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-fluid mx-auto d-block image" src="Assets/img/model.svg">
                        </div>
                        <div class="col-md-8">
                            <div class="info">
                                <div class="row">
                                    <div class="col-md-5 nama-produk">
                                        <div class="nama-produk">
                                            <a href="#">Kerudung Abu-abu Syelika 4nm</a>
                                            <div class="btn-remove">
                                                <button class="btn btn-dark">REMOVE</button>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-4 quantity">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <label for="quantity">Quantity:</label>
                                            <input id="quantity" type="number" value="1" class="form-control quantity-input">
                                        </div>
                                    </div>
                                    <div class="col-md-3 harga">

                                        <span>IDR 120.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sub total -->
                <div class="col-md-6">

                </div>
                <div class="row" style="">
                    <div class="col-md-5 ">
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4 sub-total padding">
                        <div class="row" style="justify-content: center">
                            <p>Sub Total</p>
                            <div class="col-md-4"></div>
                            <span class="amount" style="text-align: center">
                                <span>IDR</span>
                                174.800
                            </span>
                        </div>

                    </div>
                    <div class="col-md-2 sub-total" style="text-align: center">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 pt-5">
                        <div class="row">
                            <div class="col-md-6 ">
                                <button id="updatechart" class="btn btn-danger btn-block">Update Chart</button>
                            </div>
                            <div class="col-md-5">
                                <a href="checkout.php" style="text-decoration:none;">
                                <button id="updatechart" class="btn btn-dark btn-block">CheckOut</button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php include 'footer.php' ?>