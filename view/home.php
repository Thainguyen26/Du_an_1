<!-- maincontent -->
<?php

    if(isset($thongbao2) && ($thongbao2 !="")){
        echo $thongbao2;
    }?>
<?php

    if(isset($thongbao) && ($thongbao !="")){
        echo $thongbao;
    }?>
<section class="mymaincontent my-3">
    <div class="Slide_Home">
        <div class="row">
            <div class="col no-paddding-lide">
                <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/banner/banner1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/banner/banner2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/banner/banner3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">


        <!-- slideshow -->


        <div class="slider">
            <div class="row bg-white-carosel mt-4">
                <div class="large-12 columns mt-5">
                    <div class="owl-carousel owl-theme anhcrs">
                        <?php foreach ($one_spct as $key => $value):?>
                            <a href="index.php?act=spchitiet&id=<?=$value['id']?>">
                        <img src="././upload/<?=$value['img']?>" alt="">
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <style>
                        .Slide_Home {
                            width: 1496px;
                            margin: 0 auto;
                            left: 0;
                            right: 0;
                        }

                        .no-paddding-lide {
                            padding: 0 !important;
                        }

                        /* .carousel-item {
                            
                            width: 1500px !important;
                        } */
                        /* .carousel-inner{
                            
                        } */

                        .bg-white-carosel {
                            border-radius: 5px;
                            background-color: #ffff;
                            margin: auto;
                            padding-bottom: 20px;
                        }

                        .item img {
                            margin: 0 auto;
                            max-width: 100px;
                            height: auto;
                            border-radius: 100px;
                        }

                        .item {
                            border-radius: 50px;
                        }

                        .anhcrs .item p {
                            text-align: center;
                        }
                    </style>

                </div>
            </div>
        </div>
        <!-- end-slideshow -->

        <?php
            if(isset($thongbao) && ($thongbao !="")){
                echo $thongbao;
            }
        ?>

        <!-- giỏ hàng - home -->
        <form action="index.php?act=giohang" method="post">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasRightLabel">GIỎ HÀNG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php foreach ($_SESSION["giohang"] as $item): ?>
                    <div class="row img mb-5">
                        <div class="col-3">
                            <a href="#">
                                <img src="././upload/<?php echo $item[3]; ?>" alt="sp">
                            </a>
                        </div>
                        <div class="col-6 sphome-ct">
                            <a href="#">
                                <div class="tensp">
                                    <?php echo $item[1]; ?>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 xoa-gia">
                            <input type="submit" value="Xóa">
                            <div class="price-home mt-4">
                                <?php echo number_format($item[2]); ?><span>₫</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <div class="dathang-home">
                    <div class="row mb-3">
                        <div class="col-6">Tổng tiền:</div>
                        <div class="col-6">
                            <div class="giasp-home-dathang">
                                300.000<span>₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            <input type="submit" value="Đặt Hàng">
                        </div>
                    </div>
                </div>
        </form>


        <style>
            input[type="number"] {
                -webkit-appearance: textfield;
                -moz-appearance: textfield;
                appearance: textfield;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
            }

            .number-input {
                border: 1px solid #ccc;
                display: inline-flex;
            }

            .number-input,
            .number-input * {
                box-sizing: border-box;
            }

            .number-input input {
                outline: none;
                -webkit-appearance: none;
                background-color: transparent;
                border: none;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 20px;
                cursor: pointer;
                margin: 0;
                position: relative;
            }



            input[class='plus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 100;
                font-size: 17px;
                font-family: "Font Awesome 5 Free";
                content: '\002B';
                transform: translate(-50%, -30%) rotate(180deg);
            }

            input[class='minus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 500;
                font-size: 20px;
                font-family: "Font Awesome 5 Free";
                content: '\2212';
                transform: translate(-50%, -30%) rotate(180deg);
            }



            .number-input input[type=number] {
                font-family: sans-serif;
                max-width: 50px;
                padding: .5rem;
                border: solid #ccc;
                border-radius: 0%;
                border-width: 0 1px;
                font-size: 18px;
                height: 30px;
                text-align: center;
            }
        </style>
        <style>
            .dathang-home {
                height: 200px;
                padding: 20px;
            }

            .dathang-home input {
                width: 350px;
                height: 60px;
                background-color: #b85050;
                color: #fff;
                border-radius: 4px;
                border: none;
                font-size: 18px;
            }

            .dathang-home input:hover {
                border: 1px solid #b85050;
                background-color: #ffffff;
                color: #b85050;
            }

            .img {
                box-sizing: border-box;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            #offcanvasRight {
                max-width: 400px;
            }

            .xoa-gia {
                margin-left: -15px;
            }

            .xoa-gia input {
                font-size: 14px;
                border: 0.3px solid #ccc;
                margin-left: 10px;
                margin-top: 5px;
                color: #fff;
                background-color: #b85050;
            }

            .price-home {
                font-size: 13px;
                color: red;
            }

            .giasp-home-dathang {
                color: red;
                font-size: 18px;
                margin-left: 87px;
            }

            .quantity {
                font-size: 13px;
            }

            .sphome-ct .tensp {
                margin-top: 4px;
                margin-bottom: 10px;
                font-size: 14px;
            }

            .sphome-ct input {
                max-width: 40px;
                height: 20px;
                font-size: 14px;
            }

            .img img {
                max-width: 80px;
            }

            .img a {
                text-decoration: none;
                color: black;
            }

            .img:hover a {
                color: rgb(216, 113, 113);
            }
        </style>
    </div>
    <?php
            if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
        ?>
    <?php
        
            }else {
                echo '';
        ?>
    <?php } ?>
    <!-- end giỏ hàng home -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thông báo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn cần nhập thông tin cá nhân để tiếp tục mua hàng tại shop! <a href="index.php?act=tkmuahang">Nhập
                        thông tin</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->
    <div class="noidung mt-5 mb-3">
        <div class="noidung-home text-uppercase fs-6 fw-semibold">
            <span>sản phẩm mới nhất</span>
        </div>
        <hr>
        <style>
            hr {
                border-color: #e34242 !important;
                border: 1px solid #b85050 !important;
            }

            .noidung-home span {
                background-color: #F08383 !important;
                color: #fff;
                width: 200px !important;
                height: 40px !important;
                padding-left: 20px;
                padding-right: 30px;
                padding-top: 10px;
                padding-bottom: 18px;
                border-top-right-radius: 15px;
                border-top-left-radius: 15px;
            }
        </style>
    </div>
    <div class="product-content">

        <?php foreach ($one_spct as $key => $value):?>
        <?php  $giaTienFormatted = number_format($value['price'], 0, ',', '.') . '₫';

        ?>
        <div class="col-md-3 mt-4 mb-3 cantrai">
            <div class="card">
                <span class="percent">
                    <?=$value['giasale']?>
                </span>
                <div class="card-image">
                    <a href="index.php?act=spchitiet&id=<?=$value['id']?>">
                        <img src="././upload/<?=$value['img']?>" width="250">
                    </a>
                </div>
                <a href="index.php?act=spchitiet&id=<?=$value['id']?>">
                    <div class="card-inner">
                        <p class="mb-0">
                            <?=$giaTienFormatted?>
                        </p>
                        <div class="price">
                            <span>
                                <?=$value['name']?>
                            </span>
                            <sup>

                            </sup>
                        </div>
                </a>
                <form action="index.php?act=spchitiet&id=<?=$value['id']?>" method="post">
                    <div class="mt-3 d-flex detailss justify-content-between align-items-center">
                        <button type="submit" class="btn text-uppercase btn-sm details">Mua ngay</button>
                </form>
                <form action="index.php?act=addgiohang123" method="post">
                    <input type="hidden" name="masp" value="<?=$value['id']?>">
                    <input type="hidden" name="tensp" value="<?=$value['name']?>">
                    <input type="hidden" name="anhsp" value="<?=$value['img']?>">
                    <input type="hidden" name="giasp" value="<?=$value['price']?>">
                    <div class="d-flex flex-row">
                        <!-- <span class="wishlist" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight"><i class="fa fa-heart"></i></span> -->
                        <span class="cart">
                            <input type="submit" name="add_sp_home" class="hidden-submit"
                                data-id="<?php echo $value['id']; ?>">

                            <!-- Icon để kích hoạt nút ẩn đi -->
                            <i class="fa fa-shopping-cart" data-id="<?php echo $value['id']; ?>"></i>
                        </span>
                        <!-- <button type="submit" id="">ass</button> -->
                    </div>
                </form>
                <style>
                    .hidden-submit {
                        visibility: hidden;
                    }
                </style>
                <script>
                    // Lấy tất cả các thẻ <i> có class "fa-shopping-cart"
                    var icons = document.querySelectorAll('.fa-shopping-cart');

                    // Lắng nghe sự kiện click trên từng thẻ <i>
                    icons.forEach(function (icon) {
                        icon.addEventListener('click', function () {
                            // Lấy giá trị data-id để biết nút "Submit" tương ứng
                            var productId = icon.getAttribute('data-id');
                            var hiddenSubmitBtn = document.querySelector('[data-id="' + productId + '"].hidden-submit');

                            // Kiểm tra xem nút có tồn tại không trước khi kích hoạt sự kiện click
                            if (hiddenSubmitBtn) {
                                hiddenSubmitBtn.click();
                            }
                        });
                    });
                </script>

            </div>

        </div>

    </div>
    </a>
    </div>
    <?php endforeach; ?>
    </div>

    <div class="post-content">
        <nav>
            <div class="nav nav-tabs mt-4 baiviet" id="nav-tab" role="tablist">
                <p class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tin tức mới nhất</p>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="row mx-5">
                <?php foreach ($post as $p) {
                    extract($p);
                    $linkpost = "index.php?act=postct&id=" . $id;
                    ?>
                    <div class="col-md-3 my-4 d-flex justify-content-center">
                        <a href="<?=$linkpost?>" class="baiposs">
                            <div class="card" style="width: 18rem;">
                                <img src="././upload/<?=$image ?>"
                                    class="card-img-top" alt="...">
                                <div class="card-body bv">
                                    <h5 class="card-title"><?=$name_post?></h5>
                                    <p class="card-text"><?=$gioithieu?></p>
                                </div>
                            </div>
                        </a>
                    </div><?php } ?>
                </div>
            </div>
        </div>
    </div>  
    </div>
    <style>
        .percent {
            width: 63px;
            height: 30px;
            position: absolute;
            background: #F08383;
            color: #fff;
            border-radius: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
            right: 0;
            border-bottom-left-radius: 15px;
            padding: 10px;
        }

        .cantrai {
            margin-left: 10px;
        }

        .cantrai a {
            text-decoration: none;
            color: #000000;
        }

        .product-content {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        .card {
            height: 100%;
            background-color: #fff;
            position: relative;
            width: 300px;
            border: 1px solid #fff;
        }



        .card-image {
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .card-image img {
            width: 300px;
            padding: 1px;
        }

        .card-inner {
            padding: 20px;
        }

        .card-inner p {
            font-size: 17px;
            font-weight: 500;
            color: #FFA2A2;
        }

        .price span {
            color: #000;
            font-weight: 600;
            font-size: 16px;
        }

        .price sup {
            color: rgb(133, 133, 133);
            font-weight: 100;
            font-size: 14px;
            top: -3px;
            text-decoration: line-through;
        }

        .details {
            background-color: #FFA2A2;
            color: #fff;
            border-radius: 10px;
            width: 110px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .detailss button:hover {
            background-color: #fff !important;
            border: 1px solid #ff9494 !important;
            color: #ff9494 !important;
        }

        .detailss button:active {
            background-color: #ffffff !important;
            border: 1px solid #ff9494 !important;
            color: #ff9494 !important;
        }

        .wishlist {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: #FFA2A2;
            background: rgb(253, 220, 220);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.5s all;
            font-size: 15px;
        }

        .wishlist:hover {

            color: #fff;
            background: #FFA2A2;

        }

        .cart i {
            margin-left: -40px
        }

        .cart {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: #fff;
            background: #FFA2A2;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.5s all;
            margin-left: 5px;
            font-size: 15px;

        }
    </style>
    <style>
        .mymaincontent {
            margin-top: 137px !important;
        }

        .baiposs {
            text-decoration: none;
            color: #000000;
        }

        .baiposs:hover p {
            color: #F08383;
        }

        .baiviet p {
            color: #ffffff !important;
            background-color: #F08383 !important;
        }
    </style>


    </div>


</section>
<!-- endmaincontent -->