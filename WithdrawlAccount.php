<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- HI this is WITHDRAWL page. -->
    
</body>
</html>

<?php
if (isset($_POST["withdrawl"])) {

    $c = $_POST["withdrawlamount"];
    $d = $_POST["withdrawlname"];
    $e = $_POST["withdrawlphone"];
    $f = $_POST["withdrawlpassword"];

    // $d = $_POST["sendername"];
    // $e = $_POST["senderphone"];
    // $f = $_POST["senderpassword"];

    
    $dir_name = $e.$d;

    if (is_dir($dir_name)) {
        // echo "Hi directory exits";
        $filename1=$e.'_'.'final_balance.txt';
        $filename2=$e . '_' . 'transaction.txt';
        $filename3=$e. '_'. 'login.txt';

        $file1 = fopen("./$dir_name./$filename1", 'r'); //final balance file
        $file2 = fopen("./$dir_name./$filename2", 'r'); //transaction file
        $file3 = fopen("./$dir_name./$filename3", 'r'); // login file


        $file3_contents = fread($file3, filesize("./$dir_name./$filename3"));
        $str_arr3 = explode(",",$file3_contents);

        $line = "";

        if ($file1 && $file2 && ($f == $str_arr3[1])) {

            // echo "Credentials Matched";
            // echo "Succesfully login<br>";

            $file1_contents = fread($file1, filesize("./$dir_name./$filename1"));
            $file2_contents = fread($file2, filesize("./$dir_name./$filename2"));

            // $cursor = -1;

            // fseek($file1, $cursor, SEEK_END);
            // $char = fgetc($file1);

            // /**
            //  * Trim trailing newline chars of the file
            //  */
            // while ($char === "\n" || $char === "\r") {
            //     fseek($file1, $cursor--, SEEK_END);
            //     $char = fgetc($file1);
            // }

            // /**
            //  * Read until the start of file or first newline char
            //  */
            // while ($char !== false && $char !== "\n" && $char !== "\r") {
            //     /**
            //      * Prepend the new char
            //      */
            //     $line = $char . $line;
            //     fseek($file1, $cursor--, SEEK_END);
            //     $char = fgetc($file1);
            // }

            // echo $line;


            




            $str_arr1 = explode(",",$file1_contents);
            $str_arr2 = explode(",",$file2_contents);


            $data2=$str_arr1[0];
            // echo $data2;

            if($data2>=$c){
                // echo "Sufficient balance";
                $data2 = $data2 - $c;
                $date2 = date("Y/m/d H:i:s");
                $day2 = date("l");

                $string2 = $data2 . ',' . $date2 . ',' . $day2;

                $string1 = "\n".$date2 . ',' . $day2 . ',' . 'Withdrawl' . ',' . $d . ',' . $c . ',' . '0' . ',' . $data2;
                // $string1 = "\n".$e . ',' . $d . ',' . $d . ',' . $c . ',' . $data2 . ',' . $date2 . ',' . $day2;

                $file3 = fopen("./$dir_name./$filename1", 'w'); //final balance file
                $file4 = fopen("./$dir_name./$filename2", 'a'); //transaction file

                fwrite($file3, $string2);
                fwrite($file4, $string1);
                fclose($file1);
                fclose($file2);
                ?>

                    <script>
                        alert("Transaction Successfully recorded . going back to the home page");
                        window.location.href="./HomeBankPage.php?param1=<?php echo $d ?>"+"&param2=<?php echo $e ?>";
                    </script>

                <?php
            

            }
            else{
                // echo "Insufficient balance";
                ?>
                    <script>
                        alert("Insufficient balance");
                        window.location.href="./HomeBankPage.php?param1=<?php echo $d ?>"+"&param2=<?php echo $e ?>";
                    </script>
                <?php

            }

            
        }

        else{
            // echo "Invalid Credentials";
            ?>
                        <script>
                            alert("Insufficient balance");
                            window.location.href="./HomeBankPage.php?param1=<?php echo $d ?>"+"&param2=<?php echo $e ?>";
                        </script>
                    <?php

        }


    }
    else{

        ?>


        <script>
                    
            alert("Some error while filling the details,PLease go through once again.");
            window.location.href = "./HomeBankPage.php";
        </script>
       
        <?php

    }



}    


?>