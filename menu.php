<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">AgroCulture</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li><a href="weather.html"><span class="glyphicon glyphicon-certificate"> Weather </a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
						<a href="#" class="logo">Multi-Language</a>
                        <div class="language">
							<div class="language-selected">
								pt-US
							</div>
							<ul>
								<li><a href="#" class="br">Português</a></li> <!-- pt-BR -->
								<li><a href="#" class="en">English</a></li> <!-- en-US -->
								<li><a href="#" class="es">Español</a></li> <!-- es --->
							</ul>
						</div>


					</ul>
				</nav>
			</header>

	</body>
</html>
