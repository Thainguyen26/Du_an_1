<?php
function load_all_post_home(){
    $sql="select * from post order by id desc limit 0,4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_post_new(){
    $sql="select * from post order by id desc limit 0,1";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_all_post_admin(){
    $sql="select * from post order by id desc ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
    
}
function loadone_post($id){
    $sql="select * from post where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_post($id,$name_post,$gioithieu,$noidung1,$noidung2,$noidung3,$hinh){
    if($hinh!==""){
        $sql ="update post set name_post ='".$name_post."', gioithieu ='".$gioithieu."', noidung1 ='".$noidung1."', noidung2 ='".$noidung2."', noidung3 ='".$noidung3."', image ='".$hinh."' where id=".$id;
    }else {
        $sql ="update post set name_post ='".$name_post."', gioithieu ='".$gioithieu."', noidung1 ='".$noidung1."', noidung2 ='".$noidung2."', noidung3 ='".$noidung3."', image ='".$hinh."'where id=".$id;
    }
    pdo_execute($sql);
}
function delete_post($id){
    $sql = "delete from post where id=".$id;
    pdo_execute($sql);
}
function insert_post($name_post,$gioithieu,$noidung1,$noidung2,$noidung3,$hinh){
    $date = date('Y-m-d');
    $sql="insert into post(name_post,gioithieu,noidung1,noidung2,noidung3,image,ngaydang)values('$name_post','$gioithieu','$noidung1','$noidung2','$noidung3','$hinh','$date')";
    pdo_execute($sql);
}

?>