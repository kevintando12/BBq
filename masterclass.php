<?php
$pageTitle = 'BBQ-masterclasses | Kamado Breda';
$activePage = 'masterclass';
$submitted = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
$values = ['name' => '', 'email' => '', 'date' => '', 'experience' => '', 'message' => ''];
$errors = [];

if ($submitted) {
    foreach ($values as $field => $default) {
        $postedValue = $_POST[$field] ?? $default;
        if (is_string($postedValue)) {
            $values[$field] = trim($postedValue);
        } else {
            $values[$field] = '';
            $errors[$field] = 'Vul een geldige waarde in.';
        }
    }

    if ($values['name'] === '') {
        $errors['name'] = 'Vul je naam in.';
    }
    if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Vul een geldig e-mailadres in.';
    }
    if ($values['date'] !== '') {
        $date = DateTime::createFromFormat('!Y-m-d', $values['date']);
        if ($date === false || $date->format('Y-m-d') !== $values['date']) {
            $errors['date'] = 'Kies een geldige voorkeursdatum.';
        }
    }
    if (!in_array($values['experience'], ['', 'beginner', 'some', 'experienced'], true)) {
        $errors['experience'] = 'Kies een van de opties voor je ervaring.';
    }
}

$escape = static fn (string $value): string => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <?php if ($submitted && $errors === []): ?>
        <section class="confirmation section-wrap">
            <div class="confirmation-mark" aria-hidden="true">✓</div>
            <p class="eyebrow">Je aanmelding is ontvangen</p>
            <h1>Mooi, <?= $escape($values['name']) ?>.<br><span>Het vuur wacht.</span></h1>
            <p class="confirmation-copy">Bedankt voor je interesse in de BBQ-masterclass. Joris neemt contact met je op via <strong><?= $escape($values['email']) ?></strong> om de datum en je plek samen af te stemmen.</p>
            <?php if ($values['date'] !== ''): ?>
                <p class="confirmation-detail"><span>Jouw voorkeursdatum</span><strong><?= $escape(date('d-m-Y', strtotime($values['date']))) ?></strong></p>
            <?php endif; ?>
            <a class="button button-dark" href="index.php">Terug naar de homepagina <span aria-hidden="true">→</span></a>
        </section>
    <?php else: ?>
        <section class="page-hero section-wrap class-hero">
            <p class="eyebrow">Samen leren koken op vuur</p>
            <h1>Jouw eerste stap<br><span>naar pitmaster.</span></h1>
            <div class="page-hero-bottom"><p>Geen ervaring nodig. Joris leert je de basis van temperatuur, houtskool en smaak — en natuurlijk eten we samen.</p><span class="page-number">02 — 03</span></div>
        </section>
        <section class="class-details section-wrap">
            <div class="class-facts">
                <p class="eyebrow">Wat kun je verwachten?</p>
                <h2>Handen uit de mouwen.<br>Voeten bij het vuur.</h2>
                <div class="fact-list">
                    <div><span class="fact-number">01</span><span><strong>De basis</strong><small>Leer je Kamado aansteken en beheersen.</small></span></div>
                    <div><span class="fact-number">02</span><span><strong>Samen bereiden</strong><small>Ontdek technieken, ingrediënten en smaak.</small></span></div>
                    <div><span class="fact-number">03</span><span><strong>Aan tafel</strong><small>Proef samen wat er van het vuur komt.</small></span></div>
                </div>
                <img class="class-photo" src="img/kamado-open.png" alt="Samen koken op een Kamado met het deksel open">
            </div>
            <div class="signup-card" id="inschrijven">
                <p class="eyebrow">Reserveer je plek</p>
                <h2>Schuif je aan?</h2>
                <p class="form-intro">Laat je gegevens achter. Joris neemt persoonlijk contact met je op.</p>
                <?php if ($errors !== []): ?>
                    <div class="form-errors" role="alert">
                        <p>Controleer nog even de volgende gegevens:</p>
                        <ul><?php foreach ($errors as $error): ?><li><?= $escape($error) ?></li><?php endforeach; ?></ul>
                    </div>
                <?php endif; ?>
                <form action="masterclass.php#inschrijven" method="post">
                    <div class="form-field">
                        <label for="name">Naam <span aria-hidden="true">*</span></label>
                        <input id="name" name="name" type="text" autocomplete="name" required value="<?= $escape($values['name']) ?>" <?= isset($errors['name']) ? 'aria-invalid="true" aria-describedby="name-error"' : '' ?>>
                        <?php if (isset($errors['name'])): ?><small class="field-error" id="name-error"><?= $escape($errors['name']) ?></small><?php endif; ?>
                    </div>
                    <div class="form-field">
                        <label for="email">E-mailadres <span aria-hidden="true">*</span></label>
                        <input id="email" name="email" type="email" autocomplete="email" required value="<?= $escape($values['email']) ?>" <?= isset($errors['email']) ? 'aria-invalid="true" aria-describedby="email-error"' : '' ?>>
                        <?php if (isset($errors['email'])): ?><small class="field-error" id="email-error"><?= $escape($errors['email']) ?></small><?php endif; ?>
                    </div>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="date">Voorkeursdatum <span class="optional">(optioneel)</span></label>
                            <input id="date" name="date" type="date" value="<?= $escape($values['date']) ?>" <?= isset($errors['date']) ? 'aria-invalid="true" aria-describedby="date-error"' : '' ?>>
                            <?php if (isset($errors['date'])): ?><small class="field-error" id="date-error"><?= $escape($errors['date']) ?></small><?php endif; ?>
                        </div>
                        <div class="form-field">
                            <label for="experience">Ervaring <span class="optional">(optioneel)</span></label>
                            <select id="experience" name="experience" <?= isset($errors['experience']) ? 'aria-invalid="true" aria-describedby="experience-error"' : '' ?>>
                                <option value="">Kies een optie</option>
                                <option value="beginner" <?= $values['experience'] === 'beginner' ? 'selected' : '' ?>>Ik ben beginner</option>
                                <option value="some" <?= $values['experience'] === 'some' ? 'selected' : '' ?>>Ik heb wat ervaring</option>
                                <option value="experienced" <?= $values['experience'] === 'experienced' ? 'selected' : '' ?>>Ik barbecue regelmatig</option>
                            </select>
                            <?php if (isset($errors['experience'])): ?><small class="field-error" id="experience-error"><?= $escape($errors['experience']) ?></small><?php endif; ?>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="message">Wat wil je graag leren? <span class="optional">(optioneel)</span></label>
                        <textarea id="message" name="message" rows="3" placeholder="Vertel het Joris..."><?= $escape($values['message']) ?></textarea>
                    </div>
                    <button class="button button-primary form-submit" type="submit">Verstuur mijn aanmelding <span aria-hidden="true">→</span></button>
                    <p class="form-privacy">Je gegevens worden alleen gebruikt om contact met je op te nemen.</p>
                </form>
            </div>
        </section>
    <?php endif; ?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
