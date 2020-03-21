<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/css/checkout.css">
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
                    <img style="width:8%;" src="Assets/img/sukses/Rectangle 5.svg">
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
                        <div class="col-md-4"><h3>Detail Pembeli</h3></div>
                        <div class="col-md-4">&nbsp;</div>
                        <div class="col-md-4"><p class="mb-3">Sudah punya akun ? <a href="daftar.php" class="klik" style="color:white;font-weight: 500;">Login</a> </p></div>
                    </div>
                </div>
                <div style="padding: 0 20px 30px 20px;">

                    <div class="row m-t-15">
                        <div class="col-md-12">
                            <p>Nama Lengkap<span style="color:red;">*</span></p>
                            <div class="form-group nama">
                                <input type="text" name="name" placeholder="Masukkan Nama Lengkap" class="name form-control"
                                    id="name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 p-r-15">
                            <p>Email<span style="color:red;">*</span></p>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Masukkan Email" class="email form-control"
                                    id="email">
                            </div>
                        </div>
                        <div class="col-md-6 p-l-15">
                            <p>No Telepon<span style="color:red;">*</span></p>
                            <div class="form-group">
                                <input type="text" name="notelepon" placeholder="Masukkan No Telepon" class="notelepon form-control"
                                    id="notelepon">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <p>Provinsi<span style="color:red;">*</span></p>
                            <select id="provinsi" name="provinsi" class="form-control">
                                <option value="">Provinsi</option>
                                <option value="">Please Select</option>
                                <option value="">Please Select</option>
                                <option value="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <p>Kabupaten/Kota<span style="color:red;">*</span></p>
                            <select id="kabupaten" name="kabupaten" class="form-control">
                                <option value="">Kabupaten/Kota</option>
                                <option value="">Please Select</option>
                                <option value="">Please Select</option>
                                <option value="">Please Select</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <p>Kecamatan<span style="color:red;">*</span></p>
                            <select id="kecamatan" name="kecamatan" class="form-control">
                                <option value="">Kecamatan</option>
                                <option value="">Please Select</option>
                                <option value="">Please Select</option>
                                <option value="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>Alamat Lengkap<span style="color:red;">*</span></p>
                            <div class="form-group">
                                <textarea placeholder="Alamat Lengkap" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 checkbox">
                            <label><input type="checkbox" value="">Jadikan Akun Member</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- konten kanan -->
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
                            <a href="metode.php" style="text-decoration:none"><button type="button" class="btn btn-danger btn-lg btn-block">Lanjut</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php include 'footer.php'?>