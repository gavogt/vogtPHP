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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include('connect.php') ?>
        <nav class="navbar-inverse navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Gabriel Vogt's</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 float-left">
                    <form class="form" method="post" action="php/insert.php">
                        <div class="form-horizontal">
                            <label>First Name</label>
                            <div>
                                <input name="firstName" class="form-control mx-sm-4">
                            </div>
                            <small id="fNameHelp" class="text-muted" >
                            Enter your first name!
                            </small> 
                        </div>
                        <br>
                        <div class="form-horizontal">
                            <label>Last Name</label>
                            <div>
                                <input name="lastName" class="form-control mx-sm-4">                                
                            </div>
                            <small id="LNameHelp" class="text-muted">
                            Enter your last name!
                            </small>                                                                                            
                        </div>
                        <br>                        
                        <div class="form-horizontal">
                            <label>User Name</label>
                            <div>
                                <input name="userName" class="form-control mx-sm-4">                                
                            </div>
                            <small id="uNameHelp" class="text-muted">
                            Enter your user name!
                            </small>                             
                        </div>
                        <br>                        
                        <div class="form-horizontal">
                            <label>Password</label>
                            <div>
                                <input name="password" type="password" class="form-control mx-sm-4">                                
                            </div>
                            <small id="passHelp" class="text-muted">
                            Password must consist of one uppercase, one number and one special character!
                            </small>                            
                        </div>
                        <br>                        
                        <div class="form-horizontal">
                            <label>Email Address</label>
                            <div>
                                <input name="email" type="email" class="form-control mx-sm-4">                                
                            </div>
                            <small id="emailHelp" class="text-muted">
                            No xyz!
                            </small>                             
                        </div>
                        <br>                        
                        <div class="form-horizontal">
                            <label>Comments</label>
                            <div>
                                <input name="comments" class="form-control mx-sm-4">                                
                            </div>
                            <small id="cHelp" class="text-muted">
                            Any additional comments
                            </small>                          
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
    </body>
</html>