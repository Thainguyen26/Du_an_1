<div class="container top-top-dki">
    <div class="row ">
        <?php
            if(isset($thongbao) && ($thongbao!="")){
                echo $thongbao;
            }
            ?>
        <div class="col-md-9 mt-3 mb-1 iconcsss">
        </div>
        <div class="row">
        <div class="col container1">
            <?php 
                    if(is_array($tk)){
                        extract($tk);
                    }
                ?>
            <form action="index.php?act=update" method="post">
            <h5 class="tt">Cập nhật tài khoản</h5>
                <div class="col mt-3">
                    <label for="validationDefault01" class="form-label">Họ & Tên</label>
                    <input name="ten" type="text" class="form-control" id="validationDefault01" value="<?=$user?>">
                </div>
                <div class="col">
                    <label for="validationDefault01" class="form-label">Mật khẩu</label>
                    <input name="pass" type="password" class="form-control" id="validationDefault01"
                        value="<?=$pass?>">
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
                <div class="col">
                        <label for="validationDefault01" class="form-label">Vai trò</label> 
                            <div>
                                
                            <select   name="role" id="input"  style="width: 100px; height: 30px; margin-left: 5px; margin-bottom: 20px;" value="<?=$role?>">
                                <option value="0" <?php echo ($role == 0) ? 'selected' : ''; ?>>User</option>
                                <option value="1" <?php echo ($role == 1) ? 'selected' : ''; ?>>Admin</option>
                            </select >
                            
                            </div>
                </div>
                <div class="col-12 mb-5">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                    <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">

                </div>
            </form>
        </div>
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

    
    .tt {
        padding: 20px 10px;
        text-align: center;
        font-size: 25px;
        font-weight: 400;
    }
    

    .container1 {
        margin: 0 auto;
        margin-left: 200px;
        background-color: rgb(255, 255, 255);
        margin-bottom: 0.5rem;
        margin-top: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
        width: 1000px;
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