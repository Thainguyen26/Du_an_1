<?php
function load_binhluan($id)
{
    $sql = "
            SELECT binhluan.id, binhluan.noidung, binhluan.ngaybinhluan , binhluan.phanhoi , taikhoan.user, taikhoan.role FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_user = taikhoan.id
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id
            WHERE sanpham.id = $id;
        ";
    $result =  pdo_query($sql);
    return $result;
}
function insert_binhluan($id_sp, $id_user, $noidung)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('d/m/Y h:i A');
    $sql = "INSERT INTO `binhluan`(`noidung`, `id_user`, `id_sp`, `ngaybinhluan`) 
                VALUES ('$noidung','$id_user','$id_sp','$date')";
    pdo_execute($sql);
}

function update_phanhoi($id, $phanhoi)
{
    $sql = " update binhluan set phanhoi ='" . $phanhoi . "' where id=" . $id;
    pdo_execute($sql);
}

function delete_bl($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}
function loadone_bl($id)
{
    $sql = "select * from binhluan where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function loadall_bl()
{
    $sql = "select binhluan.*, taikhoan.user
         from binhluan join taikhoan on binhluan.id_user = taikhoan.id order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadall_bl1()
{
    $sql = "select*
         from binhluan  order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
