<?php
/**
 * Main template — blog index fallback.
 *
 * @package asigato
 */

get_header();
?>
<main class="wrap page-section post-list">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<p class="meta"><?php echo esc_html( get_the_date() ); ?></p>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo esc_html( get_the_excerpt() ); ?></p>
			</article>
		<?php endwhile; ?>
		<div class="pagination">
			<?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
		</div>
	<?php else : ?>
		<h1><?php esc_html_e( 'Niets gevonden', 'asigato' ); ?></h1>
		<p><?php esc_html_e( 'Er zijn nog geen berichten. Probeer het zoekveld, of ga terug naar de homepage.', 'asigato' ); ?></p>
		<p><a class="btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Naar de homepage', 'asigato' ); ?></a></p>
	<?php endif; ?>
</main>
<?php
get_footer();
