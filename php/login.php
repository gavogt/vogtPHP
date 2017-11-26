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
    </head>
    <body>
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
            <h2 class="Oleo h2">Login!</h2>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <form class="form  ">
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
    </body>
</html>