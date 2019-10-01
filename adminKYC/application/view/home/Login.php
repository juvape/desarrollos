
<div class="container-fluid">
	<div class="container">
		<div class="formBox">
			<div class="form">
				<form id="frmlogin" method="post" name="formLogin" action="#" autocomplete="off">
					<img src="<?= URL ?>img/maaji.jpg" class="logo">
					<h2>Login</h2>
					<div class="row">
						<div class="col-sm-6">
							<div class="inputBox">
								<div class="inputText"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Email</div>
								<input type="email" name="email" id="email" class="input" onkeyup="formatoEmail()">
							</div>

							<div class="alert alert-danger alert-dismissible ocultar" id="formatoEmail" role="alert">
								<p class="centrar">
									<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
									<strong class="error">Error!</strong>&nbsp;<span class="text-format">The format of email not is valid (example@email.com)
								</p>
							</div>

						</div>

						<div class="col-sm-6">
							<div class="inputBoxPass">
								<div class="inputText"><i class="fas fa-key"></i>&nbsp;&nbsp;Password</div>
								<input type="password" name="pass" id="pass" class="input"  onkeyup="validarPass()" onkeydown="onKeyDown(event)">
							</div>
						</div>
						<div class="input-box">
							<input type="button" name="" value="Login" id="btn-login" onclick="validaCampos()">
						</div>

						<div class="alert alert-danger alert-dismissible ocultar" id="errorcredenciales" role="alert">
							<p class="centrar">
								<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;
								<strong class="error">Error!</strong>&nbsp;<span class="text-format">Incorrect Credentials
							</p>
						</div>

						<div class="alert alert-info alert-dismissible ocultar" id="carga" role="alert">
							<p class="centrar">
								<i class="fa fa-spinner fa-spin fa-2x" aria-hidden="true"></i>&nbsp;
								<strong class="info">&nbsp;<span class="text-format-info">Processing Data..!
							</p>
						</div>

						<div class="alert alert-success alert-dismissible ocultar" id="success" role="alert">
							<p class="centrar">
								<i class="fa fa-check" aria-hidden="true"></i>&nbsp;
								<strong class="success">Success!</strong>&nbsp;<span class="text-format-success">We are redirected.</span>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
