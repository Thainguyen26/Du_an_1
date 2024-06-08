<?php
ob_start();
session_start();
require_once "../admin/header.php";
require_once "../admin/footer.php";
require_once "../model/pdo.php";
require_once "../model/danhmuc.php";
require_once "../model/sanpham.php";
require_once "../model/donhang.php";
require_once "../model/binhluan.php";
require_once "../model/post.php";
require_once "../model/taikhoan.php";
$listdanhmuc = loadall();
if ((isset($_GET['act'])) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
            // Tài khoản 
        case 'add_tk':
            if (isset($_POST['add_tk']) && $_POST['add_tk']) {
                $ten = $_POST['ten'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                add_tk($pass, $ten, $email, $diachi, $tel, $role);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_tk">';
            }

            $listtk = loadAll_taikhoan();
            include "../admin/taikhoan/add_tk.php";
            break;

        case "list_tk":
            $listtk = loadAll_taikhoan();
            include "../admin/taikhoan/list_tk.php";
            break;

        case 'sua_tk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $tk = loadone_tk($_GET['id']);
            }
            include "../admin/taikhoan/update.php";
            break;
        case "update":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten = $_POST['ten'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['diachi'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                $id = $_POST['id'];
                sua_tk($id, $pass, $ten, $email, $address, $tel, $role);
                // $_SESSION[ 'user' ] = check( $user, $pass );
                //     $thongbao = '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                //     <b>Cập nhật tài khoản thành công</b>
                //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //   </div>';
                header('Location: index.php?act=list_tk');
            }
            $listtk = loadAll_taikhoan();
            include "../admin/taikhoan/list_tk.php";
            break;

        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_tk($_GET['id']);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_tk">';
            }
            $listtk = loadAll_taikhoan();
            include "../admin/taikhoan/list_tk.php";
            break;



            //
        case "list_danhmuc":
            $listdanhmuc = loadall();
            include "../admin/danhmuc/list_danhmuc.php";
            break;

        case "themdanhmuc":
            if (isset($_POST['themmoidm']) && ($_POST['themmoidm'])) {
                $tenhanghoa = $_POST['tenhanghoa'];
                insert_danhmuc($tenhanghoa);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';
            }
            include "../admin/danhmuc/list_danhmuc.php";
            break;

        case 'xoadanhmuc':
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_danhmuc($_GET['id']);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';
            }
            $listdanhmuc = loadall();
            include "../admin/danhmuc/list_danhmuc.php";
            break;

        case 'update_dmuc':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendm = $_POST['tenhanghoa'];
                $id = $_POST['id'];
                update_danhmuc($id, $tendm);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_danhmuc">';
            }
            $listdanhmuc = loadall();
            include "../admin/danhmuc/list_danhmuc.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone($_GET['id']);
            }
            include "../admin/danhmuc/update_dmuc.php";
            break;

        case 'list_dungtich':
            $listdungtich = loadall_dungtich();
            include "../admin/danhmuc/list_dungtich.php";
            break;

        case "themdungtich":
            if (isset($_POST['themmoidungtich']) && ($_POST['themmoidungtich'])) {
                $tendungtich = $_POST['tendungtich'];
                insert_khoiluong($tendungtich);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_dungtich">';
            }
            include "../admin/danhmuc/list_dungtich.php";
            break;

        case 'update_dungtich':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tendt = $_POST['tendt'];
                $id = $_POST['id'];
                update_dungtich($id, $tendt);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_dungtich">';
            }
            $listdungtich = loadall_dungtich();
            include "../admin/danhmuc/list_dungtich.php";
            break;
        case 'suadungtich':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $kl = loadone_dungtich($_GET['id']);
            }
            include "../admin/danhmuc/update_dtich.php";
            break;
        case 'xoadungtich':
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_dungtich($_GET['id']);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_dungtich">';
            }
            $listdungtich = loadall_dungtich();
            include "../admin/danhmuc/list_dungtich.php";
            break;
            // End danh mục


            //Hàng hóa
        case "list_hanghoa":
            if (isset($_POST['timsp']) && ($_POST['timsp'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall();
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            include "../admin/sanpham/list_hanghoa.php";
            break;
        case "sua_sanpham":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadOne_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall();
            include "../admin/sanpham/update_sanpham.php";
            break;
        case "capnhatsanpham":
            if (isset($_POST['capnhatsp']) && ($_POST['capnhatsp'])) {
                $id = $_POST['id'];
                $danhmuc_sua = $_POST['danhmuc_sua'];
                $ten_sua = $_POST['ten_sua'];
                $gia_sp = $_POST['gia_sp'];
                $gia_sua = $_POST['gia_sua'];
                $hinh = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                update_sanpham($id, $danhmuc_sua, $ten_sua, $gia_sp, $gia_sua, $hinh);
                // echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
            }
            if (isset($_POST['timsp']) && ($_POST['timsp'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            $listdanhmuc = loadall();
            include "../admin/sanpham/list_hanghoa.php";
            break;

        case "xoasp":
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_sanpham($_GET['id']);
                // echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
            }
            if (isset($_POST['timsp']) && ($_POST['timsp'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listsanpham = loadAll_sanpham($kyw, $iddm);
            include "../admin/sanpham/list_hanghoa.php";
            break;

        case "add_sanpham":
            if (isset($_POST['add_sp']) && ($_POST['add_sp'])) {
                $iddm = $_POST['iddm'];
                $name = $_POST['tensp'];
                $gia_sp = $_POST['gia_sp'];
                $gia_sale = $_POST['gia_sale'];
                $hinh = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                insert_sanpham($name, $gia_sp, $gia_sale, $hinh, $iddm);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_hanghoa">';
            }
            $listdanhmuc = loadall();
            include "../admin/sanpham/add_sanpham.php";
            break;

        case "view_sanphamct":
            $listsanpham = loadAll_sanpham();
            $listsanpham_chitiet = loadOne_sanphamct_();
            include "../admin/sanpham/view_sanphamct.php";
            break;

        case "add_spchitiet":
            if (isset($_POST['Themsanphamchitiet']) && ($_POST['Themsanphamchitiet'])) {
                $id_dungtich = $_POST['id_dungtich'];
                $id_sp = $_POST['id_sp'];
                $gia_sp_chitiet = $_POST['gia_sp_chitiet'];
                insert_spchitiet($id_dungtich, $id_sp, $gia_sp_chitiet);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=view_sanphamct">';
            }
            $listsanpham = loadAll_sanpham();
            $listsanpham_chitiet = loadOne_sanphamct_();
            $listdanhmuc = loadall();
            include "../admin/sanpham/view_sanphamct.php";
            break;
        case "xoasp_ct":
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_sanpham_ct($_GET['id']);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=view_sanphamct">';
            }
            $listsanpham_chitiet = loadOne_sanphamct_();
            include "../admin/sanpham/view_sanphamct.php";
            break;


            //Hàng hóa
        case "list_donhang":
            if (isset($_POST['timkh']) && ($_POST['timkh'])) {
                $kyw = $_POST['kyw'];
                $trangthai = $_POST['trangthai'];
            } else {
                $kyw = '';
                $trangthai = 0;
            }
            $loadbill = Load_bill_admin($kyw, $trangthai);
            include "../admin/bill/list_donhang.php";
            break;
        case "chitiet_BILL":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $load_one_bill = Load_one_bill_admin($id);
                $load_one_cart = Load_one_cart_admin($id);
            }

            if (isset($_POST['trangthai'])) {
                $trangthai = $_POST['trangthai'];
                update_trangthai($id, $trangthai);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_donhang">';
            }
            if (isset($_POST['timkh']) && ($_POST['timkh'])) {
                $kyw = $_POST['kyw'];
                $trangthai = $_POST['trangthai'];
            } else {
                $kyw = '';
                $trangthai = 0;
            }
            $loadbill = Load_bill_admin($kyw, $trangthai);
            include "../admin/bill/chitiet_BILL.php";
            break;

        case 'update_bill_chitiet':
            if (isset($_POST['capnhat_billchitiet']) && ($_POST['capnhat_billchitiet'])) {
                $ten_user = $_POST['ten_user'];
                $diachi_user = $_POST['diachi_user'];
                $sdt_user = $_POST['sdt_user'];
                $email_user = $_POST['email_user'];
                $id = $_POST['id'];
                update_bill_chitiet($id, $ten_user, $diachi_user, $sdt_user, $email_user);
                // echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_donhang">';
            }
            if (isset($_POST['timkh']) && ($_POST['timkh'])) {
                $kyw = $_POST['kyw'];
                $trangthai = $_POST['trangthai'];
            } else {
                $kyw = '';
                $trangthai = 0;
            }
            $loadbill = Load_bill_admin($kyw, $trangthai);
            include "../admin/bill/list_donhang.php";
            break;

        case "list_bl":
            $list_bl = loadall_bl();
            include "../admin/binhluan/list_bl.php";
            break;
        case "list_bl_ko":
            $list_bl = loadall_bl1();
            include "../admin/binhluan/list_bl_ko.php";
            break;

        case 'update_bl':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $phanhoi = $_POST['phanhoi'];
                $id = $_POST['id'];
                update_phanhoi($id, $phanhoi);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_bl">';
            }
            $list_bl = loadall_bl();
            include "../admin/binhluan/list_bl.php";
            break;
        case 'suabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $binhluan = loadone_bl($_GET['id']);
            }
            include "../admin/binhluan/phanhoi.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_bl($_GET['id']);
                // echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_bl">';
            }
            $list_bl = loadall_bl();
            include "../admin/binhluan/list_bl.php";
            break;

            // baipost
        case "list_post":
            $list_post = load_all_post_admin();
            include "../admin/post/list_post.php";
            break;
        case 'xoapost':
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_post($_GET['id']);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_post">';
            }
            $list_post = load_all_post_admin();
            include "../admin/post/list_post.php";
            break;
        case "add_post":
            if (isset($_POST['add_post']) && ($_POST['add_post'])) {
                $name_post = $_POST['name_post'];
                $gioithieu = $_POST['gioithieu'];
                $noidung1 = $_POST['noidung1'];
                $noidung2 = $_POST['noidung2'];
                $noidung3 = $_POST['noidung3'];
                $hinh = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                insert_post($name_post, $gioithieu, $noidung1, $noidung2, $noidung3, $hinh);
                echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_post">';
            }
            $list_post = load_all_post_admin();
            include "../admin/post/add_post.php";
            break;
        case 'update_post':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name_post = $_POST['name_post'];
                $gioithieu = $_POST['gioithieu'];
                $noidung1 = $_POST['noidung1'];
                $noidung2 = $_POST['noidung2'];
                $noidung3 = $_POST['noidung3'];
                $hinh = $_FILES['anhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['anhsp']['name']);
                move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                update_post($id, $name_post, $gioithieu, $noidung1, $noidung2, $noidung3, $hinh);
                //  echo '<meta http-equiv="refresh" content="0;url=index.php?act=list_post">';
            }
            $list_post = load_all_post_admin();
            include "../admin/post/list_post.php";
            break;
        case 'suapost':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $post = loadone_post($_GET['id']);
            }
            include "../admin/post/sua_post.php";
            break;

            //tai khoan

        case "list_tk":
            include "../admin/taikhoan/list_tk.php";
            break;

            // thongke

        case 'thongke':
            $listthongke21 = loadall_thongke21();
            $listthongke22 = loadall_thongke22();
            $listthongke23 = loadall_thongke23();
            $listthongke24 = loadall_thongke24();
            $listthongke25 = loadall_thongke25();
            $thongke44 = loadall_thongke44();
            $thongke2 = loadall_thongke();
            include "../admin/thongke/tong.php";
            break;
        case 'home':
            $listthongkebieudo = loadall_thongke();
            $listbill = load_bill_new();
            $listthongke = loadall_thongke3();
            $listthongke1 = loadall_thongke4();
            $listthongke2 =  loadall_thongke5();
            $listthongke3 =  loadall_thongke6();
            include "home.php";
            break;
        default:
            $listbill = Load_bill_new();
            $listthongke = loadall_thongke3();
            $listthongke1 = loadall_thongke4();
            $listthongke2 =  loadall_thongke5();
            $listthongke3 =  loadall_thongke6();
            include "home.php";
            break;
    }
} else {
    $listthongkebieudo = loadall_thongke();
    $listbill = Load_bill_new();
    $listthongke = loadall_thongke3();
    $listthongke1 = loadall_thongke4();
    $listthongke2 =  loadall_thongke5();
    $listthongke3 =  loadall_thongke6();
    include "home.php";
}
