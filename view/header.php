<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <link rel="stylesheet" href="./Giaodien/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="../img/style.css"> -->
    <link rel="stylesheet" href="./assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="./assets/vendors/jquery.min.js"></script>
    <script src="./assets/owlcarousel/owl.carousel.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/boosted@5.2.3/dist/js/boosted.bundle.min.js" integrity="sha384-MANW37RG4MpFWPMCcNZBnvSobOkBpIGlbBkEzTtD4FbbOzJXbW8TddND1ak2lfsB" crossorigin="anonymous"></script> -->
</head>
<script>
    // Thêm sự kiện cuộn chuột
    window.addEventListener('scroll', function() {
        // Lấy đối tượng phần header
        var header = document.getElementById('siteHeader');

        // Kiểm tra vị trí cuộn chuột
        if (window.scrollY > 100) { // Thay 100 bằng vị trí bạn muốn kích hoạt hiệu ứng
            header.classList.add('header-visible');
        } else {
            header.classList.remove('header-visible');
        }
    });
</script>
<style>
    .modal-header h2 {
        /* padding: 10px; */
        text-align: center;
    }

    .modal-body span {
        color: red;
    }

    .modal-footer input[type="submit"] {
        background-color: #FFA2A2;
        color: #fff;
        border: 1px solid #FFA2A2
    }

    .modal-footer input[type="submit"]:hover {
        background-color: #fff;
        color: #FFA2A2;
        border: 1px solid #FFA2A2
    }

    .modal-footer button {
        background-color: #fff;
        color: #FFA2A2;
        border: 1px solid #FFA2A2
    }

    .modal-footer button:hover {
        background-color: #FFA2A2;
        color: #fff;
        border: 1px solid #fff
    }

    .modal-content a {
        color: #FFA2A2;
    }
</style>

<body>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Đăng nhập</h1>
                </div>
                <form action="index.php?act=dangnhap" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="username" class="col-form-label">Tên tài
                                khoản</label>
                            <input type="text" class="form-control" name="user" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">Mật
                                khẩu</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-primary">
                    </div>
                    <p class="text-center mt-3">Bạn chưa có tài khoản? <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Đăng ký</a></p>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Đăng ký tài khoản</h1>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form action="index.php?act=dangky" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="newUsername" class="col-form-label">Họ & tên</label>
                            <input type="text" class="form-control" name="user" required>
                        </div>
                        <div class="mb-3">
                            <label for="newUsername" class="col-form-label">Số điện thoại</label>
                            <input type="text" class="form-control" name="tel" required>
                        </div>
                        <div class="mb-3">
                            <label for="newUsername" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="col-form-label">Mật khẩu mới</label>
                            <input type="password" class="form-control" name="pass" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <input type="submit" name="dangky" value="Đăng ký" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="scrollToTopBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></div>
    <!-- <img src="" alt=""> -->
    <style>
        body {
            background-color: #f2f6f6 !important;
            cursor: url('./upload/cursor.png'), auto !important;
            /* cursor: url('../upload/cursor.png'), auto !important; */
            /* cursor: default; */
        }

        .header-visible {
            top: 0;
            /* Hiện phần header khi có lớp .header-visible */
        }

        .trangheader-fixed {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #ffa2a2;
            z-index: 500;
            transition: top 0.5s;
        }

        #scrollToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ee6b6bc7;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #scrollToTopBtn:hover {
            background-color: #ff9f96;
        }
    </style>
    <script>
        // Wait for the DOM to be ready
        document.addEventListener("DOMContentLoaded", function() {
            // Get the button
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            };
        });

        // Scroll to the top of the document when the button is clicked
        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
        }
    </script>
    <!-- header -->
    <div class="trangheader-fixed" id="siteHeader">
        <section class="myheader">
            <div class="container paddingg">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2">
                        <a href="index.php"><img src="./img/logo/anh_logo_duan3.png" style="max-width: 100%; height: 65px;" class="img-fluid" alt=""></a>
                    </div>
                    <!-- search -->
                    <div class="col-md-4">
                        <form action="index.php?act=sanphamkey" method="POST" class="css input-group mb-3 mt-2 pt-2 focus-input-search">
                            <input type="text" name="kyw" class="form-control search" placeholder="Bạn muốn tìm kiếm gì?" aria-label="Tìm kiếm sản phẩm" aria-describedby="basic-addon2">
                            <button class="input-group-text" type="submit" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <style>
                                .mymainmenu {
                                    background-color: #f08383 !important;
                                }

                                .focus-input-search input:focus {
                                    border-color: none !important;
                                    border: 1px solid #e3e3e3 !important;
                                    border-right: none !important;
                                    box-shadow: none !important;
                                }

                                .focus-input-search ::placeholder {
                                    color: #a5a5a5;
                                }

                                .input-group-text {
                                    border-left: none !important;
                                    background-color: #fff !important;
                                    border-top-right-radius: 10px !important;
                                    border-bottom-right-radius: 10px !important;
                                    padding-right: -10px;
                                    color: #696969;
                                }

                                .form-control {
                                    border-right: none !important;
                                    padding: 8px;
                                    border-radius: 10px;
                                    padding-left: 20px;
                                }

                                .search input[type=text] {
                                    width: 100px !important;
                                }
                            </style>
                        </form>
                    </div>
                    <!-- support -->
                    <div class="col-md-4 mt-2">
                        <div class="row">
                            <div class="col">
                                <div class="row ps-5">
                                    <div class="col-2 ps-2">
                                        <div class="fs-3 text-white">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-10 ps-3">
                                        <a href="#" class="text-decoration-none text-white">Hotline & Zalo
                                        </a><br>
                                        <p class="text-white">0345.49.72.82</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row pe-6">
                                    <div class="col-2">
                                        <div class="fs-3 text-white">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        extract($_SESSION['user']);
                                    ?>

                                        <div class="col-10">
                                            <a href="#" class="text-decoration-none text-white">Xin chào!</a><br>
                                            <a href="index.php?act=trang_taikhoan" class="no_text"><?= $user ?></a>
                                            <ul class="dropdown-menu active-menuu">
                                                <li><a class="dropdown-item" href="index.php?act=trang_taikhoan">Trang tài
                                                        khoản</a>
                                                </li>
                                                <li><a class="dropdown-item" href="index.php?act=update_tk">Cập nhật tài
                                                        khoản</a>
                                                </li>
                                                <li><a class="dropdown-item" href="index.php?act=dangxuat">Đơn hàng của
                                                        bạn</a>
                                                </li>
                                                <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a>
                                                </li>
                                                <style>
                                                    a.no_text {
                                                        color: #fff;
                                                        text-decoration: none;
                                                    }

                                                    .active-menuu li a:active {
                                                        background-color: none !important;
                                                    }

                                                    .active-menuu li a:hover {
                                                        background-color: rgb(247, 207, 207) !important;
                                                    }
                                                </style>
                                            </ul>
                                        </div>
                                    <?php
                                    } else {


                                    ?>

                                        <div class="col-10">
                                            <a href="#" class="text-decoration-none text-white">Xin chào!</a><br> <a href="index.php?act=dangnhap" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">
                                                <p class="text-white fs-6">Đăng
                                                    nhập</p>
                                            </a>
                                        </div>
                                    <?php }  ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sign in -->
                    <div class="col-md-2 pt-2 d-flex mt-2">
                        <div class="row">
                            <div class="col"><a href="index.php?act=giohang" class="position-relative ms-1">
                                    <span><i class="fa-solid fa-cart-shopping text-white fs-4"></i></span>

                                </a></div>
                            <div class="col"><a href="index.php?act=spyeuthich" class="position-relative ms-2">
                                    <span><i class="fa-solid fa-heart text-white fs-4"></i></span>

                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- endheader -->
        <!-- mainmenu -->
        <section class="mymainmenu bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg bg-danger hovermenu paddddd">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 cangiua">
                                        <div class="category">
                                            <li class="nav-item text-white mt-2">

                                                <i class="fa-solid fa-bars-staggered"></i> Danh mục <span></span>
                                                <div class="product-list">
                                                    <ul>
                                                        <li><a href="index.php?act=sanpham">Tất cả sản phẩm</a></li>
                                                        <?php foreach ($listdanhmuc as $key => $value) : ?>

                                                            <li><i class="fa-solid fa-play"></i>
                                                                <a href="index.php?act=load_toanbodanhmuc&id=<?= $value['id'] ?>">
                                                                    <?= $value['tendm'] ?>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        </div>
                                        <li class="nav-item">
                                            <a class="nav-link active text-white px-4" aria-current="page" href="index.php">Trang
                                                chủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="index.php?act=gioithieu">Giới
                                                thiệu</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <!-- <a class="nav-link dropdown-toggle text-white px-4"
                                                href="index.php?act=sanpham" data-bs-toggle="dropdown">
                                                Sản phẩm
                                            </a> -->
                                            <ul class="dropdown-menu active-menuu">
                                                <li><a class="dropdown-item" href="index.php?act=sanpham">Tất cả sản
                                                        phẩm</a></li>
                                                <style>
                                                    .active-menuu li a:active {
                                                        background-color: none !important;
                                                    }

                                                    .active-menuu li a:hover {
                                                        background-color: rgb(247, 207, 207) !important;
                                                    }

                                                    .paddingg {
                                                        padding: 10px;
                                                    }
                                                </style>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="index.php?act=tintuc">Tin tức</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="index.php?act=lienhe">Liên hệ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white px-4" href="index.php?act=chinhsach">Chính
                                                sách</a>
                                        </li>
                                    </ul>
                                    <style>
                                        .paddddd {
                                            padding: 2px !important;
                                            background-color: #F08383 !important;
                                        }

                                        .cangiua {
                                            margin-left: -14px !important;
                                        }
                                    </style>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .product-list i {
                font-size: 11px;
                margin-right: 10px;
                margin-left: 10px;
                top: 10px;
            }

            .category-text,
            .product-list {
                max-height: 0;
                overflow: hidden;
                transition: 0.3s ease-in-out;
                position: absolute;
                /* Thêm thuộc tính này để chắc chắn .product-list không chiếm diện tích trong quá trình ẩn */
            }

            .category:hover .category-text,
            .category:hover .product-list {
                max-height: 1000px;
                /* Điều chỉnh giá trị max-height tùy theo nhu cầu của bạn */
            }

            .product-list ul {
                padding: 0;
                width: 245px;
                margin: 0;
            }

            .product-list ul li {
                padding: 10px;
                list-style: none;
                border-bottom: 1px solid #ccc;
            }

            .product-list li:hover {
                background-color: #FFA2A2;
                color: #fff;
            }

            .product-list li:hover a {
                color: #fff;
            }

            .product-list li:hover i {
                color: #fff;
            }

            .product-list ul li a {
                text-decoration: none;

                color: #000;

            }

            .product-list ul li {
                padding: 10px 10px;
                list-style: none !important;
                border-bottom: 1px solid #ccc;
            }

            .category span {
                margin-left: 150px;
                border-right: 2px solid #fff;
            }

            .product-list li:hover {
                background-color: #FFA2A2 !important;
                color: #fff !important;
            }

            .category:hover .product-list {
                margin-top: 5px;
                display: block;
                position: absolute;
                background-color: #fff;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.544);
                border-radius: 5px;
            }

            .category {
                position: relative;
                display: inline-block;
                cursor: pointer;
                margin-right: 40px;
            }
        </style>
    </div>