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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <title>TOP-BLOG</title>
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
                    <a class="dropdown-item" href="add.php">New Publication</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </form>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 650px;">
                <img src="images/1.jpg" class="d-block w-100" style="height: 650px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Abdominal Strength Workout</h5>
                    <p>Intense 10 Minute Abdominal Strength Workout - Home Functional Core Strength.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 650px;">
                <img src="images/2.jpg" class="d-block w-100" style="height: 650px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kettlebell Workout</h5>
                    <p>45 Minute Total Body Kettlebell Workout - Fun and Tough Kettlebell Routine.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 650px;">
                <img src="images/3.jpg" class="d-block w-100" style="height: 650px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Damaged Metabolism</h5>
                    <p>How to Fix a Damaged Metabolism After Dieting.</p>
                </div>
                </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <h1 class="tit">Trending Posts</h1>
        <div class="card-deck">
            <div class="card card-1">
                <img src="images/4.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(0, 161, 181);">45 Minute Total Body Kettlebell Workout</h5>
                    <p class="card-text" style="color: rgb(135, 137, 138); font-family: 'Poppins Light';">For those of you that follow our work pretty closely, you will know that this is the first kettlebell workout video that we have put out in a while. Honestly, I had forgotten how much fun they are.</p>
                </div>
            </div>
            <div class="card card-1">
                <img src="images/5.jpg" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title" style="color: rgb(0, 161, 181);">What Should I Eat After a Workout?</h5>
                <p class="card-text" style="color: rgb(135, 137, 138); font-family: 'Poppins Light';">You have made the time to eat well before heading to the gym and even found the workout that feels the best for you.  You feel energized, like you are getting in shape, and even starting to reach your goals. </p>
                </div>
            </div>
            <div class="card card-1">
                <img src="images/6.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="color: rgb(0, 161, 181);">Can starvation diets lead to weight gain?</h5>
                    <p class="card-text" style="color: rgb(135, 137, 138); font-family: 'Poppins Light';">Anyone who has experience with dieting has heard the motto that it is a game of “calories in and calories out.”   So it is no wonder that many people have interpreted this to mean that by starving themselves, even for a short period of time, they will achieve weight loss.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'proccess.php'; ?>
    <?php 
        $mysqli = mysqli_connect('localhost', 'root','');
        mysqli_select_db($mysqli, 'blog');
        $rusult = $mysqli->query("select * from posts") or die($mysqli->error); 
    ?>
    <div class="container">
        <h1 style="margin-top: 6%;">Recent Posts</h1>
        <div class="row row-cols-1 row-cols-md-2" style="margin-top: 6%;">
            <?php  while ($bow = $rusult->fetch_assoc()): ?>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo $bow['img'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: rgb(0, 161, 181);"><?php echo $bow['title'];?></h5>
                            <h6 class="card-title" style="color: rgb(247, 119, 59);"><?php echo $bow['category'];?></h6>
                            <p class="card-text" style="color: rgb(135, 137, 138); font-family: 'Poppins Light';"><?php echo $bow['description'];?></p>
                            <a href="edit.php?edit=<?php echo $bow['id'];?>" class="btn btn-info">Edite</a>
                            <a href="index.php?delete=<?php echo $bow['id'];?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>