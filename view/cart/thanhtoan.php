<div class="container top-top-dki">

    <form action="index.php?act=donhangthanhcong" method="post">
        <div class="row mt-5 mb-5">
            <div class="col-8 bg-white css-bg-thanhtoan">
                <a href="index.php" class="mt-3 mb-3">HT&B Beautify</a>
                <div class="row">
                    <div class="col-6"> <!--  Thông tin khách hàng -->
                        <div class="row mt-3">
                            <div class="col-6">
                                <p>Thông tin nhận hàng</p>
                            </div>
                        </div>
                        <?php
                                if(isset($_SESSION['user'])) {
                                    $name=$_SESSION['user']['user'];
                                    $email=$_SESSION['user']['email'];
                                    $tel=$_SESSION['user']['tel'];
                                    $diachi=$_SESSION['user']['diachi'];
                        ?>
                        <div class="thongtininput mb-3">
                            <input type="text" name="hoten" value="<?=$name?>" required>
                        </div>
                        <div class="thongtininput mb-2">
                            <input type="email" name="email" value="<?=$email?>" required>
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" name="sodienthoai" value="<?=$tel?>" required>
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" name="diachi" placeholder="Địa chỉ" value="<?=$diachi?>" required>
                        </div>

                        <div class="thongtininput mt-3 mb-2">
                            <textarea name="ghichu" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                        </div>
                        <?php
                                }else {
                                    echo '';
                            ?>
                            <div class="thongtininput mb-3">
                            <input type="text" name="hoten" placeholder="Họ tên" required>
                        </div>
                        <div class="thongtininput mb-2">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" placeholder="Số điện thoại" name="sodienthoai" required>
                        </div>
                        <div class="thongtininput mt-3 mb-2">
                            <input type="text" placeholder="Địa chỉ" name="diachi" required>
                        </div>

                        <div class="thongtininput mt-3 mb-2">
                            <textarea name="ghichu" id="" cols="30" rows="10" placeholder="Ghi chú"></textarea>
                        </div>
                        <?php } ?>
                        

                    </div>
                    <div class="col-6">
                        <div class="row ms-2 mt-3">
                            <div class="col">
                                <div class="section payment-method">
                                    <p>Phương Thức Thanh Toán</p>
                                    <div class="payment-method">
                                        <div class="payment-option">
                                            <input type="radio" id="onlinePayment" name="pttt" value="1" required>
                                            <label for="onlinePayment">Thanh toán online</label>
                                        </div>

                                        <div class="payment-option">
                                            <input type="radio" id="cashOnDelivery" name="pttt" value="0" required>
                                            <label for="cashOnDelivery">Thanh toán khi nhận hàng</label>
                                        </div>
                                    </div>
                                    <style>
                                        .payment-method {
                                        display: flex;
                                        background-color: #fff;
                                        border: 1px solid #ccc;
                                        border-radius: 8px;
                                        padding: 20px;
                                        margin-top: 42px;
                                    }

                                    .payment-option {
                                        margin: 0 20px;
                                        text-align: center;
                                    }

                                    input[type="radio"] {
                                        display: none;
                                    }

                                    label {
                                        cursor: pointer;
                                        padding: 10px;
                                        border-radius: 5px;
                                        transition: background-color 0.3s;
                                        display: block;
                                    }

                                    input[type="radio"]:checked + label {
                                        background-color: #FFA2A2;
                                        color: #fff;
                                    }

                                    label:hover {
                                        background-color: #FFA2A2;
                                        color: #fff;
                                    }
                                    </style>
                                    <!-- <label>
                                        <input type="radio" name="pttt" value="online" checked>
                                        Thanh toán online
                                    </label>
                                    <label>
                                        <input type="radio" name="pttt" value="on_delivery">
                                        Thanh toán khi nhận hàng
                                    </label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php $okk='
            <div class="col-4 container-cttt-ctn">
                <div class="sidebar-header">
                    <P>Đơn hàng của quý khách</P>
                </div>

                <div class="sidebar-cont">
                    <div class="ctttdonhang">
                        <div class="row">
                            <div class="product-container">
                                <!-- Sản phẩm 1 -->';
                               $tong=0;
                                for ($i=0; $i < sizeof($_SESSION["giohang"]); $i++) { 
                                    $ttien=$_SESSION["giohang"][$i][2]*$_SESSION["giohang"][$i][4];
                                    $tong+=$ttien;
                                $okk.='<div class="product">
                                    <img src="././upload/'.$_SESSION["giohang"][$i][3].'">
                                    <h6>'.$_SESSION["giohang"][$i][1].'</h6>
                                    <div class="product-details">
                                        <p>Số lượng: '.$_SESSION["giohang"][$i][4].'</p>
                                        <p>Giá: '.number_format($_SESSION["giohang"][$i][2], 0, ',', '.').'₫</p>
                                    </div>
                                </div>';} 
                               
                            $okk.='</div>
                        </div>

                    </div>

                    <div class="cttt-price">
                        <div class="row">
                            <div class="col-5 cttt-price-text">
                                <p>Tạm tính</p>
                            </div>
                            
                            <div class="col-7 cttt-price-gia">
                                <div class="ppp">
                                    <p>'.number_format($tong, 0, ',', '.').'₫</p>
                                </div>
                            
                            </div>
                        </div>
                    </div>';

                    $okk.='<div class="cttt-tongtatca">
                        <div class="row">
                            <div class="col-6 ttt-ten mt-2">
                                <p>Tổng cộng</p>
                                <a href="index.php?act=giohang"><i class="fa-solid fa-chevron-left"></i> Quay về giỏ
                                    hàng</a>
                            </div>
                            <div class="col-6 thanhtien-tongtatca">
                                <p>'.number_format($tong, 0, ',', '.').'₫</p>
                                <button type="submit" name="thanhtoandh">Đặt hàng</button>
                            </div>
                        </div>
                    </div>';
                    echo $okk;
                   ?>
                </div>
            </div>
        </div>
    </form>

</div>
<style>
    .payment-method {
            display: flex;
            flex-direction: column;
        }

        .payment-method label {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .payment-method input {
            margin-right: 10px;
        }
    /* Thiết lập CSS cho khung chứa sản phẩm */
    .product-container {
        max-height: 400px;
        /* Chiều cao tối đa của khung chứa */
        overflow-y: auto;
        /* Tự động cuộn khi nội dung vượt quá kích thước */
        border: 1px solid #ccc;
        padding: 10px;
    }

    h6 {
        margin-left: -10px !important;
        margin-top: 10px;
    }

    .product p {
        margin-left: 0px !important;
    }

    /* Thiết lập CSS cho mỗi sản phẩm */
    .product {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border: 1px solid #ddd;
    }

    .product img {
        max-width: 50px;
        /* Kích thước tối đa của ảnh sản phẩm */
    }

    .product-details {
        display: flex;
        flex-direction: column;
    }

    .top-top-dki {
        margin-top: 160px
    }

    .cttt-tongtatca {
        padding: 10px;
    }

    .cttt-tongtatca .thanhtien-tongtatca p {
        margin-left: 80px;
        color: #DC3545;
        font-size: 22px;
    }

    .cttt-tongtatca .thanhtien-tongtatca button {
        margin-left: 89px;
        color: #ffffff;
        background-color: #F08383;
        border: none;
        outline: none;
        margin-top: 25px;
        padding: 10px;
        border-radius: 4px;
        width: 100px;
    }

    .cttt-tongtatca .thanhtien-tongtatca button:hover {
        background-color: #fff;
        color: #DC3545;
        border: 1px solid #DC3545;
    }

    .cttt-tongtatca .ttt-ten p {
        font-size: 18px !important;
        color: #2f2f2f;
        margin-left: 28px;
        margin-bottom: 45px;
    }

    .cttt-tongtatca .ttt-ten a {
        font-size: 15px !important;
        color: #2f2f2f;
        margin-left: 28px;
        text-decoration: none;
        margin-top: 30px !important;
    }

    .cttt-tongtatca .ttt-ten a:hover {
        color: #DC3545;
    }

    .cttt-price .cttt-price-text p {
        font-size: 15px !important;
        color: #868686;
        margin-left: 28px;
    }

    .cttt-price .cttt-price-gia p {
        font-size: 15px !important;
        color: #868686;
        font-weight: 300;
    }

    .cttt-price .cttt-price-gia p {
        margin-left: 169px;
    }

    .cttt-price .ppp p {
        margin-left: 150px !important;
    }

    .cttt-price {
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .sidebar-cont {
        padding: 10px;
    }

    .sidebar-cont .ctttdonhang {
        padding: 10px;
    }

    .sidebar-cont .ctttdonhang img {
        max-width: 100px;
    }

    .ctttdonhang p {
        margin-bottom: 0;
        font-size: 15px !important;
        color: #313131;
        margin-left: -20px;
        margin-top: 25px;
    }

    .ctttdonhang {
        border-bottom: 1px solid #ccc;
    }

    .ctttdonhang .sb-ct-price p {
        margin-bottom: 0;
        font-size: 15px !important;
        color: #868686;
        margin-left: 20px;
        margin-top: 40px;
    }

    .container-cttt-ctn {
        padding: 0 !important;
        margin: 0 !important;
        background-color: rgb(245, 245, 245);
        border: 1.5px solid #ccc;
    }

    .container-cttt-ctn .sidebar-header p {
        border-bottom: 1.5px solid #ccc;
        padding: 20px;
        margin-bottom: 0 !important;
    }


    .css-bg-thanhtoan {
        padding-top: 10px;
        padding-bottom: 200px;
        padding-left: 20px;
        padding-right: 20px;
        border: 1.5px solid #ccc;
        border-right: 0;
    }

    .css-bg-thanhtoan a {
        font-size: 30px;
        text-decoration: none;
        color: #F08383;
        font-weight: 700;
        cursor: pointer;
    }

    .css-bg-thanhtoan a:hover {
        color: #a81927;
    }

    body {
        background-color: #e6e6f1;
    }

    .ngdung-tt p {
        font-size: 16px !important;
        margin-left: 7px;
    }

    .ngdung-tt i {
        margin-top: 5px;
        margin-left: 45px;
    }

    .ngdung-tt {
        display: flex;
        justify-content: center;
        padding: 0;
    }

    .thongtininput input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        outline: none;
        border: 1px solid #ccc;
    }

    .thongtininput textarea {
        width: 100%;
        padding: 5px 10px;
        height: 100px;
        outline: none;
        border: 1px solid #ccc;
        color: #6b6b6b;
    }

    .container p {
        font-weight: 600;
        font-size: 18px;
    }



    .select-box {
        width: 380px;
        position: relative;
    }

    .select-option {
        position: relative;
    }

    /* .select-option ::placeholder {
        font-size: 18px !important;
    } */

    .select-option input {
        width: 408px;
        border-radius: 5px;
        color: black;
        cursor: pointer;
        font-size: 15px;
        padding: 8px;
        border: 1px solid #ccc;
        outline: 0 !important;
    }

    .select-option:after {
        content: "";
        border-top: 11px solid #8f8e8e;
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        position: absolute;
        right: -10px;
        top: 50%;
        margin-top: -8px;
    }

    .content {
        background-color: #ffffff;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        color: #000;
        margin-top: 15px;
        width: 408px;
        padding: 7px;
        display: none;
        z-index: 999;
        margin-top: -2px;
    }

    .content .search input {
        width: 430px;
    }

    .content input {
        border: 1px solid #b3b3b3;
        outline: 0;
        width: 500px;
    }

    .options {
        margin-top: 10px;
        max-height: 200px;
        overflow-y: auto;
        padding: 0;
    }

    .options li {
        padding: 5px;
        cursor: pointer;
    }

    .options li:hover {
        background-color: rgb(236, 236, 236);
    }

    .select-box.active .content {
        display: block;
    }

    .select-box.active .select-option:after {
        transform: rotate(-180deg);
    }
</style>

<script>
    const selectBox = document.querySelector('.select-box');
    const selectOption = document.querySelector('.select-option');
    const soValue = document.querySelector('#soValue');
    const optionSearch = document.querySelector('#optionSearch');
    const options = document.querySelector('.options');
    const optionsList = document.querySelectorAll('.options li');


    selectOption.addEventListener('click', function () {
        selectBox.classList.toggle('active');
    });
    optionsList.forEach(function (optionsListSingle) {
        optionsListSingle.addEventListener('click', function () {
            text = this.textContent;
            soValue.value = text;
            selectBox.classList.remove('active');
        })
    });

    optionSearch.addEventListener('keyup', function () {
        var filter, li, i, textValue;
        filter = optionSearch.value.toUpperCase();
        li = options.getElementsByTagName('li');
        for (i = 0; i < li.length; i++) {
            liCount = li[i];
            textValue = liCount.textContent || liCount.innerText;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = '';

            }
            else {
                li[i].style.display = 'none';
            }

        }
    })
</script>