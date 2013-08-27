<?php
/**
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">


	<?php
	$next_post = get_adjacent_post( false,'',true );
	if( isset($next_post->ID) ):
		$next_id = $next_post->ID;
	else:
		$next_post = new WP_Query( 'posts_per_page=1&order=ASC' );
	$next_id = $next_post->post->ID;
	endif;
	?>
	<a href="<?php echo get_permalink( $next_id ); ?>">
		<?php echo get_the_post_thumbnail(); ?>
	</a>


 		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'waterstreet' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->


<div id="footer">
	<div id="spacer">
	</div>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1><span class="source"><?php the_category(); ?></span>				  
	</header><!-- .entry-header -->

</div>