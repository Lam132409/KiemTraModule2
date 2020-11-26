<?php
require "MVC/model/DBConnection.php";
require "MVC/model/ProductDB.php";
require "MVC/model/Product.php";
require "MVC/controller/ProductController.php";

use \Controller\ProductController;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supermarket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">Supermarket Management</a>
    </div>
    <?php
    $controller = new ProductController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
    switch ($page) {
        case 'add':
            $controller->addProduct();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'edit':
            $controller->edit();
            break;
        case 'search':
            $controller->search();
            break;
        default:
            $controller->viewProduct();
            break;
    }
    ?>
</div>
</body>

</html>