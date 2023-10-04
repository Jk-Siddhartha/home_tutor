<?php
session_start();
include './conn.php';

if (empty($_SESSION['user'])) {
    header("Location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Tutor | Tutor for everyone</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="common.css">
    <style>
        .main-div {
            width: 100%;
            min-height: 100vh;
            padding-bottom: 1rem;
        }

        .main-div::-webkit-scrollbar {
            display: none;
        }

        .notifications>a {
            background: none !important;
            color: #009506 !important;
            border: none !important;
            font-size: 20px;
        }

        .logout>a {
            background: none !important;
            color: red !important;
            border: none !important;
            font-size: 20px;
        }

        
    </style>
</head>

<body>
    <div class="main-div">
        <?php
        include './header.php';
        ?>
        
    </div>
    
</body>

</html>