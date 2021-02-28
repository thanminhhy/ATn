<?php
    if(isset($_POST["submit"]))
    {
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];

        require_once 'dtb.inc.php';
        require_once 'functions.inc.php';
        
        if(emptyInputLogin($username, $pwd) !== false)
        {
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        loginUser($conn, $username, $pwd);
    }
    else{
        header("location: ../login.php");
        exit();
    }
# Get data by query
			$query = 'select * from test_lab6';
			$result = pg_query($pg, $query);
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
