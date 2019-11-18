
<!DOCTYPE html>
<html>

<head>
    <title>add media</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>

<body>
<div class="container">

  <h1 class="display-4 my-5">Add media</h1>
      
<form action="crud/m_create.php" method="post">
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="title" placeholder="title">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="image" placeholder="image">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="description" placeholder="description">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="author_name" placeholder="Author name">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="author_surname" placeholder="Author surname">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="isbn" placeholder="ISBN">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="publish_date" placeholder="publish date (2019-11-21)">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="publisher" placeholder="publisher">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="type" placeholder="type">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="available" placeholder="available">
    </div>
  </div>
    <div class="form-row m-1">
    <div class="col">
      <input type="text" class="form-control" name="publisher_address" placeholder="publisher address">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="publisher_size" placeholder="publisher size">
    </div>
  </div>
  <div class="form-row m-1">
    <div class="col">
      <input type="hidden" name="id" value="<?php echo $data['id']?>" />
      <a href='crud/m_create.php'><button class="btn btn-info" type="submit">create</button></a>                    
    </div>
    <div class="col">
      <a href='index.php'><button class='btn btn-success' type='button'>back</button></a>
    </div>
  </div>
</form>
        

   
</div>
</body>

</html>