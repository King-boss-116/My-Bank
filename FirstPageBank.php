<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./Bootstrap files/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="./assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="./Bank2.css" rel="stylesheet" type="text/css" media="all">
    <style>

        .parent{
            background:url("https://images.unsplash.com/photo-1607944024060-0450380ddd33?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJhbmt8ZW58MHx8MHx8&w=1000&q=80");
            background-size:cover;
            background-repeat:no-repeat;
            background-position: center;
            
        }

        /* .form-box{
            background:url("./Effects/images/profile.png");
            background-size:cover;
            background-repeat:no-repeat;

        } */

        .form-box{
            height:400px;
            background-color:transparent;
           
        }

        h1{
            padding-top:20px;
        }

        h3{
            color:orange;
            font-size:20px;
            margin-left:00px;
            font-style:italic;
        }

        .btn{
            /* background-color: red; */
            /* width:100%; */
            display: flex: ;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border:0;
        }

        .btn #btn2{
            width:100%;
        }

    </style>
</head>
<body>
<div class="parent">
        <div class="container">
            <form method="post" action="./FirstPageBankFilter.php">  
                <div class="form-box">
                    <h1 id="title">
                        MY <span style="color:red"> BANK </span> <br>
                        
                    </h1>
                   
                    <!-- <div class="input-group">
                        <div class="input-filed" id="namefiled">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Name" name="namename">
                        </div>

                        <div class="input-filed">
                            <i class="fa-solid fa-phone-volume"></i>
                            <input type="text" placeholder="Phone Number" name="phonename">
                        </div>


                        <div class="input-filed">
                            <i class="fa-solid fa-lock"></i>
                            <input type="text" placeholder="Password" name="passwordname">
                        </div>

                        <div class="input-filed" id="amountfiled">
                            <i class="fa-solid fa-wallet"></i>
                            <input type="text" placeholder="Amount" name="amountname">
                        </div>

                        <p>Lost Password <a href="#">Click Here!</a></p>

                    </div> -->
                    <div class="btn">
                        <button type="submit" id="btn1" name="btn1" style="width:150px">
                            OPEN ACCOUNT
                        </button>
                        <hr>
                        <button type="submit" id="btn2" name="btn2">
                            LOGIN
                        </button>
                        
                
                    </div>

                    <h3 style="margin-top:200px">YOUR <span style="color:red"> MONEY </span> , YOUR <span style="color:red"> BANK </span><h3>
                </div>

            

            </form>
        </div>
    </div>


</body>
</html>


