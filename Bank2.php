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
<div class="parent">
        <div class="container">
            <form method="post" action="./OpenAccount.php">  
                <div class="form-box">
                    <h1 id="title">
                        OPEN ACCOUNT
                    </h1>
                    <div class="input-group">
                        <div class="input-filed" id="namefiled">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Name" name="namename" required>
                        </div>

                        <div class="input-filed">
                            <i class="fa-solid fa-phone-volume"></i>
                            <input type="text" placeholder="Phone Number" name="phonename" required>
                        </div>


                        <div class="input-filed">
                            <i class="fa-solid fa-lock"></i>
                            <input type="text" placeholder="Password" name="passwordname" required> 
                        </div>

                        <div class="input-filed" id="amountfiled">
                            <i class="fa-solid fa-wallet"></i>
                            <input type="text" placeholder="Amount" name="amountname" required>
                        </div>

                        <p>Lost Password <a href="#">Click Here!</a></p>

                    </div>
                    <div class="btn">
                        <button type="submit" id="btn1" name="btn1">
                            OPEN ACCOUNT
                        </button>
                
                    </div>
                </div>

            

            </form>
        </div>
    </div>



    <script src="./Bootstrap files/js/bootstrap.bundle.min.js"></script>

    





</body>
</html>

