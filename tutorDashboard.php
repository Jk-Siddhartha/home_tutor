<style>
    .current-classes,
    .upcoming-classes,
    .past-classes,
    .my-students,
    .schedule-classes {
        width: 100%;
        height: 83vh;
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
        height: 47vh;
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

    .my-students {
        padding: 1% 2%;
    }

    .student-requests {
        padding: 0.6rem;
        box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.45);
        margin-bottom: 0.5rem;
        width: 100%;
        overflow-x: scroll;
        display: flex;
    }


    .requested-student {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 18px;
        border: 1px solid rgba(0, 0, 0, 0.45);
        margin-right: 0.5rem;
        width: 50vh;
    }

    .requested-student i {
        background: green;
        color: #fff;
        padding: 1rem 1rem;
        font-size: 18px;

    }

    .requested-student p {
        text-transform: uppercase;
        padding: 0 0.5rem;
        font-size: 18px;

    }

    .requested-student button {
        color: #fff;
        background: #009506;
        padding: 0.5rem 1rem;
        font-size: 18px;

    }

    .student {
        cursor: pointer;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1% 2%;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
        margin-bottom: 1%;
    }

    .student:hover .student-pic {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        padding: 0;
    }

    .student>div:nth-child(1) {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .student>div:nth-child(1) h3 {
        color: #009506
    }

    .student>div:nth-child(1) p {
        color: rgba(0, 0, 0, 0.45);
        font-weight: 900;
    }

    .student img {
        width: 70px;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0.45);
        padding: 0.8%;
    }


    .student .fa-solid {
        border-radius: 50%;
        border: 1px solid #009506;
        padding: 0.6rem 0.6rem;
        margin-right: 0.5rem;
        color: #009506;
    }

    .student .fa-solid:hover {
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

    /* schedule class  */
    .schedule-classes h3 {
        text-align: center;
        padding: 1rem 0;
    }

    .schedule-classes form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }

    .schedule-classes form div {
        width: 25rem;
    }

    .schedule-classes form label {
        font-size: 18px;
    }

    .schedule-classes form div input {
        width: 15rem;
        padding: 0.4rem 0.6rem;
        float: right;
        font-size: 18px;
    }

    .schedule-classes form input[type="submit"] {
        cursor: pointer;
        margin: 1rem 0;
        font-size: 18px;
        padding: 0.4rem 2rem;
        background: #006266;
        color: #fff;
        border: none;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
    }
</style>
<div class="dashboard">
    <?php
    include_once './conn.php';
    $currDate = date('Y-m-d');
    $currTime = date('H:i');
    $teacherId = $_SESSION['user']['id'];

    $stmt = $conn->prepare('SELECT * FROM schedule_classes WHERE teacher_id=?');

    $stmt->bind_param('i', $teacherId);

    $stmt->execute();

    $res = $stmt->get_result();

    $data = $res->fetch_all(MYSQLI_ASSOC);
    $currentClasses = [];
    $upcomingClasses = [];
    $pastClasses = [];

    // print_r($data);
    foreach ($data as $key => $value) {
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
                <li onclick="switchTab(event)">Upcoming Classes</li>
                <li onclick="switchTab(event)">Past Classes</li>
                <li onclick="switchTab(event)">My Students</li>
                <li onclick="switchTab(event)">Schedule Classes</li>
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
        <div class="my-students">
            <div class="student-requests">
                <?php
                $stmt = $conn->prepare('SELECT * FROM requests WHERE teacher_id=?');
                $stmt->bind_param('i', $_SESSION['user']['id']);
                $stmt->execute();
                $res = $stmt->get_result();
                $data = $res->fetch_all(MYSQLI_ASSOC);
                // print_r($data);
                foreach ($data as $key => $value) {
                    if ($value['status'] == 'Pending') {
                        echo "<div class=\"requested-student\">
                        <i class=\"fa-solid fa-user-plus\"></i>
                        <p>{$value['student_name']}</p>
                        <button onclick=\"acceptRequest({$value['id']},'{$value['student_name']}')\">Accept Request</button>
                        </div>";
                    }
                }
                echo "</div>";


                foreach ($data as $key => $value) {
                    if ($value['status'] == 'Accepted') {
                        echo "<div class=\"student\">
                    <div>
                        <img src=\"https://cdn-icons-png.flaticon.com/128/3641/3641353.png\" class=\"student-pic\">
                        <h3>{$value['student_name']} | student</h3>
                        <p>Education | Certifications | Subjects</p>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-message\" onclick=\"openMessage({$value['student_id']},'{$value['student_name']}')\"></i>
                    </div>
                </div>";
                    }
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
            <div class="schedule-classes">
                <h3>Schedule Class</h3>
                <form method="post">
                    <div>
                        <label for="subject">Subject </label>
                        <input type="text" name="subject" id="" required>
                    </div>

                    <div>
                        <label for="date">Date </label>
                        <input type="date" name="date" id="" required>
                    </div>

                    <div>
                        <label for="stiming">Start Timing </label>
                        <input type="time" name="stiming" id="" required>
                    </div>

                    <div>
                        <label for="etiming">End Timing</label>
                        <input type="time" name="etiming" id="" required>
                    </div>

                    <input type="submit" name="schedule-class" value="Schedule Class">
                </form>
            </div>
        </div>
        <?php
        include './dashboard_fixed.php';
        ?>
    </div>