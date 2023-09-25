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

        .services-container div {
            padding: 1% 2%;
        }

        .services-container div img {
            width: 30%;
            float: left;
        }

        .services-container div p {
            text-align: justify;
            color: #000;
        }

        .our-story .sub-heading {
            color: rgba(0, 0, 0, 0.3);
        }

        .story-cards {
            width: 100%;
            padding: 1% 2%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .story-card {
            position: relative;
            width: 30%;
            height: 40vh;
            overflow: hidden;
            cursor: pointer;
            margin: 0 1%;

        }

        .story-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-text {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            max-height: 0;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.35);
            transition: all 0.3s ease-in-out;

        }

        @keyframes addPadding {
            to {
                padding: 6% 4%;
            }
        }

        .story-card:hover .card-text {
            max-height: 100%;
            animation: addPadding 0.3s linear forwards;
        }

        .card-text h3 {
            text-transform: uppercase;
            margin: 1% 0;
        }

        .card-text p {
            text-align: justify;
        }

        .card-text a {
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

        .card-text a:hover {
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

        .our-achievements {
            padding: 1% 0;
        }

        .our-achievements h2 {
            margin: 1% 0;
        }

        .our-achievements img {
            width: 100%;
            height: 50vh;
            object-fit: cover;
        }

        .achievements-cards {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5%;
            margin-top: -8%;
        }

        .achievements-cards .card {
            cursor: pointer;
            width: 25%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            border-radius: 10px;
            padding: 1% 0;
            box-shadow: 0 0 4px rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.35);
        }

        .achievements-cards .card:hover {
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.8);
            background: rgba(255, 255, 255, 0.7);

        }

        .achievements-cards .card img {
            width: 30%;
            height: auto;
            object-fit: cover;
        }

        .achievements-cards .card h3 {
            text-transform: uppercase;
        }

        .achievements-cards .card p {
            font-size: 35px;
            font-family: 'Orbitron', sans-serif;

        }

        /* .book-demo {
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
        } */

        /* .box-shadow-active {
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
        } */
    </style>
</head>

<body>
    <div class="main-div">
        <?php
        include './header.php';
        ?>
        <div class="services-container">
            <h2 class="heading">ABOUT US</h2>
            <p class="sub-heading">We offer a comprehensive platform bridging the gap between exceptional tutors and eager students. Our mission is to connect both tutors and students seamlessly, fostering a vibrant learning community. Whether you seek in-person or online tutoring, we provide world-class education services with the utmost emphasis on security and privacy. Join us and elevate your educational journey today!</p>
            <div>
                <img src="./logo.png" alt="">
                <p class="sub-heading">
                    At Home Tutor, we are driven by a passion for education and a commitment to bridging the gap between knowledge seekers and knowledge providers. Our platform serves as a vibrant ecosystem where exceptional tutors and eager students come together to embark on a transformative educational journey.At Home Tutor, we are driven by a passion for education and a commitment to bridging the gap between knowledge seekers and knowledge providers. Our platform serves as a vibrant ecosystem where exceptional tutors and eager students come together to embark on a transformative educational journey.At Home Tutor, we are driven by a passion for education and a commitment to bridging the gap between knowledge seekers and knowledge providers. Our platform serves as a vibrant ecosystem where exceptional tutors and eager students come together to embark on a transformative educational journey.At Home Tutor, we are driven by a passion for education and a commitment to bridging the gap between knowledge seekers and knowledge providers. Our platform serves as a vibrant ecosystem where exceptional tutors and eager students come together to embark on a transformative educational journey.
                </p>
            </div>

        </div>
        <div class="our-story">
            <h2 class="heading">Our Story</h2>
            <p class="sub-heading">Founded with the vision of making quality education accessible to all, Home Tutor has grown into a trusted hub for learning excellence. We understand that every student is unique, and so are their educational needs. That's why we offer a diverse range of tutoring services, both offline and online, ensuring that students of all ages and backgrounds can find the guidance they need to succeed.</p>
            <div class="story-cards">
                <div class="story-card" id="story-card">
                    <img src="https://images.pexels.com/photos/1741231/pexels-photo-1741231.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
                    <div class="card-text" id="card-text">
                        <h3>our top most story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ducimus odio provident ratione modi omnis ipsa quod quae explicabo reprehenderit debitis vero doloremque voluptate laborum, aliquid, adipisci saepe nihil! Enim?</p>
                        <a href="">Visit Story</a>
                    </div>

                </div>
                <div class="story-card" id="story-card">
                    <img src="https://images.pexels.com/photos/1741231/pexels-photo-1741231.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
                    <div class="card-text" id="card-text">
                        <h3>our top most story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ducimus odio provident ratione modi omnis ipsa quod quae explicabo reprehenderit debitis vero doloremque voluptate laborum, aliquid, adipisci saepe nihil! Enim?</p>
                        <a href="">Visit Story</a>
                    </div>

                </div>
                <div class="story-card" id="story-card">
                    <img src="https://images.pexels.com/photos/1741231/pexels-photo-1741231.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
                    <div class="card-text" id="card-text">
                        <h3>our top most story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ducimus odio provident ratione modi omnis ipsa quod quae explicabo reprehenderit debitis vero doloremque voluptate laborum, aliquid, adipisci saepe nihil! Enim?</p>
                        <a href="">Visit Story</a>
                    </div>

                </div>
                <div class="story-card" id="story-card">
                    <img src="https://images.pexels.com/photos/1741231/pexels-photo-1741231.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
                    <div class="card-text" id="card-text">
                        <h3>our top most story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ducimus odio provident ratione modi omnis ipsa quod quae explicabo reprehenderit debitis vero doloremque voluptate laborum, aliquid, adipisci saepe nihil! Enim?</p>
                        <a href="">Visit Story</a>
                    </div>

                </div>
                <div class="story-card" id="story-card">
                    <img src="https://images.pexels.com/photos/1741231/pexels-photo-1741231.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
                    <div class="card-text" id="card-text">
                        <h3>our top most story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ducimus odio provident ratione modi omnis ipsa quod quae explicabo reprehenderit debitis vero doloremque voluptate laborum, aliquid, adipisci saepe nihil! Enim?</p>
                        <a href="">Visit Story</a>
                    </div>

                </div>
                <div class="story-card" id="story-card">
                    <img src="https://images.pexels.com/photos/1741231/pexels-photo-1741231.jpeg?auto=compress&cs=tinysrgb&w=400" alt="">
                    <div class="card-text" id="card-text">
                        <h3>our top most story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ducimus odio provident ratione modi omnis ipsa quod quae explicabo reprehenderit debitis vero doloremque voluptate laborum, aliquid, adipisci saepe nihil! Enim?</p>
                        <a href="">Visit Story</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="our-achievements">
            <h2 class="heading">Our Achievements</h2>
            <img src="./achievement-bg.png" alt="">
            <div class="achievements-cards">
                <div class="card">
                    <h3>Our total students</h3>
                    <img src="https://cdn-icons-png.flaticon.com/128/3829/3829933.png" alt="">
                    <p>10000</p>
                </div>
                <div class="card">
                    <h3>Our total tutors</h3>
                    <img src="https://cdn-icons-png.flaticon.com/128/1048/1048949.png" alt="">
                    <p>3500</p>
                </div>
                <div class="card">
                    <h3>Our total Awards</h3>
                    <img src="https://cdn-icons-png.flaticon.com/128/861/861506.png" alt="">
                    <p>15</p>
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

        const storyCard = document.getElementById("story-card");
        const cardText = document.getElementById("card-text");

        storyCard.addEventListener("mouseover", () => {
            const contentHeight = cardText.scrollHeight;
            cardText.style.maxHeight = contentHeight + "px";
        });

        storyCard.addEventListener("mouseout", () => {
            cardText.style.maxHeight = 0;
        });
    </script>
</body>

</html>