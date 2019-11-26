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
				<li class="nav-item my-auto <?php if ($filename == 'dashboard') {echo 'active';} ?>">
					<a href="<?php echo site_url('Wishlist/index');?>">
						Dasbor
					</a>
				</li>
				<li class="nav-item my-auto <?php if ($filename == 'mulai_praktikum') {echo 'active';} ?>">
					<a href="<?php echo site_url('Cart/index');?>">
						Mulai Praktikum
					</a>
				</li>
				<li class="nav-item my-auto">
					<a href="<?php echo site_url('Cart/index');?>">
						Upload Jawaban
					</a>
				</li>
				<li class="nav-item my-auto">
					<a href="<?php echo site_url('Cart/index');?>">
						Nilai
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Akun
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="<?php echo site_url('Profile/index');?>">
							Update Profile
						</a>
						<a class="dropdown-item" href="<?php echo site_url('Home/logout');?>">
							Logout
						</a>
					</div>
				</li>
			</ul>
		</div>	
	</div>
</nav>