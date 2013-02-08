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
			<section id="pg_contato" class="red_line_top clearfix">
				<div class="grid_6">
					<h1>Fale conosco, estamos sempre ao seu dispor</h2>
					<h3>Solicite orçamento ou tire suas dúvidas por aqui</h3>
					<small><em>Os campos indicados com (<b class="red">*</b>), são obrigatórios.</em></small>
					<!-- FORMULÁRIO DE CONTATO -->
					<form id="contato_form" action="enviar.php" method="post" class="row_20 gama">
						<span class="row_10 assunto">
							<label for="select_assunto">Escolha um assunto para tratar:</label>
							<select name="select_assunto" id="select_assunto" required>
								<option value="">Selecione um assunto</option>
								<option value="orcamento">Orçamanto</option>
								<option value="pedido">Pedido</option>
								<option value="outro">Outro</option>
							</select> <b class="red">*</b>
						</span>
						<span class="row_10 nome">
							<label for="nome_completo">Nome completo</label>
							<input class="input-xlarge" type="text" name="nome_completo" id="nome_completo" title="Digite seu nome completo" placeholder="" required /> <b class="red">*</b>
						</span>
						<span class="row_10 telefone">
							<label for="telefone">Telefone</label>
							<input class="input-xlarge" type="tel" name="telefone" id="telefone" title="Digite seu telefone" placeholder="(00) 0000-0000" /> 
						</span>
						<span class="row_10 nome">
							<label for="email">E-mail</label>
							<input class="input-xlarge" type="email" name="email" id="email" title="Digite seu e-mail" placeholder="" required /> <b class="red">*</b>
						</span>
						<span class="row_10 mensagem">
							<label for="mensagem">Mensagem:</label>
							<textarea class="input-xlarge" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" required></textarea> <b class="red">*</b>
						</span>
						<span class="row_10 enviar">
							<input type="submit" class="btn btn-primary input-xlarge row_10 gama" value="Enviar" />
						</span>
					</form>
					<!-- FIM DO FORMULÁRIO DE CONTATO -->
				</div>
				<div class="grid_6">
					
				</div>
			</section>
			<?php include 'footer.php'; ?>
		</article> <!-- Fim de #container -->
	</div> <!-- Fim de #main -->
</body>
</html> 
