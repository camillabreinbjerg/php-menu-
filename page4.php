<!doctype html>
<?php $curpage = basename($_SERVER['PHP_SELF']);?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modul 2 / PHP menu</title>
        <link rel="stylesheet" href="menu.css">
    </head>

<body>
    <?php
        include 'menu.php';
    ?>
    <h1>Page 4</h1>
    <p>Dette er en test på page 4</p>

    <?php
        include 'footer.php';
    ?>
