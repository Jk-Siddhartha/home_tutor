<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<style>
    .current-classes,
    .upcoming-classes,
    .past-classes,
    .all-tutors,
    .my-tutors {
        width: 100%;
        height: 90vh;
        overflow-y: scroll;
        display: none;
    }

    .clicked {
        background: #006266;
        color: #fff;
    }


    .dashboard-fixed {
        width: 25%;
    }


    .profile-management {
        width: 95%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.2rem;
        border-radius: 10px;
        border-top: 40px solid green;
        padding: 2.5% 0;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);

    }

    .profile-management img {
        width: 25%;
    }

    .messaging-chatbox {
        margin: 2% 0;
        width: 95%;
        height: 50vh;
        border-radius: 10px;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);

    }

    .messaging-chatbox-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2% 4%;
        background: green;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btns {
        width: 30%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .btns span {
        cursor: pointer;
        margin-left: 15px;
    }



    /* student dashboard css  */
    .current-classes {
        display: block;
    }

    .all-tutors,
    .my-tutors {
        padding: 1% 2%;
    }

    .tutor {
        cursor: pointer;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1% 2%;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
        margin-bottom: 1%;
    }

    .tutor:hover .tutor-pic {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        padding: 0;
    }

    .tutor>div:nth-child(1) {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .tutor>div:nth-child(1) h3 {
        color: #009506
    }

    .tutor>div:nth-child(1) p {
        color: rgba(0, 0, 0, 0.45);
        font-weight: 900;
    }

    .tutor img {
        width: 70px;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0.45);
        padding: 0.8%;
    }


    .tutor .fa-solid {
        border-radius: 50%;
        border: 1px solid #009506;
        padding: 0.6rem 0.6rem;
        margin-right: 0.5rem;
        color: #009506;
    }

    .tutor .fa-solid:hover {
        background: #009506;
        color: #fff;
    }

    .current-classes,
    .past-classes,
    .upcoming-classes {
        padding: 1% 2%;
    }

    .class {
        border: 1px solid rgba(0, 0, 0, 0.45);
        width: 40%;
        padding: 1.5% 1%;
        margin: 1% 2%;
        float: left;
    }

    .class img {
        width: 100%;
    }

    .class h4,
    .class p {
        text-align: center;
    }

    .class p {
        margin: 0.5rem 0;
    }

    .class button {
        cursor: pointer;
        width: 100%;
        text-align: center;
        font-size: 16px;
        border: none;
        background: #006266;
        color: #fff;
        padding: 2% 0;
    }

    .past-classes {
        filter: grayscale(1);
    }

    .all-tutors {
        position: relative;
    }

    .show-tutor {
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #fff;
        overflow: hidden;
    }

    .back {
        cursor: pointer;
        position: absolute;
        text-transform: uppercase;
        top: 2%;
        left: 2%;
        font-weight: 900;
    }

    .back:hover {
        opacity: 0.7;
    }


    .tutor-info {
        position: absolute;
        width: 70%;
        height: 55vh;
        display: flex;
        border-radius: 10px;
        left: 50%;
        top: 40%;
        transform: translate(-50%, -40%);
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
    }

    .side-bar {
        width: 30%;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        background: #006266;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 4% 0;
        color: #BDDBFF;
    }

    .side-bar img {
        width: 35%;
        border: 2px solid #409CE2;
        border-radius: 50%;
        padding: 2% 2.5%;
    }

    .right-bar {
        width: 70%;
        height: auto;
    }

    .no-of-students {
        width: 85%;
        height: 10%;
        margin: auto;
        margin-top: 4%;
        border-radius: 6px;
        box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.5);
    }

    .contact-methods {
        margin: 0.4rem 0;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2rem;
    }


    .contact-methods i {
        cursor: pointer;
        color: #006266;
        font-size: 20px;
    }

    .contact-methods i:hover {
        scale: 1.2;
    }

    .popular-reviews {
        color: #006266;
        padding: 2% 8%;
    }

    .reviews-cards {
        margin-top: 0.8rem;
        height: 60%;
        box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.5);
    }
</style>
<div class="dashboard">
    <div class="dashboard-navbar">
        <div class="dashboard-navbar-menus">
            <ul>
                <li class="clicked" onclick="switchTab(event)">Current Classes</li>
                <li class="unclicked" onclick="switchTab(event)">Upcoming Classes</li>
                <li class="unclicked" onclick="switchTab(event)">Past Classes</li>
                <li class="unclicked" onclick="switchTab(event)">My Tutors</li>
                <li class="unclicked" onclick="switchTab(event)">All Tutors</li>
            </ul>
        </div>
        <div class="current-classes">
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Take Class</button>
            </div>
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Take Class</button>
            </div>
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Take Class</button>
            </div>
        </div>
        <div class="past-classes">
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Expired</button>
            </div>
        </div>
        <div class="my-tutors">
            <div class="tutor">
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/128/3641/3641353.png" alt="" class="tutor-pic">
                    <h3>Tutor Name | Tutor</h3>
                    <p>Education | Certifications | Subjects</p>
                </div>
                <div>
                    <i class="fa-solid fa-message"></i>

                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
        </div>
        <div class="upcoming-classes">
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">10 Mins to Class</button>
            </div>
        </div>
        <div class="all-tutors">
            <?php
            include './conn.php';
            $sql = "SELECT * FROM users WHERE userType='tutor'";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($data = $res->fetch_assoc()) {
                    echo
                    "<div class=\"tutor\" onclick=\"showTutor({$data['id']})\">
                <div>
                    <img src=\"https://cdn-icons-png.flaticon.com/128/3641/3641353.png\" alt=\"\" class=\"tutor-pic\">
                    <h3>{$data['name']} | Tutor</h3>
                    <p>Education | Certifications | {$data['subject']}</p>
                </div>
                <div>
                    <i class=\"fa-solid fa-message\"></i>

                    <i class=\"fa-solid fa-phone\"></i>
                </div>
            </div>";
                }
            }
            ?>
            <div class="show-tutor">
                <span class="back" onclick="closeTutor()">Back</span>
                <div class="tutor-info">
                    <div class="side-bar">

                    </div>
                    <div class="right-bar">
                        <div class="no-of-students"></div>
                        <div class="contact-methods">
                            <i class="fa-solid fa-message"></i>
                            <i class="fa-solid fa-phone"></i>
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        <div class="popular-reviews">
                            <i class="fa-solid fa-comment"> Top Feedbacks</i>
                            <div class="reviews-cards">
                                <div class="review-card">

                                </div>
                                <div class="review-card">

                                </div>
                                <div class="review-card">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    include './dashboard_fixed.php';
    ?>
</div>