<?php require_once 'crud/db_connect.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>cr10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <style type="text/css">
        #bookimage {
            width: 100px;
            height: 150px;
        }

        button {
            width: 125px;
            margin: 0 auto;
        }
        .jumbotron{
            background-image: url(https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/f_auto,q_auto,w_1100/v1555302188/shape/mentalfloss/booksbookshed.jpg);
            height: 500px;            
        }
    </style>

</head>

<body>

    <div class="container-fluid p-0">

        <div class="jumbotron jumbotron-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark bg-transparent sticky-top">
                      <a class="navbar-brand" href="#">media-store</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="create.php">Create</a>
                            </li>      
                        </ul>
                     </div>
                </nav>
          <div class="container pt-5">
            <h1 class="display-4 text-light my-5">Media Store</h1>
            <p class="lead text-light">This is an online Store for books, cd's and dvd's</p>
          </div>
        </div>
        <div class="container">
            
            <div class="row">
            <?php
           $sql = "SELECT * FROM media";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='col-md-6'>
                            <div class='card mt-2'>
                                <h5 class='card-header bg-primary text-light'>".$row['title']."</h5>
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col-9 p-2'>
                                                <h5 class='card-title'>Author: </h5>
                                                <p class='card-text'>".$row['author_name']." ".$row['author_surname' ]."</p>
                                                <h5 class='card-title'>Description:</h5>
                                                <p class='card-text'>".$row['description']."</p>
                                            </div>
                                            <div class='col-3'>
                                            <p class='card-text'><img id='bookimage' src=".$row['image']." class='img-fluid m-2'></p>
                                            </div>
                                        </div>
                                        <div class='row mt-3'>
                                        <a href='update.php?id=".$row['id']."'><button class='btn btn-info ml-4' type='button'>Edit</button></a>
                                        <a href='delete.php?id=".$row['id']."'><button class='btn btn-danger mx-5'  type='button'>Delete</button></a>
                                        <a href='showmore.php?id=".$row['id']."'><button class='btn btn-success'  type='button'>show media</button></a>
                                    </div></div>
                            </div>
                        </div>" ;
               }
           } else  {
               echo    "<div class='alert alert-danger' role='alert'>
                        Not Available
                        </div>";
           }
            ?>
            </div>
            <a href="create.php"><button class="btn btn-info mt-5" type="button">Add Media</button></a>
        </div>
    </div>

</body>

</html>



