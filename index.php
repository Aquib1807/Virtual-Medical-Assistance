<?php
require "partials/header.php"
?>
<link rel="stylesheet" href="css/style.css?v=<?= time(); ?>" />
<link rel="stylesheet" href="css/slide.css?v=<?= time(); ?>" />
</head>

<body>
    <div id="bg" class="head">
        <?php
        require "partials/navbar.php";
        ?>
        
        <div id="main">
            <center>
                <p class="heading">
                Virtual Medical Assistance
                </p>
                <p class="sbheading">The Online Medical services</p>
            </center>
        </div>
    </div>

    <div class="our-services">

    </div>

    <div class="our-vision">
        <div class="vision">
            <center>
                <p class="vision-head">Welcome to Virtual Medical Assistance</p>
            </center><br/><br/>
            <p class="vision-text">Welcome to <strong style="color:#e19fff;">
                    "Virtual Medical Assistance"</strong>, your trusted partner in healthcare management. Our platform is designed to simplify and streamline the process of booking medical appointments, ensuring both doctors and patients can connect effortlessly. <br><br>
                   
            </p>
        </div>
    </div>

    <div class="what-user-says">
        <div class="input-leftcontainer" id="input-leftcontainer">
            <div class="imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev"></div>

            <div class="imgban" id="imgban0">
            <img class="user-ex-img" src="https://www.linkedin.com/in/abhishek-kumar-a8bb4a236/overlay/photo/" alt="Abhishek pic">
                <div class="user-ex-txt">
                    <div class="user-name">Abhishek Kumar</div>
                </div>
               
            </div>

            <div class="imgban" id="imgban1">
            <div class="meet-developers-text">Meet the Developers</div>
            </div>

            <div class="imgban" id="imgban2">
                <img class="user-ex-img" src="images/aquib.jpg" alt="Aquib pic">
                <div class="user-ex-txt">
                    <div class="user-name">Mohd Aquib Usmani</div>
                </div>
            </div>

            <div class="imgban" id="imgban3">
                <img class="user-ex-img" src="images/kshitiz.jpg" alt="Kshitiz Pic">
                <div class="user-ex-txt">
                    <div class="user-name">Kshitiz Kumar</div>
                </div>
            </div>

            <div class="imgbanbtn imgbanbtn-next" id="imgbanbtn-next"></div>
        </div>
    </div>

    <?php
    require "partials/footer.php";
    ?>

    <script src="new.js?v=<?= time(); ?>"></script>
</body>

</html>
