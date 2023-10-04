<?php
session_start();
include './conn.php';
if (empty($_GET['id']) || empty($_SESSION['user'])) {
    header("Location:index.php");
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
