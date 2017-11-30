<?php include 'session.php' ?>
<nav class="navbar-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Gabriel Vogt's</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="php/signup.php">Sign Up</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="php/logoutPage.php">
                <?php
                if (isset($_SESSION['userName']))
                {
                    echo "<a href='php/logoutPage.php'>Logout</a>";
                }
                else
                {
                    echo "<a href='php/loginPage.php'>Login</a>";
                }; 
                ?>
                </a>
            </li>
        </ul>
    </div>
</nav>