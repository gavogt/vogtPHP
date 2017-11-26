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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script> 
            $(function(){
              $("#header").load("php/header.php"); 
              $("#footer").load("php/footer.php"); 
            });
        </script>         
    </head>
    <body>
        <?php include('connect.php') ?>
        <div class="wrapper">
        <div id="header"></div>        
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 float-left">
                        <form class="form" method="post" action="php/insert.php">
                            <div class="form-horizontal">
                                <label>First name: </label>
                                <div>
                                    <input name="firstName" class="form-control mx-sm-4" placeholder="enter your first name" autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="form-horizontal">
                                <label>Last name: </label>
                                <div>
                                    <input name="lastName" class="form-control mx-sm-4" placeholder="enter your last name">                                
                                </div>                                                                                 
                            </div>
                            <br>                        
                            <div class="form-horizontal">
                                <label>Username: </label>
                                <div>
                                    <input name="userName" class="form-control mx-sm-4" placeholder="enter your username">                                
                                </div>                            
                            </div>
                            <br>                        
                            <div class="form-horizontal">
                                <label>Password: </label>
                                <div>
                                    <input name="password" type="password" class="form-control mx-sm-4" placeholder="enter your password">
                                </div>                            
                            </div>
                            <br>                        
                            <div class="form-horizontal">
                                <label>Email Address: </label>
                                <div>
                                    <input name="email" type="email" class="form-control mx-sm-4" placeholder="enter your email address">
                                </div>                             
                            </div>
                            <br>                        
                            <div class="form-horizontal">
                                <label>Comments: </label>
                                <div>
                                    <input name="comments" class="form-control mx-sm-4" placeholder="enter any additional comments">                                
                                </div>                         
                            </div>
                            <br>                        
                            <button class="btn btn-default" name="submit" type="submit" value="Submit">Submit</button>
                            <button class="btn btn-default" type="reset" value="Reset">Clear</button>                        
                        </form>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="item">
                            <img src="images/puppy.jpg" alt="Photo of a puppy!" style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="footer"></div>
    </body>
</html>