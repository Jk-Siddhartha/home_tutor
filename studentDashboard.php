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
        height: 80vh;
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
        height: 45vh;
        border-radius: 10px;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
        border: 1px solid red;

    }

    .messaging-chatbox-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2% 4%;
        background: green;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 15%;
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

    .chatbox-inner {
        border: 1px solid red;
        height: 85%;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        position: relative;
    }

    .chatbox-messages {
        border: 1px solid green;
        height: 85%;
        padding: 0.4rem 0.6rem;
        overflow-y: scroll;
        width: 100%;
    }

    .chatbox-messages::-webkit-scrollbar {
        width: 0.5rem;
        background: #000;
        border-radius: 10px;
    }

    .chatbox-messages p {
        margin-bottom: 0.3rem;
        padding: 0.3rem 0.6rem;
        border-radius: 20px;
        background: rgba(0, 0, 0, 0.15);
        font-size: 14px;
        width: fit-content;
    }

    .chatbox-messages p span{
        font-size: 10px;
    }

    .input {
        height: 15%;
        width: 100%;
        position: absolute;
        bottom: 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border: 1px solid rgba(0, 0, 0, 0.45);
        text-align: center;
    }

    .input input {
        border: none;
        width: 80%;
        outline: none;
        padding: 1% 4%;
    }

    .input button {
        width: 15%;
        text-align: center;
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
        width: 28%;
        padding: 1.5% 1%;
        margin: 1% 2%;
        float: left;
    }

    .class img {
        width: 100%;
        height: 20vh;
        object-fit: cover;
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

    .side-bar p:hover {
        cursor: pointer;
        text-decoration: underline;
    }

    .right-bar {
        width: 70%;
        height: auto;
        display: none;
    }

    .home {
        display: block;
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
    <?php
    include_once './conn.php';
    $status = "Accepted";
    $currDate = date('Y-m-d');
    $currTime = date('H:i');
    $stmt = $conn->prepare('SELECT teacher_id FROM requests WHERE student_id=? AND status=?');
    $stmt->bind_param('is', $_SESSION['user']['id'], $status);
    $stmt->execute();
    $res = $stmt->get_result();
    $data = $res->fetch_all(MYSQLI_ASSOC);

    $classes = [];
    foreach ($data as $key => $value) {
        $stmt = $conn->prepare('SELECT * FROM schedule_classes WHERE teacher_id=?');
        $stmt->bind_param('i', $value['teacher_id']);
        $stmt->execute();
        $res = $stmt->get_result();
        $newData = $res->fetch_all(MYSQLI_ASSOC);
        foreach ($newData as $newKey => $newValue) {
            $classes[] = $newValue;
        }
    }

    // print_r($classes);

    $currentClasses = [];
    $upcomingClasses = [];
    $pastClasses = [];

    foreach ($classes as $key => $value) {
        if ($value['date'] == $currDate) {
            if ($value['stiming'] > $currTime) {
                $upcomingClasses[] = $value;
            }

            if ($value['stiming'] <= $currTime && $value['etiming'] >= $currTime) {
                $currentClasses[] = $value;
            }

            if ($value['etiming'] < $currTime) {
                $pastClasses[] = $value;
            }
        }

        if ($value['date'] > $currDate) {
            $upcomingClasses[] = $value;
        }

        if ($value['date'] < $currDate) {
            $pastClasses[] = $value;
        }
    }

    ?>
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
            <?php
            if (count($currentClasses) > 0) {
                foreach ($currentClasses as $key => $value) {
                    echo "
                    <div class=\"class\">
                    <img src=\"https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais\">
                    <h4>{$value['subject']} Class</h4>
                    <p>Date : {$value['date']}</p>
                    <p>Timing:
                        <span>{$value['stiming']}</span>
                        To
                        <span>{$value['etiming']}</span>
                    </p>
                    <button type=\"button\">Take Class</button>
                </div>
                    ";
                }
            } else {
                echo "<p>No Classes Found..</p>";
            }
            ?>
        </div>
        <div class="past-classes">
            <?php
            foreach ($pastClasses as $key => $value) {
                echo "
                <div class=\"class\">
                <img src=\"https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais\">
                <h4>{$value['subject']} Class</h4>
                <p>Date : {$value['date']}</p>
                <p>Timing:
                    <span>{$value['stiming']}</span>
                    To
                    <span>{$value['etiming']}</span>
                </p>
                <button type=\"button\">Class Expired</button>
            </div>
                ";
            }
            ?>

        </div>
        <div class="my-tutors">
            <?php
            include_once './conn.php';
            $status = "Accepted";
            $stmt = $conn->prepare('SELECT teacher_id FROM requests WHERE student_id=? AND status=?');
            $stmt->bind_param('is', $_SESSION['user']['id'], $status);
            $stmt->execute();
            $res = $stmt->get_result();
            $teacherIDS = $res->fetch_all();
            $teacherData = [];
            foreach ($teacherIDS as $key => $value) {
                $stmt1 = $conn->prepare('SELECT * FROM users WHERE id=?');
                $stmt1->bind_param('i', $value[0]);
                $stmt1->execute();
                $res = $stmt1->get_result();
                $teacherData[] = $res->fetch_assoc();
            }

            foreach ($teacherData as $key => $value) {
                $stmt = $conn->prepare('SELECT profile_pic FROM personal_details WHERE user_id=?');
                $stmt->bind_param('i', $value['id']);
                $stmt->execute();
                $res = $stmt->get_result();
                $imgData = $res->fetch_column();
                $url = "data:image/jpeg;base64," . base64_encode($imgData);
                echo "<div class=\"tutor\">
                    <div>
                        <img src=\"$url\" class=\"tutor-pic\">
                        <h3>{$value['name']} | Tutor</h3>
                        <p>Education | Certifications | Subjects</p>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-message\"></i>
                    </div>
                </div>";
            }
            ?>
        </div>
        <div class="upcoming-classes">
            <?php
            foreach ($upcomingClasses as $key => $value) {

                echo "
                <div class=\"class\">
                <img src=\"https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais\">
                <h4>{$value['subject']} Class</h4>
                <p>Date : {$value['date']}</p>
                <p>Timing:
                    <span>{$value['stiming']}</span>
                    To
                    <span>{$value['etiming']}</span>
                </p>
                <button type=\"button\">Class Will Be Start</button>
            </div>
                ";
            }



            ?>
        </div>
        <div class="all-tutors">
            <?php
            include './conn.php';
            $sql = "SELECT * FROM users WHERE userType='tutor'";
            $res = $conn->query($sql);
            if ($res->num_rows > 0) {
                while ($data = $res->fetch_assoc()) {
                    $stmt = $conn->prepare('SELECT profile_pic FROM personal_details WHERE user_id=?');
                    $stmt->bind_param('i', $data['id']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $imgData = $result->fetch_column();
                    $url = "data:image/jpeg;base64," . base64_encode($imgData);
                    echo"<div class=\"tutor\">
                <div>
                    <img src=\"$url\" alt=\"\" class=\"tutor-pic\">
                    <h3>{$data['name']} | Tutor</h3>
                    <p>Education | Certifications</p>
                </div>
                <div>
                <i class=\"fa-solid fa-eye\" onclick=\"showTutor({$data['id']})\"></i>
                <i class=\"fa-solid fa-user-plus\" onclick=\"sendRequest({$data['id']},'{$data['name']}')\"></i>
                    <i class=\"fa-solid fa-message\" onclick=\"openMessage({$data['id']},'{$data['name']}')\"></i>

                </div>
            </div>";
                }
            }
            ?>
            <div class="show-tutor">
                <span class="back" onclick="closeTutor()">Back</span>
                <div class="tutor-info" id="tutor-info">

                </div>
            </div>

        </div>
    </div>
    <?php
    include './dashboard_fixed.php';
    ?>
</div>