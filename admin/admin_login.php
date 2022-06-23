
<!DOCTYPE html>
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
    <?php
    include '../db_conection.php';

   /*  if(isset($_POST['submit'])=="POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $select = "SELECT * FROM tbl_admin WHERE email='$email' AND passwor='$password'";
        $query= mysqli_query(conn, $select);
        $row = mysqli_fetch_array($query);
        if($row){

        } 
    }*/
    ?>
    <div class="login">
        <div class="row-2">
            <div class="login-col">
                <h2>Admin Login</h2>
                <form action="" method="POST">
                    <div class="input_field">
                 <i class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="Enter username">
                    </div>
                    <div class="input_field">
                 <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Enter password">

                    </div>
                <input type="submit" value="Log in" name="submit"><br><br>
                <div class="but">
                <button> <a href="register.php"> Register</a>  </button>
                <button><a href="forget.php">Forgot password?</a> </button>
                </div>
               


                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql= "SELECT * FROM tbl_admin WHERE username='".$username."'AND password='".$password."'";
        $query = mysqli_query($conn,$sql);
        $data=mysqli_num_rows($query );
        if ($data==1){
            session_start();
            $_SESSION['adminloginid']=$username;
            header("Location:index.php");
        }else{
            echo "<script>alert('Your login info Not match')</script>";
        }
    }
    ?>
</body>
</html>