<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- Row for main content area -->


	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<header id="siteName">
      <div class="overlay">
			<h1 class="siteName"><?php the_title(); ?></h1>
      <h2 class="siteName"><?php the_content(); ?></h2>
			<?php //reverie_entry_meta(); ?>
    </div>
		</header>
    <div class="row">
    <div class="small-12 large-12 column contentSection" id="content" role="main">
			<div class="entry-content">

			</div>
    </div>
			<footer>
				<?php //wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php //the_tags(); ?></p>
			</footer>
			<?php //comments_template(); ?>
	<?php endwhile; // End the loop ?>

	</div>

<?php get_footer(); ?>
