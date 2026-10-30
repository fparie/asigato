<?php
/**
 * Static page template.
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
		<h1><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages();
			?>
		</div>
	<?php endwhile; ?>
</main>
<?php
get_footer();
