<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/cadastro.css" rel="stylesheet">
		<title>A Cabeça do Buda - Folha de estilos</title>
	</head>
	<body>
    <header class="header_area">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand p-3" href="#">
					<img src="imagens/cabeca-buda-logo-2x.png" alt="a cabeça do buda">
				</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoMenu">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse ml-5" id="conteudoMenu">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.html">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="categoria.html">Masculino</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="categoria.html">Feminino</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="contato.html">Contato</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
			          Opções
			        </a>
			        <div class="dropdown-menu">
			          <a class="dropdown-item" href="#">Página 1</a>
			          <a class="dropdown-item" href="#">Página 2</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Página 3</a>
			        </div>
			      </li>
			    </ul>
			  </div>
				<!-- Seção da direita -->
				<div class="header-meta d-flex clearfix justify-content-end">
						<!-- Search Area -->
						<div class="search-area">
								<form action="#" method="post">
										<input type="search" name="search" id="headerSearch" placeholder="Pesquisar">
										<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
						</div>
						<!-- Área de login -->
						<div class="user-login-info">
								<a href="login.html"><i class="fas fa-user" aria-hidden="true"></i><span>Login</span></a>
						</div>
						<!-- Carrinho -->
						<div class="cart-area">
								<a href="checkout.html"><i class="fas fa-shopping-bag" aria-hidden="true"></i> <span>3</span></a>
						</div>
				</div>
			</nav>

    </header>

<section class="container-fluid fundoLogin">
	  <div class="container">
	    <div class="row">
      <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-4 col-xl-6 mt-4">
				<form class="needs-validation" action="acoes.php" method="post" novalidate>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="registroNome">Nome</label>
				      <input type="text" class="form-control" id="registroNome" name="nome" placeholder="Informe seu nome completo" value="<?php if (isset($_POST["nome"])) echo $_POST["nome"];?>" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
						<div class="form-group col-md-6">
				      <label for="registroEmail">E-mail</label>
				      <input type="email" class="form-control" id="registroEmail" name="email" placeholder="E-mail" value="<?php if (isset($_POST["email"])) echo $_POST["email"];?>" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="registroSenha">Senha</label>
				      <input type="password" class="form-control" id="registroSenha" name="senha" placeholder="Crie uma senha" required>
				    </div>
						<div class="form-group col-md-6">
				      <label for="registroSenhaConf">Confirme sua Senha</label>
				      <input type="password" class="form-control required" id="registroSenhaConf" name="confirmar-senha" placeholder="Digite novamente sua senha" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>

				  </div>
				  <div class="form-group">
				    <label for="endereco">Endereço</label>
				    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" value="<?php if (isset($_POST["endereco"])) echo $_POST["endereco"];?>" required>
						<div class="invalid-feedback">
							campo obrigatório
						</div>
				  </div>
				  <div class="form-group">
				    <label for="complemento">Complemento</label>
				    <input type="text" class="form-control" id="inputAddress2" name="complemento" placeholder="Complemento" value="<?php if (isset($_POST["complemento"])) echo $_POST["complemento"];?>">
						<div class="invalid-feedback">
							campo obrigatório
						</div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="cidade">Cidade</label>
				      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php if (isset($_POST["cidade"])) echo $_POST["cidade"];?>">
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="estado">Estado</label>
				      <select id="estado" class="form-control" name="estado" required>
				        <option selected>Escolha...</option>
								<option value="AC" <?php if (isset($_POST["estado"]) && $_POST["estado"] == "AC" ) echo "selected";?>>Acre</option>
								<option value="AL"<?php if (isset($_POST["estado"]) && $_POST["estado"] == "AL" ) echo "selected";?>>Alagoas</option>
								<option value="AP"<?php if (isset($_POST["estado"]) && $_POST["estado"] == "AP" ) echo "selected";?>>Amapá</option>
								<option value="AM"<?php if (isset($_POST["estado"]) && $_POST["estado"] == "AM" ) echo "selected";?>>Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
				      </select>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="cep">Cep</label>
				      <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?php if (isset($_POST["cep"])) echo $_POST["cep"];?>" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="checktermos" name="termos" required>
				      <label class="form-check-label" for="checktermos">
								<div class="invalid-feedback">
				          campo obrigatório
				        </div>
				        Aceito os termos de uso
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary" name="acao" value="cadastro">Cadastrar</button>
				</form>
				<div class="retorno"><?php if (isset($_GET["msg"])){ echo $_GET["msg"];}?></div>
    </div>
  </div>
  </div>
</section>

<footer id="rodape" class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="d-flex mt-5 mr-5 footer">
                        <!-- Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="imagens/cabeca-buda-fundo-escuro-2x.png" alt=""></a>
                        </div>
                        <!--  Menu primário-->
                        <div class="footer_menu_loja ml-5 mt-5">
                            <ul>
                                <li><a href="index.html">Loja</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="contato.html">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Menu secundário -->
                <div class="menu-secundario col-12 col-md-6">
                    <div class="">
                        <ul class="footer_menu mt-5">
                            <li><a href="#">Entrega</a></li>
                            <li><a href="#">Política de privacidade</a></li>
                            <li><a href="#">Termos de uso</a></li>
                        </ul>

						<script>
						//validacao de formulario
						(function() {
						  'use strict';
						  window.addEventListener('load', function() {
						    // Fetch all the forms we want to apply custom Bootstrap validation styles to
						    var forms = document.getElementsByClassName('needs-validation');
						    // Loop over them and prevent submission
						    var validation = Array.prototype.filter.call(forms, function(form) {
						      form.addEventListener('submit', function(event) {
						        if (form.checkValidity() === false) {
						          event.preventDefault();
						          event.stopPropagation();
						        }
						        form.classList.add('was-validated');
						      }, false);
						    });
						  }, false);
						})();
						</script></div>
                </div>
            </div>

          <div class="col-md-12 text-center direitos mt-5 pb-4">
              <p class="direitos">Copyright © Todos os direitos reservados | feito por budinhas</p>
        	</div>
    </footer>

		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="bootstrap-4/js/bootstrap.min.js"></script>
		<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>
