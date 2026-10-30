<?php
/**
 * Asigato Flowers theme functions.
 *
 * @package asigato
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ASIGATO_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	// Pages need excerpts: the front-page service cards use them.
	add_post_type_support( 'page', 'excerpt' );

	register_nav_menus( array(
		'primary' => __( 'Hoofdmenu', 'asigato' ),
	) );
} );

/**
 * Styles & scripts.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'asigato-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400&family=Inter:wght@400;600&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'asigato-style', get_stylesheet_uri(), array( 'asigato-fonts' ), ASIGATO_VERSION );
	wp_enqueue_script( 'asigato-site', get_template_directory_uri() . '/js/site.js', array(), ASIGATO_VERSION, array( 'in_footer' => true, 'strategy' => 'defer' ) );
} );

/**
 * Fallback primary menu (used until a menu is assigned in Appearance → Menus).
 */
function asigato_fallback_menu() {
	$items = array(
		array( 'Diensten', home_url( '/#diensten' ), false ),
		array( 'Ikebana', home_url( '/ikebana/' ), false ),
		array( 'Portfolio', home_url( '/#portfolio' ), false ),
		array( 'Abonnementen', home_url( '/abonnementen/' ), false ),
		array( 'Boek een gesprek', home_url( '/#contact' ), true ),
	);
	echo '<div class="nav-links">';
	foreach ( $items as $item ) {
		printf(
			'<a class="%s" href="%s">%s</a>',
			$item[2] ? 'btn' : '',
			esc_url( $item[1] ),
			esc_html( $item[0] )
		);
	}
	echo '</div>';
}

/**
 * Contact form handler (footer form). Sends to the site admin email.
 */
add_action( 'admin_post_nopriv_asigato_contact', 'asigato_handle_contact' );
add_action( 'admin_post_asigato_contact', 'asigato_handle_contact' );
function asigato_handle_contact() {
	$back = wp_get_referer() ? wp_get_referer() : home_url( '/' );

	if ( ! isset( $_POST['asigato_nonce'] ) || ! wp_verify_nonce( sanitize_key( wp_unslash( $_POST['asigato_nonce'] ) ), 'asigato_contact' ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'failed', $back . '#contact' ) );
		exit;
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( ! $name || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'contact', 'failed', $back . '#contact' ) );
		exit;
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( '[%s] Nieuw contactformulier — %s', wp_specialchars_decode( get_bloginfo( 'name' ) ), $name );
	$body    = sprintf( "Naam: %s
E-mail: %s

Bericht:
%s", $name, $email, $message );
	wp_mail( $to, $subject, $body, array( 'Reply-To: ' . $email ) );

	wp_safe_redirect( add_query_arg( 'contact', 'thanks', $back . '#contact' ) );
	exit;
}
