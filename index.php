<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discuss Project</title>
    <?php
    include('./client/CommonFiles.php')
    ?>
</head>
<body>
    <?php
    include('./client/header.php');

    if(isset($_GET['signup'])){
    include('./client/signup.php');
    }
    else if(isset($_GET['login'])){
    include('./client/login.php');
    }
    ?>
</body>
</html>