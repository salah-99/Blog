<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <title>Login</title>
</head>
<body style="background: url(0.jpg); background-size: cover;
    background-position: center;">
    <nav class="navbar navbar-light">
        <i class="fas fa-apple-alt"></i>
        <h1 class="navbar-brand text-light"><span>TOP</span>BLOG</h1>
        <form class="form-inline">
            <i class='fa fa-user' id="i"></i>
            <li class="dropdown">
                <a class="text-light" id="drop"href="visiteur.php">Visitor</a>
            </li>
        </form>
    </nav>
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h1>Login</h1>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-info">Login</button>
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h1>Signup</h1>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" require>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" require>
                        </div>
                        <button type="submit" class="btn btn-info">Signup</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>