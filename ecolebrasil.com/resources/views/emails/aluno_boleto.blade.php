<!doctype html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <title></title>
  <style type="text/css">
 	body {
		width: 100%;
		margin: 0;
		padding: 0;
		-webkit-font-smoothing: antialiased;
	}
  </style>
</head>
<body style="font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;" bgcolor="#E4E6E9" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
	<div class="header">
		<div>
			<img style="width: 100%; display: block;" src="{{asset('images/manifesto-email.png')}}">
		</div>
	</div>
	<div class="row">
		<h3 align="center" style="color: gray">
			A Ecole Superieure de Relooking lhe dá as boas-vindas e deseja que o aprendizado do curso que você irá realizar contribua para qualificar a sua formação, sua atuação profissional e a sua satisfação com o trabalho. Acreditamos no <b>#serparavestir</b> e pra gente é uma honra formar profissionais que levam essa missão a diante.
		</h3>

		<h3 align="center" style="color: gray">Na semana antecede o início do curso criaremos um grupo no whats app no qual serão informados local, materiais necessários e facilidades próximas do local. Qualquer dúvida é só falar com a gente pelo nosso <b>WhatsApp 51 989535234.</b>
		</h3>
		<div class="row">
			<img style="width: 20%; margin: 0 auto; display: block; margin-top: 50px " class="img-contato" src="{{asset($card_curso)}}">
			<h4 align="center">Você se inscreveu em {{ $nome_curso }}.</h4>
			<h4 align="center">Cidade: {{ $cidade }}.</h4>
			<h4 align="center">Início: {{ $data_inicio }}.</h4>
			<h4 align="center">Link para o boleto: {{ $link_boleto }}.</h4>

			@if($modelo == 'D' || $consultoria == 3)
				<h4 align="center">Acesse o link abaixo para ter acesso ao nosso conteúdo.</h4>
				<h6 align="center">O acesso será liberado após a identificação do pagamento.</h6>
				<h4 align="center">Ecole Brasil</h4>
				<h3 align="center"><b>Suas credenciais:</b></h3>
				<h3 align="center">Login: {{ $login }}</h3>
				<h3  align="center">Senha: {{ $password }}</h3>
			@endif

		</div>
		<h1 align="center"  style="color: gray">
			Que o curso seja especial para você!
		</h3>
	</div>
	<div class="row">
	<hr style="margin-top: 50px">
		<h4 style="text-align: center; margin-top: -50px">
			@if($modelo == 'D')
				<a href="{{route('ead.login')}}">
				  <img style="width: 150px; margin: 0 auto; display: block;" src="{{asset('images/entrar.png')}}">
				</a>
			@else
				@if($consultoria == 3)
					<a href="{{route('restrito')}}">
					  <img style="width: 150px; margin: 0 auto; display: block;" src="{{asset('images/entrar.png')}}">
					</a>
				@endif
			@endif
		</h4>
	</div>
</body>
</html>