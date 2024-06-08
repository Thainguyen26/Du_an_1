<div class="container top-top-dki">
    <div class="dieuhuong mb-4">
        <div class="dhmenu mb-4">
            <style>
                .dhmenu {
                    margin-left: 20px;
                }

                body {
                    background-color: #e6e6f1;
                }
            </style>
        </div>
        <div class="row">
            <div class="col container0">
                <form action="index.php?act=add_tk" method="post">
                    <h5 class="tt">Thêm tài khoản</h5>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Họ & Tên</label><span> &#x2217;</span>
                        <input name="ten" type="text" class="form-control" id="validationDefault01"
                            placeholder="Họ tên" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Số điện thoại</label><span> &#x2217;</span>
                        <input type="text" name='tel' class="form-control" id="validationDefault01"
                            placeholder="Số điện thoại" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Email</label><span> &#x2217;</span>
                        <input name="email" type="email" class="form-control" id="validationDefault01"
                            placeholder="Email" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Mật khẩu </label> <span
                            for="">&#x2217;</span>
                        <input name="pass" type="password" class="form-control" id="validationDefault01"
                            placeholder="Mật khẩu" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Địa chỉ </label> <span
                            for="">&#x2217;</span>
                        <input name="diachi" type="text" class="form-control" id="validationDefault01"
                            placeholder="Địa chỉ" required>
                    </div>
                    <div class="col">
                        <label for="validationDefault01" class="form-label">Vai trò</label> 
                            
                            <select name="role" id="input" style="width: 100px; height: 30px; margin-left: 5px; margin-bottom: 20px;">
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                            
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" value="Đăng Kí" name="add_tk">Thêm tài khoản</button>
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


    .tt {
        padding: 20px 10px;
        text-align: center;
        font-size: 25px;
        font-weight: 400;
    }

    .container0 {
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
    .container0 span{
        color: red;
    }


    .container0 button[type="submit"] {
        text-align: center;
        width: 500px;
        background-color: #F08383;
        border: none;
        border-radius: 3px;
        height: 40px;
    }

    .container0 button[type="submit"]:active {
        background-color: #F08383 !important;
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