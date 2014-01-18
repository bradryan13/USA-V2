<?php
/**
 * @package USA Wheel Chair Rugby
 */
?>
                  	

<div class="main-container row">
	<main class="large-9 columns story">

	<?php 
	//if there's a slideshow, load the script.
	if(get_field('slideshow')) { ?>
		<script> $(document).ready(function() { 
		 $(".slideshow").royalSlider({
            imageScaleMode: "fill",
            sliderDrag: false,
            loop: true
        });
	});
	</script>
			  
<?php }; 

$youtube  = get_field('youtube_link');
$slideshow = get_field('slideshow');
$designate_hero = get_field('designate_hero');

//get YouTube Video ID
$video_id = explode("?v=", $youtube);
$video_id = $video_id[1];

//get Video title

$xmlData = simplexml_load_string(file_get_contents("http://gdata.youtube.com/feeds/api/videos/{$video_id}?fields=title"));
$youtube_title = (string)$xmlData->title;

// get YouTube thumbnail
$youtube_thumb = 'http://img.youtube.com/vi/'.$video_id.'/maxresdefault.jpg';



?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="row story-header">
		
			<?php if($youtube && $designate_hero == 'video') {
			     _e(wp_oembed_get($youtube)); 
			} 
			if ($slideshow && $designate_hero == 'slideshow' ) { ?>
				<div class="slideshow rsDefault">
		       		 <?php foreach( $slideshow as $image ): ?>
		       		 	<div><img class="rsImg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
		      	 	<?php endforeach; ?>
		      	</div>
		      	<?php }
		    if ($designate_hero == 'picture') { ?>
				<div class="picture"><?php the_post_thumbnail('main');?></div>
		    <?php } ?>

			<h1 class="title"><?php the_title(); ?></h1>
			<p class="meta">
					<?php 
					$categories = get_the_category($post->ID);
					foreach($categories as $category) :
						$children = get_categories( array ('parent' => $category->term_id ));
						$has_children = count($children);
						if ( $has_children == 0 ) {
					 	$cat = $category->name;
						}
					endforeach;
						$author = get_the_author();
						$author_link = get_the_author_meta('user_url');
						$email = get_the_author_meta('email');
						$image = get_avatar($email, 64);
						$category = get_the_category();
						$date = get_the_date('F j, Y');
						echo '<a href="'.$author_link.'">'.$image . '<span class="author">' . $author .'</span></a> on '. $date;
					?>
			</p>

		</div>

		<div class="row story-content">
		<?php if($youtube && $designate_hero != 'video') { ?>
				<div class="youtube article-aside"> 
					<a class="various fancybox fancybox.iframe" href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1"><img src="<?php echo $youtube_thumb ?>"></a>
				</div>
		<?php }
		the_content(); ?>
		</div>	

		<div class="story-footer">
			<?php edit_post_link( __( 'Edit', 'USAWCR' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

		</article>

	</main>

	<aside class="large-3 columns sidebar">
		
		<div class="news-feed">
				<?php if ( ! dynamic_sidebar( 'sidebar-right' ) ) : ?>
				<?php endif; ?>
		</div>
	
	</aside>

</div>