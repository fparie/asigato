<?php
/**
 * Front page — one-page concept.
 * Service cards are generated from the existing pages by slug; if a page is
 * missing, the built-in fallback copy is shown. Page excerpts override texts.
 *
 * @package asigato
 */

get_header();
?>

<header id="top" class="hero">
	<div class="blob b1"></div>
	<div class="blob b2"></div>
	<div class="petals" id="petals" aria-hidden="true"></div>

	<div class="wrap hero-grid">
		<div>
			<div class="eyebrow reveal">Bloemenatelier · België</div>
			<h1 class="hero-tag reveal d1">Flowers that change <em class="accent">the way you feel</em></h1>
			<p class="hero-sub reveal d2">
				Van bruidsboeketten tot Japanse ikebana — Asigato Flowers vertaalt jouw moment
				in pure, seizoensgebonden bloemkunst. Met oog voor lijn, vorm en stilte.
			</p>
			<div class="hero-ctas reveal d3">
				<a class="btn-main" href="#diensten">Ontdek mijn werk
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
				</a>
				<a class="btn-ghost" href="#contact">Neem contact op</a>
			</div>
		</div>

		<div class="hero-visual reveal d2" aria-hidden="true">
			<div class="photo-card p1"><div class="photo-fill fill-a"></div></div>
			<div class="photo-card p2"><div class="photo-fill fill-b"></div></div>
			<div class="photo-note"><b>Seizoensboeket</b>lente‑editie · handgebonden</div>
		</div>
	</div>
	<div class="scroll-hint" aria-hidden="true">scroll</div>
</header>

<div class="marquee" aria-hidden="true">
	<div class="marquee-track" id="marquee">
		<span>Huwelijken</span><span>Ikebana</span><span>Workshops</span><span>Abonnementen</span><span>Freelance design</span><span>Grafstukken</span>
	</div>
</div>

<section class="intro">
	<div class="wrap intro-grid">
		<div class="intro-left">
			<div class="eyebrow reveal">Over mij</div>
			<h2 class="reveal d1">Jouw verhaal, <em>vertaald in bloemen</em></h2>
			<p class="reveal d2">
				Ik ben een bloemenkunstenaar met een passie voor vorm, kleur en sfeer. Elke creatie
				begint bij jouw moment — een huwelijk, een afscheid, een ruimte die warmer moet voelen.
			</p>
			<p class="reveal d3">
				Mijn werk beweegt tussen twee werelden: de romantiek van het seizoensboeket en de
				serene stilte van de Japanse ikebana (Sōgetsu‑school, eerste niveau behaald).
			</p>
			<div class="sig reveal d4">— asigato flowers, a floral state of mind</div>
		</div>
		<div class="intro-right reveal d2">
			<svg class="stem-svg" viewBox="0 0 340 220" aria-hidden="true">
				<path d="M20 210 C 60 170, 40 130, 90 110 S 150 80, 170 40"/>
				<path d="M90 110 C 120 100, 130 70, 160 66"/>
				<path d="M60 150 C 30 140, 20 120, 30 96 C 60 100, 75 125, 60 150 Z"/>
				<path d="M140 70 C 170 55, 200 60, 215 84 C 190 100, 155 96, 140 70 Z"/>
				<path d="M170 40 C 168 20, 180 8, 200 6 C 208 26, 196 42, 170 40 Z"/>
				<path d="M170 40 C 190 28, 215 30, 228 48 C 208 62, 182 58, 170 40 Z"/>
				<path d="M170 40 C 150 26, 126 30, 116 50 C 138 62, 162 58, 170 40 Z"/>
			</svg>
			<div class="fact-row">
				<div class="fact reveal d2"><b>100%</b><span>seizoensgebonden</span></div>
				<div class="fact reveal d3"><b>Sōgetsu</b><span>ikebana opgeleid</span></div>
				<div class="fact reveal d4"><b>1 op 1</b><span>elke creatie uniek</span></div>
			</div>
		</div>
	</div>
</section>

<section class="services" id="diensten">
	<div class="wrap">
		<div class="services-head">
			<div>
				<div class="eyebrow reveal">Diensten</div>
				<h2 class="reveal d1">Wat ik voor jou <em>kan maken</em></h2>
			</div>
			<p class="reveal d2" style="max-width:34ch;color:#5c6552;font-size:15px">
				Zes werelden, één handschrift: refinement, balans en respect voor de natuurlijke vorm.
			</p>
		</div>

		<div class="cards">
			<?php
			$icons = array(
				'huwelijken'   => '<svg viewBox="0 0 24 24"><path d="M12 3c2.5 2.2 3.6 4.6 3.6 7.2 0 2.8-1.6 5-3.6 5s-3.6-2.2-3.6-5C8.4 7.6 9.5 5.2 12 3z"/><path d="M12 15v6M8.8 21h6.4"/></svg>',
				'ikebana'      => '<svg viewBox="0 0 24 24"><path d="M4 20 L14 10M14 10c-2-3 0-6 3-7 1 3 0 5-1.5 6.5M14 10c3-1 6 .5 6 3.5-3 1-5.5 0-6.5-1.5"/><path d="M6 17l-2 1 1-2M9 14l-2 1 1-2"/></svg>',
				'workshops'    => '<svg viewBox="0 0 24 24"><path d="M12 21c-4.4 0-7-2.6-7-6.2 0-2.9 2-5 4.6-5 .9 0 1.7.2 2.4.7M12 21c4.4 0 7-2.6 7-6.2 0-2.9-2-5-4.6-5-.9 0-1.7.2-2.4.7M12 21v-3"/><path d="M12 8.2c-1.6-2.4-.4-4.6 0-5.2.4.6 1.6 2.8 0 5.2z"/></svg>',
				'abonnementen' => '<svg viewBox="0 0 24 24"><rect x="5" y="8" width="14" height="13" rx="2.5"/><path d="M9 8c-.5-3 1.5-4.5 3-4.5S14.5 5 14 8M3 12h2M19 12h2"/></svg>',
				'commercieel'  => '<svg viewBox="0 0 24 24"><path d="M8 21c-2-2-3-5-3-8 0-4 2.5-7 7-9 4.5 2 7 5 7 9 0 3-1 6-3 8M12 4v17M9.5 10c1.5 1 3.5 1 5 0"/></svg>',
				'grafstukken'  => '<svg viewBox="0 0 24 24"><path d="M12 21C7 21 4 18 4 14c0-3.3 2.4-6 6.4-6.4C11 5.6 12.8 4 15 4c2.6 0 4.6 2 4.6 4.6 0 .7-.2 1.4-.5 2C21 12.4 21.5 15 20 17.5 18.5 20 15.6 21 12 21z"/><path d="M12 13c.8-1.8 2.6-2.6 4.4-2"/></svg>',
			);

			$fallbacks = array(
				'huwelijken'   => array( 'title' => 'Huwelijken',   'text' => 'Jullie liefde vertaald in bloemen. Bruidsboeketten, corsages, tafeldecoraties en een sfeervolle aankleding van de trouwlocatie.' ),
				'ikebana'      => array( 'title' => 'Ikebana',     'text' => 'Japanse bloemschikkunst volgens de Sōgetsu‑school: vrijheid, creativiteit en balans — met elk plantaardig materiaal, altijd en overal.' ),
				'workshops'    => array( 'title' => 'Workshops',    'text' => 'Creatief, gezellig en volledig verzorgd — op mijn locatie of bij jullie. Perfect voor vrijgezellenfeesten, teambuildings of een dag met vriendinnen.' ),
				'abonnementen' => array( 'title' => 'Abonnementen', 'text' => 'Verse bloemen, met zorg geleverd. Kies jouw stijl en frequentie — ik zorg voor unieke seizoensboeketten die jouw ruimte tot leven brengen.' ),
				'commercieel'  => array( 'title' => 'Freelance design', 'text' => 'Professionele ondersteuning voor bloemisten, weddingplanners en bedrijven die waarde hechten aan stijl en verfijnde bloemkunst.' ),
				'grafstukken'  => array( 'title' => 'Grafstukken',  'text' => 'Een waardig en persoonlijk laatste eerbetoon, met rust en aandacht samengesteld — passend bij wie uw dierbare was.' ),
			);

			$i = 0;
			foreach ( $fallbacks as $slug => $data ) {
				$title = $data['title'];
				$text  = $data['text'];
				$link  = home_url( '/' . $slug . '/' );

				$page = get_page_by_path( $slug );
				if ( $page ) {
					$title = get_the_title( $page );
					$text  = ( has_excerpt( $page ) ) ? get_the_excerpt( $page ) : wp_trim_words( wp_strip_all_tags( $page->post_content ), 26, '…' );
					$link  = get_permalink( $page );
				}

				$delay = 'd' . min( $i, 4 );
				?>
				<article class="card reveal <?php echo esc_attr( $delay ); ?>">
					<div class="card-ico"><?php echo $icons[ $slug ]; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG from theme. ?></div>
					<h3><?php echo esc_html( $title ); ?></h3>
					<p><?php echo esc_html( $text ); ?></p>
					<a href="<?php echo esc_url( $link ); ?>">Meer info</a>
				</article>
				<?php
				$i++;
			}
			?>
		</div>
	</div>
</section>

<section class="band" id="ikebana">
	<div class="blob b3"></div><div class="blob b4"></div>
	<div class="wrap band-inner">
		<div>
			<div class="eyebrow reveal">Ikebana · Sōgetsu</div>
			<h2 class="reveal d1">De stilte tussen <em style="color:var(--pale)">de bloemen</em></h2>
			<p class="reveal d2">
				Ikebana heeft mij altijd gefascineerd. De filosofie van de Sōgetsu‑school spreekt mij het
				meest aan: vrijheid, creativiteit, en de overtuiging dat ikebana altijd en overal kan —
				met elk plantaardig materiaal. De principes van balans, eenvoud en respect voor
				natuurlijke vormen dragen ook alles wat ik buiten de ikebana maak.
			</p>
		</div>
		<blockquote class="reveal d2">
			"Ikebana is niet hoe de bloem eruitziet — maar hoe de ruimte eromheen ademt."
			<footer>Sōgetsu · first certificate</footer>
		</blockquote>
	</div>
</section>

<section class="portfolio" id="portfolio">
	<div class="wrap">
		<div class="portfolio-head">
			<div class="eyebrow reveal" style="justify-content:center">Portfolio · Projecten</div>
			<h2 class="reveal d1">Recent <em>werk</em></h2>
			<p class="reveal d2" style="color:#5c6552;max-width:52ch;margin:0 auto">
				Elke opdracht begint met een gesprek en eindigt met iets dat maar één keer bestaat.
			</p>
		</div>

		<!-- TODO: vervang de placeholder-tegels door echte atelierfotografie (media bibliotheek of een portfolio post type). -->
		<div class="gallery">
			<figure class="tile g1 reveal"><div class="fill"></div><span class="tag">Huwelijk</span><span class="label">Bruidsboeket in zachte groentinten</span></figure>
			<figure class="tile g2 reveal d1"><div class="fill"></div><span class="tag">Ikebana</span><span class="label">Sōgetsu‑arrangement</span></figure>
			<figure class="tile g3 reveal d2"><div class="fill"></div><span class="tag">Seizoen</span><span class="label">Herfstboeket</span></figure>
			<figure class="tile g4 reveal d3"><div class="fill"></div><span class="tag">Winkel</span><span class="label">Commerciële styling</span></figure>
			<figure class="tile g5 reveal d4"><div class="fill"></div><span class="tag">Atelier</span><span class="label">Workshopbloemen</span></figure>
		</div>
		<p class="placeholder-note">* In de definitieve versie: eigen fotografie uit het atelier</p>
	</div>
</section>

<section class="cta-band" id="abonnementen">
	<div class="wrap">
		<div class="cta-box reveal">
			<svg class="petal-mini" viewBox="0 0 24 24" aria-hidden="true">
				<path d="M12 22V11M12 11C12 6 15 3.6 19 3.4 19.4 8 16.6 11 12 11zM12 11C12 6 9 3.6 5 3.4 4.6 8 7.4 11 12 11zM12 15c2.6-1.9 5.4-1.9 7.6 0-.5 2.7-3 4.3-7.6 4.1zM12 15c-2.6-1.9-5.4-1.9-7.6 0 .5 2.7 3 4.3 7.6 4.1z" fill="#8FA983" opacity=".55"/>
			</svg>
			<div>
				<div class="eyebrow">Abonnementen</div>
				<h2>Elke week bloemen, <em>zonder zelf te bestellen</em></h2>
				<p>Kies jouw stijl en leveringsfrequentie, en geniet regelmatig van verse seizoensboeketten
					zonder zelf na te hoeven denken. Zorgvuldig geselecteerd, uniek samengesteld.</p>
			</div>
			<div class="freq">
				<a href="<?php echo esc_url( home_url( '/abonnementen/' ) ); ?>"><b>Wekelijks</b><span>vers &amp; seizoens</span></a>
				<a href="<?php echo esc_url( home_url( '/abonnementen/' ) ); ?>"><b>Tweewekelijks</b><span>de klassieker</span></a>
				<a href="<?php echo esc_url( home_url( '/abonnementen/' ) ); ?>"><b>Maandelijks</b><span>kunstbloemen</span></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
