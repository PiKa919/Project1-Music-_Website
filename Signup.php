<?php
session_start();

include('dbconnect.php');
$msg = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Check if the form has been submitted
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

    if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)){
        if($user_password === $user_re_password){
            $query = "insert into user2 (user, email, password) VALUES('$user_name', '$user_email', '$user_password')";
            mysqli_query($conn, $query);
            header("Location login.php");

        }
        else{
            $msg = "Password and Confirm Password do not match";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>Music Website Signup</title>
</head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter your name......" required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Enter your Email ID......" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter your Password......" required>
                    </div>
                    <div class="card">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="user_re_password" placeholder="Enter your Password Again......" required>
                    </div>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Remember me</span>
                    </div>
                    <p>Already Have an Account? <a href="login.php">Login</a>   </p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="img/loginpage.jpg" alt="">
            <!--<h3>Incorrect Password</h3>-->
            <?php
            echo('<h3>'.$msg.'</h3>');
            ?>
        </div>
    </header>
    
</body>
</html>