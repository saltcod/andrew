<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<div id="illustrations">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="post-thumbnail"> 
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a></div>


	<?php endwhile; ?>

	
<?php else : ?>

	<?php get_template_part( 'no-results', 'archive' ); ?>

<?php endif; ?>
</div>
</div><!-- #content .site-content -->
</section><!-- #primary .content-area -->
 <?php get_footer(); ?>
 