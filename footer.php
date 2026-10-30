<?php
/**
 * Theme footer.
 *
 * @package asigato
 */

$status = isset( $_GET['contact'] ) ? sanitize_key( wp_unslash( $_GET['contact'] ) ) : '';
?>
<footer id="contact">
	<div class="wrap">
		<div class="foot-top">
			<div>
				<h4>a floral state of mind</h4>
				<p>Bloemen die veranderen hoe je je voelt — voor huwelijken, ruimtes, momenten en mensen.
					Vragen over een opdracht of abonnement? Stuur me gerust een berichtje.</p>
				<!-- TODO: echte Instagram / Pinterest / Threads URL's invullen. -->
				<div class="socials">
					<a href="#" aria-label="Instagram">IG</a>
					<a href="#" aria-label="Pinterest">PIN</a>
					<a href="#" aria-label="Threads">TH</a>
				</div>
			</div>
			<div>
				<h4 style="font-style:normal;font-size:14px;letter-spacing:.2em;text-transform:uppercase;color:var(--pale)">Diensten</h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'       => false,
					'menu_class'      => '',
					'fallback_cb'     => false,
					'depth'           => 1,
				) );
				?>
			</div>
			<div>
				<h4 style="font-style:normal;font-size:14px;letter-spacing:.2em;text-transform:uppercase;color:var(--pale)">Atelier</h4>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/over-mij/' ) ); ?>">Over mij</a></li>
					<li><a href="<?php echo esc_url( home_url( '/#portfolio' ); ?>">Portfolio</a></li>
					<li><a href="<?php echo esc_url( home_url( '/privacyverklaring/' ) ); ?>">Privacyverklaring</a></li>
					<li><a href="<?php echo esc_url( home_url( '/gebruiksvoorwaarden/' ) ); ?>">Gebruiksvoorwaarden</a></li>
					<li><a href="<?php echo esc_url( home_url( '/cookie-policy-eu/' ) ); ?>">Cookiebeleid</a></li>
				</ul>
			</div>
			<div>
				<h4 style="font-style:normal;font-size:14px;letter-spacing:.2em;text-transform:uppercase;color:var(--pale)">Contact</h4>
				<?php if ( 'thanks' === $status ) : ?>
					<p class="form-note">Bedankt voor je bericht! Ik neem zo snel mogelijk contact op. ✿</p>
				<?php elseif ( 'failed' === $status ) : ?>
					<p class="form-note">Er ging iets mis — controleer naam en e-mail en probeer opnieuw.</p>
				<?php endif; ?>
				<form class="foot-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="asigato_contact">
					<input type="hidden" name="asigato_nonce" value="<?php echo esc_attr( wp_create_nonce( 'asigato_contact' ) ); ?>">
					<input type="text" name="name" placeholder="Je naam" required>
					<input type="email" name="email" placeholder="Je e-mail" required>
					<textarea name="message" rows="3" placeholder="Laat een bericht achter"></textarea>
					<button type="submit">Verstuur</button>
				</form>
			</div>
		</div>
		<div class="foot-bottom">
			<span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> asigato flowers</span>
			<span>Made with 🌿 in België</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
