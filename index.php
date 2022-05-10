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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- ===== BOX ICONS ===== -->

    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">

    <!-- ===== BOX ICONS ===== -->

</head>

<body>    


    <!-- https://www.youtube.com/watch?v=F0uED-w9E48&list=WL&index=81  https://codepen.io/ephs23/pen/jJMRLE -->
    <?php require_once("homepage/navigation/side-navigation.php") ?>

    <?php require_once("homepage/navigation/main-navigation.php") ?>

    <main id="main">

        <?php require_once("homepage/home.php")?>

        <?php require_once("homepage/giveaway/giveaway-html.php")?>
    
        <?php require_once("homepage/services.php")?>

        <section id="contact">

        </section>

    </main>

    <script src="assets/js/index.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="assets/js/giveaway.js"></script>

</body>

</html>