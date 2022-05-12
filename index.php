<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bluedot | Corporate Mingle</title>
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/side-navigation.css" />
    <link rel="stylesheet" href="assets/css/giveaway.css" />
    <link rel="stylesheet" href="assets/css/services.css" />
    <link rel="stylesheet" href="assets/css/contact.css" />
    <link rel="stylesheet" href="assets/css/bluedotux.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- ===== BOX ICONS ===== -->

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">

    <!-- ===== BOX ICONS ===== -->

    <!-- Font Awesome CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- ===== Font Awesome CDN ===== -->

    <!-- ===== Google Fonts ===== -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

    <!-- ===== Google Fonts ===== -->

    <!--=============== REMIXICONS ===============-->

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== REMIXICONS ===============-->


</head>

<body>    


    <!-- https://www.youtube.com/watch?v=F0uED-w9E48&list=WL&index=81  https://codepen.io/ephs23/pen/jJMRLE -->
    <?php require_once("homepage/navigation/side-navigation.php") ?>

    <?php require_once("homepage/navigation/main-navigation.php") ?>

    <main id="main">

        <?php require_once("homepage/home.php")?>

        <?php require_once("homepage/giveaway/giveaway-html.php")?>

        <?php require_once("homepage/bluedotux.php")?>
    
        <?php require_once("homepage/services.php")?>

        <?php require_once("homepage/contact.php")?>


    </main>

    <script src="assets/js/index.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="assets/js/giveaway.js"></script>

</body>

</html>