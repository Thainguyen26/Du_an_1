<?php 
    function insert_danhmuc($tenhanghoa){
        $sql ="insert into danhmuc(tendm) values('$tenhanghoa')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "delete from danhmuc where id=".$id;
        pdo_execute($sql);
    }

    function loadall(){
        $sql= "select * from danhmuc order by id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone($id){
        $sql = "select * from danhmuc where id=".$id;
        $dm= pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tendm){
        $sql =" update danhmuc set tendm ='".$tendm."' where id=".$id;
        pdo_execute($sql);
    }

?>