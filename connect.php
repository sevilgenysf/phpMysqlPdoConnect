<?php 
  try {
    $db=new PDO("mysql:host=localhost;dbname=kurs;charset=utf8",'root','');
    //echo "Veri Tabanı bağlantısı başarılı";
  }catch(PDOExpception $e) {
    echo $e ->getMessage("başarısız");
  }
?>