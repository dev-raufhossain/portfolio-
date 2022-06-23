<?php

include("config/header.php");
include_once '../db_conection.php';



?>

<div style="margin: 20px 0 20px 0px; height: 600px">
<form action="" method="POST">
    <center>
        <h2>Add a new title to & Discription</h2>
    Add New title: <input type="text" name="site_title" placeholder="Add New title"><br><br>
    Discription: <textarea name="discription">


    </textarea>
    <br><br>
    Upload image: <input type="file" name="image"><br><br>
    Link1: <input type="text" name="link1" placeholder="Add New link"><br><br>
    Link2: <input type="text" name="link2" placeholder="Add New link"><br><br>
    Link1 text: <input type="text" name="link1_text" placeholder="Add New text"><br><br>
    Link2 text: <input type="text" name="link2_text" placeholder="Add New text"><br><br>
    <button name="Submit">submit</button>

</form>
</center>
</div>
<?php
if(isset($_POST['Submit'])){
    $site_title = $_POST['site_title'];
    $discription = $_POST['discription'];
    $image = $_POST['image'];
    $link1 = $_POST['link1'];
    $link2 = $_POST['link1'];
    $link1_text = $_POST['link1_text'];
    $link2_text = $_POST['link2_text'];
    $sql = "INSERT  INTO tbl_title(title,discription,images,link1,link2,link1_text,link2_text) 
    VALUES ('$site_title','$discription','$image','$link1','$link2','$link1_text','$link2_text')";
    if (mysqli_query($conn,$sql)){
        header("location:title_list.php");}
    else {
        echo "Error:" .$sql.":-" .mysqli_error($conn);
    }
}
?>
<?php
include("config/footer.php")
?>