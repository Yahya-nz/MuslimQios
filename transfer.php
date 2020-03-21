<?php include 'header.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/css/transfer.css" />
    <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/css.css">
    <script src="Assets/js/jquery.js"></script>
    <script src="Assets/js/timer.js"></script>

</head>
<body style="background-color:rgb(250, 250, 250)">
    <div class="container-fluid m-t-100">
        <div class="row" >
            <!-- konten atas -->
            <div class="atas col-md-10 offset-md-1">
                <center>
                    <a href="#"><img style="width:8%;" src="Assets/img/sukses/icon1.svg"></a>
                    <img style="width:8%;" src="Assets/img/sukses/Rectangle 5.svg">
                    <a href="#"><img style="width:8%;" src="Assets/img/sukses/icon2.1.svg"></a>
                    <img style="width:8%;" src="Assets/img/garisgrey.svg">
                    <a href="#"><img style="width:8%;" src="Assets/img/transfergrey.svg"></a>
                    <img style="width:8%;" src="Assets/img/garisgrey.svg">
                    <a href="#"><img style="width:8%;" src="Assets/img/cargrey.svg"></a>
                </center>
            </div>
           <div class="konten col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-7" style="padding: 30px;font-size: 18px">
                        <div>Transfer uang anda ke nomer berikut !</div><br>
                        <div>009224-215085329-2159835</div><br>
                        <div>Atas Nama Deatrisya Mirela Harahap</div><br>
                        <div>Pastikan jumlah uang benar hingga 3 digit terakhir harga.</div>
                    </div>
                    <div id="countdown" class="col-md-5" style="margin-top: 80px; text-align: center;">
                        <div class="well" style="padding: 20">
                            <div style="font-size: 40px;"><span id="hour" class="timer"></span>&nbsp;Jam&nbsp;<span id="min" class="timer"></span>&nbsp;Menit</div>
                            <div style="font-size: 20px;">Sisa waktu anda</div>
                        </div>
                </div>
        </div>           
        </div>
        
    </div>
</body>
</html>


<?php include 'footer.php' ?>