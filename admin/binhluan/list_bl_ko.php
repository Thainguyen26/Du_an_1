<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <!-- Thêm danh mục -->
                    
                    <p><b>Bình luận sản phẩm</b></p>
                </div>
                <div class="bangdanhmuc">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-2">Mã Bình Luận</th>
                                <th class="col-2">Mã Sản Phẩm</th>
                                <th class="col-2">User</th>
                                <th class="col-3">Nội dung</th>
                                <th class="col-2">Phản hồi của admin</th>
                                <th class="col-2">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $andanh="Ẩn danh"; ?>
                            <?php foreach($list_bl as $list=> $ldm):?>
                            <tr>
                                <th><?=$ldm['id']?></th>
                                <td><?=$ldm['id_sp']?></td>
                                <td><?=$andanh?></td>
                                <td><?=$ldm['noidung']?></td>
                                <td><?=$ldm['phanhoi']?></td>
                                <td>

                                    <!-- Sửa danh mục -->
                                    <a href="index.php?act=suabl&id=<?=$ldm['id']?>">
                                        <i class="fa-regular fa-pen-to-square mx-2 btn"></i>
                                    </a>
                                    <!-- Xóa danh mục -->
                                    <!-- <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="fa-regular fa-trash-can btn"></i>
                                    </a> -->
                                    <a href="#" class="openModalButton" data-bs-toggle="modal"
                                        data-bs-target="#customModal_<?php echo $ldm['id']; ?>">
                                        <i class="fa-regular fa-trash-can btn"></i>
                                    </a>
                                </td>
                            </tr>

                            <div class="modal fade" id="customModal_<?php echo $ldm['id']; ?>"
                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="customModalLabel_<?php echo $ldm['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog">
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
                                            <a href="index.php?act=xoabl&id=<?=$ldm['id'];?>">
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


<!-- Thêm mới danh mục -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Thêm mới hàng hóa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>
            <form action="index.php?act=themdanhmuc" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tên hàng hóa</label>
                        <input type="text" class="form-control" name="tenhanghoa">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <input type="submit" name="themmoidm" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>
</div>

<style>
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
    }

    .be-content {
        padding: 10px;
    }

    .be-content .row {
        background-color: #ffffff;
    }
</style>