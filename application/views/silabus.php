<div class="section-padding overlay-gray" data-enllax-ratio="-.3" style="background: url(<?= base_url() ?>assets/satria/images/inner-banner.jpg) center 34px no-repeat fixed; left: 0px; right: 0px;">
	<div class="container p-relative">

		<!-- Page heading --><br>
		<div class="page-heading">
			<h2>Silabus</h2>
		</div>
		<!-- Page heading -->

		<!-- Bredrcum -->
		<div class="tc-bredcrum">
			<ul>
				<li><a href="#">Home</a></li>
				<li class="active">Silabus</li>
			</ul>
		</div>
		<!-- Bredrcum -->

	</div>
</div>
<main class="main-content section-padding-top white-bg">
	<div class="container">

		<!-- Cart table -->
		<div class="cart-table-holder">
			<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Kelas I</th>
						<th>Kelas II</th>
						<th>Kelas III</th>
            <th>Kelas IV</th>
						<th>Kelas V</th>
						<th>Kelas VI</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($silabus) > 0): ?>
						<?php foreach ($silabus as $s): ?>
						<tr>
					    	<td><span class="final-price"><?php echo $s['silabus_nm_pel']; ?></span></td>
					    	<td>
					    		<a class="btn btn-default btn-sm" href='<?php echo base_url().'cms/'.$s['silabus_kls_x']; ?>'>Download</a>
					    	</td>
					    	<td>
					    		<a class="btn btn-default btn-sm" href='<?php echo base_url().'cms/'.$s['silabus_kls_xi']; ?>'>Download</a>
					    	</td>
					    	<td>
					    		<a class="btn btn-default btn-sm" href='<?php echo base_url().'cms/'.$s['silabus_kls_xii']; ?>'>Download</a>
					    	</td>
					    	<td>
					    		<a class="btn btn-default btn-sm" href='<?php echo base_url().'cms/'.$s['silabus_kls_iv']; ?>'>Download</a>
					    	</td>
					    	<td>
					    		<a class="btn btn-default btn-sm" href='<?php echo base_url().'cms/'.$s['silabus_kls_v']; ?>'>Download</a>
					    	</td>
					    	<td>
					    		<a class="btn btn-default btn-sm" href='<?php echo base_url().'cms/'.$s['silabus_kls_vi']; ?>'>Download</a>
					    	</td>
					 	</tr>
						<?php endforeach ?>
					<?php endif ?>
				</tbody>
			</table>
			</div>
		</div>
		<!-- Cart table -->
	</div>
</main>
