<div class="ps-breadcrumb">
	<div class="ps-container">
		<ul class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>">Home</a></li>
			<li><a href="#">Halaman</a></li>
			<li><?php echo "$rows[judul]"; ?></li>
		</ul>
	</div>
</div>
<div class="ps-page--blog">
	<div class="container">
		<div class="ps-blog--sidebar">
			<div class="ps-blog__left">
				<div class="ps-post--detail sidebar">
					<div class="ps-post__header">
						<h1><?php echo "<b>$rows[judul]</b>"; ?></h1>
						<p><?php echo "$rows[hari], ".tgl_indo($rows['tgl_posting']).", $rows[jam] WIB"; ?> / By <?php echo "$rows[nama_lengkap]"; ?></p>
					</div>
					<div class="ps-post__content">
					<?php 
						if ($rows['gambar'] !=''){ echo "<img style='width:100%' src='".base_url()."asset/foto_statis/$rows[gambar]' alt='$rows[judul]' /></a><br><br>"; }
						echo "<b>$rows[isi_halaman]</b>"; 
					?>
					</div>
				</div>
			</div>

			<div class="ps-blog__right">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>
</div>