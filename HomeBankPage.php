<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="./Bootstrap files/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
     <link href="./assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" media="all">
     <link href="./Bank3.css" rel="stylesheet" type="text/css" media="all">

</head>

<body>
     <div class="parent">
          <div class="main">
               <div class="part" id="deposit">

                    <form method="post" action="./DepositAccount.php">
                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Beneficery's Name" name="benfname" />
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Beneficery's Phone Name" name="benfaccount" />
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Amount To be Deposit" name="benfamount" id="amountid" />
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Sender Name" name="sendername" id="sendername" readonly/>
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Sender Phone Number" name="senderphone"
                                   id="senderphone"  readonly/>
                         </div>

                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Sender Password" name="senderpassword" />
                         </div>

                         <div class="partone">
                              <button type="submit" name="deposit" id="depositid">DEPOSIT</button>
                         </div>

                    </form>

               </div>
               <div class="part">
                    <form method="post" action="./WithdrawlAccount.php">
                         <!-- <div class="partone">
                            <i class="fa-sharp fa-solid fa-file-invoice"></i>
                            <input type="text"  placeholder="Beneficery's Name" name="benfname"/>
                       </div> -->


                         <!-- <div class="partone">
                            <i class="fa-sharp fa-solid fa-file-invoice"></i>
                            <input type="text"  placeholder="Beneficery's Account Name" name="benfaccount"/>
                       </div> -->


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Amount To be Withdrawl" name="withdrawlamount"
                                   id="withdrawlamount" />
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Your Name" name="withdrawlname" id="withdrawlname" readonly/>
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Your Phone Number" name="withdrawlphone"
                                   id="withdrawlphone" readonly/>
                         </div>

                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Your Password" name="withdrawlpassword" />
                         </div>

                         <div class="partone">
                              <button type="submit" name="withdrawl" id="withdrawlid">WITHDRAWL</button>
                         </div>

                    </form>
               </div>
               <div class="part">
                    <form method="post" action="./TransactionPrint.php">
                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Your Name" name="transactionname" id="transactionname" readonly/>
                         </div>


                         <div class="partone">
                              <i class="fa-sharp fa-solid fa-file-invoice"></i>
                              <input type="text" placeholder="Your Phone Number" name="transactionphone"
                                   id="transactionphone" readonly/>
                         </div>
                         <div class="partone">
                              <button type="submit" id="transactionbutton" name="transactionbutton">
                                   VIEW MY TRANSACTIONS
                              </button>
                         </div>
                    </form>
               </div>

          </div>
     </div>



</body>

</html>


<?php
$name = $_GET["param1"];
$number = $_GET["param2"];

// echo $name . "    " . $number;

?>

<script>
     // var a=document.getElementById("amountid").value;
     document.getElementById("sendername").value = "<?php echo $name; ?>";
     document.getElementById("senderphone").value = "<?php echo $number; ?>";
     document.getElementById("withdrawlname").value = "<?php echo $name; ?>";
     document.getElementById("withdrawlphone").value = "<?php echo $number; ?>";
     document.getElementById("transactionname").value = "<?php echo $name; ?>";
     document.getElementById("transactionphone").value = "<?php echo $number; ?>";
            // document.getElementById("depositid").value="Deposit"+a;

</script>

<?php




    ?>