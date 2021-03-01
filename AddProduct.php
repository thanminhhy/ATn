<?php
    $host = "ec2-54-235-139-166.compute-1.amazonaws.com";
    $db = "d2aln19jkoqgc5";
    $user = "dbzoashpxvqhmp";
    $pw = "1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8";

    $conn_string ="host=$host port=5432 dbname=$db user=$user password=$pw";
    $pg = pg_connect($conn_string);

    if(!$pg)
    {
        die("Connection failed: " . pg_connect_error());
    }
    } else {
      $product_id = $_POST['Id'];
      $product_name = $_POST['Productname'];
      $quantity = $_POST['Quantity'];
      $price = $_POST['Price'];
    }
   $query = "INSERT INTO Products (product_id, product_name, quantity, price) 
    VALUES('$product_id', '$product_name', '$quantity', '$price');";
   $result = pg_query($pg, $query);
   if ($result) {
      echo "<script>alert('Record added succesfully!');</script>";
      header('refresh: 3; url=staff.html');
   } else {
      echo ("ERROR + $query") . pg_errormessage($query);
    }
    pg_close($pg);
?>
