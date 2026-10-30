<?php
$pageTitle = 'Kamado Breda | Vuur met karakter';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="hero hero-home">
        <div class="hero-copy">
            <p class="eyebrow">Speciaalzaak voor buitenkoks · Breda</p>
            <h1>Goed vuur.<br><span>Goede verhalen.</span></h1>
            <p class="hero-intro">Ontdek de bijzondere Kamado's van Joris: met aandacht uitgekozen, klaar voor lange avonden aan tafel.</p>
            <div class="button-row">
                <a class="button button-primary" href="kamados.php">Ontdek de Kamado's <span aria-hidden="true">→</span></a>
                <a class="text-link" href="masterclass.php">Leer koken op vuur <span aria-hidden="true">↗</span></a>
            </div>
            <div class="hero-note"><span class="note-mark">✳</span><span>Persoonlijk advies in Breda<br>en masterclasses voor beginners</span></div>
        </div>
        <div class="hero-art">
            <img src="img/joris-winkel.png" alt="Joris voor zijn winkel in Breda, omringd door blauwe Kamado-barbecues" class="hero-photo">
        </div>
        <a class="scroll-cue" href="#ontdek"><span></span>Scroll om te ontdekken</a>
    </section>

    <section class="intro-section section-wrap" id="ontdek">
        <div class="section-heading">
            <p class="eyebrow">Klein van schaal. Groot in smaak.</p>
            <h2>Een speciaalzaak<br>met vuur in het hart.</h2>
        </div>
        <div class="intro-body">
            <p>Bij Kamado Breda draait het om meer dan een barbecue. Joris helpt je de juiste Kamado vinden, laat je zien wat je ermee kunt en brengt beginnende pitmasters samen rond het vuur.</p>
            <a class="text-link" href="kamados.php">Bekijk het assortiment <span aria-hidden="true">→</span></a>
        </div>
    </section>

    <section class="feature-grid section-wrap" aria-label="Ontdek Kamado Breda">
        <a class="feature-card feature-product" href="kamados.php">
            <img src="img/kamado-green.png" alt="Groene Kamado met houten zijtafels en stevig onderstel">
            <span class="feature-index">01 — Het assortiment</span>
            <span class="feature-title">Kies jouw<br>Kamado <span aria-hidden="true">↗</span></span>
        </a>
        <a class="feature-card feature-class" href="masterclass.php">
            <div class="feature-class-art" aria-hidden="true"><span>Vuur</span><span>+</span><span>Gezelschap</span></div>
            <span class="feature-index">02 — Samen leren</span>
            <span class="feature-title">Van eerste<br>vonk tot pitmaster <span aria-hidden="true">↗</span></span>
        </a>
    </section>

    <section class="quote-band">
        <p class="eyebrow">De filosofie van Joris</p>
        <blockquote>“De beste maaltijd begint met tijd nemen.”</blockquote>
        <span>— Joris, Kamado Breda</span>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
