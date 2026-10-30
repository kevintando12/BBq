<?php
$pageTitle = 'Locatie | Kamado Breda';
$activePage = 'locatie';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="page-hero section-wrap">
        <p class="eyebrow">Kom gerust langs</p>
        <h1>Bezoek ons<br><span>in Breda.</span></h1>
        <div class="page-hero-bottom">
            <p>Je vindt Kamado Breda aan de Terheijdenseweg. Bekijk de kaart en plan je route.</p>
            <a class="text-link" href="https://www.google.com/maps/dir/?api=1&amp;destination=Terheijdenseweg+350%2C+4826+AA+Breda" target="_blank" rel="noopener noreferrer">
                Plan je route <span aria-hidden="true">↗</span>
            </a>
        </div>
    </section>

    <section class="location-section section-wrap" aria-labelledby="location-heading">
        <div class="location-details">
            <p class="eyebrow">Adres</p>
            <h2 id="location-heading">Terheijdenseweg 350</h2>
            <p>4826 AA Breda, Nederland</p>
            <a href="mailto:hallo@kamadobreda.nl">hallo@kamadobreda.nl</a>
        </div>
        <iframe
            class="location-map"
            src="https://maps.google.com/maps?q=Terheijdenseweg%20350%2C%204826%20AA%20Breda&amp;z=15&amp;output=embed"
            title="Kaart van Kamado Breda, Terheijdenseweg 350, 4826 AA Breda"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
