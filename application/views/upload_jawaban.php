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
					<div class="card form-box mulai-praktikum container-fluid">
						<b class="box-title">Form Upload Jawaban</b>
						<?php 
				        echo form_open("Loginscreen/validate_data");
				        ?>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
			    					<label>Praktikum</label>
			    					<input type="text" class="form-control" id="praktikum-name" name="praktikum">
			    				</div>
			    				<div class="form-group">
			    					<label>Kelas</label>
			    					<input type="text" class="form-control" id="class-name" name="kelas">
			    				</div>
			    				<div class="form-group">
			    					<label>Modul</label>
			    					<select class="form-control" id="module-no" name="modul">
			    						<option value="" disabled selected value></option>
			    						<option value="0">Running Modul</option>
			    						<?php
			    						for ($x = 1; $x <= 10; $x++) {
			    							echo '<option value="'.$x.'">Modul '.$x.'</option>';
			    						}
			    						?>
			    					</select>
			    				</div>
			    				<div class="form-group">
			    					<label>Asprak</label>
			    					<select class="form-control" id="asprak-name" name="asprak">
			    						<option value="" disabled selected value></option>
			    						<option value="a">ADMIRAL (ADM)</option>
			    						<option value="b">BADAK JAWA (BDJ)</option>
			    					</select>
			    				</div>
			    				<div class="form-group">
			    					<label>Auth</label>
			    					<input type="text" class="form-control" id="auth-code" name="auth">
			  					</div>
			  					<div class="upload <?php if($this->session->flashdata('message') == 'upload_success') {echo "uploaded";}?>">
									<?php
									if($this->session->flashdata('message') == 'upload_success') {
										echo "Anda sudah upload jawaban";
									} else {
										echo "Anda belum upload jawaban";
									}
									?>
								</div>
							</div>	
							<div class="col-6">
								<div class="form-group">
			    					<label>Bagian</label>
			    					<select class="form-control" id="asprak-name" name="asprak">
			    						<option value="" disabled selected value></option>
			    						<option value="ta">Tes Awal</option>
			    						<option value="j">Jurnal</option>
			    						<option value="tk">Tes Akhir</option>
			    					</select>
			    				</div>
			    				<div class="form-group">
			    					<label>File</label>
			    					<input type="file" id="upload_file" class="form-control" name="upload_file" size="10">
			    				</div>
								<div class="text-center">
			  						<button type="submit" class="btn btn-block">Upload</button>
			  					</div>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 box">
					<div class="card info-box container-fluid">
						<b class="box-title">Informasi, Tata Cara Upload</b>
						<div class="row info-num">
							<h5 class="number-circle">1</h5>
							Siapkan File Hasil<br>Pengerjaanmu (.rar)
						</div>
						<div class="row info-num">
							<h5 class="number-circle">2</h5>
							Kerjakan Soal Jurnal
						</div>
						<div class="row info-num">
							<h5 class="number-circle">3</h5>
							Upload Jawaban
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
$this->load->view('footer');
?>