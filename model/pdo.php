<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=phpthuanho;charset=utf8";// ket noi dt base theo link localhost 
    $username = 'root'; //vao db bang mk vs pass
    $password = '';
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1); // hàm lấy tất cả các biến truyền vào function
    try{
        $conn = pdo_get_connection();// bien conc gọi function conec ở trên 
        // 2 bước thực thi sql
        $stmt = $conn->prepare($sql); // chuẩn hóa câu sql đó
        $stmt->execute($sql_args); // thực thi CUD bằng funtion bên model
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
//return bill sau khi insert no tra ve cai id ( vua  co them vua co tra ve (C va R))
function pdo_execute_return_lastInsertId($sql){
    $sql_args = array_slice(func_get_args(), 1); // hàm lấy tất cả các biến truyền vào function
    try{
        $conn = pdo_get_connection();// bien conc gọi function conec ở trên 
        // 2 bước thực thi sql
        $stmt = $conn->prepare($sql); // chuẩn hóa câu sql đó
        $stmt->execute($sql_args); // thực thi CUD bằng funtion bên model
        return $conn->lastInsertId(); // renturn bill  
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1); // hàm lấy tất cả các biến truyền vào function
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args); // 3 câu lệnh này như funt CUD trên
        
        $rows = $stmt->fetchAll(); // chọn cách trả về dữ liệu READ(R) đây là là về tấtt cả
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1); // hàm lấy tất cả các biến truyền vào function
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC); // đây là trả về 1 reco(bản ghi)
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql){
    $sql_args = array_slice(func_get_args(), 1); // hàm lấy tất cả các biến truyền vào function
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC); // trả vê 1 gia tri
        return array_values($row)[0];
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}