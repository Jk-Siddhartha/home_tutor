<?php
session_start();
include './conn.php';

if (empty($_SESSION['user'])) {
    header("Location:index.php");
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
            min-height: 100vh;
            padding-bottom: 1rem;
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

        .complete-profile-navbar {
            width: 90%;
            margin: auto;
            box-shadow: 0 0 4px #006266;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        .complete-profile-menus {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .complete-profile-menus ul {
            display: flex;
        }

        .complete-profile-menus ul li {
            cursor: pointer;
            padding: 0.4rem 0.6rem;
        }

        .complete-profile-menus ul li:first-child {
            border-top-left-radius: 10px;
        }

        .Personal-Details,
        .Education-Qualifications,
        .Tuition-Details,
        .Others-Details {
            width: 100%;
            min-height: 83vh;
            display: none;
            background: #006266;
            padding-bottom: 1rem;
        }


        .clicked {
            background: #006266;
            color: #fff;
        }

        /* personal details css  */
        .Personal-Details {
            display: block;
            font-size: 18px;
            color: #fff;
        }

        .Personal-Details h2,
        .Education-Qualifications h2,
        .Tuition-Details h2,
        .Others-Details h2 {
            text-align: center;
            color: #fff;
            padding: 1% 0;
        }

        .Personal-Details form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2rem;
        }

        .Personal-Details form div {
            width: 95%;
        }

        .Personal-Details label {
            font-size: 20px;
            color: #fff;
        }

        .Personal-Details input,
        .Personal-Details select {
            padding: 0.4rem 0.6rem;
            font-size: 18px;
            width: 250px;
        }

        #address {
            width: 40%;
        }

        #profession {
            background: rgba(255, 255, 255, 0.7);
        }

        input[type="submit"] {
            cursor: pointer;
            color: #fff;
            background: #009506;
            border: none;
            padding: 0.8% 4%;
            font-size: 20px;
            border-radius: 4px;
        }

        /* educational qualification css */
        .Education-Qualifications form {
            color: #fff;
        }

        .Education-Qualifications form label {
            font-size: 20px;
        }

        .Education-Qualifications form input,
        .Education-Qualifications form select {
            padding: 0.4rem 0.6rem;
            font-size: 18px;
            width: 250px;
        }

        .certifications {
            margin-top: 2rem;
        }

        .certifications button {
            cursor: pointer;
            margin-left: 50%;
            margin-top: 2%;
            transform: translate(-50%, -2%);
            border: none;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            padding: 0.8% 2%;
            font-size: 18px;
        }

        .Education-Qualifications form input[type="submit"] {
            margin-left: 50%;
            margin-top: 2%;

            transform: translate(-50%, -2%);
        }


        /* tuition Details css  */
        .Tuition-Details form {
            color: #fff;
        }

        .Tuition-Details form label {
            font-size: 20px;
        }

        .Tuition-Details form input,
        .Tuition-Details form select {
            font-size: 18px;
            width: 250px;
        }

        .Tuition-Details form button {
            cursor: pointer;
            margin-left: 50%;
            margin-top: 2%;
            transform: translate(-50%, -2%);
            border: none;
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            padding: 0.8% 2%;
            font-size: 18px;
        }

        .Tuition-Details form input[type="submit"] {
            margin-left: 50%;
            margin-top: 2%;
            transform: translate(-50%, -2%);
        }

        /* other details css  */
        .Others-Details form {
            color: #fff;
        }

        .Others-Details form label {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <?php
        include './header.php';
        ?>
        <div class="complete-profile-navbar">
            <div class="complete-profile-menus">
                <ul>
                    <li class="clicked" onclick="switchTab(event)">Personal Details</li>
                    <li onclick="switchTab(event)">Education Qualifications</li>
                    <?php
                    if ($_SESSION['user']['userType'] != "student") {
                        echo '<li onclick="switchTab(event)">Tuition Details</li>
                        <li onclick="switchTab(event)">Others Details</li>';
                    }
                    ?>

                </ul>
            </div>
            <div class="Personal-Details">
                <h2>Personal Details</h2>
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name">Name </label>
                        <input type="text" name="name" id="name" value="<?php echo $_SESSION['user']['name'] ?>">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender">
                            <option>Select Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <label for="dob">Date of Birth </label>
                        <input type="date" name="dob" id="dob">

                    </div>
                    <div>

                        <label for="email">Email Address </label>
                        <input type="email" name="email" id="email" value="<?php echo $_SESSION['user']['email'] ?>">
                        <label for="mobile">Mobile </label>
                        <input type="number" name="mobile" id="mobile" value="<?php echo $_SESSION['user']['mobile'] ?>">
                        <label for="profession">Profession </label>
                        <input type="text" name="profession" id="profession" value="<?php echo $_SESSION['user']['userType'] ?>" readonly>
                    </div>
                    <div>

                        <label for="address">Address </label>
                        <input type="text" name="address" id="address">
                        <label for="pincode">Pincode </label>
                        <input type="number" name="pincode" id="pincode">
                    </div>
                    <div>

                        <label for="profile-pic">Profile Picture </label>
                        <input type="file" name="profile-pic" id="profile-pic">
                    </div>
                    <input type="submit" name="personal-details" value="Submit & Next">

                </form>
            </div>
            <div class="Education-Qualifications">
                <h2>Educational Qualifications</h2>
                <form method="post">
                    <label for="highest-qualification">Select Highest Qualification</label>
                    <select name="highest-qualification" id="">
                        <option value="max">PhD</option>
                        <option value="17">Post Graduation</option>
                        <option value="16">Graduation (4 Years)</option>
                        <option value="15">Graduation (3 Years)</option>
                        <option value="14">Diploma</option>
                        <option value="12">Intermediate</option>
                        <?php
                        if ($_SESSION['user']['userType'] == "student") {
                            echo "<option value\"10\">High School</option>";
                            echo "<option value\"9\">9th Standard</option>";
                            echo "<option value\"8\">8th Standard</option>";
                            echo "<option value\"7\">7th Standard</option>";
                            echo "<option value\"6\">6th Standard</option>";
                            echo "<option value\"5\">5th Standard</option>";
                        }

                        ?>
                    </select>
                    <label for="highest-qualification-college">Highest Qualification School/College </label>
                    <input type="text" name="highest-qualification-college" id="">
                    <label for="highest-qualification-percentage">Highest Qualification Percentage </label>
                    <input type="number" name="highest-qualification-percentage" id="">
                    <label for="highest-qualification-year">Highest Qualification Passing Year </label>
                    <input type="number" name="highest-qualification-year" id="">
                    <?php if ($_SESSION['user']['userType'] != "student") {
                        echo "<div class=\"certifications\">
                        <h2>Certifications</h2>
                        <div class=\"certification\">

                        </div>
                        <button type=\"button\" onclick=\"addCertificate()\">+ Add Certificate</button>
                        </div>";
                    }
                    ?>
                    <input type="submit" name="educational-qualification" value="Submit & Next">
                </form>
            </div>
            <?php
            if ($_SESSION['user']['userType'] != "student") {
                echo '<div class="Tuition-Details">
                    <h2>Tution Details</h2>
                    <form method="post">
                        <label for="year-experience">Year of Experience </label>
                        <select name="year-experience" id="">
                            <option value="0">0 Year</option>
                            <option value="1">1 Year</option>
                            <option value="2">2 Year</option>
                            <option value="3">3 Year</option>
                            <option value="4">4 Year</option>
                            <option value="5">5 Year</option>
                            <option value="6">6 Year</option>
                            <option value="7">7 Year</option>
                            <option value="8">8 Year</option>
                            <option value="9">9 Year</option>
                            <option value="10">10 Year</option>
                            <option value="10+">10+ Year</option>
                        </select>
                        <label for="month-experience">Months of Experience </label>
                        <select name="month-experience" id="">
                            <option value="0">0 Month</option>
                            <option value="1">1 Month</option>
                            <option value="2">2 Month</option>
                            <option value="3">3 Month</option>
                            <option value="4">4 Month</option>
                            <option value="5">5 Month</option>
                            <option value="6">6 Month</option>
                            <option value="7">7 Month</option>
                            <option value="8">8 Month</option>
                            <option value="9">9 Month</option>
                            <option value="10">10 Month</option>
                            <option value="11">11 Month</option>
                        </select>
                        <br>
                        <label for="mode">Mode of tuition </label>
                        <select name="mode" id="">
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                            <option value="any">Any (Both)</option>
                        </select>
                        <div class="subjects">
                            <div>
                                <label for="subject">Subject Name </label>
                                <input type="text" name="subject[]" id="">
                                <label for="price">Subject Fee (rupees/hr) </label>
                                <input type="number" name="price[]" id="">
                            </div>
                        </div>
                        <div>
    
                            <button type="button" onclick="addSubject()">add more subjects</button>
                        </div>
                        <input type="submit" name="tuition-details" value="Submit & Next">
    
                    </form>
                </div>
                <div class="Others-Details">
                    <h2>Others Details</h2>
                    <form method="post">
                        <label for="language">Languages Known </label>
                        &nbsp;&nbsp;Hindi <input type="radio" name="language" value="hindi">
                        English <input type="radio" name="language" value="english">
                        Both <input type="radio" name="language" value="both">
                        <br>
                        <br>
                        <label for="working-hours">No of hours you can give</label>
                        <input type="number" name="working-hours" id="">
                        <input type="submit" name="other-details" value="Submit">
                    </form>
                </div>';
            }
            ?>

        </div>
    </div>
    <script>
        function switchTab(event) {
            let elem = event.target;
            if (!(elem.classList.contains("clicked"))) {
                let otherElems = document.querySelectorAll(".clicked");
                for (let i = 0; i < otherElems.length; i++) {
                    let divtoshow = otherElems[i].innerHTML;
                    divtoshow = divtoshow.replace(" ", "-");
                    document.querySelector(`.${divtoshow}`).style.display = "none";
                    otherElems[i].classList.remove("clicked");

                }
                elem.classList.add("clicked");
                let divtoshow = elem.innerHTML;
                divtoshow = divtoshow.replace(" ", "-");
                document.querySelector(`.${divtoshow}`).style.display = "block";

            }
        }

        function addCertificate() {
            const certifications = document.querySelector('.certification');
            const data = `<label for="certification">Certification </label>
            <input type="text" name="certification[]">
            `;
            certifications.insertAdjacentHTML('beforeend', data);
        }


        function addSubject() {
            const subjects = document.querySelector('.subjects');
            const data = `<div>
                            <label for="subject">Subject Name </label>
                            <input type="text" name="subject[]" id="">
                            <label for="price">Subject Fee (rupees/hr) </label>
                            <input type="number" name="price[]" id="">
                        </div>
            `;
            subjects.insertAdjacentHTML('beforeend', data);
        }
    </script>
</body>

</html>