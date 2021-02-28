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
            if(isset($_GET["error"]))
            {
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                }
                elseif ($_GET["error"] == "invaliduid")
                {
                    echo "<p>Enter a proper username!</p>";
                }
                elseif ($_GET["error"] == "passwordsdontmatch")
                {
                    echo "<p>Passwords doesn't match!</p>";
                }
            }
        ?>
        <?php
            $account = pg_connect("host=ec2-54-235-139-166.compute-1.amazonaws.com 
            dbname=d2aln19jkoqgc5
            port=5432
            user=dbzoashpxvqhmp
            password=1d18b71cc013c47de2c56d8e5970d0aab6ed70c04d1b2d2f6ef73ae37b9cfdb8
            sslmode=require");

            if ($account === false) {
            die("ERROR: Could not connect to the database server!");
            } else {
            echo ("Connect successfully! ");

            $uid = $_POST['UserName'];
            $password = $_POST['password'];

            $query = "SELECT * FROM user_information WHERE user_name = '$uid' AND \"password\" = '$pwd'";
            $result = pg_query($account, $query);
            $count = pg_num_rows($result);
            if ($count == 1) {
                session_start();
                $_SESSION["UserName"] = $uid;
                header('Location: ./login.php');
            } else {
                echo ("Wrong username or password. Please try again!") . pg_errormessage($query);
                header('refresh: 2; url= ./index.php');
            }
            }
        pg_close($account);

<?php
    include_once 'footer.php';
?>
