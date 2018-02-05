<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 04/02/2018
 * Time: 12:05
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Project name</a>
        </div>
    </div>
</div>

<div class="container" >
    <div class="starter-template" style="padding-top: 100px">
        <?= $content; ?>
    </div>

</div> <!-- /container -->

</body>
</html>

