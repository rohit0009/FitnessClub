<?php
    $user = $_REQUEST['user'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo|Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <script>

    </script>
    <style>
        .well-lg {
            padding: 24px;
            border-radius: 6px;
            font-family: 'Indie Flower', cursive;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media (min-width: 1200px) {
            .container {
                width: 770px;
            }
        }
        @media (min-width: 992px) {
            .container {
                width: 570px;
            }
        }
        @media (min-width: 768px) {
            .container {
                width: 450px;
            }
        }
        #title{
            font-size: 25px;
            text-decoration: none;
            color:blueviolet;
        }
        
    </style>

</head>
<body>
    <div class="well well-lg">
        <div class="container-fluid">
            <a class="btn btn-lg" href=".." id="title"> NRP Fitness Club</a> <span style="font-family: 'Cardo', serif;" class="label label-info"><?php if($user == 'admin')echo "Admin Login"; else echo "Login";?></span>
        </div>
    </div>
    
        <div class="container" >
            <div class="panel panel-default">
                <div class="panel-body">
                    
                        <form class="form-horizontal">
                            <fieldset>
                            <center><legend>Login</legend></center>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">Password</label>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-sm-offset-3">
                                    <button type="submit" class="btn btn-success">Login</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>

                </div>
            </div>
            
            <?php
                if($user == "member")
                    echo "<div class='panel panel-default'>
                            <center>Or </br><p> Don't have a account?<div class='btn btn-link'><a href='../SignUp' >Sign Up</a></div></p></center>
                        </div>";
            ?>
        </div>
   
    <nav class="navbar navbar-inverse navbar-bottom">
        <div class="container-fluid">
            <div class="navbar-text">
                <p>Rohit 0009</p>
            </div>
        </div>
    </nav>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>