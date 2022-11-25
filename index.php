
<?php
    $pages = scandir('pages/');
    if (isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php', $pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page="home";
    }

    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/animate.css">
    <link rel="stylesheet" href="assets/Fonts/PAPYRUS.TTF">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-mobile.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <title>Valerie Reversat Sophrologue à contes, 06</title>
</head>

<body>

    <?php
        include 'pages/'.$page.'.php';
    ?>


<link rel="stylesheet" href="./assets/js/bootstrap.min.js">
<link rel="stylesheet" href="assets/js/scripts.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>