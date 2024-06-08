<?php

ob_start();
session_start();
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = array();
}

include "./model/pdo.php";
include "./model/danhmuc.php";
$listdanhmuc = loadall();
include "./model/sanpham.php";
include "./model/taikhoan.php";
include "./model/post.php";
include "./view/header.php";
include "./model/donhang.php";

// $sp_moi=load_all_sp_home($id);
$one_spct = load_all_sp_home();
$post = load_all_post_home();

// $spct=loadOne_sanphamct_home();
if ((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {

        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                dangky($user, $pass, $email, $tel);
                // header("Location: index.php");
                $thongbao2 = '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 139px; margin-bottom: -135px;color: #000;">
                    <b>Đăng kí thành công, hãy đăng nhập!</b>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }

            include "./view/home.php";
            break;

        case "dangnhap":
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checked = check($user, $pass);
                if (is_array($checked)) {
                    $_SESSION['user'] = $checked;
                    header('Location: index.php');
                } else {
                    $thongbao = '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: 139px; margin-bottom: -135px;color: #fff; background-color: #FFA2A2;">
                        <b>Tài khoản hoặc mật khẩu không đúng, vui lòng kiếm tra lại!</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                }
            }
            include "./view/home.php";
            break;

        case "update_tk":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['diachi'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_tk($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = check($user, $pass);
                $thongbao = '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <b>Cập nhật tài khoản thành công</b>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                header('Location: index.php?act=trang_taikhoan');
            }
            include "./view/trang_taikhoan.php";
            break;

        case 'tkmuahang':
            if (isset($_POST['themttmuahang']) && $_POST['themttmuahang']) {

                $diachimuahang = $_POST['diachimuahang'];
                $sdtmuahang = $_POST['sdtmuahang'];
                themtt($diachimuahang, $sdtmuahang);
                // $checkttmh=checktt($diachimuahang,$sdtmuahang);
                // $_SESSION['diachimuahang'] = $checkttmh;
                include "./view/home.php";
                $thongbao = '<div class="alert alert-success" role="alert">
                    Thêm thông tin thành công tiếp tục <a href="index.php?act=home" class="alert-link">Mua hàng</a> 
                  </div>';
            }
            include "./view/tkmuahang/tkmuahang.php";
            break;
        case 'dangxuat':

            session_unset();
            header('Location: index.php');
            break;


        case 'addgiohang':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $anhsp = $_POST['anhsp'];
                if (isset($_POST['quantityy']) && ($_POST['quantityy'] > 0)) {
                    $quantity = $_POST['quantityy'];
                } else {
                    $quantity = 1;
                }
                if (checktrung_pro($masp) >= 0) {
                    $vitritrung = checktrung_pro($masp);
                    update_quantity_pro($vitritrung);
                } else {
                    $item = array($masp, $tensp, $giasp, $anhsp, $quantity);
                    array_push($_SESSION["giohang"], $item);
                }
            }
            header("Location: index.php?act=giohang");

        case 'addgiohang123':
            if (isset($_POST['add_sp_home']) && ($_POST['add_sp_home'])) {
                $masp = $_POST['masp'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $anhsp = $_POST['anhsp'];
                if (isset($_POST['quantityy']) && ($_POST['quantityy'] > 0)) {
                    $quantity = $_POST['quantityy'];
                } else {
                    $quantity = 1;
                }
                if (checktrung_pro($masp) >= 0) {
                    $vitritrung = checktrung_pro($masp);
                    update_quantity_pro($vitritrung);
                } else {
                    $item = array($masp, $tensp, $giasp, $anhsp, $quantity);
                    array_push($_SESSION["giohang"], $item);
                }

                echo '<script>window.location.href = "index.php?act=sanpham";</script>';
            }
            break;
        case 'giohang':

            include "./view/giohang.php";
            break;
        case 'Xoagiohang':
            if (isset($_GET['id']) && ($_GET['id'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['id'], 1);
            } else {
                $_SESSION['giohang'] = [];
            }
            header('Location: index.php?act=giohang');
            break;
        case 'sanpham':
            $listsp_count = listcount();
            $listsp_count_dm = listcountoo();
            include "./view/sanpham.php";
            break;
        case "sanphamkey":
            if (isset($_POST['kyw']) && $_POST['kyw'] > 0) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loatAll_sanpham($kyw, $iddm);
            $tendm = load_ten_sanpham($iddm);
            include "./view/keys.php";
            break;


        case 'spchitiet':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = ($_GET['id']);
                $sp = loadOne_sanpham_chitiet($id);
                extract($sp);
                $spcungloai = loadOne_sanpham_cungloai($id, $iddm);
            }
            include "./view/sanphamct.php";
            break;

        case 'locgia_sp':
            $one_spct = array();
            if (isset($_POST['locgia_sp'])) {
                if (isset($_POST['price_range'])) {
                    $priceRange = $_POST['price_range'];

                    switch ($priceRange) {
                        case '1':
                            $one_spct = load_giasp1();
                            break;
                        case '2':
                            $one_spct = load_giasp2();
                            break;
                        case '3':
                            $one_spct = load_giasp3();
                            break;
                        case '4':
                            $one_spct = load_giasp4();
                            break;
                        case '5':
                            $one_spct = load_giasp5();
                            break;
                        case 'newest':
                            $one_spct = load_giasp6();
                            break;
                        case 'oldest':
                            $one_spct = load_giasp7();
                            break;
                        default:
                            $one_spct = load_all_sp_home();
                            break;
                    }
                }
            }

            include "./view/sanpham.php";
            break;
        case 'load_toanbodanhmuc':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $loaddanhmuc = loaddanhmuc($id);
                extract($loaddanhmuc);
                $loadtendm = loadtendm($id);
            }
            include "./view/loaddanhmuc.php";
            break;
        case 'thanhtoan':
            include "./view/cart/thanhtoan.php";
            break;

        case 'donhangthanhcong':
            if (isset($_POST['thanhtoandh'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sodienthoai = $_POST['sodienthoai'];
                $ghichu = $_POST['ghichu'];
                $pttt = $_POST['pttt'];
                //thêm user mới
                $user = "user" . rand(1, 999);
                $pass = "pass123";
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $iduser = dangky_id($user, $pass, $hoten, $email, $diachi, $sodienthoai);
                }

                //Tạo đơn hàng
                $madh = "#HTB" . $iduser . "-" . rand(1, 99);

                function total_donhang()
                {
                    $tong = 0;
                    for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
                        $ttien = $_SESSION["giohang"][$i][2] * $_SESSION["giohang"][$i][4];
                        $tong += $ttien;
                    }
                    return $tong;
                }
                $total = total_donhang();
                $id_bill = bill_insert_id($madh, $iduser, $hoten, $diachi, $sodienthoai, $email, $total, $ghichu, $pttt);
                // $thanhtien=thanhtien_donhang();
                if (isset($_SESSION["giohang"]) && (count($_SESSION["giohang"]) > 0)) {
                    for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
                        $ttien = $_SESSION["giohang"][$i][2] * $_SESSION["giohang"][$i][4];
                        insert_cart(
                            $_SESSION["giohang"][$i][0],
                            $_SESSION["giohang"][$i][3],
                            $_SESSION["giohang"][$i][1],
                            $_SESSION["giohang"][$i][2],
                            $_SESSION["giohang"][$i][4],
                            $ttien,
                            $id_bill
                        );
                    }
                    // unset($_SESSION["giohang"]);
                    $_SESSION["giohang"] = null;
                    // echo '<meta http-equiv="refresh" content="0;url=index.php?act=donhangthanhcong">';

                }
            }
            $listcart = Loadcart($id_bill);
            $listbill = Load_bill($id_bill);
            include "./view/cart/donhangthanhcong.php";
            break;
        case "donhang":
            $list_BILL = Load_bill_home($_SESSION['user']['id']);
            include "./view/view_tk/donhang.php";
            break;
        case "update_huydonhang":
            if (isset($_GET['id']) && ($_GET['id'])) {
                update_bill_home($_GET['id']);
                // echo '<meta http-equiv="refresh" content="0;url=index.php?act=donhang">';
            }
            $list_BILL = Load_bill_home($_SESSION['user']['id']);
            include "./view/view_tk/donhang.php";
            break;
        case "update_thanhconghang":
            if (isset($_GET['id']) && ($_GET['id'])) {
                update_thanhconghang($_GET['id']);
                // echo '<meta http-equiv="refresh" content="0;url=index.php?act=donhang">';
            }
            $list_BILL = Load_bill_home($_SESSION['user']['id']);
            include "./view/view_tk/donhang.php";
            break;
        case "trang_taikhoan":
            include "./view/view_tk/trang_taikhoan.php";
            break;
        case "chitiet_bill_home":
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $loadchitiet_bill = loadchitietone_bill($id);
                $loadchitiet_cart = loadchitietone_cart($id);
            }
            include "./view/view_tk/chitiet_bill_home.php";
            break;
            // case 'postct':
            //     if (isset($_GET['id']) && ($_GET['id']) > 0) {
            //         $id = ($_GET['id']);
            //         $postct = loadOne_post($id);
            //         extract($postct);
            //     }
            //     $listdungtich = loadall_dungtich();
            //     include "./view/baiviet.php";
            //     break;
        case "lichsumuahang":
            $list_BILL = Load_bill_home_lich_su($_SESSION['user']['id']);
            include "./view/view_tk/lichsumuahang.php";
            break;
        case 'gioithieu':
            include "./view/gioithieu.php";
            break;
        case 'tintuc':
            include "./view/tintuc.php";
            break;
        case 'chinhsach':
            include "./view/chinhsach.php";
            break;
        case 'lienhe':
            include "./view/lienhe.php";
            break;

        default:
            include "./view/home.php";
            break;
    }
} else {

    include "./view/home.php";
}

include "./view/footer.php";
