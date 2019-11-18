<?php 

require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $img= $_POST['image'];
    $descr= $_POST['description'];
    $authorName = $_POST['author_name'];
    $authorSur = $_POST[ 'author_surname'];   
    $isbn= $_POST['isbn'];
    $publishDate= $_POST['publish_date'];
    $publisher=$_POST['publisher'];
    $type= $_POST['type'];
    $available= $_POST['available'];
    $publisher_address= $_POST['publisher_address'];
    $publisher_size= $_POST['publisher_size'];


   $sql = "UPDATE media 
   SET id='$id', title='$title', image='$img', description='$descr', author_name='$authorName', author_surname='$authorSur', isbn='$isbn', publish_date='$publishDate', type='$type', available='$available', publisher_address='$publisher_address', publisher_size='$publisher_size' 
   WHERE id = {$id}" ;
   
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button' class='btn btn-success'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button' class='btn btn-info'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>