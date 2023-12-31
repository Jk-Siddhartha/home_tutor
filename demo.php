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
        .intro-div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20%;
        }

        .intro-div img {
            width: 40%;
        }

        .demo-form {
            cursor: pointer;
            width: 33%;
            border: 1px solid green;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.25rem;
            padding: 1.5% 0;
            background: rgb(2, 48, 32, 0.8);
            color: #fff;
            border-radius: 4px;
            box-shadow:
                0 10px 0 #ddd,
                /* Top shadow */
                0 -3px 0 #ddd,
                /* Bottom shadow */
                3px 0 0 #ddd,
                /* Right shadow */
                -3px 0 0 #ddd;
            /* Left shadow */
        }

        .demo-form:hover{
            box-shadow:
                0 10px 0 #20bf6b,
                /* Top shadow */
                0 -3px 0 #20bf6b,
                /* Bottom shadow */
                3px 0 0 #20bf6b,
                /* Right shadow */
                -3px 0 0 #20bf6b;
            /* Left shadow */
        }

        .demo-form input,
        .demo-form select {
            width: 80%;
            padding: 2% 4%;
            font-size: 16px;
        }

        .demo-form div {
            width: 80%;
        }

        .demo-form div div {
            display: inline-flex;
            width: 100%;
        }

        .demo-form div div label {
            width: 70%;
        }

        .demo-form div input[type="text"] {
            width: 100%;
            margin: 2% 0;
            padding: 3% 5%;

        }


        input[type="submit"] {
            cursor: pointer;
            border: none;
            background: #20bf6b;
            color: #fff;
            font-weight: 900;
            font-size: 18px;
            box-shadow: -1.5px 0 0 0 rgba(0, 0, 0, 0.3),
                1.5px 0 0 0 rgba(0, 0, 0, 0.3),
                0 6px 0 0 rgba(0, 0, 0, 0.3),
                0 -1px 0 0 rgba(0, 0, 0, 0.3);
        }

        input[type="submit"]:hover {
            box-shadow: -1.5px 0 0 0 rgba(255, 255, 255, 0.3),
                1.5px 0 0 0 rgba(255, 255, 255, 0.3),
                0 2px 0 0 rgba(255, 255, 255, 0.3),
                0 -1px 0 0 rgba(255, 255, 255, 0.3);
        }



        .what-we-do {
            width: 100%;
            margin: 2% 0;
            /* border: 1px solid red; */
        }


        .what-we-do .sub-heading {
            text-align: center;
            color: rgba(0, 0, 0, 0.3);
            word-spacing: 5px;
            padding: 0.5% 0;
            font-size: 20px;
        }

        .what-we-do div {
            margin: 1% 0;
            padding: 1% 4%;
            background: rgba(0, 0, 0, 0.05);
        }

        .what-we-do div h2 {
            color: rgb(2, 48, 32, 1);
        }

        .what-we-do div .card {
            display: flex;
            align-items: flex-start;
            justify-content: space-evenly;
            width: 51%;
            padding: 2% 0;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
            background: #fff;
        }

        .what-we-do div .card .card-text {
            width: 65%;
            background: #fff;
        }

        .what-we-do div .card:nth-child(2) {
            float: left;
        }

        .what-we-do div .card:nth-child(3) {
            float: right;
        }

        .feedback-slider {
            padding: 0.5% 0;
        }

        .feedback-slider .carousel-container {
            background: rgba(0, 0, 0, 0.05);
            /* height: 60vh; */
            margin: 1% 0;
        }

        /* card carasoul */
        .carousel-container {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .carousel {
            display: flex;
            transition: transform 0.3s ease-in-out;
            padding: 1%;
        }

        .carousel>.card {
            width: calc(100% / 3);
            flex-shrink: 0;
            /* Add your card styling here */
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.25);
            background: rgb(2, 48, 32, 1);
            color: #ddd;
            margin-right: 0.4%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            padding: 2% 1.5%;
        }

        .carousel>.card>img {
            width: 20%;
        }

        .carousel>.card>p {
            text-align: center;
        }

        .prev-button,
        .next-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            border-radius: 50%;
            padding: 1% 1.5%;
            font-size: 20px;
            border: none;
            background: rgba(0, 0, 0, 0.3);
            color: #ddd;
        }

        .prev-button:hover,
        .next-button:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .next-button {
            right: 0;
        }
    </style>
</head>

<body>
    <div class="main-div">
    <?php
        include './header.php';
        ?>
        <div class="intro-div">
            <img src="https://img.freepik.com/free-vector/lesson-concept-illustration_114360-7937.jpg?size=626&ext=jpg&ga=GA1.1.1917642526.1694608725&semt=sph" alt="">
            <form class="demo-form">
                <h2>Book free demo</h2>
                <input type="text" name="name" id="name" placeholder="Name...">
                <input type="email" name="email" id="email" placeholder="Email...">
                <input type="number" name="phone" id="phone" placeholder="Phone...">
                <select name="mode" id="mode">
                    <option>Select your mode</option>
                    <option value="offline">Offline</option>
                    <option value="online">Online</option>
                </select>
                <select name="class" id="class">
                    <option>Select your class</option>
                    <option value="8">8th Class</option>
                    <option value="9">9th Class</option>
                    <option value="10">10th Class</option>
                    <option value="11">11th Class</option>
                    <option value="12">12th Class</option>
                    <option value="BA">BA</option>
                    <option value="B.Sc">B.Sc</option>
                    <option value="BCA">BCA</option>
                    <option value="B.Tech/BE">B.Tech/BE</option>
                </select>
                <select name="subject" id="subject">
                    <option>Select your subject</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option>
                    <option value="Computers">Computers</option>
                    <option value="English">English</option>
                    <option value="Social Science">Social Science</option>
                </select>
                <div>
                    <div>
                        <label for="add-custom-subject">Add custom subject :</label>
                        <input type="checkbox" name="add-custom-subject" id="add-custom-subject">
                    </div>
                    <input type="text" name="custom-subject" id="custom-subject" placeholder="Add custom subject...">
                </div>
                <input type="submit" name="book-demo" value="Book Demo">
            </form>
        </div>
        <?php include './what_we_do.php'  ?>
        <?php include './feedback.php' ?>
        <?php
        include './footer.php';
        ?>
    </div>
    <script>
        const exploreServices = document.getElementById("explore-services-1");

        exploreServices.addEventListener('mousedown', () => {
            exploreServices.classList.add('box-shadow-active');
            exploreServices.classList.remove('.explore-services');

        });

        exploreServices.addEventListener('mouseup', () => {
            exploreServices.classList.remove('box-shadow-active');
            exploreServices.classList.add('.explore-services');
        });


        const carousel = document.querySelector('.carousel');
        const prevButton = document.querySelector('.prev-button');
        const nextButton = document.querySelector('.next-button');
        let currentIndex = 0;

        nextButton.addEventListener('click', () => {
            if (currentIndex < 3) {
                currentIndex++;
                translateCarousel();
            }
        });

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                translateCarousel();
            }
        });

        function translateCarousel() {
            const translateXValue = -currentIndex * 100 / 3;
            carousel.style.transform = `translateX(${translateXValue}%)`;
        }
    </script>
</body>

</html>