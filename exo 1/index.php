<?php

require_once "UserModel.php";
require_once "UserController.php";
require_once "UserView.php";

if (isset($_POST['submit'])) {
    $controller = new UserController();
    $user = $controller->processRegistration();

    $view = new UserView();
    $view->display($user);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        $controller = new UserController();
        $controller->register();
    ?>
</body>

</html>