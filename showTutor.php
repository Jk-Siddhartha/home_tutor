<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
session_start();
include_once './conn.php';
if (empty($_SESSION['user'])) {
    header("Location:index.php");
}

if (isset($_GET['query']) && $_GET['query'] == 'sendRequest') {
    try {
        $teacher_id = $_GET['id'];
        $teacher_name = $_GET['name'];
        $student_id = $_SESSION['user']['id'];
        $student_name = $_SESSION['user']['name'];
        $status = "Pending";
        $stmt = $conn->prepare('INSERT INTO requests (id,student_name,student_id,teacher_id,status) VALUES (0,?,?,?,?)');
        $stmt->bind_param('siis', $student_name, $student_id, $teacher_id, $status);
        if ($stmt->execute()) {
            echo "<p>You sent request to $teacher_name, to be your teacher</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
        } else {
            echo "<p>Something went wrong, please try again..</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
        }
    } catch (Exception $e) {
        echo "<p>You have already sent request to $teacher_name, to be your teacher</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
    }
    exit;
}


if (isset($_GET['query']) && $_GET['query'] == 'acceptRequest') {
    $reqID = $_GET['reqID'];
    $studentName = $_GET['studentName'];
    $status = "Accepted";
    $stmt = $conn->prepare('UPDATE requests SET status=? WHERE id=?');
    $stmt->bind_param('si', $status, $reqID);
    if ($stmt->execute()) {
        echo "<p>You accepted the request of $studentName, Now you are tutor of $studentName.</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
    } else {
        echo "<p>Something went wrong, please try again..</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
    }
    exit;
}


if (isset($_GET['id']) && isset($_GET['query']) && $_GET['query'] == 'showTutor') {
    $id =  $_GET['id'];

    //getting educational-qualification details
    $stmt = $conn->prepare('SELECT * FROM educational_qualification WHERE user_id=?');
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        $qualification = $res->fetch_assoc();

        $qualificationDiv = "<div class=\"right-bar Qualification\">
        <h3>Education Qualification Details</h3>
        <p>Highest Education : {$qualification['highest_qualification']}</p>
        <p>College (School) Name : {$qualification['highest_qualification_college']}</p>
        <p>Percentage : {$qualification['highest_qualification_percentage']} %</p>
        <p>Passing Year : {$qualification['highest_qualification_year']}</p>
    </div>";
    } else {
        $qualificationDiv = "Nothing to show";
    }


    $stmt = $conn->prepare('SELECT * FROM certifications WHERE user_id=?');
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        $certifications = $res->fetch_all(MYSQLI_ASSOC);

        $certificationsDiv = "<div class=\"right-bar Certifications\">
        <h3>Certifications</h3>";

        if (!empty($certifications)) {
            foreach ($certifications as $key => $value) {
                $certificationsDiv .= "<p>Certification : {$value['certificate']}</p>";
            }
        }

        $certificationsDiv .= "</div>";
    } else {
        $certificationsDiv = "Nothing to show";
    }

    $stmt = $conn->prepare('SELECT * FROM subjects WHERE user_id=?');
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        $subjects = $res->fetch_all(MYSQLI_ASSOC);

        $subjectsDiv = "<div class=\"right-bar Subjects-and-fees\">
            <h3>Subjects and fees</h3>
            <table border=\"1\">
            <tr>
                <td>Sr. No</td>
                <td>Subject</td>
                <td>Fees</td>
            </tr>
            ";

        if (!empty($subjects)) {
            foreach ($subjects as $key => $value) {
                $subjectsDiv .= "<tr>
                    <td>$key</td>
                    <td>{$value['subject']}</td>
                    <td>{$value['price']}/hr</td>
                    </tr>";
            }
        }

        $subjectsDiv .= "</table></div>";
    } else {
        $subjectsDiv = "nothing to show";
    }



    $sql = "SELECT * FROM users WHERE id=$id";
    $res = $conn->query($sql);
    if ($res->num_rows == 1) {
        $data = $res->fetch_assoc();
        echo "<div class=\"side-bar\">
                        
                            <img src=\"https://cdn-icons-png.flaticon.com/128/3641/3641353.png\">
                            <h3 onclick=\"open('home')\">{$data['name']}</h3>
                            <p onclick=\"openDiv('Qualification')\">Qualification</p>
                            <p onclick=\"openDiv('Certifications')\">Certifications</p>
                            <p onclick=\"openDiv('Subjects-and-fees')\">Subjects & Fees</p>
                        </div>
                        <div class=\"right-bar home\">
                            <div class=\"no-of-students\"></div>
                            <div class=\"contact-methods\">
                                <i class=\"fa-solid fa-message\"></i>
                                <i class=\"fa-solid fa-user-plus\" onclick=\"sendRequest({$data['id']},'{$data['name']}')\"></i>
                            </div>
                            <div class=\"popular-reviews\">
                                <i class=\"fa-solid fa-comment\"> Top Feedbacks</i>
                                <div class=\"reviews-cards\">
                                    <div class=\"review-card\">
    
                                    </div>
                                    <div class=\"review-card\">
    
                                    </div>
                                    <div class=\"review-card\">
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        " . $qualificationDiv . $certificationsDiv . $subjectsDiv . "
                        

            ";
    }
}


function showMessages($conn, $sender_id, $receiver_id, $name)
{
    $stmt = $conn->prepare('SELECT * FROM messages');
    $stmt->execute();
    $res = $stmt->get_result();
    $data = $res->fetch_all(MYSQLI_ASSOC);
    // exit;
    echo "<div class=\"chatbox-messages\" id=\"chatbox-messages\">";
    foreach ($data as $key => $value) {
        if ($value['sender_id'] == $sender_id && $value['receiver_id'] == $receiver_id) {
            echo "<p style=\"float:left;\">{$value['message']} <span>{$value['time']}</span> </p>";
        }

        if ($value['sender_id'] == $receiver_id && $value['receiver_id'] == $sender_id) {
            echo "<p style=\"background:rgba(26, 188, 156,0.15);float:right;\">{$value['message']} <span>{$value['time']}</span> </p>";
        }
    }
    echo "</div>";

    echo "
    <div class=\"input\">
        <input type=\"text\" name=\"\" id=\"msg\" placeholder=\"Type Message...\">
        <button type=\"button\" onclick=\"sendMessage($receiver_id,$name)\"><i class=\"fa-solid fa-chevron-right\"></i></button>
    </div>";
}


if (isset($_GET['query']) && $_GET['query'] == 'openMessage') {
    $sender_id = $_SESSION['user']['id'];
    $receiver_id = $_GET['id'];
    $name = $_GET['name'];
    showMessages($conn, $sender_id, $receiver_id, $name);
}


if (isset($_GET['query']) && $_GET['query'] == 'sendMessage') {
    $sender_id = $_SESSION['user']['id'];
    $receiver_id = $_GET['id'];
    $msg = $_GET['msg'];
    $name = $_GET['name'];
    $time = date('y-m-d h:i:s');

    $stmt = $conn->prepare('INSERT INTO messages (sender_id,receiver_id,message,time) VALUES (?,?,?,?)');
    $stmt->bind_param('iiss', $sender_id, $receiver_id, $msg, $time);
    $stmt->execute();


    showMessages($conn, $sender_id, $receiver_id, $name);
}


function checkMessages($conn, $sender_id, $receiver_id)
{
    $stmt = $conn->prepare('SELECT * FROM messages');
    $stmt->execute();
    $res = $stmt->get_result();
    $data = $res->fetch_all(MYSQLI_ASSOC);

    foreach ($data as $key => $value) {
        if ($value['sender_id'] == $sender_id && $value['receiver_id'] == $receiver_id) {
            echo "<p style=\"float:left;\">{$value['message']} <span>{$value['time']}</span> </p>";
        }

        if ($value['sender_id'] == $receiver_id && $value['receiver_id'] == $sender_id) {
            echo "<p style=\"background:rgba(26, 188, 156,0.15);float:right;\">{$value['message']} <span>{$value['time']}</span> </p>";
        }
    }
}

if (isset($_GET['query']) && $_GET['query'] == 'checkMessages') {
    $sender_id = $_SESSION['user']['id'];
    $receiver_id = $_GET['id'];
    checkMessages($conn, $sender_id, $receiver_id);
}
