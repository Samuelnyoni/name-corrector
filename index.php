
<?php
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $name = preg_replace('/\s+/', ' ', $name);

    if ($name === '') {
        $message = 'Please enter a name.';
    } else {
        $saved = file_put_contents(
            __DIR__ . '/names.txt',
            $name . PHP_EOL,
            FILE_APPEND | LOCK_EX
        );

        $message = $saved === false
            ? 'Could not save the name.'
            : 'Name saved successfully.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Name Corrector</title>
</head>
<body>
    <h1>Name Corrector</h1>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter a name" required>
        <button type="submit">Save Name</button>
    </form>

    <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>

    <a href="data.php">View Saved Names</a>
</body>
</html>
