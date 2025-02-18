<?php

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'aboutMe':
            $titre = "About Me";
            $section = '../templates/acceuilView.php';
            break;
        case 'history':
            $titre = "History";
            $section = '../templates/acceuilView.php';
            break;
        case 'contact':
            $titre = "Contact";
            $section = '../templates/acceuilView.php';
            break;
        default:
            $titre = "Error 404";
            $section = '../templates/acceuilView.php';
    }
} else {
    $titre = "Home";
    $section = '../templates/acceuilView.php';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre ?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "../templates/inc/menuIncView.php"; ?>
    <?php include $section; ?>

    <?php include "../templates/inc/footerIncView.php"; ?>

    <script src="./js/script.js"></script>
</body>

</html>