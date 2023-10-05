<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include './conn.php';
if (empty($_SESSION['user'])) {
    header("Location:index.php");
}

if ($_GET['query'] == 'sendRequest') {
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


if ($_GET['query'] == 'acceptRequest') {
    $reqID = $_GET['reqID'];
    $studentName = $_GET['studentName'];
    $status = "Accepted";
    $stmt = $conn->prepare('UPDATE requests SET status=? WHERE id=?');
    $stmt->bind_param('si', $status, $reqID);
    if ($stmt->execute()) {
        echo "<p>You accepted the request of $studentName, Now you are tutor of $studentName.</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
    }else{
        echo "<p>Something went wrong, please try again..</p><i class=\"fa-solid fa-xmark\" onclick=\"hideResult()\"></i>";
    }
    exit;
}


$id =  $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$res = $conn->query($sql);
if ($res->num_rows == 1) {
    $data = $res->fetch_assoc();
    echo "<div class=\"side-bar\">
                        <img src=\"https://cdn-icons-png.flaticon.com/128/3641/3641353.png\">
                        <h3>{$data['name']}</h3>
                        <p>Qualification</p>
                        <p>Certifications</p>
                        <p>{$data['subject']}</p>
                        <p>Ratings</p>
                        <p>Price</p>
                    </div>
                    <div class=\"right-bar\">
                        <div class=\"no-of-students\"></div>
                        <div class=\"contact-methods\">
                            <i class=\"fa-solid fa-message\"></i>
                            <i class=\"fa-solid fa-phone\"></i>
                            <i class=\"fa-solid fa-user-plus\"></i>
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
        ";
}
