<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insight Quirks - Articles</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Insight Quirks - Articles</h1>
        <?php include 'fetch_data.php'; ?>
        <div class="articles">
            <?php foreach ($articles as $article): ?>
                <div class="article">
                    <h2><?php echo htmlspecialchars($article['title']); ?></h2>
                    <div class="author-info">
                        <img src="<?php echo htmlspecialchars($article['author_image']); ?>" alt="<?php echo htmlspecialchars($article['author']); ?>">
                        <span><?php echo htmlspecialchars($article['author']); ?></span>
                        <span><?php echo htmlspecialchars($article['date']); ?></span>
                    </div>
                    <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
