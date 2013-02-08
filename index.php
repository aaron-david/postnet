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
			<div id="bracos" class="red_line_top clearfix">
				<div class="grid_4">
					<h1>Escritório / Papelaria</h2>
					<h3>Mala direta, cópias, encardenação</h3>
					<p>Aqui você encontra um ambiente profissional para trabalhar com tranquilidade, computadores com acesso a internet e outros serviços. Também temos produtos de papelaria.</p>
					<a href="escritorio.php" class="btn btn-primary" title="Escritório / Papelaria">Ver mais</a>
				</div>
				<div class="grid_4">
						<h1>Postagem / Remessas</h2>
						<h3>Nacionais e internacionais</h3>
					<p>Especialistas em envios, a Postnet pode te ajudar a encontrar a melhor opção de prazo e preço para suas remessas nacionais ou internacionais, tudo com segurança e agilidade.</p>
					<a href="postagem.php" class="btn btn-primary" title="Postagem / Remessas">Ver mais</a>
				</div>
				<div class="grid_4">
					<h1>Gráfica / Design Gráfico</h2>
					<h3>Cartões de visita, folders, criação</h3>
					<p>Na Postnet você pode contar com equipamentos de qualidade e com uma equipe especializada em produção gráfica  pronta para te ajudar e te indicar o melhor processo gráfico para seu trabalho.</p>
					<a href="grafica.php" class="btn btn-primary" title="Impressão / Design Gráfico">Ver mais</a>
				</div>
			</div>
			<div id="servicos" class="grid_8 red_line_top">
				<h1>Conheça nossos serviços</h1>
				<h3>Tudo o que você precisa e muito mais</h3>
				<ul id="lista_servicos" class="clearfix">
					<li>Cópias e impressões</li>
					<li>Design Gráfico</li>
					<li>Carimbos</li>
					<li>Encardenamentos</li>
					<li>Criação</li>
					<li>Banners</li>
					<li>Digitalização</li>
					<li>Cartões de visita</li>
					<li>Fax</li>
					<li>Acabamentos diversos</li>
					<li>Papéis especiais</li>
					<li>Flyers</li>
					<li>Convites</li>
					<li>Remessas</li>
					<li>Fachadas</li>
					<li>Crachás</li>
					<li>Adesivos</li>
					<li>Internet</li>
				</ul>
			</div>
			<div id="fale_com" class="grid_4 red_line_top">
				<h1>Fale com a PostNet</h1>
				<h3>Por telefone, e-mail ou pessoalmente</h3>
				<a href="contato.php" title="Escreva para nós" class="button escreva">Escreva para nós</a>
				<a href="contato.php" title="Ligue para nós" class="button ligue">Ligue para (41) 3044 2728</a>
				<a href="como_chegar.php" title="Veja como chegar" class="button como_chegar">Veja como chegar</a>
			</div>
			<?php include 'footer.php'; ?>
		</div> <!-- Fim de #container -->
	</div> <!-- Fim de #main -->
</body>
</html> 