<div class="container margin-fixeeed">
    <div class="col-md-9 mt-3 mb-4 iconcsss">
        <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
            class="fa-solid fa-chevron-right"></i> <span class="text-danger">Sản phẩm
            chi tiết</span>
        <style>
            .margin-fixeeed {
                margin-top: 160px;
            }

            .iconcsss i {
                font-size: 14px;
                color: #989898;
                margin-left: 5px;
                margin-right: 5px;
            }
        </style>
        <style>
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

            .number-input button {
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

            button[class='plus']::after {
                display: inline-block;
                position: absolute;
                font-weight: 100;
                font-size: 17px;
                font-family: "Font Awesome 5 Free";
                content: '\002B';
                transform: translate(-50%, -30%) rotate(180deg);
            }

            button[class='minus']::after {
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

            .slideshow-container {
                background-color: #fff;
                padding-bottom: 10px !important;
            }

            .slides {
                padding-bottom: 30px !important;
            }

            .slides img {
                width: 500px !important;
            }
        </style>
    </div>
    <form action="index.php?act=addgiohang" method="post">
        <div class="row mb-5 boxctiet1">
            <div class="col-md-5">
                <style>
                    .slides img {
                        display: none;
                    }

                    .slides img.active {
                        display: block;
                    }

                    .slides img {
                        width: 350px;
                        margin: 0 auto;
                        padding: 10px;
                        margin-top: 30px;
                    }

                    .thumbnail {
                        max-width: 50px;
                        height: auto;
                        cursor: pointer;
                        margin-left: 25px;
                    }

                    .thumbnails {
                        display: flex;
                        justify-content: center;
                        margin: 10px;
                    }

                    .thumbnails img {
                        border: 1px solid rgb(209, 209, 209);
                        width: 150px;
                    }

                    .cart {
                        width: 400px;
                        height: 110px;
                        margin-top: 18px;
                        border: 0.1px solid #F08383;
                        border-radius: 10px;
                    }

                    .boxkm {
                        margin-top: 9px;
                        display: flex;
                        justify-content: center;
                        font-size: 18px;
                        line-height: 40px;
                        margin-bottom: 5px;
                        width: 170px;
                        height: 40px;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        font-weight: 600;
                        background-color: #F08383;
                        color: #fff;
                        margin-left: 10px;
                    }

                    .boxkm span {
                        font-size: 15px
                    }

                    .cart p {
                        margin-bottom: 0px;
                        margin-left: 10px;
                        font-weight: 300;
                        color: #555555;
                    }

                    * {
                        box-sizing: border-box;
                    }

                    .cart .textkm {
                        margin-bottom: 10px;
                    }

                    .cart .textkm span {
                        color: #F08383;
                        font-size: 17px;
                    }

                    .soluong input {
                        outline: none;
                        border-radius: 5px;
                        border: 0.5px solid #ccc;
                        width: 150px;
                        text-align: center;
                        height: 30px;
                        color: #000000;
                    }

                    .btt11 input {
                        border: 1px solid #ffffff;
                        padding: 10px;
                        background-color: #FFA2A2;
                        color: #fff;
                        border-radius: 5px;
                        font-size: 15px;
                    }

                    .btt22 button {
                        border: none;
                        padding: 10px;
                        background-color: #fff;
                        color: #F08383;
                        border-radius: 5px;
                        font-size: 15px;
                        border: 1px solid #FFA2A2;
                        margin-left: 40px;
                        margin-top: 1px;
                        height: 48px;
                    }


                    .btt11 input:hover {
                        border: 1px solid #FFA2A2;
                        background-color: #ffffff;
                        color: #F08383;
                        border-radius: 5px;
                    }

                    .btt22 button:hover {
                        background-color: #FFA2A2;
                        color: #ffffff;
                        border-radius: 5px;
                    }

                    .btt11 input {
                        width: 250px;
                        height: 50px;
                    }

                    .boxtuvan {
                        background-color: #F08383;
                        padding: 10px;
                        color: #fff;
                        border-radius: 5px;
                        width: 330px;
                        text-align: center;
                        margin-left: -62px;
                    }

                    .boxctiet {
                        margin-left: 60px;
                    }

                    .boxctiet1 {
                        background-color: #ffffff;
                        padding-left: 10px;
                        padding-right: 10px;
                        padding-top: 20px;
                        padding-bottom: 20px;
                    }

                    body {
                        background-color: #E7EEF6;
                    }

                    .quantity-chitietsp {
                        margin-left: -150px;
                        margin-top: 5px
                    }


                    select {
                        color: black;
                        padding-top: 7px;
                        padding-bottom: 7px;
                        padding-right: 20px;
                        padding-left: 20px;
                        -webkit-appearance: none;
                        -moz-appearance: none;
                        appearance: none;
                        border-radius: 4px;
                        outline: none
                    }
                </style>
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        let currentSlide = 0;
                        const slides = document.querySelectorAll('.slides img');
                        const thumbnails = document.querySelectorAll('.thumbnail');

                        function showSlide(index) {
                            slides.forEach(slide => slide.classList.remove('active'));
                            slides[index].classList.add('active');
                            currentSlide = index;
                        }


                        // Hiển thị ảnh đầu tiên khi trang được tải
                        showSlide(currentSlide);
                    });


                </script>

                <?php 
                $hinh="../upload/".$img;
                $giaTienFormatted = number_format($price, 0, ',', '.') . '₫';
                ?>

                <div class="slideshow-container">
                    <div class="slides">
                        <img src="././upload/<?=$hinh?>" alt="Ảnh 1">
                    </div>
                </div>

            </div>
            <div class="col-md-6 boxctiet">
                <h4>
                    <p>
                        <?=$name?>
                    </p>
                </h4>
                <div>
                    <b class="fs-4 text-danger me-2">
                        <?=$giaTienFormatted?>
                    </b>
                </div>
                <input type="hidden" name="masp" value="<?=$id?>">
                <input type="hidden" name="tensp" value="<?=$name?>">
                <input type="hidden" name="anhsp" value="<?=$hinh?>">
                <input type="hidden" name="giasp" value="<?=$price?>">
                <div class="cart">
                    <div class="boxkm">
                        <span><i class="fa-solid fa-gift"></i> Khuyến mãi ưu đãi</span>
                    </div>
                    <div class="textkm">
                        <p><span>&#8226;</span> Tặng ngay ưu đãi cực sốc</p>
                        <p><span>&#8226;</span> Tặng phiếu mua sắm 500.000đ</p>
                    </div>
                </div>
                <div class="row mt-2 mb-3 chu-tieude">
                    <div class="soluong mt-6 mb-2">
                        <h6>Số lượng</h6>
                        <div class="number-input">
                            <button onclick="decrement()" class="decrement" type="button">-</button>
                            <input name="quantityy" min="0" value="1" type="number" id="quantity1">
                            <button onclick="increment()" class="increment" type="button">+</button>
                            <script>
                                function increment() {
                                    var input = document.getElementById('quantity1');
                                    input.stepUp();
                                }

                                function decrement() {
                                    var input = document.getElementById('quantity1');
                                    input.stepDown();
                                }
                            </script>
                        </div>

                    </div>
                </div>
                <div class="row btn-muahang mt-2 mb-2">
                    <div class="col-4 btt11"><input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG"><br></div>
                    <div class="col-3 btt22"><button>MUA NGAY<br></button></div>


                </div>
            </div>
        </div>
    </form>

    <div class="row chitiettexxt mb-4">
        <div class="col-md-9">
            <h4>Chi tiết sản phẩm</h4>
            <hr>
            <p>Thông tin sản phẩm
                [SKINAVIS OFFICIAL] Kem chống nắng Skinavis - Skinavis sunscreen defense – Phổ rộng, không lên tone da
                Kem chống nắng Skinavis defense là kem chống nắng phổ rộng, giúp bảo vệ da khỏi tác hại từ tia UV ánh
                nắng mặt trời.
                <br><br>
                Ưu điểm:
                Kem chống nắng dạng Cream giúp bổ sung độ ẩm cho da nhưng lại khô thoáng, không gây bí da.
                Không chứa thành phần tạo màu, an toàn với da. Kem chống nắng không màu giúp bạn có cảm giác căng bóng
                thay vì có màu như phấn trang điểm. Phù hợp với những bạn muốn giữ màu da tự nhiên hoặc make up thêm để
                tạo cá tính riêng.
                <br><br>
                Chỉ định:
                Da thường, da không có nhiều mụn viêm mủ.
                Phù hợp với cả da dầu, da khô, da hỗn hợp
                <br><br>
                Hướng dẫn sử dụng:
                Thoa trước khi tiếp xúc với ánh nắng 5-10 phút. Lấy lượng kem vừa đủ , chấm nhiều điểm và vỗ đều bằng ba
                ngón tay 30-45 giây để kem chống nắng được tán đều lên mặt.
                <br><br>
                Lưu ý: Không nên thoa khi da đang quá ướt.
                Định lượng: 1,5 – 2 đốt ngón tay cho vùng mặt. Vùng cổ: 0,5-1 đốt ngón tay ( FTU)
                Nên thoa dặm lại 2-4 lần / ngày tùy vào công việc của bạn ở trong nhà mát hoặc đi lại ngoài trời,
                <br><br>
                Dung tích: 70ml
                <br><br>
                Thành phần chính:
                Avobenzone: Butyl Methoxydibenzoylmethane : Màng lọc UVA1 ( UVA bước sóng dài gây lão hóa da )
                Octocrylene: Màng lọc UVC, UVB, UVA2
                Ethylhexyl Methoxycinnamate: Màng lọc UVB
                Ethylhexyl Salicylate: Màng lọc UVB
                Bis-Ethylhexyloxyphenol Methoxyphenyl Triazine: Màng lọc UVB và UVA2
                <br><br>

            </p>
            <div class="danhgia">
                <b>Đánh giá sản phẩm</b> <br> <br><br>
                <iframe src="view/binhluan/binhluanfrom.php?idsp=<?=$id?>" width="100%" height="300px"
                    frameborder="0"></iframe>
            </div>
        </div>
        <div class="col mt-3 container-spnew">
            <div class="list-group-item active dm text-white">Sản phẩm liên quan</div>
            <div class="row">
                <div class="col container-img">
                    <?php foreach ($spcungloai as $key => $value):?>
                    <a href="index.php?act=spchitiet&id=<?=$value['id']?>">
                        <div class="img">
                            <img src="././upload/<?=$value['img']?>" alt="sp" height="50" width="45">
                            <span><?=$value['name']?></span>
                        </div>
                    </a>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style>
    /* css  của sản phẩm/bài viết mới nhất */
    .img span {
        padding: 10px;
    }

    .container-img img {
        max-width: 50px;
        margin: 10px;
        border: 1px solid rgb(246, 183, 183);
    }

    .container-spnew {
        border: 1px solid rgb(243, 232, 232);
        border-top: none;
    }

    .container-spnew a {
        color: black;
        padding: 0;
        text-decoration: none;
        border-bottom: 1px solid rgb(221, 196, 196);
    }

    .container-spnew a:hover {
        color: rgb(216, 113, 113);
    }

    .container-spnew .list-group-item {
        border-left: none !important;
        border-right: none !important;
    }



    /* css của danh mục sản phẩm */
    .dm {
        background-color: #F08383 !important;
        border: 10px solid #F08383 !important;
        text-align: center;
        border-radius: 0% !important;
    }

    .dm2 {
        width: 300px;
    }

    .dm2 ul li {
        border-radius: 0% !important;
    }

    .dm2 li a {
        text-decoration: none !important;
        color: black;
    }

    .dm2 li a:hover {
        color: #ff0000;
        opacity: 0.7;
    }

    .dm2 li:hover {
        transform: scale(1.01);
        color: #d51b2e;
        border-left: 2px solid #d51b2e;
        cursor: pointer;
    }
</style>