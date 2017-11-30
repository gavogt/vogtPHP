<?php

    if (isset($_SESSION["userName"]))
    {
        echo $_SESSION["userName"];

    }
    else
    {

       header("location:loginPage.php");

    }
?>
