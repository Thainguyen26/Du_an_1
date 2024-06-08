<div class="container toptoptop">
    <div class="row">
        <div class="col-md-3 menu_user dm2">
            <ul class="list-group">
                <div class="list-group-item active dm">Xin chào
                    <strong>
                        <?=$user?>
                    </strong>
                </div>
                <li class="list-group-item"><a href="index.php?act=trang_taikhoan">Tài khoản</a></li>
                <li class="list-group-item"><a href="index.php?act=donhang">Đơn hàng của bạn</a></li>
                <li class="list-group-item"><a href="index.php?act=lichsumuahang">Lịch sử mua hàng</a></li>
                <li class="list-group-item"><a href="index.php?act=dangxuat">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="col-9">
            <div class="tab-content">
                <div class="order-summary">
                    <div class="thank-you">
                        <?php
                    extract($loadchitiet_bill);
            
            ?>
                    </div>

                    <h2>Thông Tin Đơn Hàng và Khách Hàng</h2>

                    <div class="section customer-details">
                        <p><strong>Mã Đơn: </strong>
                            <?=$madh?>
                        </p>
                        <p><strong>Email: </strong>
                            <?=$bill_email?>
                        </p>
                        <p><strong>Phương Thức Thanh Toán: </strong>
                            <?php if($pttt == 0){?>
                                Thanh toán khi nhận hàng
                            <?php } else {?>
                                Thanh toán online
                            <?php } ?>
                        </p>

                        <p><strong>Tên: </strong>
                            <?=$bill_name?>
                        </p>
                        <p><strong>Ghi chú: </strong>
                            <?=$ghichu?>
                        </p>
                        <p><strong>Địa Chỉ: </strong>
                            <?=$bill_diachi?>
                        </p>
                        <p><strong>Số Điện Thoại: </strong>
                            <?=$bill_phone?>
                        </p>
                    </div>
                    <div class="section customer-details">
                        <p class="fs-5">Trạng thái:
                            <?php if($trangthai == 0) {?>
                            <span class="text-danger">Chưa xử lí</span>
                            <?php }elseif ($trangthai == 1) {?>
                            <span class="text-primary">Đã xử lí</span>
                            <?php }elseif ($trangthai == 2) {?>
                            <span class="text-warning">Đang giao hàng</span>
                            <?php }elseif ($trangthai == 3) {?>
                            <span class="text-success">Giao hàng thành công</span>
                            <?php }elseif ($trangthai == 4) {?>
                            <span class="text-danger"><strong>Hủy đơn hàng</strong></span>
                            <?php }?> 
                            <br>
                            <br>Thời gian: <span class="fs-6 text-primary"><?=$ngaygiaohang?></span>
                        </p>
                    </div>

                    <div class="section order-items">
                        <h2>Chi Tiết Đơn Hàng</h2>

                        <?php foreach ($loadchitiet_cart as $key => $value) :?>
                        <div class="item">
                            <span>
                                <?=$value['name']?>
                            </span>
                            <span><img src="././upload/<?=$value['img']?>" alt="" height="70"></span>
                            <span>
                                <?=$value['soluong']?> x
                                <?=number_format($value['giasp'], 0, ',', '.')?>₫
                            </span>
                            <strong class="text-danger">
                                <?=number_format($value['thanhtien'], 0, ',', '.')?>₫
                            </strong>
                        </div>
                        <?php endforeach; ?>



                        <p class="text-danger"><strong>Tổng Tiền: </strong>
                            <?=number_format($total, 0, ',', '.')?>₫
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .order-summary {
        padding: 20px;
        background-color: #fff;
        width: 100%;
        max-width: 1500px;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    h2 {
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        color: #5a5a5a;
        margin-bottom: 15px;
        font-size: 1.5em;
    }

    .section {
        margin-bottom: 20px;
    }

    .section p {
        margin: 10px 0;
        line-height: 1.5;
    }

    .order-items,
    .customer-details {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
    }

    .item {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
    }

    .item:last-child {
        border-bottom: none;
    }

    .item span {
        flex: 1;
    }

    .item strong {
        margin-left: 10px;
        color: #000000;
    }

    .thank-you {
        text-align: center;
        margin-top: -10px;
        margin-bottom: 20px;
        font-weight: bold;
        color: #FFA2A2;
        font-size: 1.8em;
    }

    .check-mark {
        color: #FFA2A2;
    }
</style>
<style>
    /* css của danh mục sản phẩm */
    .dm {
        background-color: #ffffff !important;
        border: none !important;
        text-align: center;
        color: #000 !important;
        border-radius: 0% !important;
        padding: 30px 0 !important;
        margin-bottom: 10px;
    }

    .dm2 {
        width: 300px;
    }

    .dm2 ul li {
        border-radius: 0% !important;
        padding: 20px;
        font-size: 15px;
        text-transform: uppercase;
        background-color: #ffffff !important;
        border: none !important;
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
        border-right: 2px solid #FFA2A2;
        cursor: pointer;
    }
</style>
<style>
    a.koanduoc {
        pointer-events: none;
        cursor: not-allowed;
        color: #fff;
        text-decoration: none;
        background-color: #ccc
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;

    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    .btn-view {
        padding: 5px 10px;
        text-decoration: none;
        background-color: #FFA2A2;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .list-group-item {
        border-radius: 0 !important;
    }

    .menu_user {
        margin-top: 20px;
        border-top-left-radius: 0 !important;
        border-radius: none !important;
    }

    .list-group a {
        background-color: #ffffff !important;
    }

    ::placeholder {
        font-weight: 100;
    }

    .tt {
        padding: 20px 30px;
        background-color: #ffffff;
        color: #373737;
        margin-top: 20px;
    }

    .container1 {
        background-color: #fff;
        margin-bottom: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .passss i {
        transform: translateY(248%);
    }

    .container1 input[type="submit"] {
        width: 90px;
        background-color: #F08383;
        border: none;
        border-radius: 3px;
        height: 40px;
        margin-bottom: 20px;
    }

    .container1 input[type="submit"]:active {
        background-color: rgb(167, 32, 32) !important;
    }

    .container1 input[type="submit"]:hover {
        background-color: rgb(232, 85, 85) !important;
    }

    .container1 input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 800px;
        margin-bottom: 20px;
        border-radius: 3px;
    }


    .container1 label {
        font-weight: 500;
    }

    .toptoptop {
        margin-top: 160px;
        margin-bottom: 30px;
    }

    .list-group-item-action {
        background-color: rgb(255, 255, 255) !important;
        color: #000 !important;
        border-left: none !important;
        border-top: none !important;
        border-bottom: none !important;
    }

    .list-group-item:focus {
        border-right: 3px solid #FFA2A2 !important;
        border-left: 1px solid #ccc !important;
        border-top: 1px solid #ccc !important;
        border-bottom: 1px solid #ccc !important;
    }
</style>