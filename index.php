<?php
require_once __DIR__ . '/app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G.J.Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://kit.fontawesome.com/171fe4038c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/css/style.css">
</head>

<body>
    <?php
    include_once('app/views/hero.php');
    include_once('app/views/myworks.php');
    include_once('app/views/contact.php');
    ?>
    <button id="toTop">
        <i class="fa-solid fa-angle-up"></i>
    </button>
    <!-- Script for stop form refreshing page on submit -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="app/js/scrolldown.js"></script>
    <script src="app/js/scrollup.js"></script>
</body>

</html>