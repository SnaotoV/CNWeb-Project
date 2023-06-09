<?php
require_once '../connectData.php';
use App\Controler\Router;
use App\Controler\controlUrl;
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./image/view/logo.jpg" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
		</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
		</script>
</head>
<body>
<div id="page">
    <div id="header" class="header">
            <div class="row m-0">
                <h1><img src="image//view/logoPage.jpg" class="rounded-circle" /></h1>
                <div class="display-4 align-self-center ml-4 name-shop"><i>HandMade</i></div>
            </div>
        </div>
        <?php
    $Router = new Router($PDO);
    $request = $_SERVER['REQUEST_URI'];
    require_once '../paterial/header.php';
    $Router->Router($request);
    require_once '../paterial/footer.php';
    ?>
</div>
</body>
</html>