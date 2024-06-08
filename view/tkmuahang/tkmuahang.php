<div class="container">
    <div class="dieuhuong mb-4">
        <div class="dhmenu mb-4">
            <div class="col-md-9 mt-3">
                <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> / <span
                    class="text-danger">Thông tin mua hàng</span>
            </div>
            <style>
                .dhmenu {
                    margin-left: 20px;
                }

                body {
                    background-color: #F3F3F6;
                }
            </style>
        </div>
        <div class="row">
            <?php
                if(isset($thongbao) && ($thongbao !="")){
                    echo $thongbao;
                }
            ?>
            <div class="col-md-6 container0">
                <form action="index.php?act=tkmuahang" method="post">
                    <h5 class="tt">Thông tin mua hàng</h5>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Địa chỉ</label><span> &#x2217;</span>
                        <input name="diachimuahang" type="text" class="form-control" id="validationDefault01"
                            placeholder="Họ tên" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Số điện thoại</label><span> &#x2217;</span>
                        <input type="text" name='sdtmuahang' class="form-control" id="validationDefault01"
                            placeholder="Số điện thoại" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" value="Đăng Kí" name="themttmuahang">Thêm thông tin</button>
                        <div class="has-error">

                        </div>
                    </div>
                    <hr class="hr mt-4 mb-4">
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .hr {
        max-width: 300px;
        margin: auto;

    }

    .qm {
        text-align: center;

    }

    .qm a {
        color: brown;

    }

    .qm .qmk {
        margin-left: -25px;
    }

    ::placeholder {
        font-weight: 100;

    }

    span {
        color: red;

    }

    .tt {
        padding: 20px 10px;
        text-align: center;
    }

    .container0 {
        margin: auto;
        background-color: rgb(255, 255, 255);
        margin-bottom: 0.5rem;
        margin-top: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .container0 button[type="submit"] {
        text-align: center;
        width: 500px;
        background-color: rgb(167, 32, 32);
        border: none;
        border-radius: 3px;
        height: 40px;
    }

    .container0 button[type="submit"]:active {
        background-color: rgb(167, 32, 32) !important;
    }

    .container0 button[type="submit"]:hover {
        background-color: rgb(232, 85, 85) !important;
    }

    .container0 input[type="text"],
    input[type="email"],
    input[type="password"] {
        max-width: 500px;
        margin: auto;
        margin-bottom: 20px;
        border-radius: 3px;
    }


    .container0 label {
        font-weight: 500;
    }
</style>