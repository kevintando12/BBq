<?php
$pageTitle = $pageTitle ?? 'Kamado Breda';
$activePage = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f3ed">
    <meta name="description" content="Ontdek bijzondere Kamado-barbecues, gietijzeren accessoires en BBQ-masterclasses bij Kamado Breda.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Ga naar de inhoud</a>
<header class="site-header">
    <a class="brand" href="index.php" aria-label="Kamado Breda, home">
        <img class="brand-logo" src="img/kamado-breda-logo.png" alt="Kamado Breda - speciaalzaak en masterclasses">
    </a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
        <span class="menu-toggle-label">Menu</span><span class="menu-icon" aria-hidden="true"><i></i><i></i></span>
    </button>
    <nav class="primary-nav" id="primary-nav" aria-label="Hoofdnavigatie">
        <a href="index.php" <?= $activePage === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
        <a href="kamados.php" <?= $activePage === 'kamados' ? 'aria-current="page"' : '' ?>>De Kamado's</a>
        <a href="masterclass.php" <?= $activePage === 'masterclass' ? 'aria-current="page"' : '' ?>>Masterclasses</a>
        <a href="styleguide.php" <?= $activePage === 'styleguide' ? 'aria-current="page"' : '' ?>>Stijlgids</a>
    </nav>
    <a class="header-cta" href="masterclass.php#inschrijven">Schrijf je in <span aria-hidden="true">↗</span></a>
</header>
