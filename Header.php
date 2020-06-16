<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/e9f0ef8b24.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

    <header>
        <nav class="nav-header-main" >
        <a class="header-logo" href="#">
            <img src="#" alt="Logo">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="header-login">
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
            </form>
        </div>
        </nav>
    </header>