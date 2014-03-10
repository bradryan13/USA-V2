<?php
/*
Template Name: Players
*/

/* This example is for a child theme of Twenty Thirteen: 
*  You'll need to adapt it the HTML structure of your own theme.
*/
get_header(); ?>

<div class="row page-header">

	<div class="large-8 columns">
		<h1>Men's Eagles</h1>
	</div>

	<div class="large-4 columns">
		
	</div>
</div>



<main class="row">


	
	<aside class="large-3 medium-3 columns sidebar" data-snap-ignore="true">

		<?php if ( ! dynamic_sidebar( 'club-side-bar' ) ) : ?>
		<?php endif; ?>	

	</aside>


	<section class="content-wrapper large-9 medium-9 columns">
		<div id="content">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'players' ); ?>

			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
</main>

<script>

	$(document).ajaxComplete(function(){
		 $("#menu-toggle").click(function(){

	        if($("#playermenu").hasClass("open")) {
	            $("#playermenu").removeClass( "open" );
	        } else {
	            $("#playermenu").addClass( "open" );
	        }

    	});
	});


</script>

<?php get_footer(); ?>