<?php

include("config/header.php");
include_once '../db_conection.php';
?>

<?php
$edit_logo=$_GET["edit_id"];
$sql="SELECT * FROM tbl_logo_text WHERE id='".$edit_logo."'";
$query=mysqli_query($conn, $sql);
if(!$query){
    echo "EDIT Error:" .mysqli_error($conn); die;
}
$data = mysqli_fetch_array($query);
?>

<div style="margin-top: 20%; height: 300px">
<form action="" method="POST">
    <center>
    EDIT  Logo Or Text: <input type="text" name="edit_logo_text" value="<?php echo $data['logo_text']; ?>"><br><br>
    <button name="Submit">UPDATE</button>

</form>
</center>
</div>
<?php
if(isset($_POST['Submit'])){
    $update_logo = $_POST['edit_logo_text'];
    $sql = "UPDATE tbl_logo_text SET logo_text='".$update_logo."'WHERE id='$edit_logo'";
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