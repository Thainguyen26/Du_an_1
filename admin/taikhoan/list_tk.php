<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                <a href="index.php?act=add_tk" class="add_hang_hoa mt-2 mb-4">
                        Thêm tài khoản<i class="fa-solid fa-arrow-up-from-bracket btn"></i>
                    </a>
                    <p><b>Tài khoản</b></p>
                </div>
                <div class="bangdanhmuc">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th class="col-2">Tên</th>
                                <th class="col-1">Mật khẩu</th>
                                <th class="col-2">Email</th>
                                <th class="col-2">Địa chỉ</th>
                                <th class="col-1">Điện thoại</th>
                                <th class="col-1">Vai trò</th>
                                <th class="col-1">Thao tác</th>
                               

                            </tr>
                        </thead>
                        
                        <tbody>

                            <?php foreach ($listtk as $key => $value): ?>
                            <tr>
                                <td>
                                <?php if($value['pass'] == 'pass123') {?>
                                        <span class="text-danger"><?= $value['user'] ?></span>
                                    <?php } else {?>
                                        <?= $value['user'] ?>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if($value['pass'] == 'pass123') {?>
                                        <span class="text-danger"><?= $value['pass'] ?></span>
                                    <?php } else {?>
                                        <?= $value['pass'] ?>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?= $value['email'] ?>
                                </td>
                                <td>
                                    <?= $value['diachi'] ?>
                                </td>
                                <td>
                                    <?= $value['tel'] ?>
                                </td>
                                <td>
                                    <?php if($value['role'] == 0) {?>
                                        <span class="text-danger">User</span>
                                    <?php }else {?>
                                        <span class="text-primary">Admin</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="index.php?act=sua_tk&id=<?=$value['id']?>">
                                        <i class="fa-regular fa-pen-to-square mx-2 btn"></i>
                                    </a>
                                    
                                    <!-- Xóa tk -->
                                    <a href="#" class="openModalButton" data-bs-toggle="modal"
                                        data-bs-target="#customModal_<?php echo $value['id']; ?>">
                                        <i class="fa-regular fa-trash-can btn"></i>
                                    </a>
                                </td>
                                
                            </tr>
                            <!-- <form action="" method="post" class="form-inline">
                            <div class="form-group">
                            <select name="phan_quyen" id="input">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                            </div>
                        <button type="submit">Cập nhập</button>
                        </form> -->
                        <div class="modal fade" id="customModal_<?php echo $value['id']; ?>"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="customModalLabel_<?php echo $value['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">Xác nhận xóa danh mục
                                                <i class="fa-regular fa-trash-can text-danger"></i> <br>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i class="fa-solid fa-xmark"></i>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Hủy</button>
                                            <a href="index.php?act=xoatk&id=<?=$value['id'];?>">
                                                Xóa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

<style>
    .tendanhmucccc {
        font-size: 15px;
    }

    .form-select {
        padding: 10px;
    }


    .div {
        margin-left: -10px;
    }
    .adddd_sp {
        background-color: #FFA2A2 !important;
        color: #fff !important;
    }

    .bangdanhmuc input[type="text"] {
        width: 400px;
        margin-bottom: 30px;
        padding: 10px;
        outline: none;
        border: 0.3px solid #ccc;
        border-radius: 3px;
    }

    .bangdanhmuc input[type="submit"] {
        width: 140px;
        margin-bottom: 30px;
        margin-left: 10px;
        padding: 10px;
        border: 0.3px solid #ccc;
        border-radius: 3px;
        background-color: #fff
    }

    .bangdanhmuc input[type="submit"]:hover {
        color: #DC3545;
        border: 0.3px solid #DC3545;
    }

    .bangdanhmuc input[type="submit"]:hover {
        color: #DC3545;
        border: 0.3px solid #DC3545;
    }

    .bangdanhmuc span {
        font-size: 15px;
    }

    .danhmucsp a:hover i {
        color: #FFA2A2;
    }

    .danhmucsp a:hover {
        color: #FFA2A2;
    }

    .add_hang_hoa {
        border: 1px solid #ccc;
        padding: 4px;
        padding-left: 15px;
        float: right;
        text-align: center;
        color: #000;
        border-radius: 3px
    }

    .table {
        text-align: center !important;
    }

    .table a:hover i {
        color: #FFA2A2 !important;
        cursor: pointer;
    }



    .table thead {
        background-color: #FFA2A2 !important;
        border: 0.2px solid #FFA2A2 !important;
        color: #ffffff;
        font-size: 15px;
    }



    .table thead th {
        border: none !important;
        font-weight: 300 !important;
    }

    .table tbody th {
        border: 0.1px solid #e6e6e6 !important;
        padding: 25px;
        font-weight: 400 !important;
        font-size: 14px;
        line-height: 50px;
    }

    .table tbody a:hover {
        color: #FFA2A2;
    }

    .table tbody a {
        color: #000;
    }

    .table tbody tr td {
        border: 0.1px solid #e6e6e6 !important;
        font-weight: 400 !important;
        font-size: 14px;
    }

    .table tbody td {
        border: none !important;
    }

    .danhmucsp p {
        margin-top: 10px;
        margin-left: -10px;
        padding: 10px;
        font-size: 17px;
        font-weight: 500;
    }

    .be-content {
        padding: 10px;
    }

    .be-content .row {
        background-color: #ffffff;
    }
</style>