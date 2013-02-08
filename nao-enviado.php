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
		<div id="container" class="container_12">
			<?php include 'header-destaque.php'; ?>
			<article id="nao-enviado" class="red_line_top clearfix">
				<section class="row_20 gama grid_12">
					<div class="well clearfix">
						<a href="javascript:history.back(-1)" title="Tente novamente" class="pull-right btn btn-primary">Tente novamente</a>
						<span class="grid_8 alpha">Sua mensagem não foi enviada.</span>
					</div>
				</section>
			</article>
			<?php include 'footer.php'; ?>
		</div> <!-- Fim de #container -->
	</div> <!-- Fim de #main -->
</body>
</html>