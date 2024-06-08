<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    
?>
<div class="be-content">
    <div class="main-content container-fluid">
        <div class="row">
            <div class="col danhmucsp-content">
                <div class="danhmucsp">
                    <p>CẬP NHẬT SẢN PHẨM</p>
                </div>
                <div class="bangdanhmuc">
                    <form action="index.php?act=capnhatsanpham" method="post" enctype="multipart/form-data">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-4 mt-3">
                                <span>Tên sản phẩm</span>
                                <input type="text" name="ten_sua" value="<?=$name?>">
                            </div>
                            <div class="col-md-4 mt-3">
                                <span>Giá sản phẩm</span>
                                <input type="text" name="gia_sp" value="<?=$price?>">
                            </div>
                            <div class="col-md-4 mt-3">
                                <span>Sale</span>
                                <input type="text" name="gia_sua" value="<?=$giasale?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="anhsp"><img src="../upload/<?=$img?> " alt="" height='80'>
                            <input type="hidden" name="id" value="<?=$id?>">
                        </div>
                        <div class="tendanhmucccc">Danh mục</div>
                        <select name="danhmuc_sua" class="form-select form-select-lg mb-3"
                            aria-label="Large select example">
                            

                            <?php foreach ($listdanhmuc as $key => $value) {
                                extract($value);
                                if($iddm==$id) {
                                    echo '<option value="'.$id.'" selected>
                                            '.$tendm.'
                                          </option>';
                                }else {
                                    echo '<option value="'.$id.'">
                                            '.$tendm.'
                                          </option>';
                                }
                            }
                            ?>
                        </select>


                        <div class="div">
                            <input type="submit" name="capnhatsp" class="adddd_sp" value="CẬP NHẬT">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .adddd_sp {
        background-color: #FFA2A2 !important;
        color: #fff !important;
    }

    .tendanhmucccc {
        font-size: 15px;
    }

    .form-select {
        padding: 10px;
    }


    .div {
        margin-left: -10px;
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