<?php
    // if(isset($_SESSION['login']) && $_SESSION['login'] == 'true'){
    //     header('Location:chat.php');
    //     exit;
    // }
    
    include('confige.php');
    $error = array();
   
    // login function
    if(isset($_POST['register'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        // fname validation
        if(empty($fname)){
             $error['fname'] = "First name is required";
        }
        elseif(!preg_match("/^[a-zA-Z]+$/", $fname)){
             $error['fname'] = "Only letters allowed";
        }
        // lname validation
        if(empty($lname)){
             $error['lname'] = "First name is required";
        }
        elseif(!preg_match("/^[a-zA-Z]+$/", $lname)){
             $error['lname'] = "Only letters allowed";
        }
        // email validation
        if(empty($email)){
             $error['email'] = "please enter your email address";
        }
        elseif(!filter_var($email , FILTER_SANITIZE_EMAIL)){
            $error['email'] = "Enter a valide email address";
        }
        // password validation 
        if(empty($password)){
                $error['password'] = "Enter your password";
        }
        elseif(strlen($password) < 6){
                $error['password'] = "Minimum password length is 6";
        }
        elseif(!preg_match("/[A-Z]/", $password)){
                $error['password'] = "At least one uppercase letter required";
        }
        elseif(!preg_match("/[0-9]/", $password)){
                $error['password'] = "At least one number required";
        }

        // final submition
        if(count($error) == 0){
            $name = "$fname $lname";
            mysqli_query($conn , "INSERT INTO users(name , email , username , password) VALUE('$name' , '$email' , '$username', '$password')");
        }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create an account</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>Create an account</h1>
            <div class="fsection">
                <label for="fname">Frist Name</label>
                <input type="text" id="fname" name="fname" placeholder="First Name">
                <span class="error-msg"><?php echo isset($error['fname']) ? $error['fname'] : ''; ?></span>
            </div>

            <div class="fsection">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" placeholder="Last Name">
                <span class="error-msg"><?php echo isset($error['lname']) ? $error['lname'] : ''; ?></span>
            </div>

            <div class="fsection">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email address">
                <span class="error-msg"><?php echo isset($error['email']) ? $error['email'] : ''; ?></span>
            </div>

            <div class="fsection">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="username">
                <span id="usernameerror"></span>
            </div>

            <div class="fsection">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <span class="error-msg"><?php echo isset($error['password']) ? $error['password'] : ''; ?></span>
            </div>

            <button type="submit" name="register">Register now</button>
            <p>Already have an account? <a href="index.php">Log in</a></p>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>