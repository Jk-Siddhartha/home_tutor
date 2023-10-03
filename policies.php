<?php
session_start();
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

        .services-container>div {
            margin: auto;
            margin-top: 2%;
            width: 90%;
            border: 1px solid rgba(0, 0, 0, 0.6);
            padding: 2% 2%;
        }

        .services-container div h2 {
            text-align: center;
        }

        .services-container div p {
            margin-bottom: 2%;
        }

        .services-container{
            margin-bottom: 2rem;
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
            <h2 class="heading">Policies, Terms & Conditions</h2>
            <p class="sub-heading">At HOME TUTOR, we're committed to creating a seamless connection between exceptional tutors and eager students. Our policies and terms & conditions are designed with your educational journey in mind, prioritizing your privacy and security. By using our platform, you join a vibrant learning community dedicated to excellence in education, whether you're seeking in-person or online tutoring. Together, we elevate your educational journey to new heights. Please review our policies and terms & conditions to ensure a positive and enriching experience for all members of our community.</p>

            <div>

                <h2>
                    Privacy Policy
                </h2>

                <h3>

                    1. Information Collection and Use
                </h3>

                <p>
                    We value your privacy and are committed to protecting your personal information. When you use our services, we may collect certain information for the purpose of providing educational services and improving our platform. This information may include, but is not limited to, your name, contact information, academic history, and preferences.</p>

                <h3>

                    2. Data Security
                </h3>
                <p>
                    We take reasonable measures to safeguard your data from unauthorized access or disclosure. However, please understand that no data transmission over the internet or electronic storage is entirely secure, and we cannot guarantee the absolute security of your data.</p>

                <h3>

                    3. Information Sharing
                </h3>
                <p>
                    We do not sell, trade, or rent your personal information to third parties. Your data may be shared with tutors, students, or educational institutions to facilitate the provision of our services. We will not disclose your information to other parties without your consent unless required by law.</p>


                <h3>
                    4. Changes to Privacy Policy
                </h3>
                <p>
                    We may update our Privacy Policy from time to time to reflect changes in our practices. It is your responsibility to review this policy periodically for any updates.</p>


            </div>
            <div>
                <h2>Terms & Conditions

                </h2>
                <h3>1. User Eligibility

                </h3>
                <p>By using our services, you confirm that you are eligible to do so under applicable laws and regulations. Users under the age of 18 may need parental consent to use our platform.

                </p>

                <h3>

                    2. Tutor-Student Relationship
                </h3>

                <p>Our platform connects tutors with students seeking educational assistance. Tutors are independent contractors and not employees of our platform. We do not guarantee the qualifications, performance, or availability of tutors, and it is the responsibility of users to assess and select suitable tutors.</p>

                <h3>

                    3. Fees and Payment
                </h3>

                <p>Tutors may charge fees for their services, and payment terms are agreed upon directly between tutors and students. We are not involved in payment transactions and are not responsible for disputes related to fees.</p>

                <h3>

                    4. Code of Conduct
                </h3>

                <p>Users must adhere to a code of conduct that promotes respectful and ethical behavior. Harassment, discrimination, or any form of inappropriate conduct will not be tolerated.</p>

                <h3>

                    5. Content and Copyright
                </h3>

                <p>Users agree not to upload or share copyrighted material without proper authorization. We may remove content that violates copyright or intellectual property rights.</p>

                <h3>
                    6. Termination of Services
                </h3>


                <p>We reserve the right to suspend or terminate user accounts for violations of our terms and conditions or any disruptive behavior that affects the community.</p>

                <h3>

                    7. Liability
                </h3>

                <p>We are not liable for any direct or indirect damages, losses, or disputes arising from the use of our platform. Users use the platform at their own risk.</p>

                <h3>

                    8. Changes to Terms
                </h3>

                <p>We may modify these terms and conditions at any time. Continued use of our platform constitutes acceptance of the updated terms.</p>


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