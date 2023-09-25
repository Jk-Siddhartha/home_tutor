<?php
include './error_hander.php';
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
        .sub-heading {
            text-align: justify;
            color: rgba(0, 0, 0, 0.3);
            word-spacing: 5px;
            padding: 0.5% 4%;
            font-size: 18px;
        }

        .sub-heading-1 {
            text-align: center;
            color: #e84118;
            word-spacing: 5px;
            padding: 0.5% 4%;
            font-size: 18px;
        }

        .services-inner {
            display: flex;
            align-items: flex-start;
            justify-content: space-evenly;
            padding: 1% 0;
        }

        .services-inner .card {
            cursor: pointer;
            background: rgb(2, 48, 32, 0.9);
            width: 47%;
            border-radius: 10px;
            padding: 1.5% 1%;
            box-shadow: 0 10px 0 0 rgba(0, 0, 0, 0.5),
                0 -3px 0 0 rgba(0, 0, 0, 0.5),
                3px 0 0 0 rgba(0, 0, 0, 0.5),
                -3px 0 0 0 rgba(0, 0, 0, 0.5);

        }

        .services-inner .card:hover {
            box-shadow: 0 10px 0 0 #20bf6b,
                0 -3px 0 0 #20bf6b,
                3px 0 0 0 #20bf6b,
                -3px 0 0 0 #20bf6b;
        }

        .services-inner .card h3 {
            text-align: center;
            padding: 1% 0;
            color: #ddd;
            text-transform: uppercase;
            text-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
            word-spacing: 5px;
        }

        .services-inner .card i {
            color: #20bf6b;
        }

        .services-inner .card p {
            color: #ddd;
            font-size: 16px;
            margin: 0.3rem 0;
        }

        .book-demo {
            margin-top: 3%;
            display: inline-flex;
            cursor: pointer;
            background: #20bf6b;
            color: #fff;
            padding: 1% 2%;
            font-size: 18px;
            border-radius: 4px;
            box-shadow: -1.5px 0 0 0 rgba(255, 255, 255, 0.3),
                1.5px 0 0 0 rgba(255, 255, 255, 0.3),
                0 6px 0 0 rgba(255, 255, 255, 0.3),
                0 -1px 0 0 rgba(255, 255, 255, 0.3);
        }

        .box-shadow-active {
            margin-top: 4%;
            cursor: pointer;
            border: none;
            background: #20bf6b;
            color: #fff;
            padding: 1% 2%;
            font-size: 18px;
            border-radius: 4px;
            box-shadow: -1.5px 0 0 0 rgba(255, 255, 255, 0.3),
                1.5px 0 0 0 rgba(255, 255, 255, 0.3),
                0 2px 0 0 rgba(255, 255, 255, 0.3),
                0 -1px 0 0 rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body>
    <div class="main-div">
    <?php
        include './header.php';
        ?>
        <div class="services-container">
            <h2 class="heading">Our Services</h2>
            <p class="sub-heading">We offer a comprehensive platform bridging the gap between exceptional tutors and eager students. Our mission is to connect both tutors and students seamlessly, fostering a vibrant learning community. Whether you seek in-person or online tutoring, we provide world-class education services with the utmost emphasis on security and privacy. Join us and elevate your educational journey today!</p>

            <p class="sub-heading-1">Note : We do the background check for both the students and tutors and ensures the best for both.</p>

            <div class="services-inner">
                <div class="card">
                    <h3>Services for Students</h3>
                    <p><i class="fa-solid fa-feather"> Demo Classes:</i> we provide you free demo classes with the same excellent pace of study and ensure you with the same energy for the whole journey.</p>
                    <p><i class="fa-solid fa-feather"> One to One Learning support:</i> we provide you with the one to one interactive learning with the great tutors across globe available.</p>
                    <p><i class="fa-solid fa-feather"> Tutoring Services:</i> Personalized tutoring in various subjects to help students understand and excel in their coursework.</p>
                    <p><i class="fa-solid fa-feather"> Study Resources:</i> Access to study guides, practice tests, and educational materials to enhance learning.</p>
                    <p><i class="fa-solid fa-feather"> Career Counseling:</i> Guidance on career choices, job market insights, and help with creating resumes and preparing for interviews.</p>
                    <p><i class="fa-solid fa-feather"> Financial Aid Assistance:</i> Help with applying for scholarships, grants, and financial aid to make education more affordable.</p>
                    <p><i class="fa-solid fa-feather"> Select your tutor:</i> With the help of previous ratings and feedback you can select your tutor which fits for you.</p>
                    <p><i class="fa-solid fa-feather"> Rate & Report:</i> You can rate and report for your tutor.</p>
                    
                    <a href="demo.php" class="book-demo" id="book-demo">Book Free Demo</a>
                </div>
                <div class="card">
                    <h3>Services for Tutors</h3>
                    <p><i class="fa-solid fa-feather"> Free Joining:</i> we are here with free and easy joining of the tutors across the whole globe, and open to join any tutor who possess the passion of teaching.</p>
                    <p><i class="fa-solid fa-feather"> Easy Student Finding:</i> we provide the best platform where tutors can easily find the students to teach either in the group or in one to one session.</p>
                    <p><i class="fa-solid fa-feather"> Easy Payment Method:</i> Streamline payments with our hassle-free payment method.</p>
                    <p><i class="fa-solid fa-feather"> Student Progress Tracking:</i> Tools to monitor and assess student progress and performance.</p>
                    <p><i class="fa-solid fa-feather"> Feedback and Reviews:</i> A system for collecting feedback and reviews from students to build a positive reputation.</p>
                    <p><i class="fa-solid fa-feather"> Track Student Progress:</i>
                        Tools to monitor and assess student progress and performance.</p>
                    <p><i class="fa-solid fa-feather"> Technical Support:</i> Assistance with using technology and online tools for teaching.</p>
                    <p><i class="fa-solid fa-feather"> Administrative Assistance:</i> Support with administrative tasks, such as scheduling, billing, and record-keeping.</p>
                </div>
            </div>
        </div>
    </div>
        <?php
        include './footer.php';
        ?>
    <script>
        const bookDemo = document.getElementById("book-demo");

        bookDemo.addEventListener('mousedown', () => {
            bookDemo.classList.add('box-shadow-active');
            bookDemo.classList.remove('.explore-services');

        });

        bookDemo.addEventListener('mouseup', () => {
            bookDemo.classList.remove('box-shadow-active');
            bookDemo.classList.add('.explore-services');
        });
    </script>
</body>

</html>