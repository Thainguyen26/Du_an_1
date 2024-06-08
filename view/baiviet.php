<div class="container top-top-dki">
    <div class="col-md-9 mt-3 mb-4 iconcsss">
        <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
            class="fa-solid fa-chevron-right"></i> <span class="text-danger">Bài viết</span>
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

            .container-chinhsach {
                padding: 25px 10px 10px 10px;
                background-color: #fff;
            }

            body {
                background-color: #e6e6f1;
            }
        </style>
    </div>
    <div class="row container-chinhsach mb-5">
        <div class="col-9 mb-3">
            <h1>Giới thiệu sản phẩm của chúng tôi</h1>
            <?php extract($postct);?>
            <h3>1.<?=$name_post?></h3>
            <?=$noidung1?>
           <br><br>

            <h3>2. Thời hạn bảo hành:</h3>

            <?=$noidung2?>
            <br><br>
            <h3>3. Phương thức áp dụng bảo hành</h3>
            Thông tin hỗ trợ bảo hành<br>
            <?=$noidung3?>

        </div>
        <div class="col-3 mb-3">
            <?php 
                include "boxright.php";
            ?>
        </div>
    </div>
</div>                                                                                                                                                  