<?php get_header(); ?>

<section class="search-page">
	<div class="container">
		<div class="search-header">
			<h1 class="search-title">
				<!-- 		  <?= __('Результаты поиска', 'connector'); ?> -->
				<?= pll__('Результаты поиска'); ?>
			</h1>

			<p>
				<?= pll__('По запросу'); ?>:
				<span><?= esc_html(get_search_query()); ?></span>
			</p>
			<!-- 	  	<?php custom_breadcrumbs(); ?> -->
		</div>

		<?php if (have_posts()): ?>
			<div class="row-container">
				<div class="row">
					<?php while (have_posts()):
						the_post(); ?>

						<div class="col-12 p-2">
							<article class="search-card h-100">
								<!--<a href="<?php the_permalink(); ?>" class="search-card-image">
					<?php if (has_post_thumbnail()): ?>
					  <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
					<?php else: ?>
					  <img src="<?= get_template_directory_uri(); ?>/assets/images/no-image.jpg" class="img-fluid" alt="">
					<?php endif; ?>
				  </a> -->

								<div class="search-card-content">
									<h3>
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>

									<p><?= wp_trim_words(get_the_excerpt(), 20); ?></p>

									<a href="<?php the_permalink(); ?>" class="search-read-more">
										<?= pll__('Подробнее'); ?>
									</a>
								</div>
							</article>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="search-pagination">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else: ?>
			<div class="search-empty text-center py-5">
				<h2><?= __('Ничего не найдено', 'connector'); ?></h2>
				<p><?= __('По вашему запросу ничего не найдено.', 'connector'); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>