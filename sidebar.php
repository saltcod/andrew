<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */
?>

<div id="secondary" class="widget-area" role="complementary">

   <header id="masthead">
	<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/header.jpg"></a>
   </header>


  <div id="side-links">

	  <a class="about" href="/about"></a>	

	  	 <img src="<?php echo get_template_directory_uri();?>/assets/nav-dots.png">

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	  
	 	 <img src="<?php echo get_template_directory_uri();?>/assets/nav-dots.png">

	  <a class="buy" href="/buy"></a>
	  
	  <a class="email" href="/contact"></a>

  </div>
	  
</div>