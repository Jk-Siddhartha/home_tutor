<?php
session_start();
include './error_hander.php';
include './utilityFunctions.php';
include './conn.php';

if(!empty($_SESSION['user'])){
    header("Location:dashboard.php");
}
?>


<?php

if(isset($_POST['login'])){
    $username = parseInput($_POST['username']);
    $password = parseInput($_POST['password']);

    if($username && $password){
        $stmt = $conn->prepare('SELECT * FROM users WHERE email=? AND password=?');
        $stmt->bind_param('ss',$username,$password);
        $stmt->execute();
        $result = $stmt->get_result();
        $_SESSION['user'] = $result->fetch_assoc();
        $_SESSION['profile'] = 20;
        echo "<script>alert('login success!!')</script>";
        header("Location:dashboard.php");

    }else{
        echo "<script>alert('fields are empty!!')</script>";
    }
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

        .login-container {
            width: 60%;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: auto;
            margin-top: 4%;
            border-radius: 6px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.4);
        }

        .login-container img {
            width: 50%;
            height: 100%;
            object-fit: cover;
        }

        .login-container form {
            width: 50%;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            padding: 4% 2%;
            border-left: 1px solid rgba(0, 0, 0, 0.2);
        }

        .login-container form h2 {
            text-transform: uppercase;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.4);
        }

        .login-container form img {
            width: 100px;
            height: 100px;
            object-fit: contain;

        }

        .login-container form input {
            width: 80%;
            padding: 3% 4%;
            font-size: 16px;
        }

        .login-container form input[type="submit"] {
            cursor: pointer;
            border: 2px solid #1abc9c;
            background: #20bf6b;
            text-transform: uppercase;
            color: #fff;
            font-weight: 900;
        }

        .login-container form input[type="submit"]:hover {
            background: none;
            color: #1abc9c;
        }

        .login-container form div {
            width: 80%;
            display: flex;
            align-items: center;
        }

        .login-container form div input {
            width: 5%;
        }

        .login-container form div span {
            width: 40%;
        }

    </style>
</head>

<body>
    <div class="main-div">
    <?php
        include './header.php';
        ?>
        <div class="login-container">
            <img src="https://img.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg?size=626&ext=jpg&ga=GA1.1.1917642526.1694608725&semt=sph" alt="">
            <form method="post">
                <h2>Login Form</h2>
                <img src="https://cdn-icons-png.flaticon.com/128/2202/2202112.png" alt="">
                <input type="text" name="username" id="username" placeholder="Mobile No or Email...">
                <input type="password" name="password" id="password" placeholder="Password ...">
                <div>
                    <span>Remember me</span> <input type="checkbox" name="remember_me" id="">
                </div>
                <input type="submit" name="login" value="Login">
                <a href="forget_password.php">Forget Password ?</a>
            </form>
        </div>
    </div>
    <?php
        include './footer.php';
        ?>
    <script>
    </script>
</body>

</html>