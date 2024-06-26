<?php
    session_start();
    include('operations/database.php');
    include('config.php');
    include('elements/dividers.php');
    if (isset($_SESSION['user'])) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user']);
        $stmt->execute();
        $userData = $stmt->fetchAll();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <link rel="icon" type="image/x-icon" href="assets/images/barbershop.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="vendor/css/bootstrap-min.css">
    <link rel="stylesheet" href="vendor/css/fontawesome.css">
    <link href="vendor/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/commonStyle.css" type="text/css"/>
    <link rel="stylesheet" href="styles/customScrollBar.css" type="text/css"/>
</head>
    <body> 
        <div>
            <?php
                include('elements/header.php');
            ?>
        </div>
        <div>
            <?php
                $site = 'home';
                $site = isset($_GET['site']) ? $_GET['site'] : 'home';
                if (!isset($site)) $site='home';
                $invalide = array('\\','/','/\/',':','.');
                $site = str_replace($invalide,' ',$site);
                if (!file_exists('pages/'. $site .'.php')) $site = 'error';
                include('pages/'. $site .'.php');
            ?>
        </div>
        <div>
            <?php
                include('elements/footer.php');
            ?>
        </div>
        
        <script src="vendor/js/fontawesome.js" crossorigin="anonymous"></script>
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/bootstrap.js"></script>
        <script src="vendor/js/aos.js"></script>
        <script src="scripts/shake.js"></script>
        <script src="scripts/logger.js"></script>
        <script src="scripts/md5.js"></script>
        <script src="scripts/api_calls.js"></script>
    </body>
</html>