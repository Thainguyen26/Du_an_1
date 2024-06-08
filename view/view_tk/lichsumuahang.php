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
                <?php if ($role == 1) { ?>
                <li class="list-group-item"><a href="admin/index.php">Đăng nhập trang admin</a></li>
                <?php } ?>
                <li class="list-group-item"><a href="index.php?act=dangxuat">Đăng xuất</a></li>
            </ul>
        </div>
        <div class="col-9">
            <div class="tab-content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active">
                        <h5 class="tt">Lịch sử mua hàng</h5>
                        <div class="col container1">
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="col-1">Mã đơn</th>
                                            <th class="col-2">Thời gian</th>
                                            <th class="col-2">Tình trạng</th>
                                            <th class="col-2">Tổng tiền</th>
                                            <th class="col-1">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list_BILL as $list):?>
                                        <tr>
                                            <td>
                                                <?=$list['madh']?>
                                            </td>
                                            <td>
                                                <?=$list['ngaygiaohang']?>
                                            </td>
                                            <td>
                                                <?php if($list['trangthai'] == 0) {?>
                                                <span class="text-danger">Chưa xử lí</span>
                                                <?php }elseif ($list['trangthai'] == 1) {?>
                                                <span class="text-primary">Đã xử lí</span>
                                                <?php }elseif ($list['trangthai'] == 2) {?>
                                                <span class="text-warning">Đang giao hàng</span>
                                                <?php }elseif ($list['trangthai'] == 3) {?>
                                                <span class="text-success">Giao hàng thành công</span>
                                                <?php }elseif ($list['trangthai'] == 4) {?>
                                                <span class="text-danger"><strong>Hủy đơn hàng</strong></span>
                                                <?php }?>
                                            </td>

                                            <td>
                                                <?=number_format($list['total'], 0, ',', '.')?>₫
                                            </td>
                                            <td class="botexxt">
                                                <a href="index.php?act=chitiet_bill_home&id=<?=$list['id']?>">
                                                    <i class="fa-regular fa-pen-to-square btn"></i>
                                                </a>
                                                <?php if ($list['trangthai'] != 4) { ?>
                                                <?php if ($list['trangthai'] != 1 && $list['trangthai'] != 2 && $list['trangthai'] != 3) { ?>

                                                <a href="#" class="openModalButton" data-bs-toggle="modal"
                                                    data-bs-target="#customModal_<?php echo $list['id']; ?>">
                                                    Hủy đơn
                                                </a>
                                                <?php } ?>
                                                <?php } ?>
                                            </td>
                                            <div class="modal fade" id="customModal_<?php echo $list['id']; ?>"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="customModalLabel_<?php echo $list['id']; ?>"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5">Xác nhận hủy đơn hàng
                                                            </h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                            </button>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn"
                                                                data-bs-dismiss="modal">Hủy</button>
                                                            <a href="index.php?act=update_huydonhang&id=<?=$list['id'];?>"
                                                                class="btn-view">
                                                                Đồng ý
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    .botexxt a {
        text-decoration: none;
        color: #000;
    }

    .botexxt a:hover {
        color: #FFA2A2;
    }


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
        background-color: #fff;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
        border: 1px solid #eaeaea
    }

    th {
        background-color: #fff;

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

    span {
        color: red;

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
    }

    .passss i {
        transform: translateY(248%);
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
</style>