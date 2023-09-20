<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaycmt){
        $sql = "insert into binhluan(noidung,iduser,idpro,ngaycmt) values
        ('$noidung','$iduser','$idpro','$ngaycmt')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        $sql = "select * from binhluan where 1 ";
        if($idpro>0)
        $sql.="AND idpro = '".$idpro."'";
        $sql.="order by id desc";
        $listbl = pdo_query($sql);
        return $listbl;
    }
?>