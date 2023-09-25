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
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .slide {
            width: 100%;
            height: 70vh;
            background: rgb(2, 48, 32, 0.9);
            display: none;
            align-items: flex-start;
            justify-content: space-between;
            padding: 0.4% 0;
            float: left;
        }

        .slide.active {
            display: flex;
        }

        .intro-text {
            width: 50%;
            color: #fff;
            padding: 5% 2.5%;
        }

        .intro-text h2 {
            font-size: 30px;
        }

        .intro-text h2 span {
            font-family: 'Abril Fatface', cursive;
        }

        .intro-text p {
            text-align: justify;
            color: rgba(255, 255, 255, 0.75);
            margin: 1% 0;
        }

        .explore-services {
            margin-top: 5%;
            cursor: pointer;
            border: none;
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
            margin-top: 6%;
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

        .intro-div-1>img {
            width: 50%;
            height: 100%;
            object-fit: cover;
            transform: rotateY(-180deg);

        }

        .intro-div-2>img {
            width: 45%;
            height: 100%;
            object-fit: contain;

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
            <div class="intro-div-1 slide">
                <div class="intro-text">
                    <h2><span>HOME TUTOR</span> - Elevate Your Learning Journey</h2>
                    <p>Unlock the power of personalized education with Home Tutor! Discover expert tutors for both offline and online learning, tailored to your unique needs and goals. Whether you're seeking in-person guidance or virtual lessons, we're your one-stop destination for school & academic excellence.</p>
                    <button class="explore-services" id="explore-services-1" onclick="window.location.href = 'services.php'">Explore Services</button>
                </div>
                <img src="./offline.png" alt="">
            </div>
            <div class="intro-div-2 slide">
                <img src="./online.png" alt="">
                <div class="intro-text">
                    <h2><span>Welcome to Home Tutor</span> - Your Path to Educational Excellence</h2>
                    <p>Experience the magic of personalized learning with Home Tutor! Our platform connects you with top-notch tutors who specialize in both offline and online education. No matter your academic goals, we've got you covered. Whether you prefer face-to-face guidance or virtual lessons, we're your ultimate destination for academic success and growth.</p>
                    <button class="explore-services" id="explore-services-2" onclick="window.location.href = 'services.php'">Explore Services</button>
                </div>
            </div>
        </div>
        <?php include './what_we_do.php' ?>
        <?php include './feedback.php'  ?>
        <?php
        include './footer.php';
        ?>
    </div>
    <script>
        const exploreServices = document.getElementById("explore-services-1");

        const exploreServices1 = document.getElementById("explore-services-2");

        exploreServices.addEventListener('mousedown', () => {
            exploreServices.classList.add('box-shadow-active');
            exploreServices.classList.remove('.explore-services');

        });

        exploreServices.addEventListener('mouseup', () => {
            exploreServices.classList.remove('box-shadow-active');
            exploreServices.classList.add('.explore-services');
        });


        exploreServices1.addEventListener('mousedown', () => {
            exploreServices1.classList.add('box-shadow-active');
            exploreServices1.classList.remove('.explore-services');

        });

        exploreServices1.addEventListener('mouseup', () => {
            exploreServices1.classList.remove('box-shadow-active');
            exploreServices1.classList.add('.explore-services');
        });



        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(slideIndex) {
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            } else if (slideIndex >= slides.length) {
                slideIndex = 0;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active');
            }

            slides[slideIndex].classList.add('active');
            currentSlide = slideIndex;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function autoSlide() {
            nextSlide();
        }

        // Initially, show the first slide
        showSlide(currentSlide);

        // Set up an interval for automatic sliding (every 3.5 seconds in this example)
        const slideInterval = setInterval(autoSlide, 5000);


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