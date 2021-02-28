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
		<?php
		if ( !function_exists('section-one') || !dynamic_sidebar('section-one') ) { ?>
		<div class="scallop-up"></div>
		<div id="homepage1">
    <div class="row" >
    <div class="small-12 large-12 column contentSection" id="content" role="main">
			<div class="entry-content">

				  <?php dynamic_sidebar( 'section-one' ); ?>

			</div>
    </div>
		</div>

		</div>
		<div class="scallop-down"></div>
		<?php } ?>
		<?php
		if ( !function_exists('section-two') || !dynamic_sidebar('section-two') ) { ?>
		<div id="homepage2">
    <div class="row" >
    <div class="small-12 large-12 column contentSection" id="content" role="main">
			<div class="entry-content">

				  <?php dynamic_sidebar( 'section-two' ); ?>

			</div>
    </div>
		</div>

		</div>
		<?php } ?>
		<?php
		if ( !function_exists('section-three') || !dynamic_sidebar('section-three') ) { ?>
		<div class="scallop-up-hp3"></div>
		<div id="homepage3">
		<div class="pg3overlay">
		<div class="row" >
		<div class="small-12 large-12 column contentSection" id="content" role="main">
			<div class="entry-content">

					<?php dynamic_sidebar( 'section-three' ); ?>

			</div>
		</div>
		</div>

		</div>
		</div>
		<div class="scallop-down-hp3"></div>
		<?php } ?>
		<div class="row">
			<footer>
				<?php //wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php //the_tags(); ?></p>
			</footer>
			<?php //comments_template(); ?>
	<?php endwhile; // End the loop ?>
</div>


<?php get_footer(); ?>
