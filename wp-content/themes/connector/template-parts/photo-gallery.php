<?php
/*
    Template name: Фотогалерея
*/
get_header();
?>
	<div class="container">
		<div class="photo_gallery_header">
			<h1>
				<?= the_field('gallery_header'); ?>
			</h1>
		</div>
		<div class="photo_gallery_content">
		    <?php
        		the_content();
    		?>
		</div>
	</div>
<?php
get_footer();
?>