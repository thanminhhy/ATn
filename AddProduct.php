<?php
   $connect = pg_connect("ec2-54-235-139-166.compute-1.amazonaws.com
  dbname=d2aln19jkoqgc5
  port=5432
  user=dbzoashpxvqhmp
  password=1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8
   sslmode=require");

   if ($connect === false) {
      die("ERROR: Something went wrong with conenction!");
    } else {
      $product_id = $_POST['Id'];
      $product_name = $_POST['Productname'];
      $quanity = $_POST['Quantity'];
      $price = $_POST['Price'];

    }
    $query = "INSERT INTO Product (product_id, product_name, quantity, price) 
    VALUES('$product_id', '$product_name', '$quantity', '$price');";
    $result = pg_query($connect, $query);
    if ($result) {
      echo "<script>alert('Record added succesfully!, Refresh');</script>";
      header('refresh: 3; url=staff.html');
    } else {
      echo ("ERROR + $query") . pg_errormessage($query);
    }
    pg_close($connect);
?>
