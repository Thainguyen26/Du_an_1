<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <p>THÊM SẢN PHẨM</p>
                </div>
                <div class="bangdanhmuc">
                    <form action="index.php?act=add_sanpham" method="post" enctype="multipart/form-data">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 mt-3">
                                <span>Tên sản phẩm</span>
                                <input type="text" name="tensp" placeholder="Tên sản phẩm" required>
                            </div>
                            <div class="col-md-4 mt-3">
                                <span>Giá sản phẩm</span>
                                <input type="text" name="gia_sp" placeholder="Giá gốc" required>
                            </div>
                            <div class="col-md-4 mt-3">
                                <span>Sale</span>
                                <input type="text" name="gia_sale" placeholder="Giá sale" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" name="anhsp" required>
                        </div>
                        <div class="tendanhmucccc">Danh mục</div>
                        <select name="iddm" class="form-select mb-3" aria-label="Large select example">
                            <?php foreach($listdanhmuc as $ldm): ?>
                            <option value="<?=$ldm['id']?>">
                                <?=$ldm['tendm']?>
                            </option>
                            <?php endforeach; ?>
                        </select>


                        <div class="div">
                            <input type="submit" name="add_sp" class="adddd_sp" value="Thêm mới">
                        </div>
                    </form>
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