<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url(); ?>asset/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-start">
			<div class="col-md-8 ftco-animate text-center text-md-left mb-5">
				<p class="breadcrumbs mb-0"><span class="mr-3"><a href="<?php echo base_url(); ?>c_pelamar/HomePelamar">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Job Posts</span></p>
				<h1 class="mb-3 bread">Apply Jobs</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="ftco-search">
				<div class="row">
					<div class="col-md-12 nav-link-wrap">
						<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Cari Pekerjaan</a>
						</div>
					</div>
					<div class="col-md-12 tab-wrap">

						<div class="tab-content p-4" id="v-pills-tabContent">

							<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
								<?php echo form_open('c_pelamar/HomePelamar/searchh') ?>
								<div class="row no-gutters">
									<div class="col-md mr-md-2">
										<div class="form-group">
											<div class="form-field">

												<input type="text" name="keyword" class="form-control" placeholder="Masukkan Pekerjaan">
											</div>
										</div>
									</div>
									<div class="col-md">
										<div class="form-group">
											<div class="form-field">
												<button type="submit" value="Search" name="search_submit" class="form-control btn btn-secondary">Search</button>
											</div>
										</div>
									</div>
								</div>
								<?php echo form_close() ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 pr-lg-5">
				<div class="row justify-content-center pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h2 class="mb-4">Daftar Pekerjaan</h2>
					</div>
				</div>
				<div class="row">
					<?php foreach ($loker as $lkr) { ?>
						<div class="col-md-12 ftco-animate">
							<div class="job-post-item py-4 d-block d-lg-flex align-items-center">
								<div class="one-third mb-4 mb-md-0">
									<div class="job-post-item-header d-flex align-items-center">
										<h2 class="mr-3 text-black"><a href="<?php echo base_url(); ?>c_pelamar/c_single_job/index/<?php echo $lkr->id_loker ?>/<?php echo $lkr->id_perusahaan ?>"><?php echo $lkr->nama_loker ?></a></h2>
										<div class="badge-wrap">
											<span class="bg-primary text-white badge py-2 px-3"><?php echo $lkr->kategori ?></span>
										</div>
									</div>
									<div class="job-post-item-body d-block d-md-flex">
										<div><span class="icon-my_location"></span> <span><?php echo $lkr->alamat_lkr ?></span></div>
									</div>
								</div>

								<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
									<a href="<?php echo base_url(); ?>c_pelamar/c_form_pelamaran/index/<?php echo $lkr->id_loker ?>" class="btn btn-primary py-2">Apply Job</a>
								</div>
							</div>
						</div><!-- end -->
					<?php } ?>
					<!--  -->
				</div>
			</div>
			<div class="col-lg-3 sidebar">
				<div class="row justify-content-center pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<span class="subheading">Recruitment agencies</span>
						<h2 class="mb-4">Top Recruitments</h2>
					</div>
				</div>
				<div class="sidebar-box ftco-animate">
					<div class="border">
						<a href="#" class="company-wrap"><img src="<?php echo base_url(); ?>/foto_perusahaan/<?= $prs[1]->logo ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#"><?= $prs[1]->nama ?></a></h3>
							<p><span class="number">500</span> <span>Open position</span></p>
						</div>
					</div>
				</div>
				<div class="sidebar-box ftco-animate">
					<div class="border">
						<a href="#" class="company-wrap"><img src="<?php echo base_url(); ?>/foto_perusahaan/<?= $prs[2]->logo ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#"><?= $prs[2]->nama ?></a></h3>
							<p><span class="number">700</span> <span>Open position</span></p>
						</div>
					</div>
				</div>
				<div class="sidebar-box ftco-animate">
					<div class="border">
						<a href="#" class="company-wrap"><img src="<?php echo base_url(); ?>/foto_perusahaan/<?= $prs[3]->logo ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#"><?= $prs[3]->nama ?></a></h3>
							<p><span class="number">700</span> <span>Open position</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>