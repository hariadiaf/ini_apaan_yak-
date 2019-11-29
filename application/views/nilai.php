<?php
$this->load->view('header');
?>
	<body>
		<?php
		$this->load->view('navbar');
		?>
		<div class="container-fluid box">
			<div class="row form-box nilai-main card">
				<b class="box-title">Statistik Nilai</b>
				<div class="nilai-charts"></div>
			</div>
			<div class="row form-box nilai-detail card">
				<b class="box-title">Detail Nilai</b>
				<table>
					<tr>
						<th>Modul</th>
						<th>Asprak</th>
						<th>Tanggal</th>
						<th>Tes Awal</th>
						<th>Jurnal</th>
						<th>Tes Akhir</th>
						<th>Skill</th>
						<th>Total</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
<?php
$this->load->view('footer');
?>