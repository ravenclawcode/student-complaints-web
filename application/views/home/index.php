<nav class="navbar navbar-transparent navbar-top" role="navigation">
		<div class="container">
		
			<div class="navbar-header">
				<button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<a href="#home">
			
					<div class="logo-container">
					<div class="logo">
							<img src="<?= base_url('assets2'); ?>/img/ung.png" alt="UNIVERSITAS NEGERI GORONTALO">
						</div>
						<div class="text">
						 UNIVERSITAS NEGERI GORONTALO
						</div>
					</div>
				
				</a>
			</div>
			<div class="collapse navbar-collapse" id="example">

				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#home" class="page-scroll">
							<i class="fa fa-home"></i>
							Beranda
						</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">
							<i class="fa fa-info-circle"></i>
							Tentang
						</a>
					</li>
					<li>
						<a href="<?= base_url('Auth'); ?>">
							<i class="fa fa-sign-in"></i>
							Masuk
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="wrapper">
		<div class="parallax filter-gradient blue" data-color="blue">
			<div class="container">
				<div class="row">
					<div class="col-md-7  hidden-xs">
						<div class="parallax-image">
							<img src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/animasinew.png" />
						</div>
					</div>
					<div class="col-md-5">
						<div class="description text-center">
			  
							<h2>Selamat Datang</h2>
							<h3>di Website Pusat pelayanan & Pengaduan siswa </h3>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="section section-no-padding page-scroll" id="about">
			<div class="parallax filter-gradient blue" data-color="blue">
				<div class="parallax-background">
					<img class="parallax-background-image flipped" src="<?= base_url('assets2'); ?>/img/showcases/showcase-2/bg4.jpg">
				</div>
				<div class="info">
					<h1>Tentang</h1>
					<p>website pengaduan siswa memiliki bertujuan untuk memberikan sarana bagi siswa untuk melaporkan masalah atau permasalahan yang mereka hadapi di lingkungan sekolah kepada pihak yang berwenang. Tujuan lainnya adalah untuk meningkatkan transparansi dan aksesibilitas dalam penanganan masalah-masalah yang dihadapi siswa. Dengan adanya platform pengaduan ini, diharapkan masalah-masalah tersebut bisa cepat diidentifikasi dan diatasi, serta membantu meningkatkan kualitas lingkungan belajar siswa.</p>
				</div>
			</div>
		</section>