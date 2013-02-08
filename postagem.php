<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include 'head.php'; ?>
	<title>PostNet Curitiba</title>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div id="main" class="clearfix">
		<?php include 'header.php'; ?>
		<!-- Início de #container -->
		<article id="container" class="container_12">
			<?php include 'header-destaque.php'; ?>
			<section id="postagem" class="red_line_top clearfix">
				<div class="grid_12">
					<h1>Postagem / Remessas</h2>
					<h3>Nacionais e internacionais</h3>
					<p>Mandou, chegou! <br />Especialistas em envios. a Postnet pode te ajudar a encontrar a melhor opção de prazo e preço para suas remessas nacionais ou internacionais, tudo com segurança e agilidade. <br />
					Somos representantes das maiores empresas de logistica do mundo como Fedex, UPS, DHL e Tam Cargo com cobertura global. <br />
					Preços especiais para mala direta e cargas grandes. <br />
					<a href="contato.php" class="btn btn-primary row_20 gama">Consulte!</a></p>
				</div>
			</section>
			<?php include 'footer.php'; ?>
		</article> <!-- Fim de #container -->
	</div> <!-- Fim de #main -->
</body>
</html>