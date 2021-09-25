<?php 
  include 'connect.php';  
  $kaydet=$db->prepare("INSERT into usersinfo set 
    adiniz=:adiniz,
    soyadiniz=:soyadiniz,
    mailadresiniz=:mailadresiniz,
    messaj=:messaj
  ");
  $insert=$kaydet->execute(array(
    'adiniz' => $_POST['adiniz'],
    'soyadiniz' => $_POST['soyadiniz'],
    'mailadresiniz' => $_POST['mailadresiniz'],
    'messaj' => $_POST['messaj']
  ));
?>  