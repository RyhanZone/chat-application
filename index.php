<?php 
session_start();

    if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){
        header('Location:chat.php');
        exit;
    }
    include('confige.php');
    $error = array();
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $quiry = mysqli_query($conn , "SELECT * FROM users WHERE email='$email'");
        $user = mysqli_fetch_assoc($quiry);

        if(empty($email)){
            $error['email'] = 'please enter your email address';
        }
        elseif(!isset($user)){
            $error['email'] = 'email address not found';
        }
        if(isset($user)){
            if($user['email'] == $email){
                if(empty($pass)){
                    $error['pass'] = 'enter your password';
                }elseif($pass != $user['password']){
                    $error['pass'] = 'invalide password';
                }
                if($pass == $user['password']){
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['login'] = 'true';
                    header('Location:chat.php');
                    exit;
                }
            }
        }
        

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ki obosta!</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Welcome Back!</h1>
            <div class="fsection">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="enter your email address">
                <span class="error-msg"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span>
            </div>
            <div class="fsection">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="enter your password">
                <span class="error-msg"><?php echo isset($error['pass']) ? $error['pass'] : ''; ?></span>
            </div>
            <button type="submit" name="login">Log in</button>
            <p>Not have any account? <a href="registration.php">Register now</a></p>
        </form>
    </div>
</body>
</html>