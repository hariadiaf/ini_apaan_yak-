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
		  					<div class="form-group pw">
		    					<input type="password" class="form-control" placeholder="Password" id="password-user" name="password">
		    					<input type="checkbox" onclick="toggleVisible()" id="toggle"/>
		    					<label for="toggle"></label>
		  					</div>
		  					<a href="#" id="forgot-password">Lupa Password?</a>
		  					<div class="text-center">
		  						<button type="submit" class="btn btn-block mx-auto">Masuk</button>
		  					</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function toggleVisible () {
				var x = document.getElementById("password-user");
				if (x.type === "password") {
			    	x.type = "text";
				} else {
			    	x.type = "password";
				}
			}
		</script>
<?php
$this->load->view('footer');
if($this->session->flashdata('message') == 'login_failed') {
	echo "<script>alert('Username/password is incorrect.');</script>";
}
?>