<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ATN Shop</title>
	<link rel = "stylesheet" type="text/css" href="nav-bar for ATN.css">
</head>
<body>
	<nav>
		<div>
			<ul>
				<li><a class="ATN-brand" href="#">ATN Shop</a>
          		<span class="luna-toggler-icon"></span>
          		</button></li>
				<li><a href = "Home.php">Home</a></li>
				<li><a href = "Tutorials.php">Tutorials</a></li>
				<li><a href = "About.php">About</a></li>
				<li><a href = "signup.php">Sign Up</a></li>
				<li><a href = "login.php">Login</a></li>
			</ul>
		</div>	
	</nav>
	<div class="body">
    <section class="signup-form">
        <h2 style="margin-left: 30px;">Sign Up</h2>
        <div class="container">
            <div class="signup-form">
                <form action="signup.inc.php" method="post">
                    <input type="text" name="name" placeholder="Full Name...">
                    <input type="text" name="email" placeholder="Email...">
                    <input type="text" name="uid" placeholder="UserName...">
                    <input type="password" name="pwd" placeholder="PassWord...">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </div>
        </section>
        </div>
</body>
</html>
