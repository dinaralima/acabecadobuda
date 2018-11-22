<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ asset('bootstrap-4/css/bootstrap.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="{{ asset('/css/novo.css') }}" rel="stylesheet">
		<title>A Cabeça do Buda - Folha de estilos</title>
	</head>
	<body>

	@include('header')
	<?php
	  if (isset($_GET['msg']) && $_GET['msg'] == 'erro') {
				$erro = "<div class=''>Usuário ou senha inválido</div><br>";
			}
	?>

<section>
  <div class="container-fluid fundoLogin">
  <div class="container">
    <div class="row">

      <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4 mt-4">
        <form action="includes/acoes.php" method="POST">
          <div class="inputUsuario">
          <label for="username">USUÁRIO</label><br>
          <input type="text" class="username" name="username" placeholder="Insira seu e-mail" required><br>
          <br>
          <label for="senha">SENHA</label><br>
          <input type="password" class="senha" name="senha" required><br>
        </div><br>
				<?php echo $erro; ?>
        <div class="botoesLogin">
          <input class="checkbox" type="checkbox" name="lembrar-dados"><i>Lembrar meus dados</i><br>
          <br>
          <button type="submit" name="acao" value="login">LOGIN</button>
        </div></form>
    </div>
  </div>

  </div>
</div>
</section>
@include("footer")
</body>
</html>
