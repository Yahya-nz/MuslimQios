<?php include 'header.php' ?>
<!-- Close Navbar -->
<!-- Penjelasan -->


<div class="alert bg-white mt-5 " role="alert" style="margin : 20px ; ">

    <div class="container">
        <div class="row">
            <div class="col-md-2 ">
                <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12">
                <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12 mt-5">
                <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12 mt-5">
            </div>
            <div class="col-md-6">
                <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12">
                <p class="float-right mr-4 mt-2 "> Shared :
                    <a href="#" style="text-decoration: none;"> <i class="fa fa-whatsapp fa-2x" style="color : #25d366 ; margin: 0 5px;"></i>
                    </a>
                    <a href="#" style="text-decoration: none;"> <i class="fa fa-instagram fa-2x" style="color :  #c32aa3 ; margin: 0 5px;"></i></a>
                    <a href="#" style="text-decoration: none;"> <i class="fa fa-twitter fa-2x" style="color : #1da1f2 ; margin: 0 5px;"></i>
                    </a>
                    <a href="#" style="text-decoration: none;"> <i class="fa fa-facebook fa-2x" style="color : #3b5998 ; margin: 0 5px;"></i>
                    </a>
                </p>
            </div>
            <div class="col-md-3">
                <h3 class="text-center col-md-12 ">
                    Kerudung Abu-Abu Syelika
                </h3>
                <p class="col-md-12 text-center" style="font-size: 12px;">
                    Miliki hijab/scarf trendi untuk menyempurnakan tampilanmu.
                    Hijab/scarf dengan motif yang cantik. Padukan hijab/scarf ini
                    dengan blouse dan celana palazo !

                </p>
                <p class="col-md-12 " style="font-size: 30px; color : #FE4E27">
                    IDR 50.000
                </p>

                <!-- plus minus -->
                <div class="col-md-8 ">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                        </div>
                        <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1"
                            style="text-align:center">
                        <div class="input-group-prepend">
                            <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="group-prod">
                        <select class="form" id="exampleFormControlSelect1">
                            <option>Pilih Ukuran</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>


                </div>
                <!-- plus-minus close -->
                <a href="lihatkeranjang.php">
                    <button type="button" class="btn btn-danger btn-md mt-5" data-toggle="button" aria-pressed="false"
                        autocomplete="off" data-target=".bd-example-modal-lg"> Buy Now </button>
                </a>
                <button type="button" class="btn btn-outline-success mt-5" data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="fa fa-cart-plus mr-3"> Add To
                        Cart</i></button>
            </div>

            <div class="col-md-1">
                <i class="fa fa-heart fa-2x" style="color: red"></i>
            </div>
        </div>

    </div>
</div>

<!-- Close Penjelasan -->

<div class="container text-center">
    <p class="mt-5" style="font-family: 'Nunito Sans', sans-serif; font-size: 40px"> RELATED <span style="color :#00C09D ">
            PRODUCT</span></p>


</div>
<!-- Slide -->
<!-- Swiper -->
<div class="swiper-container col-md-12 col-xs-12" id="swiper-one">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="card-user bg-white col-md-8 offset-md-2 col-xs-12 shadow p-3 mb-5 rounded">
                <div class="box-img-card col-md-12 col-xs-12">
                    <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12 col-xs-12">
                </div>
                <div class="col-md-12 col-xs-12 row ">
                    <p class="col-md-6 title-product">Kerudung Hitam Syelika </p>
                    <span class="col-md-6 text-right" style="color :#00C09D "> Rp 50.000</span>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card-user bg-white col-md-8 offset-md-2 col-xs-12 shadow p-3 mb-5 rounded">
                <div class="box-img-card col-md-12 col-xs-12">
                    <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12 col-xs-12">
                </div>
                <div class="col-md-12 col-xs-12 row ">
                    <p class="col-md-6 title-product">Kerudung Hitam Syelika </p>
                    <span class="col-md-6 text-right" style="color :#00C09D "> Rp 50.000</span>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="card-user bg-white col-md-8 offset-md-2 col-xs-12 shadow p-3 mb-5 rounded">
                <div class="box-img-card col-md-12 col-xs-12">
                    <img src="Assets/img/Jilbababu.png" alt="" class="col-md-12 col-xs-12">
                </div>
                <div class="col-md-12 col-xs-12 row ">
                    <p class="col-md-6 title-product">Kerudung Hitam Syelika </p>
                    <span class="col-md-6 text-right" style="color :#00C09D "> Rp 50.000</span>
                </div>
            </div>
        </div>

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- CLOSE Slide -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="alert bg-white" role="alert">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 ">
                            <img src="Assets/img/jilbabhitam.png" alt="" class="col-md-12 ">
                        </div>
                        <div class="col-md-4 ">
                            <p>
                                Kerudung Abu- Abu Syelika <br>
                                IDR 50.000 X 1
                            </p>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="close mr-5" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 ">
                            <img src="Assets/img/jilbabhitam.png" alt="" class="col-md-12">
                        </div>
                        <div class="col-md-4">
                            <p>
                                Kerudung Abu- Abu Syelika <br>
                                IDR 50.000 X 1
                            </p>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="close  mr-5" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3 ">
                            <img src="Assets/img/jilbabhitam.png" alt="" class="col-md-12">
                        </div>
                        <div class="col-md-4">
                            <p>
                                Kerudung Abu- Abu Syelika <br>
                                IDR 50.000 X 1
                            </p>
                        </div>
                        <div class="col-md-4 ">
                            <button type="button" class="close mr-5" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="offset-md-3 m-t-40 ">
                        <div class="row">
                            <input type="" class="output" placeholder="Sub Total IDR 250.000" style="width: 30%; border-radius : 5px; border : 1px solid grey;">
                            <button type="" class="btn btn-danger m-l-15">LIHAT KERANJANG</button>
                            <button type="" class="btn btn-secondary m-l-15">LANJUT
                                BELANJA</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php include 'footer.php' ?>