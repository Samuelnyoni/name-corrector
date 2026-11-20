
<?php
$file = __DIR__ . '/names.txt';
$names = [];

if (is_file($file)) {
    $names = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saved Names</title>
</head>
<body>
    <h1>Saved Names</h1>

    <?php if ($names): ?>
        <ol>
            <?php foreach ($names as $name): ?>
                <li><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ol>
    <?php else: ?>
        <p>No names saved yet.</p>
    <?php endif; ?>

    <a href="index.php">Back to Name Corrector</a>
</body>
</html>
