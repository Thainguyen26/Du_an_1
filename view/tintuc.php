<div class="container">
<div class="col-md-9 mt-3 mb-4 iconcsss">
        <a href="index.php" class="text-decoration-none text-dark">Trang chủ</a> <i
            class="fa-solid fa-chevron-right"></i> <span class="text-danger">Tin tức</span>
        <style>
            .iconcsss i {
                font-size: 14px;
                color: #989898;
                margin-left: 5px;
                margin-right: 5px;
            }
        </style>
    </div>
    <div class="row">
        <div class="col-9" style="width: 75%;">
           <div class="tinmoi">
                <h1 class="">Tin mới nhất</h1>
           </div>
           <div class="hrne container mt-5">
                    <style>
                        .hrne {
                            max-width: 1080px;
                            height: 1px;
                            border: 1px solid #d51b2e;
                        }
                    </style>
            </div>
           <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                    <img src="./img/sanpham/sp5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm Mỹ Phẩm X hoàn hảo cho làn da sáng mịn</h5>
                        <p class="card-text">Sản phẩm Mỹ Phẩm X, với thành phần tự nhiên và công nghệ tiên tiến, đã tạo nên làn da hoàn hảo mà mọi người mơ ước. Tận hưởng làn da sáng mịn và rạng rỡ với sản phẩm này. Đọc thêm về cách sản phẩm này giúp cải thiện làn da của bạn.</p>
                        <button type="button" class="btn btn-outline-success">Đọc thêm</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./img/sanpham/sp3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Làn da trẻ trung suốt đêm với sản phẩm Mỹ Phẩm Y</h5>
                        <p class="card-text">Mỹ Phẩm Y đã giới thiệu một sản phẩm đột phá mới, giúp tái tạo làn da trong suốt giấc ngủ của bạn. Bạn sẽ tỉnh dậy với làn da trẻ trung, mịn màng và đầy sức sống. Đọc chi tiết về cách sản phẩm này hoạt động và cách sử dụng.</p>
                        <button type="button" class="btn btn-outline-success">Đọc thêm</button>
                    </div>
                </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./img/sanpham/sp2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mỹ Phẩm Z - Sự lựa chọn hoàn hảo cho làn da nhạy cảm</h5>
                        <p class="card-text">Sản phẩm Mỹ Phẩm Z đã đặt ra tiêu chuẩn mới cho việc chăm sóc da nhạy cảm. Được thiết kế đặc biệt để giảm kích ứng da và cung cấp độ ẩm cần thiết, sản phẩm này là lựa chọn lý tưởng cho những người có làn da nhạy cảm. Đọc thêm về công nghệ đằng sau sản phẩm này.</p>
                        <button type="button" class="btn btn-outline-success">Đọc thêm</button>
                    </div>
                </div>
                </div>
                <div class="col">
                    <div class="card">
                    <img src="./img/sanpham/sp1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sản phẩm Mỹ Phẩm W - Công thức độc đáo cho làn da kháng khuẩn</h5>
                        <p class="card-text">Làn da sạch và tỏa sáng luôn là mục tiêu của Mỹ Phẩm W. Với công thức độc đáo, sản phẩm này giúp kiểm soát vi khuẩn gây mụn và làm sáng da tức thì. Đọc bài viết để tìm hiểu thêm về cách sản phẩm này đặc biệt.</p>
                        <button type="button" class="btn btn-outline-success">Đọc thêm</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-3 mb-3" style="margin-top: 100px;">
            <?php 
                include "boxright.php";
            ?>
        </div>
</div>
</div>
<style>
    img.card-img-top{
        left: 110px;

        width: 200px;
        position: relative;
    }
    div.row.row-cols-1.row-cols-md-2.g-4{
        margin: 20px 0;
    }
    div.col-9{
        width: 100%;
    }
    div.tinmoi{
        margin: 30px 0;
        height: 200px;
        background-image: url('./img/banner/th.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    h1{
        line-height: 260px;
        text-align: center;
        color: blue;
        
    }
</style>