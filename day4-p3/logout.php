<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            margin: auto;
            text-align: center;
            padding:10px;
            background: lightseagreen;
            font-size: 18px;
            color: lightcyan;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    require_once "nav.php";
    session_start();
    unset($_SESSION['username']);
    session_regenerate_id();
    session_destroy();
    ?>
</div>
</body>
</html>
