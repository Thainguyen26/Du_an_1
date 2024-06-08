<div class="containersp">
    <div class="dieuhuong mb-4">
        <div class="dhmenu mb-3">
            <div class="col-md-9 mt-3 mb-4 iconcsss">
                <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
                    class="fa-solid fa-chevron-right"></i> <span class="text-danger">Tất cả sản phẩm</span>
                <style>
                    .iconcsss i {
                        font-size: 14px;
                        color: #989898;
                        margin-left: 5px;
                        margin-right: 5px;
                    }

                    .iconcsss {
                        margin-left: -23px;
                    }
                </style>
            </div>
            <style>
                .dhmenu {
                    margin-left: 150px;
                }

                body {
                    background-color: #e6e6f1;
                }
                select {
                    padding: 5px;
                    border: 1px solid #FFA2A2;
                    color: #ffa2a2;
                    appearance: none;
            /* Ẩn mũi tên mặc định của select box */
            outline: none;
            border-radius: 5px;
                }
            </style>
        </div>
        <div class="row">
            <div class="wrapper mb-3">
                <div class="d-md-flex align-items-md-center">
                    <div class="h3">Tất cả sản phẩm</div>
                </div>
                <div class="d-lg-flex align-items-lg-center pt-2">
                    <div class="d-flex align-items-center my-2 bg-light border mx-lg-2">
                    <form action="index.php?act=locgia_sp" method="post">
                    <select name="price_range">
                        <option value="" hidden>Sắp xếp</option>
                        <option value="newest">Sản phẩm mới nhất</option>
                        <option value="oldest">Sản phẩm cũ nhất</option>
                    </select>
                    </div>
                </div>
                <div class="py-md-0 py-3">
                    <section id="sidebar">
                        <div class="py-3 fon_checkbox">
                                <h5 class="font-weight-bold">Giá</h5>
                                <div class="form-inline d-flex align-items-center py-1">
                                    <label class="tick">Dưới 300.000đ
                                        <input type="checkbox" name="price_range" value="1"><span class="check"></span>
                                    </label>
                                </div>
                                <div class="form-inline d-flex align-items-center py-1">
                                    <label class="tick">Từ 300.000đ - 500.000đ
                                        <input type="checkbox" name="price_range" value="2"><span class="check"></span>
                                    </label>
                                </div>
                                <div class="form-inline d-flex align-items-center py-1">
                                    <label class="tick">Từ 500.000đ - 700.000đ
                                        <input type="checkbox" name="price_range" value="3"><span class="check"></span>
                                    </label>
                                </div>
                                <div class="form-inline d-flex align-items-center py-1">
                                    <label class="tick">Từ 700.000đ - 1.000.000đ
                                        <input type="checkbox" name="price_range" value="4"><span class="check"></span>
                                    </label>
                                </div>
                                <div class="form-inline d-flex align-items-center py-1">
                                    <label class="tick">Trên 1.000.000đ
                                        <input type="checkbox" name="price_range" value="5"><span class="check"></span>
                                    </label>
                                </div>
                                <input type="submit" value="lọc sản phẩm" name="locgia_sp">
                            </form>
                        </div>
                    </section> 
                </div>
                <div class="padding" style="margin-top: -95px;display: grid;grid-template-columns: 1fr 1fr 1fr 1fr;">
                    <?php foreach ($dssp  as $key => $value):?>
                        <?php  $giaTienFormatted = number_format($value['price'], 0, ',', '.') . '₫';?>
                    <div class="col-md-3 cantrai">
                            <div class="card mt-3 okkkkkk">
                            <span class="percent">
                                <?=$value['giasale']?>
                            </span>
                            <div class="card-image">
                                <a href="index.php?act=spchitiet&id=<?=$value['id']?>">
                                    <img src="././upload/<?=$value['img']?>" width="200">
                                </a>
                            </div>
                            <a href="index.php?act=spchitiet&id=<?=$value['id']?>">
                                <div class="card-inner">
                                    <p class="mb-0">
                                        <?=$giaTienFormatted?>
                                    </p>
                                </div>
                                <div class="price">
                                    <span>
                                        <?=$value['name']?>
                                    </span>
                                </div>
                            </a>
                            <form action="index.php?act=spchitiet&id=<?=$value['id']?>" method="post">
                                <div class="mt-3 d-flex detailss justify-content-between align-items-center">
                                    <button type="submit" class="btn text-uppercase btn-sm details">Mua
                                        ngay</button>
                                </div>
                            </form>
                            <form action="index.php?act=addgiohang123" method="post">
                                <input type="hidden" name="masp" value="<?=$value['id']?>">
                                <input type="hidden" name="tensp" value="<?=$value['name']?>">
                                <input type="hidden" name="anhsp" value="<?=$value['img']?>">
                                <input type="hidden" name="giasp" value="<?=$value['price']?>">
                                <div class="d-flex flex-row">
                                    <span class="wishlist" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                        aria-controls="offcanvasRight"><i class="fa fa-heart"></i></span>
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
                    </div><?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .fon_checkbox label {
        font-size: 15px;
    }

    .fon_checkbox input[type="submit"] {
        margin-top: 10px;
        margin-left: 1px;
        width: 150px;
        padding: 5px !important;
        color: #fff !important;
        background-color: #FFA2A2 !important;
        border: 1px solid #fff !important;
    }

    .fon_checkbox input[type="submit"]:hover {
        color: #FFA2A2 !important;
        background-color: #fff !important;
        border: 1px solid #FFA2A2 !important;
    }

    .flex-row {
        margin-top: -38px;
        margin-left: 155px;
        padding-bottom: 10px;
    }

    .padddding {
        margin-top: -95px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }

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

    .cantrai a {
        text-decoration: none;
        color: #000000;
    }

    .card {
        margin-bottom: 20px;
        background-color: #F2F6F6;
        width: 250px;
        border: 1px solid #fff !important;
    }

    .card-image {
        padding-bottom: 30px;
        padding-top: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border-top: 1px solid #e9e9e9;
        border-left: 1px solid #e9e9e9;
        border-right: 1px solid #e9e9e9;
    }

    .card-image img {
        padding: 1px;

    }

    .card-inner {
        padding: 10px 20px;
    }

    .card-inner p {
        font-size: 16px;
        color: #FFA2A2;
        font-weight: 500;
    }

    .price span {
        color: #000000;
        font-weight: 600;
        font-size: 17px;
        padding-left: 20px;
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
        color: #fff !important;
        border-radius: 10px;
        width: 90px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 20px;
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
    .containersp {
        max-width: 1508px;
        margin-top: 160px;
    }

    .wrapper {
        padding: 30px;
        max-width: 1370px;
        margin: 0 auto;
        background-color: #fff;
    }

    .h3 {
        font-weight: 900;
    }

    .views {
        font-size: 0.85rem;
    }

    .btn {
        color: #666;
        font-size: 0.85rem;
    }

    .btn:hover {
        color: #FFA2A2;
    }

    .green-label {
        background-color: #fff5f5;
        color: #FFA2A2;
        border-radius: 5px;
        font-size: 0.8rem;
        margin: 0 3px;
    }

    .radio,
    .checkbox {
        padding: 6px 10px;
    }

    .border {
        border-radius: 12px;
    }

    .options {
        position: relative;
        padding-left: 25px;
    }

    .radio label,
    .checkbox label {
        display: block;
        font-size: 14px;
        cursor: pointer;
        margin: 0;
    }

    .options input {
        opacity: 0;
    }

    .checkmark {
        position: absolute;
        top: 0px;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

    .options input:checked~.checkmark:after {
        display: block;
    }

    .options .checkmark:after {
        content: "";
        width: 9px;
        height: 9px;
        display: block;
        background: white;
        position: absolute;
        top: 52%;
        left: 51%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s;
    }

    .options input[type="radio"]:checked~.checkmark {
        background: #FFA2A2;
        transition: 300ms ease-in-out 0s;
    }

    .options input[type="radio"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1);
    }

    .count {
        font-size: 0.8rem;
    }

    label {
        cursor: pointer;
    }

    .tick {
        display: block;
        position: relative;
        padding-left: 23px;
        cursor: pointer;
        font-size: 0.8rem;
        margin: 0;
    }

    .tick input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .check {
        position: absolute;
        top: 1px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    .tick:hover input~.check {
        background-color: #f3f3f3;
    }

    .tick input:checked~.check {
        background-color: #FFA2A2;
    }

    .check:after {
        content: "";
        position: absolute;
        display: none;
    }

    .tick input:checked~.check:after {
        display: block;
        transform: rotate(45deg) scale(1);
    }

    .tick .check:after {
        left: 6px;
        top: 2px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg) scale(2);
    }

    #country {
        font-size: 0.8rem;
        border: none;
        border-left: 1px solid #ccc;
        padding: 0px 10px;
        outline: none;
        font-weight: 900;
    }

    .close {
        font-size: 1.2rem;
    }

    div.text-muted {
        font-size: 0.85rem;
    }

    #sidebar {
        width: 20%;
        float: left;
    }

    .category {
        font-size: 0.9rem;
        cursor: pointer;
    }

    .list-group-item {
        border: none;
        padding: 0.3rem 0.4rem 0.3rem 0rem;
    }

    .badge-primary {
        background-color: #fff5f5;
        color: #FFA2A2;
    }

    .brand .check {
        background-color: #fff;
        top: 3px;
        border: 1px solid #666;
    }

    .brand .tick {
        font-size: 1rem;
        padding-left: 25px;
    }

    .rating .check {
        background-color: #fff;
        border: 1px solid #666;
        top: 0;
    }

    .rating .tick {
        font-size: 0.9rem;
        padding-left: 25px;
    }

    .rating .fas.fa-star {
        color: #ffbb00;
        padding: 0px 3px;
    }

    .brand .tick:hover input~.check,
    .rating .tick:hover input~.check {
        background-color: #f9f9f9;
    }

    .brand .tick input:checked~.check,
    .rating .tick input:checked~.check {
        background-color: #FFA2A2;
    }

    .product .fa-star {
        font-size: 0.9rem;
    }

    img {
        width: 192px;
        height: 132px;
        object-fit: contain;
    }

    @media(min-width:992px) {

        .filter,
        . {
            display: none;
        }
    }
</style>