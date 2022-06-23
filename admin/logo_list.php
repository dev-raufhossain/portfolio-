<?php

include("config/header.php");
include_once '../db_conection.php';



?>
<br>

<div style="margin-top: 10%; height: 300px">
<center>
<table width="30%"; height=" 100%"; border=" 1px solid red";>
 <tr>
     <th>ID</th> <th>LOGO</th> <th>ACTIONS</th>
 </tr>
 <?php
 $sql= "SELECT * FROM tbl_logo_text";
 $query=mysqli_query($conn, $sql);
 if(!$query){
     echo "Table list Error:" .mysqli_error($conn); die;
 }
 while ($data = mysqli_fetch_array($query)) {
    ?>

    <tr>
        <td> <?php echo $data['id']; ?> </td>
        <td> <?php echo $data['logo_text']; ?></td>
       <td> <a href="logo_edit.php?edit_id=<?php echo $data['id']; ?>">EDIT</a> &nbsp;
        <a onclick="return confirm('Are you sure you want to delete now?')"href="logo_delete.php?delete_id=<?php echo $data['id']; ?>">DELETE</a></td>
    </tr>

    <?php
 }

 ?>
</table>
</center>
</div>

<?php
include("config/footer.php")
?>