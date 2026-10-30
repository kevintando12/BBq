<?php
$pageTitle = "De Kamado's | Kamado Breda";
$activePage = 'kamados';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="page-hero section-wrap">
        <p class="eyebrow">Met de hand uitgekozen · Breda</p>
        <h1>Een Kamado<br><span>om mee thuis te komen.</span></h1>
        <div class="page-hero-bottom"><p>Keramiek met karakter. Van langzaam gegaarde brisket tot pizza uit eigen tuin: ontdek wat vuur voor je kan doen.</p><span class="page-number">01 — 03</span></div>
    </section>

    <section class="product-showcase section-wrap" aria-labelledby="gallery-heading">
        <div class="gallery" data-gallery>
            <div class="gallery-image-wrap">
                <img class="gallery-image" src="img/kamado-black-shelves.png" alt="Zwarte Kamado met houten zijtafels in de tuin" data-gallery-image>
                <div class="gallery-overlay"><span data-gallery-counter>01 / 04</span><span>Kamado in de tuin</span></div>
                <button class="gallery-arrow gallery-previous" type="button" aria-label="Vorige foto"><span aria-hidden="true">←</span></button>
                <button class="gallery-arrow gallery-next" type="button" aria-label="Volgende foto"><span aria-hidden="true">→</span></button>
            </div>
            <div class="gallery-controls">
                <div class="gallery-thumbnails" role="group" aria-label="Kies een foto">
                    <button class="gallery-thumb is-active" type="button" aria-label="Toon foto 1: zwarte Kamado met houten zijtafels" aria-pressed="true" data-gallery-index="0"><img src="img/kamado-black-shelves.png" alt=""></button>
                    <button class="gallery-thumb" type="button" aria-label="Toon foto 2: zwarte Kamado op een terras" aria-pressed="false" data-gallery-index="1"><img src="img/kamado-deck.png" alt=""></button>
                    <button class="gallery-thumb" type="button" aria-label="Toon foto 3: groene Kamado met zijtafels" aria-pressed="false" data-gallery-index="2"><img src="img/kamado-green.png" alt=""></button>
                    <button class="gallery-thumb" type="button" aria-label="Toon foto 4: Kamado met deksel open en eten op de grill" aria-pressed="false" data-gallery-index="3"><img src="img/kamado-open.png" alt=""></button>
                </div>
                <span class="gallery-hint">Klik of gebruik ← →</span>
            </div>
            <p class="visually-hidden" aria-live="polite" data-gallery-status>Foto 1 van 4: Zwarte Kamado met houten zijtafels</p>
        </div>
        <div class="product-copy">
            <p class="eyebrow">01 / De klassieker</p>
            <h2 id="gallery-heading">Karakter.<br>En helemaal<br>op jouw manier.</h2>
            <p>Een Kamado is geen gewone barbecue. Het keramiek houdt warmte en vocht vast, zodat je rustig kunt roken, bakken en grillen. Joris helpt je de maat en accessoires kiezen die bij jouw manier van koken passen.</p>
            <ul class="product-points">
                <li><span>01</span> Karaktervol keramiek in meerdere kleuren</li>
                <li><span>02</span> Gietijzeren accessoires</li>
                <li><span>03</span> Persoonlijk advies in Breda</li>
            </ul>
            <a class="button button-dark" href="mailto:hallo@kamadobreda.nl?subject=Advies%20over%20een%20Kamado">Vraag Joris om advies <span aria-hidden="true">→</span></a>
        </div>
    </section>

    <section class="catalog-section section-wrap" aria-labelledby="catalog-heading">
        <div class="catalog-heading">
            <div>
                <p class="eyebrow">Kies jouw maat</p>
                <h2 id="catalog-heading">Zes Kamado's.<br><span>Voor ieder terras.</span></h2>
            </div>
            <p>Van een compacte barbecue voor het balkon tot een complete buitenkeuken. Elke Kamado wordt op bestelling samengesteld. De prijzen zijn richtprijzen; Joris helpt je graag met de uitvoering en accessoires.</p>
        </div>
        <div class="product-grid">
            <article class="product-card">
                <img src="img/kamado-open.png" alt="Compacte zwarte Kamado met het deksel open en eten op de grill" loading="lazy">
                <div class="product-card-copy">
                    <p class="eyebrow">15 inch · Compact</p>
                    <h3>De Balkonmaat</h3>
                    <p>Past op een kleiner terras en is groot genoeg voor een etentje met vrienden.</p>
                    <div class="product-card-bottom"><strong>Vanaf € 749</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=De%20Balkonmaat%20bestellen">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <img src="img/kamado-deck.png" alt="Zwarte Kamado met houten zijtafels op het terras" loading="lazy">
                <div class="product-card-copy">
                    <p class="eyebrow">18 inch · Medium</p>
                    <h3>De Klassieker</h3>
                    <p>Een veelzijdige maat voor dagelijks grillen, roken en rustig garen.</p>
                    <div class="product-card-bottom"><strong>Vanaf € 1.099</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=De%20Klassieker%20bestellen">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <img src="img/kamado-green.png" alt="Groene Kamado met houten zijtafels en onderstel" loading="lazy">
                <div class="product-card-copy">
                    <p class="eyebrow">21 inch · Large</p>
                    <h3>De Tuinkok</h3>
                    <p>Extra grillruimte voor lange zomeravonden en koken voor een grotere groep.</p>
                    <div class="product-card-bottom"><strong>Vanaf € 1.399</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=De%20Tuinkok%20bestellen">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <img src="img/kamado-black-shelves.png" alt="Zwarte Kamado met houten zijtafels in een tuin" loading="lazy">
                <div class="product-card-copy">
                    <p class="eyebrow">24 inch · XL</p>
                    <h3>De Pitmaster</h3>
                    <p>Veel plek voor uitgebreide barbecues, grote stukken vlees en meerdere gerechten.</p>
                    <div class="product-card-bottom"><strong>Vanaf € 1.799</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=De%20Pitmaster%20bestellen">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <img src="img/kamado-green.png" alt="Groene Kamado als inspiratie voor een buitenkeuken" loading="lazy">
                <div class="product-card-copy">
                    <p class="eyebrow">21 inch · Inbouw</p>
                    <h3>De Buitenkeuken</h3>
                    <p>Een losse Kamado om in een eigen buitenkeuken of maatwerkblad te plaatsen.</p>
                    <div class="product-card-bottom"><strong>Vanaf € 1.499</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=De%20Buitenkeuken%20bestellen">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <img src="img/kamado-open.png" alt="Zwarte Kamado met open deksel en zijtafels" loading="lazy">
                <div class="product-card-copy">
                    <p class="eyebrow">21 inch · Compleet</p>
                    <h3>De Buitenchef</h3>
                    <p>Een Large Kamado met onderstel, zijtafels en gietijzeren rooster.</p>
                    <div class="product-card-bottom"><strong>Vanaf € 1.699</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=De%20Buitenchef%20bestellen">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
        </div>
    </section>

    <section class="accessory-section">
        <div class="section-wrap accessory-inner">
            <div><p class="eyebrow">Het zit in de details</p><h2>Gietijzer.<br>Gemaakt voor vuur.</h2></div>
            <p>Een goede grillplaat, een stevige tang, de juiste hitteverdeler. De accessoires maken je Kamado eigen. In de winkel laat Joris je graag zien wat je echt nodig hebt.</p>
            <a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=Accessoires">Vraag naar accessoires <span aria-hidden="true">↗</span></a>
        </div>
    </section>
    <section class="closing-cta section-wrap"><p class="eyebrow">Nog nooit op een Kamado gekookt?</p><h2>Begin met vuur.<br><span>En een beetje lef.</span></h2><a class="button button-primary" href="masterclass.php">Bekijk de masterclasses <span aria-hidden="true">→</span></a></section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
