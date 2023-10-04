<div class="dashboard-fixed">
        <div class="profile-management">
            <img src="https://cdn-icons-png.flaticon.com/128/847/847969.png" alt="">
            <h2><?php echo $_SESSION['user']['name'] ?></h2>
            <h4><?php echo strtoupper($_SESSION['user']['userType']) ?></h4>
            <p><?php echo $_SESSION['user']['email'] ?></p>
            <p>(+91)<?php echo $_SESSION['user']['mobile'] ?></p>
            <p>
                <a href="dashboard_profile.php">See More</a>
            </p>
        </div>
        <div class="messaging-chatbox">
            <div class="messaging-chatbox-header">
                <h3>Messaging</h3>
                <div class="btns">
                    <span><i class="fa-solid fa-minimize"></i></span>
                    <span><i class="fa-solid fa-maximize"></i></span>
                </div>
            </div>
        </div>
    </div>