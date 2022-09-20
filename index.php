<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<meta name="keyword" content="Trevo Importadora">
	<meta name="description" content="site da Trevo Importadora">
	<meta name="author" content="Gabriel Oneda">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
	<title>Oneda444</title>

	<?php include "styles.php"; ?>

</head>
<body class="BackgroundLogin">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
		@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css");
	</style>


<section class="loginIndex">

	<section class="loginBrancoEsquerda">

		<section id="LoginBranco" class="ConteudoLoginBranco">

			<h2 class="tituloLoginIndex">Login</h2>

			<label class="tituloInput">Email</label>
			<input placeholder="Exemplo@exemplo.com" type="text" class="InputEmailIndex InputIndex">

			<label class="tituloInput">Senha</label>
			<input placeholder="Min. 8 caractéres" type="text" class="InputSenhaIndex InputIndex">

			<section class="LembrarEsqueciASenha">

				<section class="LembrarMinhaSenhaIndex">
					<input type="checkbox" name="LembrarLogin" checked class="InputCheckboxLembrarSenha">
					<label for="LembrarLogin" class="LabelLembrarLogin">Lembrar meu login</label>
				</section>

				<a href="#" class="EsqueciMinhaSenha">Esqueci minha senha</a>

			</section>

			<a class="LogarIndex" href="dashboard.php">
				<button class="BtnLogarIndex">
					Entrar
					<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
					<lord-icon
						class="iconSetaIndexLogin"
						src="https://cdn.lordicon.com/iifryyua.json"
						trigger="loop"
						delay="1000"
						colors="primary:#ffffff"
						style="height:20px">
					</lord-icon>
				</button>
			</a>

			<label class="NaoTemSenhaSeCadastre">Não tem conta? <p class="PSeCadastre" id="BtnCriarConta"> Crie uma conta</p></label>
		</section>

		<section id="CadastroBranco" class="ConteudoLoginBranco DisplayNone">

			<h2 class="tituloLoginIndex">Criar conta</h2>

			<label class="tituloInput">Nome</label>
			<input placeholder="Exemplo@exemplo.com" type="text" class="InputNomeIndexCadastro InputIndex">

			<label class="tituloInput">Email</label>
			<input placeholder="Exemplo@exemplo.com" type="text" class="InputEmailIndexCadastro InputIndex">

			<label class="tituloInput">Senha</label>
			<input placeholder="Min. 8 caractéres" type="text" class="InputSenhaIndexCadastro InputIndex">

			<a class="LogarIndex" href="dashboard.php">
				<button class="BtnLogarIndex">
					Criar conta
					<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
					<lord-icon
						class="iconSetaIndexLogin"
						src="https://cdn.lordicon.com/iifryyua.json"
						trigger="loop"
						delay="1000"
						colors="primary:#ffffff"
						style="height:20px">
					</lord-icon>
				</button>
			</a>

			<label class="NaoTemSenhaSeCadastre">Já tem uma conta? <p class="PSeCadastre" id="BtnFazerLogin"> Faça login</p></label>
		</section>

	</section>

	<section class="loginDireita">

	</section>
</section>


<script src="assets\js\scriptIndex.js"></script>

<?php include 'scripts.php'; ?>

</body>

</html>

