<?php
session_start();
require_once('db.php');
/*$email = $password = $pwd = '';*/
if (isset($_POST["submit"])) {
   
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $user_id = $row["user_id"];
        $username = $row["username"];
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;
    }
    header("Location: dashboard/home.php");
}
else
{
       echo "<script type='text/javascript'>alert('Username/Password incorrect')</script>"; 
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Premises|Get Started</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!--custom css-->
    <link href="bootstrap/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Welcome to PCPB<br>Premises Licensing System</h2>
                <p>Login to access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">                        
                        <form action="index.php" method="POST">
                        <div class="form-group">
                            <label><strong>Username</strong></label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label><strong>Password</strong></label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <input type="submit" value="Login" name ="submit" class="btn btn-primary">
                        <p> <a href="forgot-password.php">Forgot Password?</a></p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>