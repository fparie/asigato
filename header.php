<?php
/**
 * Theme header.
 *
 * @package asigato
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="nav">
	<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Asigato Flowers — home">
		<span class="logo-mark" aria-hidden="true">
			<svg viewBox="0 0 24 24" fill="none" stroke="#3E4A38" stroke-width="1.3">
				<path d="M12 21V11"/>
				<path d="M12 11c0-3 1.8-5 4.5-5.5C17 8 15 10 12 11z" fill="#BCD2B6" stroke="none"/>
				<path d="M12 11c0-3-1.8-5-4.5-5.5C7 8 9 10 12 11z" fill="#DCE8D6" stroke="none"/>
				<path d="M12 15c2.2-1.6 4.6-1.6 6.5 0-.4 2.3-2.6 3.7-6.5 3.5"/>
				<path d="M12 15c-2.2-1.6-4.6-1.6-6.5 0 .4 2.3 2.6 3.7 6.5 3.5"/>
			</svg>
		</span>
		<span class="logo-name">asigato<span>.flowers</span></span>
	</a>
	<?php
	wp_nav_menu( array(
		'theme_location'  => 'primary',
		'container'       => 'div',
		'container_class' => 'nav-links',
		'fallback_cb'     => 'asigato_fallback_menu',
		'depth'           => 1,
	) );
	?>
</nav>
