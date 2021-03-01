
<?php
   $connect = pg_connect("host=ec2-54-235-139-166.compute-1.amazonaws.com
  dbname=d2aln19jkoqgc5
  port=5432
  user=dbzoashpxvqhmp
  password=1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8
   sslmode=require");

   $query = "select product_id, product_name, quantity, price from products ;";
$result = pg_query($con, $query);
$resultCheck = pg_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATN Boss - View Shop Data</title>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="boss.css">
</head>

<body id="bd-view-page">
  <div class="form-title">
    <h1 style="font-weight: 700;">ATN BOSS - VIEW SHOP DATA </h1>
  </div>
  <div class="container">
    <div class="col" style="padding-top:50px;">
        <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($resultCheck > 0) {
            echo "<script>alert('Connect successfully!');</script>";
            while ($row = pg_fetch_assoc($result)) {
          ?>
              <tr>
                <td><?php echo $row['product_id']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['product_amount']; ?></td>
                <td><?php echo $row['product_price']; ?></td>
              </tr>
          <?php
            }
          } else {
            echo "<script>alert('Connect fail!');</script>" . pg_errormessage($query);
          }
          ?>
        </tbody>
        </table>
      <a href="./login.html">
        <h3> LOG OUT </h3>
      </a>
    </div>
</body>

</html>
