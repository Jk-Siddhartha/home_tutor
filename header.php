<div class="header">
    <img src="./logo.png" alt="">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <?php
        if (!empty($_SESSION['user'])) {
            echo "<li><a href=\"dashboard.php\">Dashboard</a></li>";
            echo "<li><a href=\"earning_payments.php\">Earning & Payments</a></li>";
            echo "<li class=\"notifications\" ><a href=\"notifications.php\"><i class=\"fa-regular fa-bell\"></i></a></li>";
            echo "<li class=\"logout\"><a href=\"logout.php\"><i class=\"fa-solid fa-power-off\"></i></a></li>";
        } else {
            echo "<li><a href=\"login.php\">Login</a></li>
                <li><a href=\"register.php\">Register</a></li>";
        }
        ?>

    </ul>
</div>