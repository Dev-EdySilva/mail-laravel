<!DOCTYPE html>
<html>
<head>
	<title>Deixe sua mensagem!</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</head>
<body>




	<div class="container">
	
	

		<form method="post" action="/send">
		
			<h2>Contato</h2>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="col-md-12">
				<div class="row">
					<label>Nome completo:</label>
					<input type="text" name="name" class="form-control">
				</div>
			</div>

			<div class="col-md-12">
				<div class="row">
					<label>E-mail:</label>
					<input type="text" name="email" class="form-control">
				</div>
			</div>

			<div class="col-md-12">
				<div class="row">
					<label>Mensagem:</label>
					<textarea class="form-control" name="message"></textarea>
				</div>
			</div>

			<div style="width: 100%; padding-top: 20px; margin-top: 20px;">
				<button class="btn btn-primary">Enviar</button>
			</div>

			@if(isset($sended))

			<br>
			<div class="alert alert-success">
				<p>Sua mensagem foi enviada com <strong>sucesso</strong></p>
			</div>

			@endif


		</form>


	</div>

	

</body>
</html>