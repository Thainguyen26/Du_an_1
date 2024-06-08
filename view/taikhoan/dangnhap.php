<div class="container top-top-dki">
    <div class="dieuhuong mb-4">
    <div class="dhmenu mb-4">
            <div class="col-md-9 mt-3">
                <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> / <span
                    class="text-danger">Đăng nhập</span>
            </div>
        <style>
            .top-top-dki {
                margin-top :160px
            }
            .dhmenu {
                margin-left: 20px;
            }
            body {
                    background-color: #e6e6f1;
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
                <form action="index.php?act=dangnhap" method="post">
                    <h5 class="tt">Đăng nhập tài khoản</h5>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Tên tài khoản </label><span> &#x2217;</span>
                        <input type="text" name="user" class="form-control" id="validationDefault01" placeholder="Email"
                            required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Mật khẩu </label> <span
                            for="">&#x2217;</span>
                        <input type="password" name="pass" class="form-control" id="validationDefault01"
                            placeholder="Mật khẩu" required>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" value="Đăng nhập" name="dangnhap">Đăng
                            nhập</button>
                    </div>
                    <hr class="hr mt-4 mb-4">
                    <div class="col qm mt-4 mb-5">
                        <div class="row">
                            <div class="col-md-6 qmk"><a href="#" class="">Quên
                                    mật khẩu?</a></div>
                            <div class="col-md-6 dkkk">Bạn chưa có tài khoản?<a href="index.php?act=dangky"
                                    class="text-decoration-none">
                                    Đăng ký</a></div>
                        </div>
                    </div>
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
        background-color: #fff;
        margin-bottom: 0.5rem;
        margin-top: 0.5rem;
        border-radius: 3px;
        display: flex;
        justify-content: center;
    }

    .container0 button[type="submit"] {
        width: 500px;
        background-color: #F08383;
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
    input[type="password"] {
        max-width: 500px;
        margin: auto;
        margin-bottom: 20px;
        border-radius: 3px;
    }

    .form-control input[type="text"],
    input[type="password"] {
        outline: none !important;
    }

    .container0 label {
        font-weight: 500;
    }
</style>