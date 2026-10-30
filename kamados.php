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
                <div class="gallery-overlay"><span data-gallery-counter>01 / 03</span><span>Kamado in de tuin</span></div>
                <button class="gallery-arrow gallery-previous" type="button" aria-label="Vorige foto"><span aria-hidden="true">←</span></button>
                <button class="gallery-arrow gallery-next" type="button" aria-label="Volgende foto"><span aria-hidden="true">→</span></button>
            </div>
            <div class="gallery-controls">
                <div class="gallery-thumbnails" role="group" aria-label="Kies een foto">
                    <button class="gallery-thumb is-active" type="button" aria-label="Toon foto 1: zwarte Kamado met houten zijtafels" aria-pressed="true" data-gallery-index="0"><img src="img/kamado-black-shelves.png" alt=""></button>
                    <button class="gallery-thumb" type="button" aria-label="Toon foto 2: Kamado met zijtafels op een terras" aria-pressed="false" data-gallery-index="1"><img src="img/product-kamado-deck.png" alt=""></button>
                    <button class="gallery-thumb" type="button" aria-label="Toon foto 3: Kamado met deksel open en eten op de grill" aria-pressed="false" data-gallery-index="2"><img src="img/product-kamado-open.png" alt=""></button>
                </div>
            </div>
            <p class="visually-hidden" aria-live="polite" data-gallery-status>Foto 1 van 3: Zwarte Kamado met houten zijtafels</p>
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
                <p class="eyebrow">Assortiment</p>
                <h2 id="catalog-heading">Kamado's & producten.<br><span>Bekijk het aanbod.</span></h2>
            </div>
            <p>Bekijk de Kamado's en producten op de foto's. Prijs en beschikbaarheid zijn op aanvraag. Let op: een propaanfles en terpentine zijn geen Kamado-accessoires.</p>
        </div>
        <div class="product-grid">
            <article class="product-card">
                <figure class="product-photo">
                    <img src="img/product-kamado-open.png" alt="Zwarte Kamado met open deksel en eten op het rooster" loading="lazy">
                </figure>
                <div class="product-card-copy">
                    <p class="eyebrow">Kamado · Open deksel</p>
                    <h3>De Open Grill</h3>
                    <p>Keramische barbecue voor grillen en rustig garen. Vraag naar de beschikbare maten.</p>
                    <div class="product-card-bottom"><strong>Prijs op aanvraag</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=Kamado%20met%20open%20deksel">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-photo">
                    <img src="img/product-kamado-deck.png" alt="Zwarte Kamado met zijtafels op een terras" loading="lazy">
                </figure>
                <div class="product-card-copy">
                    <p class="eyebrow">Kamado · Zijtafels</p>
                    <h3>De Terrasgrill</h3>
                    <p>Kamado met werkruimte voor het voorbereiden en serveren van je gerechten.</p>
                    <div class="product-card-bottom"><strong>Prijs op aanvraag</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=Kamado%20met%20zijtafels">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-photo">
                    <img src="img/product-bbq-spatel.png" alt="Roestvrijstalen barbecuespatel" loading="lazy">
                </figure>
                <div class="product-card-copy">
                    <p class="eyebrow">Accessoire · Grillgerei</p>
                    <h3>BBQ-spatel</h3>
                    <p>Handige spatel om eten op de grill om te draaien en te serveren.</p>
                    <div class="product-card-bottom"><strong>Prijs op aanvraag</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=BBQ-spatel">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-photo">
                    <img src="img/product-houtskool.png" alt="Zak Napoleon Premium Lumpwood houtskool van 3 kilogram" loading="lazy">
                </figure>
                <div class="product-card-copy">
                    <p class="eyebrow">Brandstof · 3 kg</p>
                    <h3>Lumpwood houtskool</h3>
                    <p>Napoleon Premium Lumpwood houtskool, geschikt voor barbecuegebruik.</p>
                    <div class="product-card-bottom"><strong>Prijs op aanvraag</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=Napoleon%20houtskool">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-photo">
                    <img src="img/product-propaanfles.png" alt="Lege propaanfles" loading="lazy">
                </figure>
                <div class="product-card-copy">
                    <p class="eyebrow">Gasfles · Leeg</p>
                    <h3>Propaanfles</h3>
                    <p>De afbeelding toont een lege fles. Propaan is geen brandstof voor een houtskool-Kamado.</p>
                    <div class="product-card-bottom"><strong>Prijs op aanvraag</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=Vraag%20over%20de%20propaanfles">Informeer <span aria-hidden="true">→</span></a></div>
                </div>
            </article>
            <article class="product-card">
                <figure class="product-photo">
                    <img src="img/product-terpentine.png" alt="Fles terpentine of white spirit, 1 liter" loading="lazy">
                </figure>
                <div class="product-card-copy">
                    <p class="eyebrow">Oplosmiddel · 1 liter</p>
                    <h3>Terpentine</h3>
                    <p>Geen barbecueproduct. Brandbaar: niet gebruiken om een barbecue aan te steken of schoon te maken; uit de buurt van vuur houden.</p>
                    <div class="product-card-bottom"><strong>Prijs op aanvraag</strong><a class="text-link" href="mailto:hallo@kamadobreda.nl?subject=Vraag%20over%20terpentine">Informeer <span aria-hidden="true">→</span></a></div>
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
