<?php

   // $db_name = 'mysql:host=localhost;dbname=onlinecourse';
   // $user_name = 'root';
   // $user_password = '12345';

   // $conn = new PDO($db_name, $user_name, $user_password);




   try {
      $db_name = 'mysql:host=localhost;port=3307;dbname=onlinecourse';
      $user_name = 'root';
      $user_password = '12345';
  
      $conn = new PDO($db_name, $user_name, $user_password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      echo "Koneksi berhasil!";
  } catch (PDOException $e) {
      die("Koneksi gagal: " . $e->getMessage());
  }
  
  function unique_id() {
   $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
   $rand = array();
   $length = strlen($str) - 1;
   for ($i = 0; $i < 20; $i++) {
       $n = mt_rand(0, $length);
       $rand[] = $str[$n];
   }
   return implode($rand);
}

?>