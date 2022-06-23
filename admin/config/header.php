<?php
session_start();
if(!isset($_SESSION['adminloginid'])){
    header("location:admin_login.php");
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="media.css">

</head>
<body>
         <!-- admin_dashbord start -->
    <div class="admin_dashbord">
        <h1>Welcome <?php echo $_SESSION['adminloginid']; ?></h1>

        <form action="" method="POST">
            <button name="logout">Logout</button>
        </form>
        </div>