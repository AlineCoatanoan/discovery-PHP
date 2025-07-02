<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>My shows</h2>

       <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <?= htmlspecialchars($article['titre']) ?> : <?= htmlspecialchars($article['full_name']) ?>
                </li>
            <?php endforeach; ?>
        </ul>

        
    </body>
</html>