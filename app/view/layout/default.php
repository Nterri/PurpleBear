<?php

use Imy\Core\Router;

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тестовое задание</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <?php include tpl(strtolower(Router::$route) . '.' . (!empty($tpl) ? $tpl : 'init')); ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
