<?php
  session_start();
  if(!isset($_SESSION['username'])){
      header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>ADD</title>
</head>
<body>
<nav class="navbar navbar-light">
        <i class="fas fa-apple-alt"></i>
        <h1 class="navbar-brand text-light"><span>TOP</span>BLOG</h1>
        <form class="form-inline">
            <i class='fa fa-user' id="i"></i>
            <li class="dropdown">
                <a class="dropdown-toggle text-light" id="drop" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </form>
    </nav>
    <?php require_once 'proccess.php'; ?>
    <div class="container">
        <div class="row">
            <form action="proccess.php" method="POST" class="col">
                <input type="hidden" name="id">
                <div class="form-group row">
                    <label for="name" class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Title :</strong></label>
                    <div class="col-10">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Category :</strong></label>
                    <div class="col-10">
                        <input type="text" name="category" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Price" class="col-2 col-form-label" style="color: rgb(31, 95, 133);"><strong>Description :</strong></label>
                    <div class="col-10">
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="quantité" class="col-2 col-form-label"style="color: rgb(31, 95, 133);"><strong>image :</strong></label>
                    <div class="col-10">
                        <input type="url" name="img" class="form-control">
                    </div>
                </div>
                <div class="form-group row" style="margin-left: 16%; margin-top: 4%;">
                    <div class="col-10">
                        <input type="submit" name="submit" value="Post" class="btn btn-lg" style="background-color: rgb(35, 219, 201); color: white;">
                    </div>
                </div>
            </form>
        </div>
    </div>










    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>