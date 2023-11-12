<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../media/LH.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../style/variables.css" />
        <link rel="stylesheet" href="../style/header.css" />
        <link rel="stylesheet" href="../style/footer.css" />
        <link rel="stylesheet" href=<?= $CSS ?> />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title><?= $titre ?></title>
    </head>
    <body>
        <div id="global">
            <div id="contenu">
                <?= $contenu ?>
            </div> <!-- #contenu -->
            <script src="https://kit.fontawesome.com/3f4d148255.js" crossorigin="anonymous"></script>
            <script src=<?= $JSMode ?>></script>
        </div> <!-- #global -->
    </body>
</html>
