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

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
		@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css");
	</style>

<body class="BodyCadastrarMedico">

		<section class="contentCadastrarMedico">

			<form action="" style="width: 38%; margin-right: 2rem";>

				<div class="container containerDivImagem">
					<div class="input-file-upload">
						<div class="upload-btn">
							<button class="btn" onclick="document.getElementById('upfile').click()">
								Selecionar o arquivo
							</button>
							<input type="file" id="upfile" onchange="readURL(this); ">
						</div>
						<img class="upload_img" id="file_upload">
					</div>
				</div>

			</form>


			<div class="BtnInputsCadastrar">
				<section class="InputsCadastrar">
					<section class="SessaoSectionInfosCadastrarMedico SessaoSectionInfosCadastrarMedico1">

						<h2>
							Cadastrar médico
						</h2>
						<section class="SectionInfos1 sectionInfosCadastrarMedico">
							<div class="NomeCadastrarMedico infoCadastroMedico">
								<label for="NomeCadastrarMedicoInput" class="CadastrarMedicoLabel">Nome</label>
								<input type="text" class="CadastrarMedicoInput" id="NomeCadastrarMedicoInput">
							</div>
							<div class="SobrenomeCadastrarMedico infoCadastroMedico">
								<label for="SobrenomeCadastrarMedicoInput" class="CadastrarMedicoLabel">Sobrenome</label>
								<input type="text" class="CadastrarMedicoInput" id="SobrenomeCadastrarMedicoInput">
							</div>
							<div class="CpfCadastrarMedico infoCadastroMedico">
								<label for="CpfCadastrarMedicoInput" class="CadastrarMedicoLabel">CPF</label>
								<input type="number" class="CadastrarMedicoInput" id="CpfCadastrarMedicoInput">
							</div>
						</section>

						<section class="SectionInfos2 sectionInfosCadastrarMedico">
							<div class="CrmCadastrarMedico infoCadastroMedico">
								<label for="CrmCadastrarMedicoInput" class="CadastrarMedicoLabel">CRM</label>
								<input type="text" class="CadastrarMedicoInput" id="CrmCadastrarMedicoInput">
							</div>
							<div class="EspecialidadeCadastrarMedico infoCadastroMedico">
								<label for="NomeCadastrarMedicoInput" class="CadastrarMedicoLabel">Especialidade</label>
								<select class="CadastrarMedicoInput EspecialidadeSelect" id="EspecialidadeSelect">
									<option value="Cardiologia">Cardiologia</option>
									<option value="Dermatologia">Dermatologia</option>
									<option value="Geriatria">Geriatria</option>
									<option value="Nefrologia">Nefrologia</option>
									<option value="Neurologia">Neurologia</option>
									<option value="Nutrologia">Nutrologia</option>
									<option value="Oftalmologia">Oftalmologia</option>
									<option value="Ortopedia">Ortopedia </option>
									<option value="Otorrinolaringologia">Otorrinolaringologia</option>
									<option value="Pediatria">Pediatria</option>
									<option value="Pneumologia">Pneumologia</option>
								</select>
							</div>
							<div class="NumeroCadastrarMedico infoCadastroMedico">
								<label for="NumerCadastrarMedicoInput" class="CadastrarMedicoLabel">Contato</label>
								<input type="number" class="CadastrarMedicoInput" id="NumerCadastrarMedicoInput">
							</div>
							
						</section>
					</section>

					<section class="SessaoSectionInfosCadastrarMedico SessaoSectionInfosCadastrarMedico2">

						<h2>
							Criar Login
						</h2>
						<section class="SectionInfos1 sectionInfosCadastrarMedico">
							<div class="NomeCadastrarMedico infoCadastroMedico">
								<label for="NomeCadastrarMedicoInput" class="CadastrarMedicoLabel">Login</label>
								<input type="text" class="CadastrarMedicoInput LoginMedicoInput" id="NomeCadastrarMedicoInput">
							</div>
							<div class="SobrenomeCadastrarMedico infoCadastroMedico">
								<label for="SobrenomeCadastrarMedicoInput" class="CadastrarMedicoLabel">Senha</label>
								<input type="text" class="CadastrarMedicoInput LoginMedicoInput" id="SobrenomeCadastrarMedicoInput">
							</div>

					</section>
				</section>

				<a class="btnEnviarCadastroMedico" href="dashboard.php">
					
					Cadastrar
					<script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
					<lord-icon
						style="height:20px"
						src="https://cdn.lordicon.com/iifryyua.json"
						trigger="loop"
						delay="1000"
						colors="primary:white"
						style="width:250px;height:250px">
					</lord-icon>
					
				</a>
			</div>

		</section>

</body>

<script src="assets\js\scriptCadastrarMedico.js"></script>

<?php include 'scripts.php'; ?>


</html>

