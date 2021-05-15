<?php
include_once 'source.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <title>TYPES</title>
    <?php
    $sql = 'SELECT * FROM type';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $types = $stmt->fetchAll();
    ?>
</head>
<body>

<div class="container mt-3 mb-3">
    <h1>TYPES</h1>
    <ul>
        <?php foreach ($types as $type): ?>
            <li>
                <span><?= $type['Name'] ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <a class="btn btn-dark mt-3" href="index.php">ZPĚT NA HLAVNÍ STRÁNKU</a>
    <a class="btn btn-success mt-3" href="type-new.php">VYTVOŘ DALŠÍ PLEMENO</a>
</div>
</body>
</html>
