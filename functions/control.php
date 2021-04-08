<?php
include "db.php";

if(isset($_POST['login'])){
   $get_user = $db->prepare("SELECT * FROM kullanici wHERE kul_mail=:kul_mail and 
   kul_sifre=:kul_sifre");
   $get_user->execute(array(
       'kul_mail' => $_POST['kul_mail'],
       'kul_sifre' => $_POST['kul_sifre']
   ));
   $get_user_row = $get_user->rowcount();
  if($get_user_row == 1){
      $_SESSION['kul_mail'] = $_POST['kul_mail'];
      header("Location:../index.php");
       
  }else{
      echo "bsarısız";
  }

}


?>