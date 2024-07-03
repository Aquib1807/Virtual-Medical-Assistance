<?php require "partials/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Common Diseases</title>
    <link rel="stylesheet" href="css/disease.css?v=<?= time(); ?>" />
    <style>
        body {
            background: url(images/abcd.jpeg);
            background-size: cover;
            font-family: Arial, Verdana;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 80px auto; /* Adjust margin as needed */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow for the content */
            text-align: left;
        }
        .aim {
            margin: 0;
            padding: 100px 140px;
        }
        .aim-head {
            font-family: Montserrat, sans-serif;
            color: #333;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 30px;
        }
        .aim-text {
            font-family: Montserrat, sans-serif;
            font-size: 18px;
            color: #666;
        }
        ul {
            list-style-type: decimal;
            padding-left: 20px;
            margin-top: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: #c00; /* Adjust link color as needed */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php require "partials/navbar.php"; ?>

xam
    <div class="aim">  
    </div>
    <h1>LIST OF COMMON DISEASES</h1>
    <ul>
        <li><a href="https://www.webmd.com/typhoid" target="_blank">TYPHOID</a></li>
        <li><a href="https://www.webmd.com/food-poisoning" target="_blank">FOOD POISONING</a></li>
        <li><a href="https://www.webmd.com/brain-nervous-system" target="_blank">BRAIN AND NERVOUS SYSTEM</a></li>
        <li><a href="https://www.cancer.org" target="_blank">CANCER</a></li>
        <li><a href="https://www.webmd.com/acne" target="_blank">ACNE</a></li>
        <li><a href="https://www.webmd.com/dengue-fever" target="_blank">DENGUE</a></li>
        <li><a href="https://www.webmd.com/diabetes" target="_blank">DIABETES</a></li>
        <li><a href="https://www.webmd.com/hiv-aids" target="_blank">HIV AIDS</a></li>
        <li><a href="https://www.webmd.com/asthma" target="_blank">ASTHMA</a></li>
        <li><a href="https://www.webmd.com/cholesterol" target="_blank">CHOLESTEROL</a></li>
        <li><a href="https://www.webmd.com/eyesight" target="_blank">EYESIGHT</a></li>
        <li><a href="https://www.webmd.com/hearing-ear" target="_blank">HEARING AND EAR</a></li>
        <li><a href="https://www.webmd.com/heart" target="_blank">HEART</a></li>
        <li><a href="https://www.webmd.com/oral-health" target="_blank">ORAL HEALTH</a></li>
        <li><a href="https://www.webmd.com/migraine" target="_blank">MIGRAINE</a></li>
        <li><a href="https://www.webmd.com/thyroid" target="_blank">THYROID</a></li>
        <li><a href="https://www.webmd.com/hepatitis" target="_blank">HEPATITIS</a></li>
        <li><a href="https://www.arthritis.org" target="_blank">ARTHRITIS</a></li>
        <li><a href="https://www.webmd.com/pregnancy" target="_blank">PREGNANCY</a></li>
        <li><a href="https://www.webmd.com/infectious-diseases" target="_blank">INFECTIOUS DISEASES</a></li>
    </ul>
</div>

<?php require "partials/footer.php"; ?>

</body>
</html>
