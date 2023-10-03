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

        .dashboard {
            padding: 1% 2%;
            display: flex;
            gap: 0.5rem;
            margin-bottom: 3%;
        }

        .dashboard-navbar {
            width: 75%;
            box-shadow: 1px -1px 0 rgba(0, 0, 0, 0.15);
        }

        .dashboard-navbar-menus {
            background: #009506;
        }

        .dashboard-navbar-menus ul {
            display: flex;
            gap: 0.4rem;
        }

        .dashboard-navbar-menus ul li {
            padding: 1% 1%;
            cursor: pointer;

        }

        .show-tutor-container {
            border: 1px solid red;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 99;
            background: rgba(0, 0, 0, 0.25);
        }
    </style>
</head>

<body>
    <div class="main-div">
        <?php
        include './header.php';
        ?>
        <?php
        if ($_SESSION['user']['userType'] == 'tutor') {
            include './tutorDashboard.php';
        } else {
            include './studentDashboard.php';
        }
        ?>
    </div>
    <?php
    include './footer.php';
    ?>
    <script>
        function switchTab(event) {
            let elem = event.target;
            if (!(elem.classList.contains("clicked"))) {
                let otherElems = document.querySelectorAll(".clicked");
                for (let i = 0; i < otherElems.length; i++) {
                    let divtoshow = otherElems[i].innerHTML.toLowerCase();
                    divtoshow = divtoshow.replace(" ", "-");
                    document.querySelector(`.${divtoshow}`).style.display = "none";
                    otherElems[i].classList.remove("clicked");

                }
                elem.classList.add("clicked");
                let divtoshow = elem.innerHTML.toLowerCase();
                divtoshow = divtoshow.replace(" ", "-");
                document.querySelector(`.${divtoshow}`).style.display = "block";

            }
        }

        function showTutor(id) {
            const showTutor = document.querySelector('.show-tutor');
            // alert(id);
            showTutor.style.width = "100%";
        }

        function closeTutor() {
            const showTutor = document.querySelector('.show-tutor');
            showTutor.style.width = "0"
            showTutor.style.overflow = "hidden";
        }
    </script>
</body>

</html>