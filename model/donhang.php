<?php

function bill_insert_id($madh,$iduser,$hoten,$diachi,$sodienthoai,$email,$total,$ghichu,$pttt) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('d/m/Y h:i A');
    $sql = "insert into bill(madh,id_user,bill_name,bill_diachi,bill_phone,bill_email,ngaydathang,total,ghichu,pttt) values(?,?,?,?,?,?,?,?,?,?)";
    return pdo_execute_id($sql,$madh,$iduser,$hoten,$diachi,$sodienthoai,$email,$date,$total,$ghichu,$pttt);
}


function insert_cart($masp,$anhsp,$tensp,$giasp,$soluong,$thanhtien,$id_bill) {
    $sql = "insert into cart(id_pro,img,name,giasp,soluong,thanhtien,id_bill) values(?,?,?,?,?,?,?)";
    pdo_execute($sql,$masp,$anhsp,$tensp,$giasp,$soluong,$thanhtien,$id_bill);
}

function Load_bill($id_bill){
    $sql = "SELECT bill.*, taikhoan.pass
     FROM bill join taikhoan on bill.id_user = taikhoan.id where bill.id=".$id_bill;
    $bill=pdo_query_one($sql);
    return $bill;

}
function Load_bill_admin($kyw,$trangthai){
    $sql = "SELECT bill.*, taikhoan.user, taikhoan.ten, taikhoan.pass
    FROM bill join taikhoan on bill.id_user = taikhoan.id where 1";
    if($kyw!=''){
        $sql.=" and madh like '%".$kyw."%'";
    }
    if($trangthai>0){
        $sql.=" and trangthai like '".$trangthai."'";
    }
    $sql.=" order by id desc";
    $bill=pdo_query($sql);
    return $bill;

}
function Load_bill_new(){
    $sql = "SELECT * FROM bill WHERE trangthai = 0 order by id desc";
    $bill=pdo_query($sql);
    return $bill;

}
function Load_one_bill_admin($id){
    $sql = "SELECT * FROM bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;

}

function Load_one_cart_admin($id){
    $sql = "SELECT * from cart where id_bill=".$id;
    $cart=pdo_query($sql);
    return $cart;

}
function Loadcart($id_bill){
    $sql = "SELECT * from cart where id_bill=".$id_bill;
    $cart=pdo_query($sql);
    return $cart;
}



function update_trangthai($id,$trangthai){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaygiaohang = date('d/m/Y h:i A');
    $sql ="update bill set trangthai ='".$trangthai."', ngaygiaohang = '".$ngaygiaohang."' where id=".$id;
    pdo_execute($sql);
}
// function update_trangthai($id, $trangthai) {
//     $ngaygiaohang = date('Y-m-d H:i:s'); // Lấy ngày giờ hiện tại
//     $sql = "UPDATE bill SET trangthai = :trangthai, ngaygiaohang = :ngaygiaohang WHERE id = :id";
    
//     $params = array(
//         ':trangthai' => $trangthai,
//         ':ngaygiaohang' => $ngaygiaohang,
//         ':id' => $id
//     );
    
//     pdo_execute($sql, $params);
// }

function Load_bill_home($id_user){
    $sql = "SELECT * from bill where trangthai IN (0, 1, 2) and id_user=".$id_user." order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function Load_bill_home_lich_su($id_user){
    $sql = "SELECT * from bill where trangthai IN (3, 4) and id_user=".$id_user." order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}

function loadchitietone_bill($id){
    $sql = "SELECT * FROM bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadchitietone_cart($id){
    $sql = "SELECT * from cart where id_bill=".$id;
    $cart=pdo_query($sql);
    return $cart;
}
function update_bill_home($id){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaygiaohang = date('d/m/Y h:i A');
    $sql ="UPDATE bill SET trangthai='4', ngaygiaohang = '".$ngaygiaohang."' WHERE id=".$id;
    pdo_execute($sql);
}
function update_thanhconghang($id){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngaygiaohang = date('d/m/Y h:i A');
    $sql ="UPDATE bill SET trangthai='3', ngaygiaohang = '".$ngaygiaohang."' WHERE id=".$id;
    pdo_execute($sql);
}

function listcountoo(){
    $sql ="SELECT danhmuc.*, COUNT(sanpham.id) as countsp FROM sanpham LEFT JOIN danhmuc ON danhmuc.id =sanpham.iddm GROUP BY danhmuc.tendm";
    $cart=pdo_query($sql);
    return $cart;
}
function listcount(){
    $sql ="SELECT danhmuc.*, COUNT(sanpham.id) as countsp FROM sanpham LEFT JOIN danhmuc ON danhmuc.id =sanpham.iddm";
    $cart=pdo_query($sql);
    return $cart;
}

function update_bill_chitiet($id,$ten_user,$diachi_user,$sdt_user,$email_user){
    $sql =" UPDATE bill set bill_name ='".$ten_user."', 
    bill_diachi ='".$diachi_user."',
    bill_phone ='".$sdt_user."',
    bill_email ='".$email_user."' where id=".$id;
    pdo_execute($sql);
}
function loaddanhmuc($id){
    $sql = "SELECT sanpham.*, danhmuc.tendm as tendm
    FROM `sanpham` left join danhmuc on sanpham.iddm = danhmuc.id WHERE iddm =".$id;
    $cart=pdo_query($sql);
    return $cart;
}
function loadtendm($id){
    $sql = "SELECT * FROM `danhmuc` WHERE id =".$id;
    $cart=pdo_query_one($sql);
    return $cart;
}


function load_giasp1(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price <= 300000";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp2(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price BETWEEN 300000 AND 500000 ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp3(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price BETWEEN 500000 AND 700000
    ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp4(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price BETWEEN 700000 AND 1000000
    ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp5(){
    $sql ="SELECT sanpham.*
    FROM `sanpham`
    LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm
    WHERE sanpham.price >= 1000000 ORDER BY sanpham.price DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp6(){
    $sql ="SELECT *
    FROM `sanpham` ORDER BY id DESC";
    $cart=pdo_query($sql);
    return $cart;
}
function load_giasp7(){
    $sql ="SELECT *
    FROM `sanpham` ORDER BY id ASC";
    $cart=pdo_query($sql);
    return $cart;
}


//thongke
function loadall_thongke(){
    $sql = "select danhmuc.id as madm,danhmuc.tendm as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice
    from sanpham left join danhmuc on danhmuc.id=sanpham.iddm
    group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke2(){
    $sql = "select count(bill.id) as coutdh, sum(bill.total) as couttt from bill ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke21(){
    $sql = "select count(id) as coutdh from bill  where trangthai = 0";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke22(){
    $sql = "select count(id) as coutdh from bill  where trangthai = 1";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke23(){
    $sql = "select count(id) as coutdh from bill  where trangthai = 2";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke24(){
    $sql = "select count(id) as coutdh from bill  where trangthai = 3";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke25(){
    $sql = "select count(id) as coutdh from bill  where trangthai = 4";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_thongke3(){
    $sql = "select count(sanpham.id) as tsp from sanpham ";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_thongke4(){
    $sql = "select count(danhmuc.id) as tdm from danhmuc ";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadall_thongke5(){
    $sql = "select count(bill.id) as tdh from bill ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke6(){
    $sql = "select count(taikhoan.id) as ttk from taikhoan";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke44(){
    $sql = "SELECT name, SUM(soluong) AS soluong, SUM(thanhtien) AS total_revenue
    FROM cart
    GROUP BY name
    ORDER BY soluong DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>