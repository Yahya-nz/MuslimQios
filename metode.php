<?php include 'header.php'?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/css/metode.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/css.css">
</head>

<body style="background-color:rgb(250, 250, 250)">
    <div class="container-fluid m-t-50">
        <div class="row">
            <!-- konten atas -->
            <div class="atas col-md-10 offset-md-1">
                <center>
                    <a href="#"><img style="width:8%;" src="Assets/img/sukses/icon1.svg"></a>
                    <img style="width:8% ;" src="Assets/img/sukses/Rectangle 5.svg">
                    <a href="#"><img style="width:8%;" src="Assets/img/sukses/icon2.1.svg"></a>
                    <img style="width:8%;" src="Assets/img/garisgrey.svg">
                    <a href="#"><img style="width:8%;" src="Assets/img/transfergrey.svg"></a>
                    <img style="width:8%;" src="Assets/img/garisgrey.svg">
                    <a href="#"><img style="width:8%;" src="Assets/img/cargrey.svg"></a>
                </center>
            </div>
            <!-- konten kiri -->
            <div class="konten1 col-md-6 offset-md-1 no-padding">
                <div class="anu" style="width:100%;background-color:#00C09D;color: white;">
                    <div class="row">
                        <div class="col-md-12"><h3>Pilih Metode Pembayaran</h3></div>  
                    </div>
                </div>
                <div style="padding: 0 20px 30px 20px;">

                        <div class="m-l-15 m-t-15">
                            <label class="container"  style="font-size:20px;">
                                <input type="radio" name="radio">Transfer
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="m-l-15 m-t-15">
                            <img src="Assets/img/bankbri.svg">
                        </div>
                        <div class="m-l-15 m-t-20" style="width:80% ;color: rgba(0, 0, 0, 0.6); ">
                            Ketentuan Pembayaran :<br>
                            Pembayaran dapat dilakukan melalui transfer ke rekening Bank BRI.
                            Total belanja kamu belum termasuk kode pembayaran untuk keperluan proses verifikasi otomatis.<br>
                            Mohon transfer tepat sampai 3 digit terakhir.
                        </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="summary">
                        <div class="anu2" style="width:100%;background-color:#00C09D;color: white;">
                                <h3>Ringkasan Pembelian</h3>
                            </div>
                    <div class="summary1">
                            <div class="summary-item"><span class="text">Subtotal</span><span class="price">IDR360</span></div>
                            <div class="summary-item"><span class="text">Discount</span><span class="price">IDR0</span></div>
                            <div class="summary-item"><span class="text">Shipping</span><span class="price">IDR0</span></div>
                            <div class="summary-item"><span class="text">Total</span><span class="price">IDR360</span></div>
                            <a href="transfer.php" style="text-decoration:none"><button type="button" class="btn btn-danger btn-lg btn-block">Bayar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php include 'footer.php'?>