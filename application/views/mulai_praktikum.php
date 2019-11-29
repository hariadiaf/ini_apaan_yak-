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
					<div class="card form-box mulai-praktikum">
						<b class="box-title">Form Mulai Praktikum</b>
						<?php 
				        echo form_open("Mulai_praktikum/mulai");
				        ?>
		  					<div class="form-group">
		    					<label>Praktikum</label>
		    					<input type="text" class="form-control" id="praktikum-name" name="praktikum" value="Jaringan Komputer">
		    				</div>
		    				<div class="form-group">
		    					<label>Kelas</label>
		    					<input type="text" class="form-control" id="class-name" name="kelas" value="IF 41-10">
		    				</div>
		    				<div class="form-group">
		    					<label>Modul</label>
		    					<select class="form-control" id="module-no" name="modul">
		    						<option value="" disabled value></option>
		    						<option value="0" selected>Running Modul</option>
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
		    						<option value="" disabled value></option>
		    						<option value="a" selected>ADMIRAL (ADM)</option>
		    						<option value="b">BADAK JAWA (BDJ)</option>
		    					</select>
		    				</div>
		    				<div class="form-group">
		    					<label>Auth</label>
		    					<input type="text" class="form-control" id="auth-code" name="auth">
		  					</div>
		  					<div class="text-center">
		  						<button type="submit" class="btn btn-block">Mulai</button>
		  					</div>
						</form>
					</div>
				</div>
				<div class="col-4 box">
					<div class="card info-box container-fluid">
						<b class="box-title">Informasi, Tata Cara Praktikum</b>
						<div class="row info-num">
							<h5 class="number-circle">1</h5>
							Lengkapi Form<br>Mulai Praktikum
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