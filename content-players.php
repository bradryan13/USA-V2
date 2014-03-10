<?php
/**
 * The template used for displaying page content in page-players.php
 *
 * @package USA Wheel Chair Rugby
 */


$args = array(
  'post_type' => 'player'
);
$the_query = new WP_Query( $args ); 
?>

<ul>
<?php if( $the_query->have_posts() ): ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<li class="player row">

		<div class="name large-2 columns"><a class="<?php echo $linkClass ?>" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('small');?><?php the_title(); ?></a></td>
		<div class="position large-2 columns"><?php the_field('position'); ?></td>
		<div class="caps large-2 columns"><?php the_field('caps'); ?></td>
		<div class="age large-2 columns"><?php the_field('age'); ?></td>
		<div class="height large-2 columns"><?php the_field('height'); ?></td>
		<div class="weight large-2 columns"><?php the_field('weight'); ?></td>
		<div class="hometown large-2 columns"><?php the_field('hometown'); ?></td>


	</li>

<?php endwhile; ?>
<?php endif; ?>
</ul>
