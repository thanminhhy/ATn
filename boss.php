
<?php
   $connect = pg_connect("host=ec2-54-235-139-166.compute-1.amazonaws.com
  dbname=d2aln19jkoqgc5
  port=5432
  user=dbzoashpxvqhmp
  password=1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8
   sslmode=require");

   if ($connect === false) {
      die("ERROR: Something went wrong with conenction!");
   }
# Get data by query
			$query = 'select * from products';
			$result = pg_query($connect, $query);
			# Display data column by column
			$i = 0;
			echo '<html><body><table><tr>';
			while ($i < pg_num_fields($result))
			{
				$fieldName = pg_field_name($result, $i);
				echo '<td>' . $fieldName . '</td>';
				$i = $i + 1;
			}
			echo '</tr>';
			# Display data row by row
			$i = 0;
			while ($row = pg_fetch_row($result)) 
			{
				echo '<tr>';
				$count = count($row);
				$y = 0;
				while ($y < $count)
				{
					$c_row = current($row);
					echo '<td>' . $c_row . '</td>';
					next($row);
					$y = $y + 1;
				}
				echo '</tr>';
				$i = $i + 1;
			}
			pg_free_result($result);

			echo '</table></body></html>';

		?> 
