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
    <!-- Please wait for a bit....
    This is Data Storage Page........ -->




    <script src="./Bootstrap files/js/bootstrap.bundle.min.js"></script>



</body>
</html>



<?php

if (isset($_POST['btn1'])) {

    $a = $_POST["namename"];
    $b = $_POST["phonename"];
    $c = $_POST["passwordname"];
    $d = $_POST["amountname"];

    // echo "Account want to be created ";
    $dir_name=$b.$a;

    if(is_dir($dir_name)){
        // echo "<br>";
        // echo "Account already exists <br>";
        // echo "Going to MODIFY page"
        ?>


        <script>
            alert("Account Already Exists.PLease modify some information.");
            window.location.href="./Bank2.php";
        </script>

        <?php


    } else {

        mkdir($dir_name);


        //Account creation with full information stored in database
        $filename1 = $b . "_" . "info.txt";
        $data1 = $a . ',' . $b . ',' . $c . ',' . $d . ',';
        echo $filename1;
        $filecreate1 = fopen("./$dir_name/$filename1", "w");
        fwrite($filecreate1, $data1);
        fclose($filecreate1);


        //Login information
        $filename2 = $b . "_" . "login.txt";
        $data2 = $b . ',' . $c;
        echo $filename2;
        $filecreate2 = fopen("./$dir_name/$filename2", "w");
        fwrite($filecreate2, $data2);
        fclose($filecreate2);

        //Transaction file creation

        $filename3 = $b . "_" . "transaction.txt";
        $date3 = date("Y/m/d H:i:s");
        $day3 = date("l");
        // $data3 = "Phone Number: " . $b . "," . " From: " . $a . "," . " To: " . $a . "," . " Amount Transferred: " . $d . "," . " Balance: " . $d . "," . " Date: " . $date3 . "," . " Day: " . $day3;
       // $data3 = "DATE: " . $b . "," . " DAY: " . $a . "," . " TRANSACTION TYPE: " . $a . "," . " Transaction Account: " . $d . "," . " Debit: " . $d . "," . " Credit: " . $date3 . "," . " Balance: " . $day3;
        $data3= $date3.",".$day3.",".'Open Account'.",".$a. "," .'0'.",".$d.",".$d;

        //$data3 = $b . "," . $a . "," . $a . "," . $d . "," . $d . "," . $date3 . "," . $day3;
        echo $filename3;
        $filecreate3 = fopen("./$dir_name/$filename3", "a");
        fwrite($filecreate3, $data3);
        fclose($filecreate3);

        //Updated Final Balance

        $filename4 = $b . "_" . "final_balance.txt";
        $date4 = date("Y/m/d H:i:s");
        $day4 = date("l");
        // $data4 = " Amount In Account: " . $d . "," . " Date Checked On : " . $date4 . "," . " Day Checked On : " . $day4;
        $data4 = $d . "," . $date4 . "," . $day4;
        echo $filename4;
        $filecreate4 = fopen("./$dir_name/$filename4", "w");
        fwrite($filecreate4, $data4);
        fclose($filecreate4);

        // echo "Going to login page"

        ?>

        <script>
            alert("Account Newly created.Going to login page");
            
            window.location.href="./LoginPage.php";
        </script>
        
        <?php

    }


        
   
}


?>