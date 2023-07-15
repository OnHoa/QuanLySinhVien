<?php
  $ht = $_POST['hoten'];
  $masv = $_POST['masv'];
  $lop = $_POST['lop'];

  require_once 'connect.php';

  $themsql = "INSERT INTO sinhvien (masv, hoten, lop) VALUES ('$masv', '$ht', '$lop')";

//   echo $themsql;
//   exit;

  if (mysqli_query($conn, $themsql)) {
    header("Location: View.php");

  } 


 
?>