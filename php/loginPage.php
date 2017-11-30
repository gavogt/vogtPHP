<!DOCTYPE html>
<html>
    <head>
        <title>Vogt's site</title>
        <base href="/mySite/" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.ico" type="image/gif" >
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script> 
            $(function(){
              $("#header").load("php/header.php"); 
              $("#footer").load("php/footer.php"); 
            });
        </script>        
    </head>
    <body>
        <div class="wrapper">
        <div id="header"></div>     
            <div class="container">
                <h2 class="Oleo h2">Login!</h2>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <form class="form " action="login.php" method="post">
                            <label>Username</label>
                            <div>
                                <input name = "userName" class="form-control mx-sm-4">
                            </div>
                            <br>
                            <label>Password</label>
                            <div>
                                <input name = "password" class="form-control mx-sm-4">
                            </div>
                            <br>                        
                            <button class="btn btn-default" name="submit" type="submit" value="Submit">Submit</button>
                            <button class="btn btn-default" type="reset" value="Reset">Clear</button>                 
                        </form>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="footer"></div>        
    </body>
</html>