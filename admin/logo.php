<?php

include("config/header.php");
include_once '../db_conection.php';



?>
<br>

<div style="margin-top: 20%; height: 300px">
<form action="" method="POST">
    <center>
    Add New Logo Or Text: <input type="text" name="new_logo_text" placeholder="Add New Logo Or Text"><br><br>
    <button name="Submit">submit</button>

</form>
</center>
</div>
<?php
if(isset($_POST['Submit'])){
    $site_logo = $_POST['new_logo_text'];
    $sql = "INSERT  INTO tbl_logo_text(logo_text) VALUES ('$site_logo')";
    if (mysqli_query($conn,$sql)){
        header("location:logo_list.php");}
    else {
        echo "Error:" .$sql.":-" .mysqli_error($conn);
    }
}
?>

<br>
<?php
include("config/footer.php")
?>