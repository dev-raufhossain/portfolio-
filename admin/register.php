
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css">
    <link rel="stylesheet" href="media.css">

    <title>admin login</title>
</head>
<body>
  <!--   <?php
    include '../db_conection.php';

    if (isset($_POST['reg'])== "POST"){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $sql= "INSERT INTO tbl_admin (username,email,passwor) VALUES ('$name', '$email', '$pass')";
        $query=mysqli_query($conn,$sql);
        if($query){
            echo "<script>aleert('success')</script>";
        }else{
            echo "<script>aleert('error')</script>";

        }
    }
    ?> -->
    <div class="login">
        <div class="row-2">
            <div class="login-col">
                <h2>Admin Login</h2>
                <form action="" method="POST">
                    <div class="input_field">
                 <i class="fa-solid fa-user"></i>
                <input type="text" name="name" placeholder="Enter name">
                    </div>
                    
                    <div class="input_field">
                 <i class="fa-solid fa-user"></i>
                <input type="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="input_field">
                 <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Enter password">

                    </div>
                <input type="submit" value="Register" name="reg"><br><br>
                <a style="background: red; padding: 10px 20px; border-radius:10px;text-decoration: none;color:black;font-size: 35px; " href="admin_login.php">Login</a><br><br>
                <div class="but">
                <a href="forget.php">Forgot password?</a>
                </div>

                </form>
            </div>
        </div>
    </div>
   
</body>
</html> -->