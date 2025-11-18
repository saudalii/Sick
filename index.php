<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$fs_ar = $_POST['fs_ar'];
$fs_en = $_POST['fs_en'];
echo $fs_ar;
echo $fs_en;

$date = $_POST['myDate'];
$formattedDate = date('d-m-Y', strtotime($date));
die;
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
</head>
<style>
    body{
        direction:rtl;
        font-family:cairo;
        background-color:#333;
    }
    input{
        font-family:cairo;
        width: 100%;
        direction:rtl;
        border-radius:0.5rem;
        border-collapse:0;
        border:goldenrod;
        padding:5px;
        text-transform: uppercase;
    }
    .container{
        margin:auto;
        margin-top:10%;
        width: 30%;
        text-align:center;
        background-color:#6666;
        color:goldenrod;
        border-radius:0.5rem;
        padding:10px;
        

    }
    form{
        display: inline-grid;
        width: 80%;
    }
    label{
        text-align:right !important;
    }



    @media screen and (max-width: 980px) {

        .container{
            margin-top:25%;
            width:80%;
        }
    }
</style>
<body>
    <div class="container">
    <h2>إنشاء إجازة مرضية</h2>

  
    <form action="sickleave.php" method="post">

        <input  type="text" name="fs_ar" placeholder="الاسم الرباعي بالعربية" required><br>
        <input type="text" name="fs_en" placeholder="الاسم الرباعي بالإنقليزية" required><br>
        <input type="number" name="nat_id" placeholder="الهوية الوطنية" required oninput="maxLengthCheck(this)" maxlength="10"><br>
        <input type="text" name="job" placeholder="جهة العمل" required><br><br>
        
        <label for="myDate">تاريخ بداية الإجازة</label>
        <input type="date" name="myDate" id="myDate"  required><br>
        <label for="myDate2">تاريخ نهاية الإجازة</label>
        <input type="date" name="myDate2" id="myDate2" required><br>
        



        <input type="submit" value="إرسال">
    </form>
    </div>
</body>
<script>
        function maxLengthCheck(object) {
            if (object.value.length > object.maxLength) {
                object.value = object.value.slice(0, object.maxLength);
            }
        }

        function enforceNumericInput(event) {
            const char = String.fromCharCode(event.which);
            if (!/[0-9]/.test(char)) {
                event.preventDefault();
            }
        }
    </script>
</html>