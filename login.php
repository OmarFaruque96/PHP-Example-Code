<?php
    include "connection.php";

    ob_start();

    session_start();

    $message = '';

    if(isset($_POST['login'])){
        $admin_name     = $_POST['admin_mail'];
        $admin_password = $_POST['admin_pass'];

        // security 
        $admin_name         = mysqli_real_escape_string($conn, $admin_name);
        $admin_password     = mysqli_real_escape_string($conn, $admin_password);

        $hassedPassword     = sha1($admin_password);

        if(empty($admin_name) || empty($admin_password)){
            $message = '<div class="alert alert-warning">Please Fillup all the Informations Correctly</div>';
        }
        else{
            $query              = "SELECT * FROM admin";

            $admin_info         = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($admin_info)){
                $_SESSION['id']     = $row['admin_id'];
                $_SESSION['name']   = $row['user_admin'];
                $_SESSION['pass']   = $row['admin_password'];
                $_SESSION['avater'] = $row['avater'];
            }

            if($_SESSION['name'] == $admin_name && $_SESSION['pass'] == $hassedPassword){
                header("Location: ../dashboard.php");
            }
            elseif($_SESSION['name'] !== $admin_name && $_SESSION['pass'] !== $hassedPassword){
                header("Location: ../index.php");
            }
            else{
                $message = '<div class="alert alert-warning">Password not matched</div>';
                header("Location: ../index.php");
            }
        }
   
    }
?>
