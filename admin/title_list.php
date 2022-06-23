<?php

include("config/header.php");
include_once '../db_conection.php';

?>


<div class="list" style="margin: 20px 0px 20px 0px";>
<center>
<table width=""; height=" 100%"; border=" 1px solid red";>
 <tr>
     <th>ID</th> <th>Title</th> <th>Discription</th>
     <th>Image</th> <th>Link1</th> <th>Link2</th>
     <th>Link1_text</th> <th>Link2_text</th> <th>Actions</th>
 </tr>
 <?php
 $sql= "SELECT * FROM tbl_title";
 $query=mysqli_query($conn, $sql);
 if(!$query){
     echo "Table list Error:" .mysqli_error($conn); die;
 }
 while ($data = mysqli_fetch_array($query)) {
    ?>


    <tr>
        <td> <?php echo $data['id']; ?> </td>
        <td> <?php echo $data['title']; ?></td>
        <td> <?php echo $data['discription']; ?></td>
        <td>  <img style="width: 100px"; height="100px"; src="../images/<?php echo $data['images']; ?>"></td>
       
        <td> <?php echo $data['link1']; ?></td>
        <td> <?php echo $data['link2']; ?></td>
        <td> <?php echo $data['link1_text']; ?></td>
        <td> <?php echo $data['link2_text']; ?></td>
       <td> <a href="title_edit.php?edit_id=<?php echo $data['id']; ?>">EDIT</a> &nbsp;
        <a onclick="return confirm('Are you sure you want to delete now?')"href="title_delete.php?delete_id=<?php echo $data['id']; ?>">DELETE</a></td>
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