
<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage" style="font-family: 'Comfortaa', cursive;">
			<header id="header" class="alt">
				<div class="logo"> <img src="images/cadie.png" style="width: 47px; height: auto;" class="d-inline-block align-top"></div>
				<a href="#menu"><span>Menu</span></a>
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Página Inicial</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="register.php">Registre-se</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="Download.html">Downloads</a></li>
				</ul>
			</nav>
			<section id="post" class="wrapper bg-img" data-bg="login.jpg">
				<div class="inner">
					<article class="box">
						<form>
							<img src="images/user1.png"  width=200 height=200>
							<img src="images/user.png"  width=200 height=200>
						</form>
						<header>
							<h2>Log-in:</h2>						
						</header>
						<div class="content" >
							<form method="post" action="processa_login.php">
									<div class="row uniform" align="center">
										
										<div class="6u$ 12u$(xsmall)" align="center">
										<input type="text" name="cnpj" id="cnpj" value="" placeholder="CNPJ"/>
										</div>
										<div class="6u$ 12u$(xsmall)">
										<input type="password" name="senha" id="senha" value="" placeholder="Senha" />
										</div>
										<div class="6u$ 12u$(medium)">
										<input type="submit" value="Enviar" class="button special">
										
									</div>
									</div>
								</form>

						</div>						
					</article>
				</div>
			</section>
			<footer id="footer">
				<div class="inner">

					<h2>Contatos</h2>
					<br>
					<br>
					<ul class="icons">
						<h4>Dúvidas</h4>
						<li><a href="https://api.whatsapp.com/send?phone=5519987317594&text=Ol%C3%A1%20tudo%20bem%3F%20Gostaria%20de%20tirar%20algumas%20d%C3%BAvidas%20sobre%20o%20CADiE" class="icon round fa-whatsapp"><span class="label">Dúvidas</span></a></li>
					</ul>
						<br>
					    <br>
					<ul class="icons">
						<h4>Suporte técnico</h4>
						<li><a href="https://api.whatsapp.com/send?phone=5519995965342&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Preciso%20de%20suporte%20t%C3%A9cnico." class="icon round fa-whatsapp"><span class="label">Suporte técnico</span></a></li>
					</ul>

				</div>
			</footer>
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>