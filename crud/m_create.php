<?php 

require_once 'db_connect.php';

if ($_POST) {
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

   $sql = "INSERT INTO media 
   (title, image, description, author_name, author_surname, isbn, publish_date, publisher, type, available, publisher_address, publisher_size) 
   VALUES ('$title',  '$img', '$descr', '$authorName', '$authorSur', '$isbn', '$publishDate', '$publisher', '$type', '$available','$publisher_address','$publisher_size')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button' class=' btn btn-success'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'  class='btn btn-info'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>