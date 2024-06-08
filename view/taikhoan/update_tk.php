<div class="container top-top-dki">
    <div class="row mb-5">
        <?php
            if(isset($thongbao) && ($thongbao!="")){
                echo $thongbao;
            }
            ?>
        <div class="col-md-9 mt-3 mb-1 iconcsss">
            <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
                class="fa-solid fa-chevron-right"></i> <span class="text-danger">Cập nhật tài khoản</span>
            <style>
                .top-top-dki {
                    margin-top: 160px
                }
                .iconcsss i {
                    font-size: 14px;
                    color: #989898;
                    margin-left: 5px;
                    margin-right: 5px;
                }
            </style>
        </div>
        <h5 class="tt">Cập nhật tài khoản</h5>
        <div class="col-md-9 container1">
            <?php 
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);

                    }
                ?>
            <form action="index.php?act=update_tk" method="post">

                <div class="col mt-3">
                    <label for="validationDefault01" class="form-label">Họ & Tên</label>
                    <input name="user" type="text" class="form-control" id="validationDefault01" value="<?=$user?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Mật khẩu</label>
                    <input name="pass" type="password" class="form-control" id="validationDefault01"
                        value="<?= $pass?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="validationDefault01" value="<?=$email?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Địa chỉ</label>
                    <input name="diachi" type="text" class="form-control" id="validationDefault01"
                        value="<?= $diachi?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Số điện thoại</label>
                    <input type="text" name='tel' class="form-control" id="validationDefault01" value="<?=$tel?>">
                </div>
                <div class="col-12 mb-5">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">

                </div>
            </form>
        </div>
        <div class="col-md-3 dm2">
            <ul class="list-group ">
                <div class="list-group-item active dm" aria-current="true">Danh mục sản phẩm</div>
                <div class="dm3">
                    <li class="list-group-item"><a href="">Kem chống nắng</a></li>
                    <li class="list-group-item"><a href="">Sữa rửa mặt</a></li>
                    <li class="list-group-item"><a href="">Sữa tắm</a></li>
                    <li class="list-group-item"><a href="">Nước tẩy trang</a></li>
                    <li class="list-group-item"><a href="">Nước hoa</a></li>
                    <li class="list-group-item"><a href="">Sữa tắm</a></li>
                    <li class="list-group-item"><a href="">Sữa tắm</a></li>
                </div>
            </ul>
        </div>
    </div>
</div>
<style>
    .dm {
        background-color: #F08383 !important;
        border: 10px solid #F08383 !important;
        text-align: center;
        border-radius: 0% !important;
    }

    .dm2 ul li {
        border-radius: 0% !important;
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
        border-left: 2px solid #d51b2e;
        cursor: pointer;
    }
</style>
<style>
    body {
        background-color: #e6e6f1;
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
        color: #949494;
        margin-top: 20px;
        width: 1307px;
    }

    .container1 {
        background-color: #fff;
        margin-bottom: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .container1 input[type="submit"] {
        width: 500px;
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
        max-width: 700px;
        margin-bottom: 20px;
        border-radius: 3px;
    }


    .container1 label {
        font-weight: 500;
    }
</style>