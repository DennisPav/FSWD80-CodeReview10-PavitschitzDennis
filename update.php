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
   <title >Edit User</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
   <h1 class="display-4 my-5">update media</h1>
    <form action="crud/m_update.php" method="post">
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="title" placeholder="title" value="<?php echo $data['title'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="image" placeholder="image" value= "<?php echo $data['image'] ?>">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="description" placeholder="description" value= "<?php echo $data['description'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="author_name" placeholder="Author name" value ="<?php echo $data['author_name'] ?>">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="author_surname" placeholder="Author surname" value= "<?php echo $data['author_surname'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="isbn" placeholder="ISBN" value= "<?php echo $data['isbn'] ?>">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="publish_date" placeholder="publish date (2019-11-21)" value= "<?php echo $data['publish_date'] ?>" >
    </div>
    <div class="col">
      <input type="text" class="form-control" name="publisher" placeholder="publisher" value= "<?php echo $data['publisher'] ?>" >
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="type" placeholder="type" value= "<?php echo $data['type'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="available" placeholder="available" value= "<?php echo $data['available'] ?>">
    </div>
  </div>
    <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="publisher_address" placeholder="publisher address" value= "<?php echo $data['publisher_address'] ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="publisher_size" placeholder="publisher size" value= "<?php echo $data['publisher_size'] ?>">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="hidden" name="id" value="<?php echo $data['id']?>" />
      <button class="btn btn-info"  type= "submit">Save Changes</button>                    
    </div>
    <div class="col">
      <a href='index.php'><button class='btn btn-success' type='button'>back</button></a>
    </div>
  </div>
</form>
</div>

</body >
</html >

<?php
}
?>