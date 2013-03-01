<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include 'head.php'; ?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38341115-5']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<title>PostNet Curitiba - Fale conosco</title>
</head>
<body>
	<?php include 'before-content.php';?>
	<div id="main" class="clearfix">
		<?php include 'header.php'; ?>
		<!-- Início de #container -->
		<article id="container" class="container_12">
			<?php include 'header-destaque.php'; ?>			
			<section class="red_line_top clearfix">
				<div class="grid_12 row_10 beta">
					<small class="pull-right"><em>Os campos indicados com (<b class="red">*</b>), são obrigatórios.</em></small>
					<h1>Fale conosco, estamos sempre ao seu dispor</h2>
					<h3>Solicite orçamento ou tire suas dúvidas por aqui</h3>
				</div>
				<div class="grid_6 light_gray_line_top">
					<!-- FORMULÁRIO DE CONTATO -->
					<form id="contato_form" action="envia.php" method="post" class="row_10 gama">
						<span class="assunto">
							<label for="select_assunto">Escolha um assunto para tratar:</label>
							<select name="select_assunto" id="select_assunto" class="input-xlarge" autofocus required>
								<option value="">Selecione um assunto</option>
								<option value="orcamento">Orçamento</option>
								<option value="pedido">Pedido</option>
								<option value="duvida">Dúvida</option>
								<option value="outro">Outro</option>
							</select> <b class="red">*</b>
						</span>
						<span class=" nome">
							<label for="nome_completo">Nome completo:</label>
							<input class="input-xlarge" type="text" name="nome_completo" id="nome_completo" title="Digite seu nome completo" placeholder="" required /> <b class="red">*</b>
						</span>
						<span class=" telefone">
							<label for="telefone">Telefone:</label>
							<input class="input-xlarge" type="tel" name="telefone" id="telefone" title="Digite seu telefone" placeholder="" /> 
						</span>
						<span class=" email">
							<label for="email">E-mail:</label>
							<input class="input-xlarge" type="email" name="email" id="email" title="Digite seu e-mail" placeholder="" required /> <b class="red">*</b>
						</span>
						<span class=" mensagem">
							<label for="mensagem">Mensagem:</label>
							<textarea class="input-xlarge" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" required></textarea> <b class="red">*</b>
						</span>
						<span class="row enviar">
							<input type="submit" class="btn btn-primary input-xlarge row_10 gama" value="Enviar mensagem" />
						</span>
					</form>
					<!-- FIM DO FORMULÁRIO DE CONTATO -->
				</div>
				<div id="contato_box" class="bg light_gray_line_top grid_6">
					<a class="row_10 link_icon" href="sobre-nos.php"><i class="icon_doc"></i>Sobre a Postnet Curitiba</a>
					<a class="row_10 link_icon" href="como-chegar.php"><i class="icon_mundo"></i>Como chegar?</a>
					<a class="row_10 link_icon" href="https://www.facebook.com/postnet.curitiba" target="_blank"><i class="icon_facebook"></i>Curta nossa página no Facebook</a>
				</div>
			</section>
			<?php include 'footer.php'; ?>
		</article> <!-- Fim de #container -->
	</div> <!-- Fim de #main -->
</body>
</html> 
