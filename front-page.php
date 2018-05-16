<?php get_header(); ?>

<!-- HERO -->
<section id="hero" class="container">
  <div class="vacatures">
    <h3 class="cta-title">Kom jij ons team versterken?</h3><a class="btn btn-lg btn-cta" href="/vacatures" title="Bekijk vacatures">Bekijk onze vacatures</a>
  </div>

  <div class="slider"><?php echo do_shortcode('[soliloquy id="38"]'); ?></div>
</section>

<!-- SERVICES -->
<section id="services" class="container">
  <div class="col-md-4 services--box">
    <h2><a href="trainingen/prive-trainingen">Privé Training</a></h2>
    <p>Houdt u niet zo van het 'groepsgebeuren' en heeft u liever een op maat gemaakt cursus? Kies dan voor privé training.</p>
    <a href="trainingen/prive-trainingen" class="btn btn-default">Lees meer</a>
  </div>

  <div class="col-md-4 services--box">
    <h2><a href="traingingen/angst-voor-honden">Angst voor honden</a></h2>
    <p>Laat uw leven niet langer belemmeren door uw angst voor honden. Doe er iets aan! Schrijf u snel in voor deze training.</p>
    <a href="trainingen/angst-voor-honden" class="btn btn-default">Lees meer</a>
  </div>

  <div class="col-md-4 services--box">
    <h2><a href="trainingen/gedragstherapie">Gedragstherapie</a></h2>
    <p>Vertoond uw hond probleem gedrag? Wilt u hier iets aan doen? Neem dan snel contact met ons op!</p>
    <a href="trainingen/gedragstherapie" class="btn btn-default">Lees meer</a>
  </div>
</section>

<!-- MAIN -->
<div id="main-content" class="container">
  <div class="row">
    <main class="col-md-7">
      <article id="about">
        <h2>Welkom bij Hondenschool Consequent</h2>
        <p>Een goede relatie tussen hond en baas begint met wederzijds respect en begrip. Een hondentraining is dan ook veel meer dan uw hond leren zitten of liggen.</p>
        <p>Ons doel is dat u en uw hond elkaar beter leren begrijpen. Dat doen we door u te leren hoe u uw hond op een goede manier begeleidt en opvoedt.</p>
        <p>Iedere hond is welkom bij Hondenschool Consequent. Puppy of volwassen, rashond of rasechte bastaard, onbezorgde hond of hond met een verleden...
          Voor ieder type hond bieden wij een passende cursus of begeleiding.</p>
        <p>Naast de cursussen die in groepsverband worden aangeboden, bieden wij ook privétraining, begeleiding aan huis en gedragstherapie.</p>
        <p>Snuffel gerust even rond op de site!</p>
        <p>Met vriendelijke groeten,</p>
        <p>Jolyn Holtvluwer, eigenaresse van Hondenschool Consequent</p>

        <img src="/consequent/wp-content/themes/consequent_theme/img/jolyn-holtvluwer-hondenschool-consequent.jpg" alt="Jolyn Holtvluwer van Hondenschool Consequent">
      </article>

      <section id="testimonials">
        <!-- include custom testimonials component -->
        <?php include "components/testimonials-widget.php"; ?>
      </section>
    </main>

    <aside class="sidebar col-md-4 col-md-offset-1">
      <?php // get_sidebar('homepage'); ?>

      <!-- include custom events list component -->
      <?php include "components/events-widget.php"; ?>

      <!-- include custom facebook component -->
      <?php include "components/facebook-widget.php"; ?>
    </aside>
  </div>
</div>


<?php get_footer(); ?>
