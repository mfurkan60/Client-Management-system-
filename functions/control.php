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

 

if (isset($_POST['add_project'])){
     
    $projeekle=$db->prepare("INSERT INTO proje SET
    proje_baslik=:baslik,
    proje_detay=:detay,
    proje_teslim_tarihi=:teslim_tarihi,
    proje_durum=:durum,
    proje_aciliyet=:aciliyet
    ");

   $ekleme=$projeekle->execute(array(
    'baslik' => $_POST['proje_baslik'],
    'detay' => $_POST['proje_detay'],
    'teslim_tarihi' => $_POST['proje_teslim_tarihi'],
    'durum' => $_POST['proje_durum'],
    'aciliyet' => $_POST['proje_aciliyet']
  ));
  if($add_project){
    header("location:../index.php");
}
else{
    echo "bir hata var";
}
}

?>


