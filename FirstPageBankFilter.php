<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./Bootstrap files/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="./assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="./Bank2.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
    Selcting for roles page
</body>
</html>


<?php 

    if(isset($_POST["btn1"])){
        // echo "Select role: is: create account";
        ?>

        <script>
            window.location.href="./Bank2.php";
        </script>
        <?php

    }
    else{
        // echo "Select role: is:login account";
        ?>

        <script>
        window.location.href="./LoginPage.php";
        </script>
        <?php


    }   

?>