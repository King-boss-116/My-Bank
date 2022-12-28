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

if (isset($_POST['btn2'])) {

    // echo "Account to be login ";
            
    $a = $_POST["namename"];
    $b = $_POST["phonename"];
    $c = $_POST["passwordname"];
   
    $dir_name=$b.$a;

    if(is_dir($dir_name)){
        // echo "<br>";
        // echo "Veriying with database";
        $filename1 = $b."_"."login.txt";
        if (file_exists("./$dir_name/$filename1")) {
            // echo "File exists";
    
            $f5 = fopen("./$dir_name/$filename1", "r");
            $fdata5 = fread($f5, filesize("./$dir_name/$filename1"));

            $str_arr5 = explode(",",$fdata5);

            if($c==$str_arr5[1]){
                // echo "Credentials matched <br>";
                // echo "Succesffuly Login>";
                ?>

                    <script>
                        alert("Valid credentials entered succefful login . Going  to dashboard");
                        window.location.href="./HomeBankPage.php?param1=<?php echo $a ?>"+"&param2=<?php echo $b ?>";
                    </script>


                    <?php
            }

            else{
                // echo "Credentials not  matched <br>";
                // echo "unSuccesffuly Login";
                ?>

                    <script>
                    alert("Wrong credentials entered UNsuccefful login . Going back to login page");
                    window.location.href="./loginPage.php";
                    </script>


                    <?php
            }

           
            fclose($f5);
          
    
        }
    
        else{
            // echo "<br>";
            // echo "File not found";
            ?>

            <script>
            alert("Wrong credentials entered. Going back to login page file not found.");
            window.location.href="./loginPage.php";
            </script>


            <?php
        }
    

    }
    else{
       

        
        ?>

        <script>
        alert("Wrong credentials entered. Going back to login page");
        window.location.href="./loginPage.php";
        </script>


        <?php
        // echo "Wrong credentials entered";
    }


    
   
       

}


?>