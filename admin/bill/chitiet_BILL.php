<?php extract($load_one_bill); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <title>Đơn Hàng</title>
                <div class="order-summary">
                    <div class="order-details customer-details">
                        <h2>Thông Tin Đơn Hàng và Khách Hàng</h2>

                        <p><strong>Mã Đơn:</strong>
                            <?= $madh ?>
                        </p>
                        <p><strong>Tổng Tiền:</strong>
                            <?= number_format($total, 0, ',', '.') ?>₫
                        </p>
                        <p><strong>Trạng thái:</strong>
                            <?php if ($trangthai == 0) { ?>
                                <span class="text-danger">Chưa xử lí</span>
                            <?php } elseif ($trangthai == 1) { ?>
                                <span class="text-primary">Đã xử lí</span>
                            <?php } elseif ($trangthai == 2) { ?>
                                <span class="text-warning">Đang giao hàng</span>
                            <?php } elseif ($trangthai == 3) { ?>
                                <span class="text-success">Giao hàng thành công</span>
                            <?php } elseif ($trangthai == 4) { ?>
                                <span class="text-danger"><strong>Hủy đơn hàng</strong></span>
                            <?php } ?>

                        </p>


                        <p><strong>Phương Thức Thanh Toán:</strong>
                            <?php if ($pttt == 0) { ?>
                                Thanh toán khi nhận hàng
                            <?php } else { ?>
                                Thanh toán online
                            <?php } ?>
                        </p>
                        <p><strong>Ngày đặt:</strong>
                            <?= $ngaydathang ?>
                        </p>
                        <p><strong>Ghi chú:</strong>
                            <?= $ghichu ?>
                        </p>
                        <p><strong>Tên:</strong>
                            <?= $bill_name ?>
                        </p>
                        <p><strong>Địa Chỉ:</strong>
                            <?= $bill_diachi ?>
                        </p>
                        <p><strong>Số Điện Thoại:</strong>
                            <?= $bill_phone ?>
                        </p>
                        <p><strong>Email:</strong>
                            <?= $bill_email ?>
                        </p>

                        <!-- <form action="" method="post" class="form-inline">
                            <div class="form-group">
                            <select name="trangthai" id="input">
                                <option value="0">Chưa Xử lí</option>
                                <option value="1">Đã Xử lí</option>
                               
                            </select>
                            </div>
                        <button type="submit">Cập nhập</button>
                        </form> -->

                        <!-- <?php
                                //  if ($trangthai != 3) :

                                ?> -->
                        <!-- <form action="" method="post" class="form-inline">
                                <div class="form-group">
                                    <select name="trangthai" id="input"> -->
                        <?php
                        // $statusOptions = [
                        //     0 => 'Chưa Xử lí',
                        //     1 => 'Đã Xử lí',
                        //     2 => 'Đang giao hàng',
                        //     4 => 'Hủy'
                        // ];
                        // $currentStatus = $trangthai;
                        // foreach ($statusOptions as $value => $label) {
                        // //     $disabled = ($value <= $currentStatus) ? 'disabled' : '';
                        // //     $disabled = ($value < $currentStatus) ? 'disabled' : '';
                        // //     echo "<option value=\"$value\" $disabled>$label</option>";
                        // // }
                        ?>
                        <!-- // </select>
                            // -->
                        <!-- </div> -->
                        <!-- <button type="submit">Cập nhập</button> -->
                        <!-- </form> -->
                        <?php
                        //  endif;
                        ?>

                        <?php
                        if ($trangthai == 0) {
                            echo "<p><strong>Cập nhật trạng thái thành: </strong><span class='text-primary'>Đã xử lí</span></p>";
                            echo "<form action='' method='post' class='form-inline'>";
                            echo "<button type='submit' name='trangthai' value='1'>Cập nhật</button>";
                            echo "</form>";
                        } elseif ($trangthai == 1) {
                            echo "<p><strong>Cập nhật trạng thái thành: </strong><span class='text-warning'>Đang giao hàng</span></p>";

                            echo "<form action='' method='post' class='form-inline'>";
                            echo "<button type='submit' name='trangthai' value='2'>Cập nhật</button>";
                            echo "</form>";
                        } elseif ($trangthai == 2) {
                            echo "<span class='text-warning'>Đang giao hàng</span>";
                        } elseif ($trangthai == 3) {
                            echo "<span class='text-success'>Giao hàng thành công</span>";
                        } elseif ($trangthai == 4) {
                            echo "<span class='text-danger'><strong>Hủy đơn hàng</strong></span>";
                        }
                        ?>

                        <?php if ($trangthai != 2 && $trangthai != 3 && $trangthai != 4) { ?>
                            <div class="Update_bil_chitiet"><a href="#" class="openModalButton" data-bs-toggle="modal" data-bs-target="#customModal_<?php echo $id; ?>">
                                    Sửa thông tin
                                </a></div>

                        <?php } ?>



                        <div class="modal fade" id="customModal_<?php echo $id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="customModalLabel_<?php echo $id; ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5">Cập nhật thông tin
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>

                                    </div>
                                    <form action="index.php?act=update_bill_chitiet" method="post">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Tên</label>
                                                <input type="text" class="form-control" name="ten_user" value="<?= $bill_name ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" name="diachi_user" value="<?= $bill_diachi ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Số điện thoại</label>
                                                <input type="text" class="form-control" name="sdt_user" value="<?= $bill_phone ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Email</label>
                                                <input type="text" class="form-control" name="email_user" value="<?= $bill_email ?>">
                                            </div>
                                            <input type="hidden" name="id" value="<?= $id ?>">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <input type="submit" name="capnhat_billchitiet" value="Cập nhật">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-items">
                        <h2>Chi Tiết Đơn Hàng</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Giá</th>
                                </tr>
                            </thead>
                            <?php foreach ($load_one_cart as $key => $value) : ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $value['name'] ?>
                                        </td>
                                        <td><img src="../upload/<?= $value['img'] ?>" alt="" height="70"></td>
                                        <td>
                                            <?= number_format($value['giasp'], 0, ',', '.') ?>₫
                                        </td>
                                        <td>
                                            <?= $value['soluong'] ?>
                                        </td>
                                        <td>
                                            <?= number_format($value['thanhtien'], 0, ',', '.') ?>₫
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<style>
    .Update_bil_chitiet {
        margin-left: 1050px;
        margin-top: -10px;
    }

    .Update_bil_chitiet a {
        padding: 10px;
        color: #fff;
        background-color: #FFA2A2;
    }

    .Update_bil_chitiet a:hover {
        padding: 10px;
        color: #FFA2A2;
        background-color: #fff;
        border: 1px solid #FFA2A2;
    }

    .modal-footer a {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: #fff;
        background-color: #FFA2A2;
    }

    .form-group select {
        padding: 6px;
        margin-right: 5px;
    }

    .btn-close {
        padding: 5px;
        background-color: #fff !important;
        border: 1px solid #000000 !important;
        color: #000000 !important;
    }

    .btn-secondary {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 0px;
        padding-bottom: 0px;
        background-color: #fff !important;
        border: 1px solid #000000 !important;
        color: #000000 !important;
    }

    button {
        padding: 5px;
        background-color: #F08383 !important;
        border: 1px solid #F08383 !important;
        color: #FFFFFF !important;
    }

    button:hover {
        background-color: #fff !important;
        border: 1px solid #F08383 !important;
        color: #F08383 !important;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 20px;

    }

    .order-summary {
        padding: 20px;
        margin-bottom: 20px;
        background-color: #fff;
    }

    h2 {
        padding-bottom: 10px;
        color: #333;
    }

    .order-details,
    .order-items,
    .customer-details {
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        margin-top: 10px;
        /* margin-left: -20px; */

    }

    th,
    td {
        padding: 8px;
        text-align: center;
        background-color: #ffffff;
        border: 1px solid #ccc;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>