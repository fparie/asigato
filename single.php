<?php
/**
 * Single post template.
 *
 * @package asigato
 */

get_header();
?>
<main class="wrap page-section">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<p class="meta" style="font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--sage);margin-bottom:12px">
			<?php echo esc_html( get_the_date() ); ?>
		</p>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) : ?>
			<div style="margin:0 0 30px"><?php the_post_thumbnail( 'large', array( 'style' => 'border-radius:14px;width:100%;height:auto' ) ); ?></div>
		<?php endif; ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</main>
<?php
get_footer();
