<?php

include("config/header.php");
include_once '../db_conection.php';
?>

<?php

$edit_title=$_GET["edit_id"];
$sql="SELECT * FROM tbl_title WHERE id='".$edit_title."'";
$query=mysqli_query($conn, $sql);
if(!$query){
    echo "EDIT Error:" .mysqli_error($conn); die;
}
$data = mysqli_fetch_array($query);
?>

<div style="margin: 20px 0 20px 0px; height: 600px">

<form action="" method="POST">
    <center>
        <h2>Update title to & Discription</h2>
    Add New title: <input type="text" name="title" value="<?php echo $data['title']; ?>"><br><br>
    Discription: <textarea name="discription">


    </textarea>
    <br><br>
    Upload image: <input type="file" name="image"><br><br>
    Link1: <input type="text" name="link1" value="<?php echo $data['link1']; ?>"><br><br>
    Link2: <input type="text" name="link2" value="<?php echo $data['link2']; ?>"><br><br>
    Link1 text: <input type="text" name="link1_text" value="<?php echo $data['link1_text']; ?>"><br><br>
    Link2 text: <input type="text" name="link2_text" value="<?php echo $data['link2_text']; ?>"><br><br>
    <button name="submit">UPDATE</button>

</form>
</center>
</div>
<?php
if(isset($_POST['submit'])){
    $site_title = $_POST['title'];
    $discription = $_POST['discription'];
    $image = $_POST['image'];
    $link1 = $_POST['link1'];
    $link2 = $_POST['link2'];
    $link1_text = $_POST['link1_text'];
    $link2_text = $_POST['link2_text'];
    $sql = "UPDATE tbl_title SET title='".$site_title."', discription='".$discription."',images='".$image."', link1='".$link1."', link2='".$link2."', link1_text='".$link1_text."', link2_text='".$link2_text."'WHERE id='$edit_title'";

    if (mysqli_query($conn,$sql)){
        header("location:title_list.php");}
    else {
        echo "Error:" .$sql.":-" .mysqli_error($conn);
    }
}
?>

<br>
<?php
include("config/footer.php")
?>