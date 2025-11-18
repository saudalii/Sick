<?php

require_once('hijri/hijri.class.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$fs_ar = $_POST['fs_ar'];
$fs_en = $_POST['fs_en'];
$nat_id = $_POST['nat_id'];
$job = $_POST['job'];
$date = $_POST['myDate'];
$formattedDate = date('d-m-Y', strtotime($date));
$date2 = $_POST['myDate2'];
$formattedDate2 = date('d-m-Y', strtotime($date2));
$hijriDate = hijri\datetime::createFromFormat('d-m-Y', $formattedDate);
$hijriDate2 = hijri\datetime::createFromFormat('d-m-Y', $formattedDate2);
$startDate = new DateTime($formattedDate);
$endDate = new DateTime($formattedDate2);
$dateInterval = $startDate->diff($endDate);
$daysDifference = $dateInterval->days;

}else{
    header("Location:index.php");
    exit;
}


?>


<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="manifest" href="manifest.json">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
</head>

<style>
    body {
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .sick {
        text-align: center;
        position: relative;
    }

    .sick p{

    }
    .name_ar {
        font-size: 1.1vh;
        color: #37446e;
        background-color: #F8F8F9;
        font-family: cairo;
        text-align: center;
        position: absolute;
        top: 45%;
        font-weight: 600;
        left: 58%;
        width: 10%;
        transform: translate(-50%, -50%);
        margin: 0;
    }
    .name_en {
        font-size: 1.1vh;
        color: #37446e;
        background-color: #F8F8F9;
        font-family: cairo;
        text-align: center;
        position: absolute;
        top: 45%;
        font-weight: 600;
        right: 48%;
        width: 10%;
        transform: translate(-50%, -50%);
        margin: 0;
    }
    .id {
        font-size: 1.15vh;
        color: #37446e;
        background-color: #ffffff;
        font-family: cairo;
        font-weight: bold;
        text-align: center;
        position: absolute;
        top: 48.6%;
        right: 40.2%;
        width: 10%;
        transform: translate(-50%, -50%);
        margin: 0;
    }
    .date {
        font-size: 1.15vh;
        color: #37446e;
        background-color: #ffffff;
        font-family: cairo;
        font-weight: bold;
        text-align: center;
        position: absolute;
        top: 41.5%;
        right: 40.2%;
        width: 10%;
        transform: translate(-50%, -50%);
        margin: 0;
    }

    .dis-date-ar{

        font-size:1.3vh;
    color: #37446e;
    background-color: #f8f8f8;
    font-family: cairo;
    font-weight: bold;
    text-align: center;
    position: absolute;
    top: 37.8%;
    right: 32.3%;
    width: 10%;
    transform: translate(-50%, -50%);
    margin: 0;
    }
    .admsn-date-eng{
        font-size:1.3vh;
    color: #37446e;
    background-color: #ffffff;
    font-family: cairo;
    font-weight: bold;
    text-align: center;
    position: absolute;
    top: 34.3%;
    right: 48%;
    width: 10%;
    transform: translate(-50%, -50%);
    margin: 0;
    }
    .admsn-date-ar{

    font-size:1.3vh;
    color: #37446e;
    background-color: #ffffff;
    font-family: cairo;
    font-weight: bold;
    text-align: center;
    position: absolute;
    top: 34.2%;
    right: 32.3%;
    width: 10%;
    transform: translate(-50%, -50%);
    margin: 0;
    }
    .dis-date-eng{

    font-size:1.3vh;
    color: #37446e;
    background-color: #f8f8f8;
    font-family: cairo;
    font-weight: bold;
    text-align: center;
    position: absolute;
    top: 37.8%;
    right: 48%;
    width: 10%;
    transform: translate(-50%, -50%);
    margin: 0;
    }
    .ld-ar{
        font-size: 1.26vh;
    color: #ffffff;
     background-color: #2b3e78; 
    font-family: cairo;
    text-align: center;
    position: absolute;
    top: 30.7%;
    right: 29.8%;
    width: 13%;
    transform: translate(-50%, -50%);
    margin: 0;
    direction: rtl;
    }
    .ld-eng{
        font-size: 1.16vh;
    color: #ffffff;
     background-color: #2b3e78; 
    font-family: cairo;
    text-align: center;
    position: absolute;
    top: 30.7%;
    right: 44.8%;
    width: 13%;
    transform: translate(-50%, -50%);
    margin: 0;

    }

    p.job {
    font-size: 1.1vh;
    color: #37446e;
    background-color: #ffffff;
    font-family: cairo;
    text-align: center;
    position: absolute;
    top: 56%;
    font-weight: 600;
    left: 58%;
    width: 10%;
    transform: translate(-55%, -55%);
    margin: 0;
    }
    .gsl{
        font-size: 1.07vh;
        color: #37446e;
        background-color: #ffffff;
        font-family: cairo;
        font-weight: bold;
        text-align: center;
        position: absolute;
        top: 27.2%;
        right: 40.2%;
        width: 10%;
        transform: translate(-50%, -50%);
        margin: 0;
    }
    @media screen and (max-width: 980px) {
  .sick p {
    font-size: 1vh;
    font-weight:200;
  }
  img{
    width: 100%;
  }
  .id {
        font-size: 0.76vh !important;
        text-decoration: none !important;
        top: 48.4%;
        right: 40.42%;
        
    }
  .name_ar {
        font-size: 0.7vh !important;
        color: #37446e;
        top: 44.8%;
        font-weight: 500 !important;
        letter-spacing:0.19px;
        left: 65.58%;
        width: 30%;
    }
    .name_en {
        font-size: 0.76vh !important;
        color: #37446e;
        top: 44.64%;
        font-weight: 500 !important;
        right: 36.35%;
        text-align:center;
        width: 30%;
        text-transform: uppercase;
    }
    .date {
        font-size: 0.76vh !important;
        color: #37446e;
        font-family: cairo;
        font-weight: bold;
        text-align: center;
        position: absolute;
        top: 41.2%;
        right: 40.506%;
        width: 10%;
        transform: translate(-50%, -50%);
        margin: 0;
    }
    .dis-date-eng{

    font-size:0.76vh !important;
    color: #37446e;
    top: 37.65%;
    right: 55.816%;
    }



p.job {
    font-size: 0.76vh !important;
    color: #37446e;
    top: 55.6%;
    left: 66%;
}

    .dis-date-ar{

    font-size:0.76vh !important;
    top: 37.65%;
    right: 24.603%;
    }
    .ld-ar{
    font-size:0.743vh !important;
    top: 30.594%;
    right: 8.5%;
    width: 26%;
    letter-spacing:0.1px;
    direction: rtl;
    }
    .ld-eng{
    font-size:0.743vh !important;
    top: 30.594%;
    right: 40.12%;
    width: 26%;

    }
    .admsn-date-eng{
    font-size:0.76vh !important;
    right: 55.816%;

    }
    .admsn-date-ar{
    font-size:0.76vh !important;
    right: 24.603%;
    }
    .gsl{
        font-size: 0.74vh !important;
        top: 27.15%;
        right: 38.41%;
        width: 12%;
    }
}

</style>

<body>
<div class="cover" style="
    width: 100%;
    height: 100%;
    position: absolute;
    background-color: transparent;
    z-index: 1;
 "></div>
    <div class="sick">
        <img src="sick.png" alt="" width="50%" height="80%">
        <div class="cover">

        </div>
        <p class="gsl" id="random-gsl"></p>
        <p class="name_ar"><?php echo $fs_ar ?></p>
        <p class="name_en" style="background-color: #F8F8F9;"><?php echo $fs_en ?></p>
        <p class="job"><?php echo $job ?></p>
        <p class="id"><?php echo $nat_id;?></p>
        <p class="date"><?php echo date('d-m-Y');?></p>
        <p class="admsn-date-ar"><?php echo $hijriDate;?></p>
        <p class="dis-date-ar"><?php echo $hijriDate;?></p>
        <p class="admsn-date-eng"><?php echo $formattedDate;?></p>
        <p class="dis-date-eng"><?php echo $formattedDate;?></p>
        <p class="ld-ar"><?php echo $daysDifference;?>   يوم  (<?php echo $hijriDate;?> الى <?php echo $hijriDate2;?>) </p>
        <p class="ld-eng"><?php echo $daysDifference; ?> day (<?php echo $formattedDate;?> to <?php echo $formattedDate2;?>)</p>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Generate 11 random numbers with 'GSL' prefix
    function generateRandomGSL() {
        let gsl = 'GSL';
        for (let i = 0; i < 11; i++) {
            gsl += Math.floor(Math.random() * 10); // generates a number between 0-9
        }
        return gsl;
    }

    // Find the h2 element by its ID
    const h2Element = document.getElementById('random-gsl');

    // Set the text content of the h2 element to the generated GSL
    h2Element.textContent = generateRandomGSL();
});
</script>
</html>
