<body>
	<?php $this->load->view('common/navBar'); ?>

	<div class="container">
		<div class="login-form">
			<form action="<?= base_url() ?>login/getUser" method="POST">
				<fieldset>
					<legend class="text-center mb-4"> Sign in to MyApp </legend>
					<div class="form-group">
						<label class="sr-only" for="username"> Username </label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<span><i class="fas fa-user"></i></span>
								</div>
							</div>
							<input type="text" class="form-control" name="username" id="username" placeholder="Username">
						</div>
					</div>

					<div class="form-group">
						<label class="sr-only" for="password"> Password </label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"> 
									<span><i class="fas fa-key"></i></span>
								</div>
							</div>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
					</div>

					<!-- Flash Data - Error message -->
					<?php if($this->session->flashdata('errorLogin')): ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<span class="msg-text">
								<?= $this->session->flashdata('errorLogin') ?>
							</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif; ?>

					<button type="submit" class="btn btn-primary btn-block"> Login </button>

					<div class="d-flex justify-content-between rememberme">
						<div class="custom-control custom-checkbox ">
							<input type="checkbox" class="custom-control-input" name="rememberme" id="rememberme">
							<label class="custom-control-label" for="rememberme"> Remember Me </label>
						</div>

						<a href="#"> Forgot your password? </a>
					</div>
				</fieldset>
			</form>

			<div class="msg-new-account">
				<hr>
				<span> Don't have an account? <a href="<?= base_url() ?>registration"> Sign Up </a></span>
			</div>
		</div>
	</div>

</body>
</html>