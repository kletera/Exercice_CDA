<?php
// Liste des exercices connus d'après l'arborescence du projet.
// Les chemins sont relatifs à ce fichier : garde les dossiers Ex/, page/ et sql/.
$exercices = [
    ['nom' => 'Super-globales — exercice 1', 'fichier' => 'page/Ex_super_global_1.php', 'categorie' => 'supper_global', 'description' => 'Découverte des variables super-globales.'],
    ['nom' => 'Super-globales — exercice 2', 'fichier' => 'page/Ex_super_global_2.php', 'categorie' => 'supper_global', 'description' => 'Exercice sur les variables super-globales.'],
    ['nom' => 'Super-globales — exercice 3', 'fichier' => 'page/Ex_super_global_3.php', 'categorie' => 'supper_global', 'description' => 'Exercice sur les variables super-globales.'],
    ['nom' => 'Super-globales — exercice 4', 'fichier' => 'page/Ex_super_global_4.php', 'categorie' => 'supper_global', 'description' => 'Exercice sur les variables super-globales.'],
    ['nom' => 'Super-globales — exercice 5', 'fichier' => 'page/Ex_super_global_5.php', 'categorie' => 'supper_global', 'description' => 'Exercice sur les variables super-globales.'],
    ['nom' => 'SQL — index', 'fichier' => 'sql/index.php', 'categorie' => 'sql', 'description' => 'Page liée aux exercices SQL et à la base de données.'],
    ['nom' => 'add_user', 'fichier' => 'sql/add_user.php', 'categorie' => 'sql', 'description' => 'Ajouter un utilisateur dans la BDD.'],
];

$categories = [
    'tous' => 'Tous',
    'supper_global' => 'Supper global',
    'sql' => 'SQL',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tous mes exercices PHP</title>
    <style>
        :root { --nav: #243447; --accent: #16a085; --text: #243447; }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; color: var(--text); background: #f4f7fa; }
        nav { background: var(--nav); display: flex; gap: 8px; padding: 0 20px; }
        nav a { color: #ecf0f1; text-decoration: none; padding: 16px; }
        nav a:hover, nav a.active { background: var(--accent); }
        main { width: min(1200px, 100%); margin: 0 auto; padding: 32px 20px 48px; }
        h1 { margin: 0 0 8px; }
        .intro { color: #5c6b7a; margin: 0 0 24px; }
        .filters { display: flex; flex-wrap: wrap; gap: 10px; margin: 22px 0 26px; }
        .filter { border: 1px solid #d5dde5; background: #fff; color: var(--text); padding: 10px 15px; border-radius: 999px; cursor: pointer; font: inherit; }
        .filter:hover, .filter.active { background: var(--accent); color: #fff; border-color: var(--accent); }
        .count { color: #667788; font-size: .95rem; margin-bottom: 14px; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(245px, 1fr)); gap: 18px; }
        .card { display: flex; flex-direction: column; align-items: flex-start; background: #fff; border: 1px solid #e0e7ee; border-radius: 14px; padding: 20px; box-shadow: 0 4px 14px rgba(28, 45, 64, .05); min-height: 205px; }
        .card[hidden] { display: none; }
        .tag { display: inline-block; background: #e6f6f2; color: #08745f; padding: 5px 9px; border-radius: 999px; font-size: .78rem; font-weight: bold; margin-bottom: 12px; }
        .card h2 { font-size: 1.1rem; margin: 0 0 10px; }
        .card p { color: #617181; line-height: 1.5; margin: 0 0 18px; }
        .visit { margin-top: auto; display: inline-block; background: var(--accent); color: #fff; text-decoration: none; padding: 10px 13px; border-radius: 8px; font-weight: bold; }
        .visit:hover { background: #12816b; }
        .empty { display: none; background: #fff; border-radius: 10px; padding: 20px; }
        @media (max-width: 520px) { nav { padding: 0 8px; } nav a { padding: 14px 10px; } main { padding: 24px 14px; } }
    </style>
</head>
<body>
<nav aria-label="Navigation principale">
    <a href="index.php">Accueil</a>
    <a href="exercice.php" class="active" aria-current="page">Tous les exercices</a>
</nav>
<main>
    <h1>Mes exercices PHP</h1>
    <p class="intro">Choisis une catégorie pour retrouver rapidement un exercice.</p>

    <div class="filters" role="group" aria-label="Filtrer les exercices par catégorie">
        <?php foreach ($categories as $key => $label): ?>
            <button type="button" class="filter<?= $key === 'tous' ? ' active' : '' ?>" data-filter="<?= htmlspecialchars($key, ENT_QUOTES, 'UTF-8') ?>" aria-pressed="<?= $key === 'tous' ? 'true' : 'false' ?>">
                <?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?>
            </button>
        <?php endforeach; ?>
    </div>

    <p class="count" id="count" aria-live="polite"><?= count($exercices) ?> exercice(s)</p>
    <section class="cards" id="cards" aria-label="Liste des exercices">
        <?php foreach ($exercices as $exercice): ?>
            <article class="card" data-category="<?= htmlspecialchars($exercice['categorie'], ENT_QUOTES, 'UTF-8') ?>">
                <span class="tag"><?= htmlspecialchars($categories[$exercice['categorie']], ENT_QUOTES, 'UTF-8') ?></span>
                <h2><?= htmlspecialchars($exercice['nom'], ENT_QUOTES, 'UTF-8') ?></h2>
                <p><?= htmlspecialchars($exercice['description'], ENT_QUOTES, 'UTF-8') ?></p>
                <a class="visit" href="<?= htmlspecialchars($exercice['fichier'], ENT_QUOTES, 'UTF-8') ?>">Ouvrir l'exercice</a>
            </article>
        <?php endforeach; ?>
    </section>
    <p class="empty" id="empty">Aucun exercice dans cette catégorie.</p>
</main>
<script>
    const filters = document.querySelectorAll('.filter');
    const cards = document.querySelectorAll('.card');
    const count = document.getElementById('count');
    const empty = document.getElementById('empty');

    filters.forEach((button) => {
        button.addEventListener('click', () => {
            const selected = button.dataset.filter;
            let visible = 0;

            filters.forEach((filter) => {
                const active = filter === button;
                filter.classList.toggle('active', active);
                filter.setAttribute('aria-pressed', active ? 'true' : 'false');
            });

            cards.forEach((card) => {
                const show = selected === 'tous' || card.dataset.category === selected;
                card.hidden = !show;
                if (show) visible++;
            });

            count.textContent = visible + ' exercice(s)';
            empty.style.display = visible === 0 ? 'block' : 'none';
        });
    });
</script>
</body>
</html>
