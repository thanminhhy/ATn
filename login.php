<?php
    include_once 'header.php';
?>
		<section class="login-form">
        <h2 style="margin-left: 30px;">Log In</h2>
        <div class="container">
            <div class="login-form">
                <form action="login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="UserName...">
                    <input type="password" name="pwd" placeholder="PassWord...">
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
        </section>
        <?php
          $username = $_POST["uid"];
          $pwd = $_POST["pwd"];
	    if($username == 'staff' $$ $pwd =='12345')
	    {
		    header("location: ../staff.php");
	    }
	    elseif ($username == 'boss' $$ $pwd =='090512345')
	    {	
		    header("location: ../boss.php");
	    }
	    else{
		    echo"incorrect username and password"
			    exit();
	    }
            if(isset($_GET["error"]))
            {
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                }
            }
        ?>
<?php
    include_once 'footer.php';
?>
