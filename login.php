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
    include_once 'footer.php';
?>
