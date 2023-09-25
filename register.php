<?php
session_start();
include './error_hander.php';
include './utilityFunctions.php';
include './conn.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_SESSION['user'])){
    header("Location:dashboard.php");
}

?>

<?php
if (isset($_POST['register'])) {
    $name = parseInput($_POST['name']);
    $mobile = parseInput($_POST['mobile']);
    $email = parseInput($_POST['email']);
    $type = parseInput($_POST['type']);
    $subject = parseInput($_POST['subject']);

    if($name && $mobile && $email && $type && $subject){
        $stmt = $conn->prepare('INSERT INTO users (name,mobile,email,userType,subject) VALUES (?,?,?,?,?)');
        $stmt->bind_param('sisss',$name,$mobile,$email,$type,$subject);
        $stmt->execute();
        echo "<script>alert('Register Successfully !!')</script>";
        $stmt->close();
    }else{
        echo "<script>alert('Fields are empty !!')</script>";
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
            margin-top: 1%;
            border-radius: 6px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.4);
            margin-bottom: 3%;
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
            padding: 2% 4%;
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

        .login-container form select {
            cursor: pointer;
            padding: 2% 4%;
            font-size: 16px;
            width: 80%;
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

        /*search feature */
        .search-container {
            position: relative;
        }

        #search-input {
            width: 100%;
            padding: 10px;
        }

        #item-list {
            list-style: none;
            padding: 0;
            display: none;
            position: absolute;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        #item-list li {
            padding: 5px;
            cursor: pointer;
        }

        #selected-items {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
        }

        /* Style for selected items */
        .selected-item {
            background-color: #12CBC4;
            color: #fff;
            padding: 3px 8px;
            margin-right: 5px;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <?php
        include './header.php';
        ?>
        <div class="login-container">
            <img src="https://img.freepik.com/free-vector/privacy-policy-concept-illustration_114360-7853.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=sph" alt="">
            <form method="post">
                <h2>Registeration Form</h2>
                <img src="https://cdn-icons-png.flaticon.com/128/2202/2202112.png" alt="">
                <input type="text" name="name" id="name" placeholder="Name ...">
                <input type="text" name="mobile" id="mobile" placeholder="Mobile ...">
                <input type="email" name="email" id="email" placeholder="Email ...">
                <select name="type" id="type">
                    <option>Select Who you are</option>
                    <option value="tutor">I am Tutor</option>
                    <option value="student">I am Student</option>
                </select>
                <select name="subject" id="subject">
                    <option>-- Select subject --</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="English">English</option>
                    <option value="Grammer">Grammer</option>
                    <option value="Social Science">Social Science</option>
                    <option value="Computers">Computers</option>
                    <option value="All">All</option>
                    <option value="Any">Any</option>
                </select>
                <input type="submit" name="register" value="Register">
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