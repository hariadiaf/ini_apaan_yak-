<?php
$this->load->view('header');
?>
	<body>
		<?php
		$this->load->view('navbar');
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-4 box">
					<div class="card form-box timer">
						<b class="box-title">Sisa Waktu Jurnal</b>
						<h1 id="countdown">90:00</h1>
						<b class="box-title">Download Soal</b>
						<a href="<?php echo base_url();?>assets/files/Soal_Jurnal_MOD1_IF4110.rar" download>
							Soal_Jurnal_MOD1_IF4110.rar
						</a>
					</div>
				</div>
				<div class="col-8 box">
					<div class="card soal-box container-fluid">
						<div class="subtitle">
							<b class="box-title mx-2 unselected">Tes Awal</b>
							<b class="box-title mx-2">Jurnal</b>
							<b class="box-title mx-2 unselected">Tes Akhir</b>
						</div>
						<div class="soal-input">
							1. Download dan kerjakan soal jurnal!<br>
							<textarea class="soal"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			var duration = 90; //duration in minutes
			var countDownDate = new Date().getTime() + (duration * 60 * 1000 + 1000);
			var x = setInterval(function() {
				var now = new Date().getTime();
				var distance = countDownDate - now;
				var minutes = Math.floor(distance / (1000 * 60));
				var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			    
				document.getElementById("countdown").innerHTML = ("0" + minutes).slice(-2) + ":" + ("0" + seconds).slice(-2);
			    
				if (distance < 0) {
					clearInterval(x);
					window.location = '<?php echo site_url('Dashboard/index');?>';
				}
			}, 1000);
		</script>
<?php
$this->load->view('footer');
?>