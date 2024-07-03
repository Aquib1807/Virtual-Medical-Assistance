<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="css/style.css?v=<?= time(); ?>" />
</head>
<style>
    .our-aim {
        margin-top: -500px;
        margin-bottom: 200px;
        margin-left: 180px;
        margin-right: 180px;
        /* background: url(images/healthcare-01.jpg); */
        background-color: #b645f8;
        z-index: 99;
        background-size: cover;
        min-height: 100vh;
    }

    #bg {
        background-image: url(images/bgimg1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
    }

    .aim {
        margin: 0;
        padding: 100px 140px;
    }

    .aim-head {
        font-family: Montserrat, serrif;
        color: #141414;
        font-size: 70px;
        font-weight: 700;
        margin-bottom: 50px;
    }

    .aim-text {
        font-family: Montserrat, serrif;
        font-size: 28px;
        font-weight: 500;
        color: #ffffff;
        padding-bottom: 40px;
    }
</style>

<body>
    <div id="bg">
        <?php
        require "partials/navbar.php";
        ?>
    </div>
    <div class="our-aim">
        <div class="aim">
            <center>
                <p class="aim-head">OUR AIM</p>
            </center>
            <p class="aim-text">
            Welcome to <strong style="color:#141414;">Virtual Medical Assistance,</strong> your trusted partner in healthcare management. Our platform is designed to simplify and streamline the process of booking medical appointments, ensuring both doctors and patients can connect effortlessly. <br><br>
                
            <strong style="color:#141414;"> Why Choose Us?</strong> </br>
            <ul class="aim-text">
        <li><strong style="color:#141414;">Easy Appointment Scheduling:</strong> Our user-friendly interface allows patients to book appointments with their preferred doctors at convenient times.</li>
        <li><strong style="color:#141414;">Efficient Time Management:</strong> Doctors can manage their schedules efficiently, reducing no-shows and optimizing patient flow.</li>
        <li><strong style="color:#141414;">Secure and Confidential:</strong> We prioritize your privacy and security, ensuring that all your personal and medical information is protected.</li>
        <li><strong style="color:#141414;">24/7 Accessibility:</strong> Access our platform anytime, anywhere, whether you're at home or on the go.</li>
        <li><strong style="color:#141414;">Comprehensive Services:</strong> From initial consultations to follow-up appointments, manage all aspects of patient care in one place.</li>
    </ul>
    
    <p class="aim-text">
    <strong style="color:#141414;">Our Mission</strong> <br/><br>
    At <strong style="color:#141414;">Virtual Medical Assistance</strong>, we aim to enhance the healthcare experience by providing a reliable and convenient solution for appointment management. We believe in the power of technology to improve healthcare accessibility and efficiency, making quality care available to everyone.
<br/>
Join us today and experience the future of healthcare.
</p>
            </p>
        </div>
    </div>


   

    <?php
    require "partials/footer.php"
    ?>

</body>

</html>