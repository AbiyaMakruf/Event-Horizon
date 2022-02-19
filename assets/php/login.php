<?php
session_start();

require 'functions.php';



if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );


    // cek username
    if( mysqli_num_rows($result) === 1 ) {



        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ) {

            // set session
            $_SESSION["login"] =  true;

            // cek remember me
            if (isset($_POST['remember'])){
                // buat cookie
                setcookie('id',$row['id'],time()+3600,"/");
                setcookie('key',hash('sha256',$row['username']),time()+3600,"/");
            }
            setcookie('name',$row['username'],time()+3600,"/");
            setcookie('cooperate',$row['cooperate'],time()+3600,"/");
            header("location: ../../../user-menu/");
            //require"redirect-user-menu.html";
            exit;
        } else{
            require 'sweetalert.php';
            echo '<script type="text/javascript">
            myFd();
          </script>';
            exit;
        }
    } else{
        require 'sweetalert.php';
        echo '<script type="text/javascript">
            myFe();
          </script>';
            exit;
    }

    $error = true;

}


?>