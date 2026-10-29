<?php
// Pages accessibles via le routeur existant.
$routes = [
    'accueil' => ['Accueil', null],
    'Ex_super_global_1' => ['Super-global 1', './page/Ex_super_global_1.php'],
    'Ex_super_global_2' => ['Super-global 2', './page/Ex_super_global_2.php'],
    'Ex_super_global_3' => ['Super-global 3', './page/Ex_super_global_3.php'],
    'Ex_super_global_4' => ['Super-global 4', './page/Ex_super_global_4.php'],
    'Ex_super_global_5' => ['Super-global 5', './page/Ex_super_global_5.php'],
];

$page = $_GET['page'] ?? 'accueil';
if (!array_key_exists($page, $routes)) {
    http_response_code(404);
    $page = '404';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mes exercices PHP</title>
    <style>
        :root { color-scheme: light; --nav: #243447; --accent: #16a085; }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; color: #243447; background: #f4f7fa; }
        nav { background: var(--nav); display: flex; flex-wrap: wrap; gap: 8px; padding: 0 20px; }
        nav a { color: #ecf0f1; text-decoration: none; padding: 16px; display: inline-block; }
        nav a:hover, nav a.active { background: var(--accent); }
        main { width: min(1100px, 100%); margin: 0 auto; padding: 32px 20px; }
        .button { display: inline-block; margin-top: 12px; padding: 11px 16px; border-radius: 8px; background: var(--accent); color: white; text-decoration: none; font-weight: bold; }
        .button:hover { background: #12816b; }
    </style>
</head>
<body>
<nav aria-label="Navigation principale">
    <a href="index.php" class="<?= $page === 'accueil' ? 'active' : '' ?>">Accueil</a>
    <a href="exercice.php">Tous les exercices</a>
</nav>
<main>
    <?php if ($page === 'accueil'): ?>
        <h1>Bienvenue dans mes exercices PHP</h1>
        <p>Retrouve tous les exercices réalisés, classés par thème, sur une seule page.</p>
        <a class="button" href="exercice.php">Voir les exercices</a>
    <?php elseif ($page === '404'): ?>
        <h1>404 — Page introuvable</h1>
        <p>La page demandée n'existe pas.</p>
        <a class="button" href="exercice.php">Retour aux exercices</a>
    <?php else: ?>
        <?php require __DIR__ . '/' . $routes[$page][1]; ?>
    <?php endif; ?>
</main>
</body>
</html>
