	<!-- Banner Slider -->
	<div class="section-padding overlay-gray" data-enllax-ratio="-.3" style="background: url(<?= base_url() ?>assets/satria/images/inner-banner.jpg) 40% 0% no-repeat fixed;">
		<div class="container p-relative">

			<!-- Page heading --><br>
			<div class="page-heading">
				<h2>Informasi Sekolah</h2>
			</div>
			<!-- Page heading -->

			<!-- Bredrcum -->
			<div class="tc-bredcrum">
				<ul>
					<li><a href="#">Home</a></li>
					<li class="active">Informasi Sekolah</li>
				</ul>
			</div>
			<!-- Bredrcum -->

		</div>
	</div>
	<!-- Banner Slider -->
<?php if ($this->initial_template == ''): ?>
	<!-- Main Content -->
	<main class="main-content section-padding white-bg">
		<div class="container">

			<!-- Gallery Section -->
			<div class="gallery-holder gallery-v1">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<h2>Our Info <strong></strong></h2>
					</div>
					<!-- Filter Tags List -->
					<div class="filter-tags-holder">
						<ul id="tg-filterbale-nav" class="option-set">
							<li><a class="selected" data-filter="*" href="#">All</a></li>
							<?php foreach ($cat as $c): ?>
								<li><a data-filter=".<?php echo $c['info_id']; ?>" href="#"><?php echo $c['info']; ?></a></li>
							<?php endforeach ?>
							<!-- <li><a data-filter=".extra" href="#">Extrakurikuler</a></li>
							<li><a data-filter=".prestasi" href="#">Prestasi</a></li>
							<li><a data-filter="*" href="#">others</a></li> -->
						</ul>
					</div>
					<!-- Filter Tags List -->
				</div>
				<!-- Main Heading -->

				<!-- Gallery -->
				<div class="row">
					<div id="filter-masonry" class="gallery-masonry section-padding-top">	
						<?php if (count($info) > 0): ?>
							<?php foreach ($info as $i): ?>
								<!-- gallery Figure -->
								<div class="masonry-grid col-sm-6 col-xs-6 r-full-width <?php echo $i['info_kategori']; ?>">
									<div class="gallery-figure">
										<figure class="gallery-img">
											<img <?php if (substr($i['info_file'], -3) !== 'pdf') { ?>
												src="<?php echo base_url().'cms/'.$i['info_file']; ?>"
											<?php }else{ ?> src="http://localhost/smk/assets/satria/images/satria/no-images.jpeg" <?php } ?> alt="img-01">
											<figcaption class="gallery-hover">
												<div class="tc-display-table">
													<div class="tc-display-table-cell">
														<ul class="btn-list">
															<?php if ($i['info_kategori'] == 1): ?>
															<li>
																<a class="fa fa-link" href="<?php echo $i['info_link']; ?>"></a>
															</li>
															<?php endif ?>
															<li><a class="fa fa-search" href="<?php echo base_url().'cms/'.$i['info_file']; ?>" data-rel="prettyPhoto[gallery]"></a></li>
														</ul>
													</div>
												</div>
											</figcaption>
										</figure>
										<div class="gallery-figure-detail">
											<h3><a 
												<?php switch ($i['info_kategori']) {
													case 1:
														echo ' href="'.base_url().'info/lowongan/'.$i['info_id'].'"';
														break;
													case 2:
														echo ' href="'.base_url().'info/bidik/'.$i['info_id'].'"';
														break;
													case 3:
														echo ' href="'.base_url().'info/sbmptn/'.$i['info_id'].'"';
														break;
													case 4:
														echo ' href="'.base_url().'info/kelulusan/'.$i['info_id'].'"';
														break;
													case 5:
														echo ' href="'.base_url().'info/ujian/'.$i['info_id'].'"';
														break;
													
													default:
														# code...
														break;
												} ?>>
												<?php echo $i['info_title']; ?></a></h3>
											<p><?php echo $i['info_desc']; ?></p>
										</div>
									</div>
								</div>
								<!-- gallery Figure -->
							<?php endforeach; ?>
						<?php endif; ?>
						

					</div>
					<!-- <div class="view-all-btn">
						<a class="pink-btn" href="#">view all</a>
					</div> -->
				</div>
				<!-- Gallery -->
				
			</div>
			<!-- Gallery Section -->

		</div>
	</main>
	<!-- Main Content -->
<?php elseif($this->initial_template == 'lowongan'): ?>
	<main class="main-content section-padding white-bg">
		<div class="container">
			<div class="row">

				<div class="event-list-view">
				<?php 
                $i = 0;
                foreach ($info as $in) {
                    $i++;
                    if ($i % 2 == 0) { ?>
						<!-- Events Post -->
						<div class="post-holder">
							<div class="row no-gutters">
								
								<!-- Post Img -->
								<div class="col-lg-6 col-md-7 col-sm-12">
									<figure class="post-img">
										<img src="<?php echo base_url().'cms/'.$in['info_file'] ?>" alt="img-01">
									</figure>
								</div>
								<!-- Post Img -->

								<!-- Post Detail -->
								<div class="col-lg-6 col-md-5 col-sm-12">
									<div class="post-detail">
										<h3><a href="<?php echo $in['info_link'] ?>"><?php echo $in['info_title'] ?></a></h3>
										<ul class="loaction-tags">
											<li><i class="fa fa-map-marker"></i><?php echo $in['info_title'] ?></li>
											<li><i class="fa fa-clock-o"></i><?php echo $in['info_date'] ?></li>

										</ul>
										<p><?php echo $in['info_desc'] ?></p>
									</div>
								</div>
								<!-- Post Detail -->

							</div>
						</div>
						<!-- Events Post -->

					<?php }else{ ?>

						<!-- Events Post -->
						<div class="post-holder">
							<div class="row no-gutters">
								
								<!-- Post Img -->
								<div class="col-lg-6 col-md-7 col-sm-12 pull-right slider-pull-none">
									<figure class="post-img">
										<img src="<?php echo base_url().'cms/'.$in['info_file'] ?>" alt="img-02">
									</figure>
								</div>
								<!-- Post Img -->

								<!-- Post Detail -->
								<div class="col-lg-6 col-md-5 col-sm-12">
									<div class="post-detail">
										<h3><a href="<?php echo $in['info_link'] ?>"><?php echo $in['info_title'] ?></a></h3>
										<ul class="loaction-tags">
											<li><i class="fa fa-map-marker"></i><?php echo $in['info_title'] ?></li>
											<li><i class="fa fa-clock-o"></i><?php echo $in['info_date'] ?></li>

										</ul>
										<p><?php echo $in['info_desc'] ?></p>
									</div>
								</div>
								<!-- Post Detail -->

							</div>
						</div>
						<!-- Events Post -->
					<?php } }?>
				</div>

			</div>
		</div>
	</main>
<?php elseif($this->initial_template == 'bidik'): ?>
	Ini Bidik Misi
<?php elseif($this->initial_template == 'sbmptn'): ?>
	Ini SBMPTN
<?php elseif($this->initial_template == 'kelulusan'): ?>
	Ini Kelulusan
<?php elseif($this->initial_template == 'ujian'): ?>
	Ini Ujian
<?php endif ?>
