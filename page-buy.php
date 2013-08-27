<?php
/**
 * The Template for displaying all single posts.
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<div class="group">

			<img src="<?php echo get_template_directory_uri();?>/assets/prints-for-sale.png" class="page-title" alt="">	

		</div>

		<div class="products">

			<div class="group">
				<img src="<?php echo get_template_directory_uri();?>/assets/random-big1.png" class="first-image" alt="">	

				<div class="buy-description">
					<img src="<?php echo get_template_directory_uri();?>/assets/random-small1.png" alt="" class="clear-right">	
					<h2>"On the Chitlin Circuit"</h2>
					<p>
						This 22” x 30” hand-pulled silkscreen <br>
						print is available in two color combos: <br>
						Blue, red black (edition of 18) <br>
						Pink, red, black (edition of 10) <br>
						<strong>$100</strong> plus shipping <br>
						Send an <a href="mailto:andrew@andrewdraws.com">e-mail</a> to purchase.
					</p> 
				</div>
			</div>	


			<div class="group">
				<img src="<?php echo get_template_directory_uri();?>/assets/Bicycle-big.jpg" alt="">	
				<div class="buy-description">
					<h2>"Le Vélo de L'amour"</h2>
					<p>This 11” x 17” offset-printed poster <br> was produced as a benefit for the Bicycle <br> Transportation Alliance by Stumptown <br>Printers in Portland, Oregon. <br><strong>$20</strong> plus shipping <br>Send an <a href="mailto:andrew@andrewdraws.com">e-mail</a> to purchase.</p><br>
					
				</div>
			</div>
		</div> <!-- .products -->

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>



