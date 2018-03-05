	<!-- Banner Slider -->
	<div class="section-padding overlay-gray" data-enllax-ratio="-.3" style="background: url(images/inner-banner.jpg) 40% 0% no-repeat fixed;">
		<div class="container p-relative">

			<!-- Page heading --><br>
			<div class="page-heading">
				<h2>Jadwal</h2>
			</div>
			<!-- Page heading -->

			<!-- Bredrcum -->
			<div class="tc-bredcrum">
				<ul>
					<li><a href="#">Home</a></li>
					<li class="active">Jadwal</li>
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
						<h2>Our All <strong>Schedule</strong></h2>
					</div>
					<!-- Filter Tags List -->
					<div class="filter-tags-holder">
						<ul id="tg-filterbale-nav" class="option-set">
							<li><a class="selected" data-filter="*" href="#">All</a></li>
							<?php foreach ($kelas as $t): ?>
								<li><a data-filter=".<?php echo $t['kd_jenjang_smk']; ?>" href="#"><?php echo $t['kd_jenjang_smk']; ?></a></li>
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
						<?php if (count($jadwal) > 0): ?>
							<?php foreach ($jadwal as $g): ?>
								<!-- gallery Figure -->
								<div class="masonry-grid col-sm-6 col-xs-6 r-full-width <?php echo $g['kd_jenjang_smk']; ?>">
									<div class="gallery-figure">
										<figure class="gallery-img">
											<img src="<?php echo base_url().'cms/'.$g['file']; ?>" alt="img-01">
											<figcaption class="gallery-hover">
												<div class="tc-display-table">
													<div class="tc-display-table-cell">
														<ul class="btn-list">
															<li>
																<a class="fa fa-link" 
																<?php switch ($g['tipe']) {
																	case 1:
																		echo "href='".base_url()."jurusan/'";
																		break;
																	case 2:
																		echo "href='b.com'";
																		break;
																	case 3:
																		echo "href='c.com'";
																		break;
																	case 4:
																		echo "disabled='disabled'";
																		break;
																	case 5:
																		echo "href='e.com'";
																		break;
																	
																	default:
																		# code...
																		break;
																} ?>>
																	
																</a>
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