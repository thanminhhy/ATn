
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
    $query ="select * from products";
    $result = pg_query($connect,$query);
    ?>
<!doctype html>
    <html lang="en">
      <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      </head>
      <body>
        <div class="container">
            <h1 style = "text-align: center; margin-top: 10px;">ATN Management Dashboard</h1>
            <form action="login.html" method = "POST">
		<a href="login.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">View Data</a><hr>
              <button style="margin-bottom: 10px;" type="button" class="btn btn-primary btn-sm" id="logout-button" name="logout-button">Log out</button>
            </form>
            <table class="table table-striped table-primary">
                <thead>
                    <tr class="table-primary">
		    <th scope="col">PRODUCT ID</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRODUCT TYPE</th>
                    <th scope="col">PRODUCT PRICE</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            if($result > 0){
                                while ($row_data = pg_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="table-primary" ><?php echo $row_data["product_id"];?></td>
                            <td class="table-primary" ><?php echo $row_data["product_name"];?></td>
                            <td class="table-primary"> <?php echo $row_data["quantity"];?></td>
                            <td class="table-primary"><?php echo $row_data["price"];?></td>
                        </tr>
                        <?php
                                }
                            }
                            else{
                                echo "<script>alert('Fetch database fail !');</script>" . pg_errormessage($query);
                            }
                        ?>
                </tbody>
            </table>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
    </html>
