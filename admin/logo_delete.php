<?php
include_once '../db_conection.php';

?>
<?php
    $delete_logo = $_GET['delete_id'];
    $sql = "DELETE FROM tbl_logo_text WHERE id='$delete_logo'";
    if (mysqli_query($conn, $sql)){
        header("location:logo_list.php");
    }
   
?>