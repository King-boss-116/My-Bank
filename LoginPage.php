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
            <form method="post" action="./LoginVerify.php">  
                <div class="form-box">
                    <h1 id="title">
                        SIGN IN
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

                       

                        <p>Lost Password <a href="#">Click Here!</a></p>

                    </div>
                    <div class="btn">
                        <button type="submit" id="btn2" name="btn2">
                            LOGIN
                        </button>
                
                    </div>
                </div>

            

            </form>
        </div>
    </div>














    <script src="./Bootstrap files/js/bootstrap.bundle.min.js"></script>
</body>
</html>