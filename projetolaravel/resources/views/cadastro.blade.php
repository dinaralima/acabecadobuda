<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="{{ asset('/css/novo.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/cadastro.css') }}" rel="stylesheet">
		<title>A Cabeça do Buda - Folha de estilos</title>
	</head>
	<body>
    @include('header')

<section class="container-fluid fundoLogin">
	  <div class="container">
	    <div class="row">
      <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-4 col-xl-6 mt-4">
				<form class="needs-validation" action="includes/acoes.php" method="post" novalidate>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="registroNome">Nome</label>
				      <input type="text" class="form-control" id="registroNome" name="nome" placeholder="Informe seu nome completo" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
						<div class="form-group col-md-6">
				      <label for="registroEmail">E-mail</label>
				      <input type="email" class="form-control" id="registroEmail" name="email" placeholder="E-mail" required>
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
				    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
						<div class="invalid-feedback">
							campo obrigatório
						</div>
				  </div>
				  <div class="form-group">
				    <label for="complemento">Complemento</label>
				    <input type="text" class="form-control" id="inputAddress2" name="complemento" placeholder="Complemento">
						<div class="invalid-feedback">
							campo obrigatório
						</div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="cidade">Cidade</label>
				      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="estado">Estado</label>
				      <select id="estado" class="form-control" name="estado" required>
				        <option selected>Escolha...</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
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
				      <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
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

@include('footer')

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
		</script>

		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js></script>
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
