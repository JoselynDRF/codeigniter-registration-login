<body>
	<?php $this->load->view('common/navBar'); ?>

	<div class="container">
		<div class="login-form">
			<form>
				<fieldset>
					<legend class="text-center mb-4"> Create Account </legend>
					<div class="form-group">
						<label class="sr-only" for="username"> Username </label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<span><i class="fas fa-user"></i></span>
								</div>
							</div>
							<input type="text" class="form-control" id="username" placeholder="Username">
						</div>
          </div>
          
          <div class="form-group">
						<label class="sr-only" for="email"> Email Address </label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<span><i class="fas fa-user"></i></span>
								</div>
							</div>
							<input type="text" class="form-control" id="email" placeholder="Email Address">
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
							<input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <small id="msgPassword" class="form-text text-muted"> 
              Use at least one letter, one numeral, and seven characters.
            </small>
          </div>
          
          <div class="form-group">
						<label class="sr-only" for="confirmPassword"> Confirm Password </label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text"> 
									<span><i class="fas fa-key"></i></span>
								</div>
							</div>
							<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
            </div>
					</div>

					<button type="submit" class="btn btn-primary btn-block"> Sign Up </button>

				</fieldset>
			</form>

			<div class="msg-privacy">
				<span> By clicking Sign Up button, you agree to our 
          <a href="#">Terms and Conditions</a>, and
          <a href="#">Privacy Policy</a>.
        </span>
			</div>

			<div class="msg-login">
				<hr>
				<span> Already have an account? <a href="<?= base_url() ?>"> Sign In </a></span>
			</div>
		</div>
	</div>

</body>
</html>