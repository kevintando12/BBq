<?php
$pageTitle = 'Stijlgids & wireframe | Kamado Breda';
$activePage = 'styleguide';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="page-hero section-wrap">
        <p class="eyebrow">De basis van het merk</p>
        <h1>Stijlgids &<br><span>pagina-opbouw.</span></h1>
        <div class="page-hero-bottom"><p>Een praktisch overzicht van de visuele stijl en de structuur van de desktop- en mobiele pagina's.</p><span class="page-number">03 — 03</span></div>
    </section>
    <section class="guide-section section-wrap">
        <p class="eyebrow">01 / Visuele identiteit</p>
        <h2>Warm, eigenzinnig<br>en geworteld in vuur.</h2>
        <div class="style-grid">
            <article class="guide-card"><h3>Kleuren</h3><div class="swatches"><div class="swatch swatch-cream"><span>Porselein<br>#F5F3ED</span></div><div class="swatch swatch-blue"><span>Kamado-blauw<br>#245F79</span></div><div class="swatch swatch-ink"><span>Houtskool<br>#202622</span></div><div class="swatch swatch-rust"><span>Gloed<br>#C66B45</span></div></div></article>
            <article class="guide-card type-card"><h3>Typografie</h3>
            <p class="type-display">Vuur<br>met karakter.</p>
            <p class="type-body">Kop: Georgia, vet en compact.
            <br>Lopende tekst: Arial, rustig leesbaar.<br>Eyebrows: kleine kapitalen met ruime letterspatiëring.</p></article>
            <article class="guide-card"><h3>Vorm & beeld</h3><p class="type-body">Ruime witmarges, dunne lijnen en afgeronde vormen op productbeelden. Fotografie voelt natuurlijk: warm daglicht, echte materialen en mensen rond het vuur. Het blauw van de Kamado is steeds het herkenbare accent.</p></article>
            <article class="guide-card"><h3>Knoppen & interactie</h3><p class="type-body">Primaire actie: kamado-blauwe knop met witte tekst. Secundaire actie: tekstlink met pijl. Hover en focus gebruiken een duidelijke contrastrand. De galerij bedien je met pijlen, thumbnails of toetsenbord.</p></article>
        </div>
    </section>
    <section class="wireframe-section">
        <div class="section-wrap">
            <p class="eyebrow">02 / Gedetailleerd wireframe</p>
            <h2>Van breed scherm<br>tot broekzak.</h2>
            <p class="wireframe-intro">De gedeelde header en footer blijven herkenbaar. Op mobiel stapelen de onderdelen en wordt het navigatiemenu inklapbaar.</p>
            <div class="wireframe-grid">
                <article class="wireframe-card">
                    <h3>Desktop · 1440 px</h3>
                    <div class="wireframe-screen desktop-wire" aria-label="Desktop wireframe: header bovenaan, brede hero met tekst links en beeld rechts, twee tegels, quote en footer">
                        <div class="wf-header"><b>K. KAMADO BREDA</b><span>HOME　 DE KAMADO'S　 MASTERCLASSES</span><i>INSCHRIJVEN ↗</i></div>
                        <div class="wf-hero"><div><small>SPECIAALZAAK · BREDA</small><strong>Goed vuur.<br>Goede verhalen.</strong><span>Introductie en twee call-to-actions</span></div><div class="wf-image">HERO / PRODUCTBEELD</div></div>
                        <div class="wf-intro">INTRODUCTIE + KORTE MERKVERHALEN</div>
                        <div class="wf-tiles"><span>01 · KAMADO'S / BEELD</span><span>02 · MASTERCLASS / BEELD</span></div><div class="wf-footer">QUOTE / FOOTER MET NAVIGATIE EN CONTACT</div>
                    </div>
                    <ol class="wireframe-notes"><li>Header: logo links, drie hoofdroutes in het midden, inschrijfknop rechts.</li><li>Home: tweekoloms hero; daaronder merkintro, twee beeldtegels en merkquote.</li><li>Kamado's: paginatitel, grote galerij links met thumbnails en productuitleg rechts.</li><li>Masterclass: intro bovenaan; programma links, inschrijfformulier rechts.</li><li>Footer: merkbelofte, routes, e-mail en inschrijflink.</li></ol>
                </article>
                <article class="wireframe-card">
                    <h3>Mobiel · 390 px</h3>
                    <div class="wireframe-screen mobile-wire" aria-label="Mobiel wireframe: compacte header met menuknop, gestapelde hero, tegels en footer">
                        <div class="wf-header"><b>K. KAMADO</b><i>☰ MENU</i></div>
                        <div class="wf-mobile-block"><small>SPECIAALZAAK · BREDA</small><strong>Goed vuur.<br>Goede verhalen.</strong><span>Introductie in korte regels</span><i>ONTDEK DE KAMADO'S →</i></div>
                        <div class="wf-image wf-mobile-image">HERO / BEELD</div>
                        <div class="wf-mobile-block">MERKINTRODUCTIE</div><div class="wf-mobile-card">01 · KAMADO'S / BEELD</div><div class="wf-mobile-card">02 · MASTERCLASS / BEELD</div><div class="wf-footer">FOOTER / CONTACT</div>
                    </div>
                    <ol class="wireframe-notes"><li>Header: compact logo en menu-toggle; navigatie klapt verticaal open.</li><li>Homehero: tekst, actieknoppen en beeld onder elkaar; geen horizontaal scrollen.</li><li>Galerij: één beeldbreedte, swipe-vriendelijk en thumbnails in een rij.</li><li>Inschrijving: velden onder elkaar; optionele velden blijven duidelijk gemarkeerd.</li><li>Footer: contact en paginalinks stapelen in één kolom.</li></ol>
                </article>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
