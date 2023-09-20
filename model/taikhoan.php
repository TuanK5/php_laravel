<?php
//trong chu khach hang
    function insert_taikhoan($nameuser,$pass,$email){
        $sql = "insert into user(nameuser,pass,email) values('$nameuser','$pass','$email')";
        pdo_execute($sql);
    }
    // function loadall_danhmuc(){
    //     $sql = "select * from danhmuc order by id desc";
    //     $listdm = pdo_query($sql);
    //     return $listdm;
    // }
    function loadone_checkuser($nameuser,$pass){
        $sql = "select * from user where nameuser='".$nameuser."' AND pass='".$pass."'";
        $tkus = pdo_query_one($sql);
        return $tkus;
    }
    function loadone_checkemail($email){
        $sql = "select * from user where email='".$email."'";
        $tkus = pdo_query_one($sql);
        return $tkus;
    }
    function update_user($idus,$nameuser,$pass,$email,$address,$phone){
        $sql = "update user set nameuser='".$nameuser."', pass='".$pass."', email='".$email."', address='".$address."',phone='".$phone."' where idus=".$idus;
        pdo_execute($sql);
    }
//tron admin
    function loadall_tkhoan(){
        $sql = "select * from user order by idus desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>