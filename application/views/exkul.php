<?php if( $this->initial_template == '' ): ?>
	<!-- Banner Slider -->
	<div class="section-padding overlay-gray" data-enllax-ratio="-.3" style="background: url(<?= base_url() ?>assets/satria/images/inner-banner.jpg) 40% 0% no-repeat fixed;">
		<div class="container p-relative">
			<!-- Page heading --><br>
			<div class="page-heading">
				<h2>Extrakurikuler</h2>
			</div>
			<!-- Page heading -->
			<!-- Bredrcum -->
			<div class="tc-bredcrum">
				<ul>
					<li><a href="#">Home</a></li>
					<li class="active">Extrakurikuler</li>
				</ul>
			</div>
			<!-- Bredrcum -->
		</div>
	</div>
	<!-- Banner Slider -->
	<!-- Main Content -->
	<main class="main-content section-padding white-bg">
		<div class="container">

			<!-- Gallery Section -->
			<div class="gallery-holder gallery-v1">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<!-- <h2>Our All <strong>Activities</strong></h2> -->
						<h2><?php echo $datadb['album_name']; ?></h2>
					</div>
					<!-- Filter Tags List -->
					<div class="filter-tags-holder">
						<ul id="tg-filterbale-nav" class="option-set">
							<li><a class="selected" data-filter="*" href="#">All</a></li>
							<?php foreach ($tipe as $t): ?>
								<li><a data-filter=".<?php echo $t['tipe_id']; ?>" href="#"><?php echo $t['nm_tipe']; ?></a></li>
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
						<?php if (count($osis) > 0): ?>
							<?php foreach ($osis as $g): ?>
								<!-- gallery Figure -->
								<div class="masonry-grid col-sm-6 col-xs-6 r-full-width <?php echo $g['tipe']; ?>">
									<div class="gallery-figure">
										<figure class="gallery-img">
											<img src="<?php echo base_url().'cms/'.$g['file']; ?>" alt="img-01">
											<figcaption class="gallery-hover">
												<div class="tc-display-table">
													<div class="tc-display-table-cell">
														<ul class="btn-list">
															<li>
																<a class="fa fa-link" href="<?php echo base_url().'exkul/detil/'.$g['gallery_album_id']; ?> "></a>
															</li>
															<li><a class="fa fa-search" href="<?php echo base_url().'cms/'.$g['file']; ?>" data-rel="prettyPhoto[gallery]"></a></li>
														</ul>
													</div>
												</div>
											</figcaption>
										</figure>
										<div class="gallery-figure-detail">
											<h3><a href="#"><?php echo $g['album_name']; ?></a></h3>
											<p><?php echo $g['album_description']; ?></p>
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
<?php elseif( $this->initial_template == 'detil' ): ?>
	<div class="section-padding overlay-gray" data-enllax-ratio="-.3" style="background: url(<?= base_url() ?>assets/satria/images/inner-banner.jpg) center -11px no-repeat fixed; left: 0px; right: 0px;">
		<div class="container p-relative">

			<!-- Page heading --><br>
			<div class="page-heading">
				<h2><?php echo $datadb['album_name']; ?></h2>
			</div>
			<!-- Page heading -->

			<!-- Bredrcum --><br>
			<div class="tc-bredcrum">
				<ul>
					<li><a href="#">Home</a></li>
					<li class="active"><?php echo $datadb['album_name']; ?></li>
				</ul>
			</div>
			<!-- Bredrcum -->

		</div>
	</div>
	<main class="main-content">
		
		<!-- Courses Section -->
		<section class="courses-holder section-padding white-bg">
			<div class="container">

				<!-- Main Heading -->
				<div class="main-heading-holder">
					<div class="main-heading">
						<!-- <h2>Our All <strong>Courses</strong><span>Proin elementum quam a eros faucibus</span></h2> -->
						<h2><?php echo $datadb['album_name']; ?></h2>
					</div>
				</div>
				<!-- Main Heading -->

				<!-- Services -->
				<div class="courses-column">
					<div class="row">
						<?php if ($osis): ?>
							<?php foreach ($osis as $o): ?>
							<!-- Column figure -->
							<div class="col-lg-4 col-sm-6 col-xs-6 r-full-width">
								<div class="coures-figure">
									<figure class="course-img">
										<img src="<?= base_url().'cms/'.$o['file'] ?>" alt="img-01">
										<figcaption class="gallery-hover">
											<div class="tc-display-table">
												<div class="tc-display-table-cell">
													<a class="fa fa-search" href="<?php echo base_url().'cms/'.$o['file']; ?>" data-rel="prettyPhoto[gallery]"></a>
												</div>
											</div>
										</figcaption>
									</figure>
									
								</div>
							</div>
							<!-- Column figure -->
							<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
				<!-- Services -->

			</div>
		</section>
		<!-- Courses Section -->

	</main>
<?php endif; ?>