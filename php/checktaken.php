<?php

    # Connect to DB
    include 'connect.php';

    if (isset($_POST['submit']))
      {

        # New Array
        $user = array();
        $user[0] = $_POST["firstName"];
        $user[1] = $_POST["lastName"];
        $user[2] = $_POST["userName"];
        $user[3] = $_POST["password"];
        $user[4] = $_POST["email"];
        $user[5] = $_POST["comments"];

        # Encrypt with random bytes
        $salt = base64_encode(random_bytes(32));

        # Double salt!
        $salt_enc = crypt('$user[3]', $salt);

        # Encrypt user's pass
        $hash = crypt('$user[3]', $salt_enc);
        $user[3] = $hash;

        # Prepare and excludee duplicate username
        $stmt = $db->prepare("SELECT userName FROM userinfo WHERE userName = :userName");
        $stmt->bindParam(':userName', $user[2]);
        $stmt->execute();

        # Check for duplicate username entry
        if ($stmt->rowCount() > 0)
          {
            echo "Please choose another username";
          }
        else
          {

            # Note to test SQL Injections
            $stmt = $db->prepare("INSERT INTO `userinfo` (`firstName`, `lastName`, `userName`, `password`, `email`, `comments`) VALUES (:firstName, :lastName, :userName, :password, :email, :comments)");

            # Parameter, Value
            $stmt->bindValue(':firstName', $user[0]);
            $stmt->bindValue(':lastName', $user[1]);
            $stmt->bindValue(':userName', $user[2]);
            $stmt->bindValue(':password', $user[3]);
            $stmt->bindValue(':email', $user[4]);
            $stmt->bindValue(':comments', $user[5]);

            # The prepared statement
            $stmt->execute();

            # Redirect to thank you if sucessful
            header("Location:/mySite/php/thankyou.php");

          }
      }
    else
      {
        echo 'Error in design!'; # Note to redesign
      }
?>
