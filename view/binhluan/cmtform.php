<?php
$idpro=$_REQUEST['idpro'];
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$listbl=loadall_binhluan($idpro);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="conten-comemt" >
    <table>
    <?php
        foreach ($listbl as $listbl){
            extract($listbl);
            echo '<li>'.$noidung.'</li>';
        }
    ?>
    </table>
    </div>
<?php
    if(isset($_SESSION['user'])){
?>
                    <div >
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input type="text" class="comment-input" name="noidung" placeholder="Nhập ý kiến của bạn">
                            <button class="submit-button" value="CMT" name="guibl">CMT</button>
                        </form>
                    </div>

               <!-- cau contro db binhluan -->
               <?php
                 if(isset($_POST['guibl'])&&($_POST['guibl'])){
                    $noidung=$_POST['noidung'];
                    $idpro=$_POST['idpro'];
                    $iduser=$_SESSION['user']['idus'];
                    $ngaycmt=date('h:i:sa d/m/Y');
                    insert_binhluan($noidung,$iduser,$idpro,$ngaycmt);
                    header("location: ".$_SERVER['HTTP_REFERER']."");
                 }
                 
               ?>
<?php }else{?>
                    <h2 style="color:red">Vui long dang nhap de cmt</h2>
  <?php }?>
</body>
</html>