<style>
    .current-classes,
    .upcoming-classes,
    .past-classes,
    .my-students {
        width: 100%;
        height: 90vh;
        overflow-y: scroll;
        display: none;
    }

    .clicked {
        background: #006266;
        color: #fff;
    }


    .dashboard-fixed {
        width: 25%;
    }


    .profile-management {
        width: 95%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 0.2rem;
        border-radius: 10px;
        border-top: 40px solid green;
        padding: 2.5% 0;
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);

    }

    .profile-management img {
        width: 25%;
    }

    .messaging-chatbox {
        margin: 2% 0;
        width: 95%;
        height: 50vh;
        border-radius: 10px;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);

    }

    .messaging-chatbox-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2% 4%;
        background: green;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btns {
        width: 30%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .btns span {
        cursor: pointer;
        margin-left: 15px;
    }



    /* student dashboard css  */
    .current-classes {
        display: block;
    }

    .my-students {
        border: 1px solid red;
        padding: 1% 2%;
    }

    .student {
        cursor: pointer;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1% 2%;
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.45);
        margin-bottom: 1%;
    }

    .student:hover .student-pic {
        box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        padding: 0;
    }

    .student>div:nth-child(1) {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .student>div:nth-child(1) h3 {
        color: #009506
    }

    .student>div:nth-child(1) p {
        color: rgba(0, 0, 0, 0.45);
        font-weight: 900;
    }

    .student img {
        width: 70px;
        border-radius: 50%;
        border: 2px solid rgba(0, 0, 0, 0.45);
        padding: 0.8%;
    }


    .student .fa-solid {
        border-radius: 50%;
        border: 1px solid #009506;
        padding: 0.6rem 0.6rem;
        margin-right: 0.5rem;
        color: #009506;
    }

    .student .fa-solid:hover {
        background: #009506;
        color: #fff;
    }

    .current-classes,
    .past-classes,
    .upcoming-classes {
        padding: 1% 2%;
    }

    .class {
        border: 1px solid rgba(0, 0, 0, 0.45);
        width: 40%;
        padding: 1.5% 1%;
        margin: 1% 2%;
        float: left;
    }

    .class img {
        width: 100%;
    }

    .class h4,
    .class p {
        text-align: center;
    }

    .class p {
        margin: 0.5rem 0;
    }

    .class button {
        cursor: pointer;
        width: 100%;
        text-align: center;
        font-size: 16px;
        border: none;
        background: #006266;
        color: #fff;
        padding: 2% 0;
    }

    .past-classes {
        filter: grayscale(1);
    }
</style>
<div class="dashboard">
    <div class="dashboard-navbar">
        <div class="dashboard-navbar-menus">
            <ul>
                <li class="clicked" onclick="switchTab(event)">Current Classes</li>
                <li onclick="switchTab(event)">Upcoming Classes</li>
                <li onclick="switchTab(event)">Past Classes</li>
                <li onclick="switchTab(event)">My Students</li>
            </ul>
        </div>
        <div class="current-classes">
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Take Class</button>
            </div>
        </div>
        <div class="my-students">
            <div class="student">
                <div>
                    <img src="https://cdn-icons-png.flaticon.com/128/3641/3641353.png" alt="" class="student-pic">
                    <h3>student Name | student</h3>
                    <p>Education | Certifications | Subjects</p>
                </div>
                <div>
                    <i class="fa-solid fa-message"></i>

                    <i class="fa-solid fa-phone"></i>
                </div>
            </div>
        </div>
        <div class="upcoming-classes">
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Take Class</button>
            </div>
        </div>
        <div class="past-classes">
            <div class="class">
                <img src="https://img.freepik.com/free-vector/chalkboard-with-math-elements_1411-88.jpg?size=626&ext=jpg&ga=GA1.2.1917642526.1694608725&semt=ais" alt="">
                <h4>Mathematics Class</h4>
                <p>Timing:
                    <span>10:00 AM</span>
                    To
                    <span>12:00 PM</span>
                </p>
                <button type="button">Take Class</button>
            </div>
        </div>
    </div>
    <?php
    include './dashboard_fixed.php';
    ?>
</div>