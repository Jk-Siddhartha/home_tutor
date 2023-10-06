<?php
include './conn.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (empty($_SESSION['user'])) {
    header("Location:index.php");
}

function getNumberOfStudents($subject)
{
    return 20;
}


//schedule class
if (isset($_POST['schedule-class'])) {
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $stiming = $_POST['stiming'];
    $etiming = $_POST['etiming'];
    $teacher_id = $_SESSION['user']['id'];
    $teacher_name = $_SESSION['user']['name'];
    $no_of_students = getNumberOfStudents($subject);

    $stmt = $conn->prepare('INSERT INTO schedule_classes (subject,date,stiming,etiming,teacher_id,teacher_name,no_of_students) VALUES (?,?,?,?,?,?,?)');

    $stmt->bind_param('ssssisi', $subject, $date, $stiming, $etiming, $teacher_id, $teacher_name, $no_of_students);

    $stmt->execute();

    echo "<script>alert('class scheduled successfully !!')</script>";
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
            height: 100vh;
            overflow: hidden;
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
            padding: 0 2%;
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
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 99;
            background: rgba(0, 0, 0, 0.25);
        }

        /* complete profile css  */
        .complete-profile {
            padding: 0.2% 4%;
            color: red;
            font-weight: 900;
        }

        /* result div css  */
        .result {
            width: 100%;
            padding: 1% 0;
            background: rgb(46, 204, 113);
            position: absolute;
            left: 0;
            top: 0;
            display: none;
            align-items: center;
            justify-content: space-evenly;
            font-size: 18px;
        }

        .result p {
            color: red;
        }

        .result i {
            cursor: pointer;
            border: 2px solid red;
            color: red;
            padding: 0.2rem 0.2rem;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <?php
        include './header.php';
        ?>
        <div class="result" id="result">

        </div>
        <div class="complete-profile">
            <?php
            if ($_SESSION['profile'] != 100) {
                echo "<p>Complete the profile to active the account, Your profile score is {$_SESSION['profile']}%.
                    <a href=\"completeProfile.php\">Click here to complete</a>
                    </p>";
            }
            ?>
        </div>
        <?php
        if ($_SESSION['user']['userType'] == 'tutor') {
            include './tutorDashboard.php';
        } else {
            include './studentDashboard.php';
        }
        ?>
    </div>
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

        const tutorInfo = document.getElementById("tutor-info");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                tutorInfo.innerHTML = this.responseText;
            }
        }

        function showTutor(id) {
            const showTutor = document.querySelector('.show-tutor');
            showTutor.style.width = "100%";

            xhttp.open("GET", "showTutor.php?query=showTutor&id=" + id, true);
            xhttp.send();
            // alert(id);
        }

        function closeTutor() {
            const showTutor = document.querySelector('.show-tutor');
            showTutor.style.width = "0"
            showTutor.style.overflow = "hidden";
        }

        const result = document.querySelector('.result');
        var xhttp1 = new XMLHttpRequest();
        xhttp1.onreadystatechange = function() {
            if (xhttp1.readyState == 4 && xhttp1.status == 200) {
                result.innerHTML = this.responseText;
                result.style.display = "flex";
            }
        }


        function sendRequest(id, name) {
            // alert('Request send to '+id+' for be your teacher...');
            // alert(name);
            xhttp1.open("GET", `showTutor.php?query=sendRequest&id=${id}&name='${name}'`, true);
            xhttp1.send();
        }

        function hideResult() {
            result.style.display = "none";
        }


        function acceptRequest(requestID, studentName) {
            xhttp1.open("GET", `showTutor.php?query=acceptRequest&reqID=${requestID}&studentName='${studentName}'`, true);
            xhttp1.send();
        }


        function openDiv(elem) {
            const rightBars = document.querySelectorAll('.right-bar');
            for (let i = 0; i < rightBars.length; i++) {
                rightBars[i].style.display = "none";

            }
            document.querySelector('.' + elem).style.display = "block";
        }

        const chatboxInner = document.querySelector('.chatbox-inner');
        var xhttp2 = new XMLHttpRequest();
        xhttp2.onreadystatechange = function() {
            if (xhttp2.readyState == 4 && xhttp2.status == 200) {
                chatboxInner.innerHTML = this.responseText;
                // chatboxInner.style.display = "flex";
                chatboxInner.scrollTop = chatboxInner.scrollHeight;
            }
        }

        let myInterval;

        function checkMessages(id) {
            clearInterval(myInterval);
            myInterval = setInterval(() => {
                const chatboxMessages = document.getElementById('chatbox-messages');
                var xhttp3 = new XMLHttpRequest();
                xhttp3.onreadystatechange = function(){
                    if(xhttp3.readyState == 4 && xhttp3.status == 200){
                        chatboxMessages.innerHTML = this.responseText;
                    }
                }
                xhttp3.open("GET",`showTutor.php?query=checkMessages&id=${id}`,true);
                xhttp3.send();
            }, 1000);
        }


        function openMessage(id, name) {
            // alert(name);
            const chatboxTitle = document.querySelector('.chatbox-title');
            chatboxTitle.innerHTML = name;
            xhttp2.open("GET", `showTutor.php?query=openMessage&id=${id}&name='${name}'`, true);
            xhttp2.send();
            checkMessages(id);
        }


        function sendMessage(id, name) {
            // alert(name);
            var msg = document.getElementById("msg").value;
            xhttp2.open("GET", `showTutor.php?query=sendMessage&id=${id}&msg=${msg}&$name=${name}`, true);
            xhttp2.send();
        }
    </script>
</body>

</html>