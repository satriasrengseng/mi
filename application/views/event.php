<div class="section-padding overlay-gray" data-enllax-ratio="-.3" style="background: url(<?= base_url() ?>assets/satria/images/inner-banner.jpg) center 34px no-repeat fixed; left: 0px; right: 0px;">
	<div class="container p-relative">

		<!-- Page heading -->
		<div class="page-heading"><br><br>
			<h2>Event</h2>
		</div>
		<!-- Page heading -->

		<!-- Bredrcum -->
		<div class="tc-bredcrum"><br><br>
			<ul>
				<li><a href="#">Home</a></li>
				<li class="active">Event</li>
			</ul>
		</div>
		<!-- Bredrcum -->

	</div>
</div>
<?php if ($this->initial_template == ''): ?>
	<main class="main-content section-padding white-bg">
		<div class="container">

			<!-- Main Heading -->
			<div class="event-heading">
				<h2>Upcoming <strong>Event</strong></h2>
			</div>
			<!-- Main Heading -->

			<!-- Event List View -->
			<div class="event-list-view">
				<?php 
                $i = 0;
                foreach ($datadb as $row) {
                $i++;
                if ($i % 2 == 0) { ?>
				
				<!-- Events Post -->
				<div class="post-holder">
					<div class="row no-gutters">
						
						<!-- Post Img -->
						<div class="col-lg-6 col-md-7 col-sm-12">
							<figure class="post-img">
								<img src="<?php echo base_url().'cms/'.$row['event_pict'] ?>" alt="img-01">
							</figure>
						</div>
						<!-- Post Img -->

						<!-- Post Detail -->
						<div class="col-lg-6 col-md-5 col-sm-12">
							<div class="post-detail">
                                <h3><a href="<?php echo base_url().'event/detail/'.$row['event_id'] ?>"><?php echo $row['event_title']; ?></a></h3>
								<ul class="loaction-tags">
									<li><i class="fa fa-map-marker"></i><?php echo $row['event_place'] ?></li>
									<li><i class="fa fa-clock-o"></i><?php echo $row['event_date_start'] ?> To <?php echo $row['event_date_end'] ?></li>
								</ul>
								<p><?php echo strip_tags($row['event_desc']) ?></p>
								
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
								<img src="<?php echo base_url().'cms/'.$row['event_pict'] ?>" alt="img-01">
							</figure>
						</div>
						<!-- Post Img -->

						<!-- Post Detail -->
						<div class="col-lg-6 col-md-5 col-sm-12">
							<div class="post-detail">
                                <h3><a href="<?php echo base_url().'event/detail/'.$row['event_id'] ?>"><?php echo $row['event_title']; ?></a></h3>
								<ul class="loaction-tags">
									<li><i class="fa fa-map-marker"></i><?php echo $row['event_place'] ?></li>
									<li><i class="fa fa-clock-o"></i><?php echo $row['event_date_start'] ?> To <?php echo $row['event_date_end'] ?></li>
								</ul>
								<p><?php echo strip_tags($row['event_desc']) ?></p>
							</div>
						</div>
						<!-- Post Detail -->

					</div>
				</div>
				<!-- Events Post -->
				<?php } } ?>
			</div>
			<!-- Event List View -->

		</div>
	</main>
<?php elseif($this->initial_template == 'detil'): ?>
	<!-- Main Content -->
	<main class="main-content section-padding white-bg">
		<div class="container">
			<div class="row">

				<!-- Blog Full with sidebar -->
				<div class="col-lg-8 col-md-7 col-sm-6">
					<div class="Blog-full-width">			
						<?php if (count($datadb) > 0): ?>
							<?php foreach ($datadb as $d): ?>
								<!-- Blogs Img Post -->
								<div class="full-width-post-holder">
									<div class="row">

										<!-- Post Img -->
										<div class="col-sm-12">
											<figure class="post-img">
												<img src="<?= base_url().'cms/'.$d['event_pict'] ?>" alt="img-01">
												<strong class="title-batch-left"><i class="fa fa-image"></i></strong>
											</figure>
										</div>
										<!-- Post Img -->

										<!-- Post Detail -->
										<div class="col-sm-12">
											<div class="blog-post-detail">
												<div class="center-detail-inner">
													<h3><?php echo $d['event_title'] ?></h3><br>
													<?php echo $d['event_desc'] ?>
												</div>
											</div>
										</div>
										<!-- Post Detail -->

									</div>
								</div>
								<!-- Blogs Img Post -->
							<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
				<!-- Blog Full with sidebar -->

				<!-- Aside -->
				<aside class="col-lg-4 col-md-5 col-sm-6">
					
					<!-- Aside Search Bar -->
					<div class="search-bar-holder">
						<div class="search-bar">
		                    <input type="text" class="form-control"  placeholder="Search" >
	                        <button type="submit">
	                            <span class="fa fa-paper-plane"></span>
	                        </button>  
						</div>
					</div>
					<!-- Aside Search Bar -->

					<!-- Admin Info -->
					<div class="aside-widget">
						<h3>About</h3>
						<div class="aside-admin-detail">
							<span class="admin-img"><img src="<?= base_url() ?>assets/satria/images/satria/no-images.jpeg" alt="img-01"></span>
							<p>Donec semper, ex et sollicitudin dignissim, massa quam hendrerit magna, a consequat urna lectus posuere nisl. Vivamus tincidunt sagittis massa, quis consectetur ex eleifend vitae.</p>
							<span class="arthor-name">Vantan Shon</span>
							<span class="arthor-signature">smk satria</span>
						</div>
					</div>
					<!-- Admin Info -->

					<!-- Categories -->
					<!-- <div class="aside-widget">
						<h3>Categories</h3>
						<div class="categories-list">
							<ul>
								<li><a href="#">Sports</a></li>
								<li><a href="#">School Exams</a></li>
								<li><a href="#">UNBK</a></li>
								<li><a href="#">Incentive</a></li>
								<li><a href="#">Seminars</a></li>
							</ul>
						</div>
					</div> -->
					<!-- Categories -->

					<!-- Twitter Feed -->
					<div class="aside-widget">
						<h3>Twitter Feed</h3>
						<div class="twitter-feed">
							<a class="twitter-timeline" href="https://twitter.com/smksatria1" data-tweet-limit="5"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
					<!-- Twitter Feed -->

					<!-- Instagram -->
					<div class="aside-widget">
						<h3>Instagram</h3>
						<div class="instagram">
							<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/e68a4d171dc35d65a90a83c2fadfeac9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
						</div>
					</div>
					<!-- Instagram -->

					<!-- Tags -->
					<!-- <div class="aside-widget">
						<h3>Tags</h3>
						<div class="tags-list">
							<ul>
								<li><a href="#">Sports</a></li>
								<li><a href="#">School Exams</a></li>
								<li><a href="#">UNBK</a></li>
								<li><a href="#">Incentive</a></li>
								<li><a href="#">Seminars</a></li>
							</ul>
						</div>
					</div> -->
					<!-- Tags -->

				</aside>
				<!-- Aside -->

			</div>
		</div>
	</main>
	<!-- Main Content -->
<?php endif ?>
