<?php include_once 'source.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    přilinkování boostrapu, stejně jako obyč css souboru-->
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <title>DOGS</title>
    <?php
    $sql = 'SELECT * FROM dog';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $dogs = $stmt->fetchAll();
     ?>
</head>
<body>
    <div class="container mt-3 mb-3">
        <h1>DOGS</h1>
        <table class="table table-bordered mb-3">
            <tr>
                <th>JMENO</th>
                <th>TYP</th>
            </tr>
            <?php foreach ($dogs as $dog):
                $sqlType = 'SELECT * FROM type where Id = :Id';
                $stmtType = $conn->prepare($sqlType);
                $stmtType->execute([
                    ':Id' => $dog['Type']
                ]);
                $type = $stmtType->fetch();
                ?>
            <tr>
                <td>
                    <div><?= $dog['Name'] ?></div>
                </td>
                <td>
                    <div><?= $type['Name'] ?></div>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <hr>
        <a class="btn btn-dark mt-3" href="types.php">TYPY</a>
    </div>
</body>
</html>

