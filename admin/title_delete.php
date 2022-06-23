<?php
include_once '../db_conection.php';

?>
<?php
    $delete_title = $_GET['delete_id'];
    $sql = "DELETE FROM tbl_title WHERE id='$delete_title'";
    if (mysqli_query($conn, $sql)){
        header("location:title_list.php");
    }
   
?>