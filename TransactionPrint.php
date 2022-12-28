<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  
        table, th, td {  
        border: 1px solid pink;  
        border-collapse: collapse;  
        }  
        th, td {  
        padding: 10px;  
        }  
    </style>  
</head>
<body>
    <!-- hi this is transaction print page. -->

</body>
</html>



<?php

if (isset($_POST["transactionbutton"])) {

    // $a = $_POST["benfname"];
    // $b = $_POST["benfaccount"];
    // $c = $_POST["benfamount"];

    $d = $_POST["transactionname"];
    $e = $_POST["transactionphone"];
    // $f = $_POST["senderpassword"];


    $dir_name = $e.$d;

    if (is_dir($dir_name)) {
        // echo "Hi directory exits";

        // $filename1=$e.'_'.'final_balance.txt';
        $filename2=$e . '_' . 'transaction.txt';
        // $filename3=$e. '_'. 'login.txt';

        // $file1 = fopen("./$dir_name./$filename1", 'r'); //final balance file
        $file2 = fopen("./$dir_name./$filename2", 'r'); //transaction file
        // $file3 = fopen("./$dir_name./$filename3", 'r'); // login file


        // $file3_contents = fread($file3, filesize("./$dir_name./$filename3"));
        // $str_arr3 = explode(",",$file3_contents);

        if ($file2) {
            // echo "Going to print passbook now<br>";
            // $file2_contents = fread($file2, filesize("./$dir_name./$filename2"));

            ?>

            <table style="border:1">
                 <tr>
                    <!-- <th>ADDRESS TO:</th>
                    <th>FROM</th>
                    <th>TO</th>
                    <th>AMOUNT</th>
                    <th>BALANCE</th>
                    <th>DATE-TIME</th>
                    <th>DAY</th> -->
                    <th>DATE-TIME</th>
                    <th>DAY</th>
                    <th>TRANSACTION TYPE</th>
                    <th>TRANSACTION _ACCOUNT</th>
                    <th>DEBIT STATUS</th>
                    <th>CREDIT STATUS</th>
                    <th>FINAL BALANCE</th>
                </tr>
            

            <?php

            while (($line = fgets($file2)) !== false) {
                $line = trim($line);
                if (empty($line)) {
                    continue;
                } else {
                    $array=explode(",",$line);
                    
            ?>  
                <tr>
                    <td>
                        <?php echo $array[0] ?>
                    </td>
                    <td>
                        <?php echo $array[1] ?>
                    </td>
                    <td>
                        <?php echo $array[2] ?>
                    </td>
                    <td>
                        <?php echo $array[3] ?>
                    </td>
                    <td>
                        <?php echo $array[4] ?>
                    </td>
                    <td>
                        <?php echo $array[5] ?>
                    </td>
                    <td>
                        <?php echo $array[6] ?>
                    </td>
                    
                </tr>

            <?php

                }


            }
            ?>

            </table>

            <?php

        fclose($file2);
        }
            
        else{
            // echo "Error reading file";
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