<div class="container">
    <div class="order-summary">
        <div class="thank-you">
            <?php
                    extract($listbill);
            
            ?>
            Cảm ơn quý khách đã đặt hàng tại shop <span class="check-mark">&#10003;</span>
        </div>

        <h2>Thông Tin Đơn Hàng và Khách Hàng</h2>

        <div class="section customer-details">
            <p><strong>Mã Đơn: </strong>
                <?=$listbill['madh']?>
            </p>
            <p><strong>Email: </strong>
                <?=$listbill['bill_email']?>
            </p>
            <p><strong>Phương Thức Thanh Toán: </strong>
                <?php if($listbill['pttt'] == 0){?>
                    Thanh toán khi nhận hàng
                <?php } else {?>
                    Thanh toán online
                <?php } ?>
            </p>
            <p><strong>Ghi chú: </strong><?=$listbill['ghichu']?></p>

            <p><strong>Tên: </strong>
                <?=$listbill['bill_name']?>
            </p>
            <p><strong>Địa Chỉ: </strong>
                <?=$listbill['bill_diachi']?>
            </p>
            <p><strong>Số Điện Thoại: </strong>
                <?=$listbill['bill_phone']?>
            </p>
        </div>
        

          
        <?php if($listbill['pass'] == 'pass123') {?>
        <?php } else {?>
            <div class="section customer-details">
            <a href="index.php?act=donhang" class="text-decoration-none text-dark">
                <p class="fs-4">Xem đơn hàng của bạn</p>
            </a>
        </div>
        <?php } ?>
        

        <div class="section order-items">
            <h2>Chi Tiết Đơn Hàng</h2>

            <?php foreach ($listcart as $key => $value) :?>
            <div class="item">
                <span>
                    <?=$value['name']?>
                </span>
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
                <?=number_format($listbill['total'], 0, ',', '.')?>₫
            </p>
        </div>
    </div>
</div>
<style>
    .order-summary {
        border: 1px solid #ddd;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 1500px;
        border-radius: 8px;
        margin-top: 160px;
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

    .section a:hover p {
        color: #FFA2A2;
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