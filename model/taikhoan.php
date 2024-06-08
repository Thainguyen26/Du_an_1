<?php
function dangky($user,$pass,$email,$tel) {
    $sql = "insert into taikhoan(user,pass,email,tel) values(?,?,?,?)";
    pdo_execute($sql,$user,$pass,$email,$tel);
}
function dangky_id($user,$pass,$hoten,$email,$diachi,$sodienthoai) {
    $sql = "insert into taikhoan(user,pass,ten,email,diachi,tel) values(?,?,?,?,?,?)";
    return pdo_execute_id($sql,$user,$pass,$hoten,$email,$diachi,$sodienthoai);
}
function themtt($diachimuahang,$sdtmuahang) {
    $sql = "insert into taikhoanmuahang(diachimuahang,sdtmuahang) values('$diachimuahang','$sdtmuahang')";
    pdo_execute($sql);
}
function check($user,$pass) {
    $sql = "select * from  taikhoan where user='".$user."' and  pass='".$pass."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checktt($diachimuahang,$sdtmuahang) {
    $sql = "select * from  taikhoanmuahang where diachimuahang='".$diachimuahang."' and  sdtmuahang='".$sdtmuahang."' ";
    $check = pdo_query_one($sql);
    return $check;
}
function checkemail($email) {
    $sql = "select * from  taikhoan where email='".$email."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_tk($id,$user,$pass,$email,$address,$tel){
    $sql ="update taikhoan set user ='".$user."', pass ='".$pass."', email ='".$email."', diachi ='".$address."', tel ='".$tel."' where id=".$id;

pdo_execute($sql);
}


// 
function add_tk($pass,$ten,$email,$diachi,$tel,$role) {
    $sql = "INSERT INTO taikhoan(pass,user,email,diachi,tel,role)VALUES('$pass','$ten','$email','$diachi',$tel,'$role')";
    pdo_execute($sql);
}

function loadAll_taikhoan(){
    $sql = "select * from taikhoan order by id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
function delete_tk($id){
    $sql = "delete from taikhoan where id=".$id;
    pdo_execute($sql);
}
function loadone_tk($id){
    $sql = "select * from taikhoan where id=".$id;
    $tk= pdo_query_one($sql);
    return $tk;
}
function sua_tk($id,$pass,$ten,$email,$address,$tel,$role){
    $sql ="update taikhoan set  pass ='".$pass."',user ='".$ten."', email ='".$email."', diachi ='".$address."', tel ='".$tel."', role ='".$role."' where id=".$id;
    pdo_execute($sql);
}
?>