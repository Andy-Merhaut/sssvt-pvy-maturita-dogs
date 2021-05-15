<?php
include_once 'source.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <title>NEW TYPE</title>
    <?php
    if (isset($_POST['Name'])) {

        $sql = 'INSERT INTO type SET Name = :Name';
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':Name' => $_POST['Name']
        ]);

        header('Location: index.php');
    }
    ?>
</head>
<body>
<div class="container mt-3 mb-3">
    <h1>VYTVÁŘECÍ FORMULÁŘ PRO PLEMENO PSA</h1>
    <form method="post">
        <div class="form-group">
            <label for="Name">Jméno nového plemena</label>
            <input type="text" name="Name" id="Name" class="form-control">
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-success" type="submit">PŘIDEJ NOVÉ PLEMENO!</button>
            <hr>
        </div>
    </form>
    <div class="text-center mt-3">
        <a class="btn btn-danger" href="types.php">ZPĚT</a>
    </div>
</div>
</body>
</html>
