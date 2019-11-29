<?php
$this->load->view('header');
?>
	<body>
		<?php
		$this->load->view('navbar');
		?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-8 box">
						<div class="container-fluid card">
							<b class="box-title">Update Profil</b>
							<div class="row">
								<div class="col-4">
									<img src="<?php echo base_url(); ?>assets/images/blank-profile-picture.png">
								</div>
								<div class="col-8">
									<?php 
							        echo form_open("Profile/update_data");
							        foreach ($profile as $data) {
							        ?>
					  					<div class="form-group">
					    					<label>NIM</label>
					    					<input type="text" class="form-control" id="nim-profile" name="nim" value="<?php echo $data->nim; ?>" disabled>
					    				</div>
					    				<div class="form-group">
					    					<label>NAMA LENGKAP</label>
					    					<input type="text" class="form-control" id="name-profile" name="fullname" value="<?php echo $data->fullname; ?>">
					    				</div>
					    				<div class="form-group">
					    					<label>TTL</label>
					    					<input type="text" class="form-control" id="ttl-profile" name="ttl" value="<?php echo $data->ttl; ?>">
					    				</div>
					    				<div class="form-group">
					    					<label>GENDER</label>
					    					<div class="gender-choice">
					    						<label for="male-profile">
					    							<input type="radio" class="form-control" id="male-profile" name="gender" value="L" <?php if ($data->gender == 'L') { echo 'checked'; }?>/>
					    							Laki-laki
					    						</label>
					    						<label for="female-profile">
					    							<input type="radio" class="form-control" id="female-profile" name="gender" value="P" <?php if ($data->gender == 'P') { echo 'checked'; }?>/>
					    							Perempuan
					    						</label>
					    						
					    						
					    					</div>
					    				</div>
					    				<div class="form-group">
					    					<label>ALAMAT</label>
					    					<input type="text" class="form-control" id="alamat-profile" name="address" value="<?php echo $data->address; ?>">
					    				</div>
					    				<div class="form-group">
					    					<label>EMAIL</label>
					    					<input type="text" class="form-control" id="email-profile" name="email" value="<?php echo $data->email; ?>">
					    				</div>
					  					<div class="text-center">
					  						<button type="submit" class="btn btn-block">Update</button>
					  					</div>
					  				<?php
							        }
							        ?>
				  					</form>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-4 box">
						<div class="card">
							<b class="box-title">Ubah Password</b>
							<?php 
					        echo form_open("Profile/update_password");
					        ?>
								<div class="form-group pw">
			    					<label>PASSWORD LAMA</label>
			    					<input type="password" class="form-control" id="old-pw" name="old-pw" required>
			    				</div>
			    				<div class="form-group pw">
			    					<label>PASSWORD BARU</label>
			    					<input type="password" class="form-control" id="pw-new" name="new-pw" required>
			    				</div>
			    				<div class="form-group pw">
			    					<label class="twoline">KONFIRMASI<br>PASSWORD BARU</label>
			    					<input type="password" class="form-control" id="pw-conf" required>
			    				</div>
			  					<div class="text-center">
			  						<button type="submit" class="btn btn-block">Update</button>
			  					</div>
			  				</form>
						</div>
					</div>
				</div>
			</div>
		<script type="text/javascript">
			var password = document.getElementById("pw-new")
			  , confirm_password = document.getElementById("pw-conf");

			function validatePassword(){
			  if (password.value != confirm_password.value) {
			    confirm_password.setCustomValidity("Passwords Don't Match");
			  } else {
			    confirm_password.setCustomValidity('');
			  }
			}

			password.onchange = validatePassword;
			confirm_password.onkeyup = validatePassword;
		</script>	
<?php
$this->load->view('footer');
if ($this->session->flashdata('message') == 'update_error') {
	echo "<script>alert('Something's wrong. Please try again.');</script>";
} else if ($this->session->flashdata('message') == 'update_success') {
	echo "<script>alert('Profile updated!');</script>";
} else if ($this->session->flashdata('message') == 'pw_success') {
	echo "<script>alert('Password updated!');</script>";
} else if ($this->session->flashdata('message') == 'pw_error') {
	echo "<script>alert('Password update failed!');</script>";
}
?>