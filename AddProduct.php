<?php
	# Heroku credential 
			$host_heroku = "ec2-18-206-84-251.compute-1.amazonaws.com";
			$db_heroku = "d8k42dnhtd0o9i";
			$user_heroku = "crmjpgdtqgprga";
			$pw_heroku = "0d86d0fb5f24be75ffb6728bb2ffaa6762b75489e8923fda3cdf71c519a99d67";
			# Create connection to Heroku Postgres
			$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
			$pg_heroku = pg_connect($conn_string);
			
			if (!$pg_heroku)
			{
				die('Error: Could not connect: ' . pg_last_error());
			}
    } else {
      $product_id = $_POST['Id'];
      $product_name = $_POST['Productname'];
      $quantity = $_POST['Quantity'];
      $price = $_POST['Price'];
    }
   $query = "INSERT INTO Products (product_id, product_name, quantity, price) 
    VALUES('$product_id', '$product_name', '$quantity', '$price');";
   $result = pg_query($pg_heroku, $query);
   if ($result) {
      echo "<script>alert('Record added succesfully!');</script>";
      header('refresh: 3; url=staff.html');
   } else {
      echo ("ERROR + $query") . pg_errormessage($query);
    }
    pg_close($pg_heroku);
?>
