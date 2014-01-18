<?php
/**
 * The home template file.
 * @package USA Wheel Chair Rugby
 */

get_header(); ?>

<div class="row">
	<?php if ( ! dynamic_sidebar( 'hero' ) ) : ?>
	<?php endif; ?>
</div>

<div id="primary" class="content-area row">

	<main class="large-9 columns news-area">

		<div class="widget-header row">
				<div class="inner-wrapper">

  				<div class="medium-10 columns">
		  			<h2 class="widget-title">Latest News</h2> 
				</div>

		  		<div class="medium-2 columns">
				</div>

			</div>
		</div>


		<div class="news row">

			<div class="medium-6 columns featured-post">
				<?php if ( ! dynamic_sidebar( 'main-top-left' ) ) : ?>
				<?php endif; ?>
			</div>

			<div class="medium-6 columns recent-posts">
				<?php if ( ! dynamic_sidebar( 'main-top-right' ) ) : ?>
				<?php endif; ?>
			</div>
			
		</div>

  	</main>

  		

	</div><!-- #primary -->




<?php get_footer(); ?>

<!-- @TODO -->
<script>
      $(function () { 
            var slider = $(".royalSlider").data('royalSlider');
                slider.ev.on('rsVideoPlay', function() {
                    // video start
                    $( ".rsGCaption, .bottom-mask" ).fadeOut(200);
                });
                slider.ev.on('rsVideoStop', function() {
                   $( ".rsGCaption, .bottom-mask" ).fadeIn(200);
                });
            });
 </script>