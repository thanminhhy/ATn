
<?php
   $connect = pg_connect("host=ec2-54-235-139-166.compute-1.amazonaws.com
  dbname=d2aln19jkoqgc5
  port=5432
  user=dbzoashpxvqhmp
  password=1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8
   sslmode=require");

   $query = "SELECT * FROM products"; //You don't need a ; like you do in SQL
	$result = pg_query($query);

	echo "<table>"; // start a table tag in the HTML

	while($row = pg_fetch_array($result)){   //Creates a loop to loop through results
	echo "<tr><td>" . $row['product_id'] . "</td><td>" . $row['product_name'] . "</td>td>" . $row['quantity'] . "</td>td>" . $row['price'] . "</td></tr>";  //$row['index'] the index here is a field name
	}

	echo "</table>"; //Close the table in HTML

	pg_close($connect); //Make sure to close out the database connection
