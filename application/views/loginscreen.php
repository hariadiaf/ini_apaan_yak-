<?php
$this->load->view('header');
?>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 left">
					<div class="left-color"></div>
				</div>
				<div class="col-6 right">
					<img src="<?php echo base_url(); ?>assets/images/iflab.png" class="iflab-logo">
					<div class="login-content">
						<h2 class="my-3">IMPULSE</h2>
						<?php 
				        echo form_open("Loginscreen/validate_data");
				        ?>
		  					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Username" id="username-user" name="username">
		  					</div>
		  					<div class="form-group">
		    					<input type="password" class="form-control" placeholder="Password" id="password-user" name="password">
		  					</div>
		  					<a href="#" id="forgot-password">Lupa Password?</a>
		  					<div class="text-center">
		  						<button type="submit" class="btn btn-block">Masuk</button>
		  					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php
$this->load->view('footer');
if($this->session->flashdata('message') == 'login_failed') {
	echo "<script>alert('Username/password is incorrect.');</script>";
}
?>