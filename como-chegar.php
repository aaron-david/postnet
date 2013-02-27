<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include 'head.php'; ?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38341115-6']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<title>PostNet Curitiba - Como chegar</title>
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
					<h1>Como chegar na Postnet Curitiba</h2>
				</div>
					<div class="grid_8">
						<iframe width="620" height="460" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?q=Rua+Visconde+de+Nacar,+1505&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Visc.+de+Nacar,+1505+-+Centro,+Curitiba+-+Paran%C3%A1,+80410-201&amp;gl=br&amp;t=m&amp;ll=-25.431881,-49.275999&amp;spn=0.019378,0.040298&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br />
						<small><a href="https://maps.google.com.br/maps?q=Rua+Visconde+de+Nacar,+1505&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Visc.+de+Nacar,+1505+-+Centro,+Curitiba+-+Paran%C3%A1,+80410-201&amp;gl=br&amp;t=m&amp;ll=-25.431881,-49.275999&amp;spn=0.019378,0.040298&amp;z=15&amp;iwloc=A&amp;source=embed" class="pull-left" target="_blank">Exibir mapa ampliado</a></small>
					</div>
				<div class="red_line_top grid_4">
					<h1>Escreva para nós!</h1>
					<small><em>Os campos indicados com (<b class="red">*</b>), são obrigatórios.</em></small>
					<!-- FORMULÁRIO DE CONTATO -->
					<form id="contato_form" action="enviar.php" method="post" class="row_20 gama">
						<span class=" assunto">
							<label for="select_assunto">Escolha um assunto para tratar:</label>
							<select name="select_assunto" id="select_assunto" class="input-xlarge" required>
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
			</section>
			<?php include 'footer.php'; ?>
		</article> <!-- Fim de #container -->
	</div> <!-- Fim de #main -->
</body>
</html> 
