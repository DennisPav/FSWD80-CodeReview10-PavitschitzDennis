<?php 

require_once 'crud/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >show media</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   

   <style type= "text/css">
       #bookimage{
           width: 150px;
           height: 220px;
        
       }
       .btn{
           width: 120px;
       }
   </style>

</head>
<body class="bg-dark">
<div class="container bg-dark">
   
    <div class="jumbotron p-2 mt-5">
     <h2 class="display-4 p-3"><?php echo $data['title'] ?></h2>
      <div class="row p-3">      
       <div class="col-md-4">           
          <p><img id='bookimage' src="<?php echo $data['image'] ?>" class='img-fluid m-2'> </p>
       </div>
        <div class="col-md-4">
            <p><b>author: </b><?php echo $data['author_name'] ?><?php echo $data['author_surname'] ?> </p>
            <p><b>publisher: </b><?php echo $data['publisher'] ?> </p>
            <p><b>publisher address: </b><?php echo $data['publisher_address'] ?> </p>
            <p><b>publisher size: </b><?php echo $data['publisher_size'] ?> </p>
            <p><b>isbn: </b><?php echo $data['isbn'] ?> </p>
        </div>
        <div class="col-md-4">
            <p><b>description: </b><?php echo $data['description'] ?> </p>
            <p><b>type: </b><?php echo $data['available'] ?></p>            
            <p><b>publisher date: </b><?php echo $data['publish_date'] ?> </p>
            <p><b>available: </b><?php echo $data['available'] ?> </p>
            <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
            <a href='index.php'><button class='btn btn-success'  type='button'>back</button></a>
        </div>
      
    </div>
    </div>
</div>


</body >
</html >

<?php
}
?>