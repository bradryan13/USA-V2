<?php
/**
 * The template used for displaying page content in page-players.php
 *
 * @package USA Wheel Chair Rugby
 */
?>

<div id="playermenu">
	<ul>
			<li><a id="menu-toggle">Menu Toggle</a></li>
			<li><a><span>Bradley Ryan</span></a>
			<li><a><span>Bradley Ryan</span></a>
			<li><a><span>Bradley Ryan</span></a>
	</ul>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<h1 class="title"><?php the_title(); ?></h1>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'USAWCR' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'USAWCR' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
