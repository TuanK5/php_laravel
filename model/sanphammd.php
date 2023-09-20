<?php
    function insert_sanpham($tensp,$giasp,$hinh,$motasp,$iddm){
        $sql = "insert into sanpham(name,price,image,mota,iddm) values('$tensp','$giasp','$hinh','$motasp','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql = "delete from sanpham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_topyt(){
        $sql= "select * from sanpham where 1 order by id desc limit 0,10";
        $listsp = pdo_query($sql);
        return $listsp;
    }    
    function loadall_sanpham_home(){
        $sql= "select * from sanpham where 1 order by id desc limit 0,9";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_sanpham($kyword,$iddm){
        $sql= "select * from sanpham where 1";
        if($kyword!=""){
            $sql.=" and name like '%".$kyword."%'";
        }
        if($iddm>0){
            $sql.=" and iddm = '".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadone_sanpham_tdm($iddm){
        if($iddm>0){
            $sql = "select * from danhmuc where id=".$iddm;
            $dm = pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function loadone_sanpham_cxloai($id,$iddm){
        $sql = "select * from sanpham where iddm=".$iddm." AND id <>".$id;
        $sp =  pdo_query($sql);
        return $sp;
    }
    function update_sanpham($id,$iddm,$tensp,$giasp,$motasp,$hinh){
        if($hinh!="")
        $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$motasp."', image='".$hinh."' where id=".$id;
        else
        $sql = "update sanpham set iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$motasp."' where id=".$id;
        pdo_execute($sql);
    }
?>