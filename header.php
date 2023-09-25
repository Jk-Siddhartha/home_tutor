<div class="header">
    <img src="./logo.png" alt="">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <?php
        if (!empty($_SESSION['user'])) {
            echo "<li><a href=\"logout.php\">Logout</a></li>";
        } else {
            echo "<li><a href=\"login.php\">Login</a></li>
                <li><a href=\"register.php\">Register</a></li>";
        }
        ?>

    </ul>
</div>