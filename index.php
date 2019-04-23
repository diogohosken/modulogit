<!DOCTYPE hmtl>
<html>
	<head lang="pt-br">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=0"/>
		<title>IMC</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div class="container centro">
			<form class="obj">
				<h1 >Calculo de IMC</h1>
				<div class="corpo_obj">
					Altura em metros<br>
					<input type="text" name="altura" id="altura" autofocus placeholder="ex: 1.70 metros"><br><br>

					Peso em quilos<br>
					<input type="text" name="peso" id="peso" placeholder="ex: 80 Kg"><br><br>

				</div>	
					<button id="botao" class="btn btn-success">Calcular IMC</button><br><br>
				<div id="resultado"></div>
			</form>

		</div>










		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>

	</body>
</html>
