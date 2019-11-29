<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-transparent">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="<?php echo site_url('Dashboard/index'); ?>">
				<h2>IMPULSE</h2>
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-contents">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!--Logged In-->
		<div class="collapse navbar-collapse" id="navbar-contents">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item my-auto<?php if ($filename == 'dashboard') {echo ' active';} ?>">
					<a href="<?php echo site_url('Dashboard/index');?>">
						Dasbor
					</a>
				</li>
				<li class="nav-item my-auto<?php if ($filename == 'mulai_praktikum') {echo ' active';} ?>">
					<a href="<?php echo site_url('Mulai_praktikum/index');?>">
						Mulai Praktikum
					</a>
				</li>
				<li class="nav-item my-auto<?php if ($filename == 'upload_jawaban') {echo ' active';} ?>">
					<a href="<?php echo site_url('Upload_jawaban/index');?>">
						Upload Jawaban
					</a>
				</li>
				<li class="nav-item my-auto<?php if ($filename == 'nilai') {echo ' active';} ?>">
					<a href="<?php echo site_url('Nilai/index');?>">
						Nilai
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Akun
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="<?php echo site_url('Profile/index');?>">
							Update Profile
						</a>
						<a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#logout">
							Logout
						</a>
					</div>
				</li>
			</ul>
		</div>	
	</div>
</nav>
<div id="logout" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        	<?php echo form_open('Loginscreen/logout'); ?>
            <b>Yakin mau keluar?</b>
            <div class="modal-footer">
            	<button type="submit" class="btn btn-danger">Ya</button>
                <button type="button" data-dismiss="modal" class="btn btn-primary">Batal</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>