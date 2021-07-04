<?php

$fullname = $email = $age = $password ='';

$errors = array('email' =>'', 'fullname'=>'','age' =>'', 'password' =>'');

if (isset($_POST['sign up'])) {
    # code...
}

    //check email
    if (empty($_POST['email'])) {
        $errors['email'] = 'An Email is Required';
    }
    else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Login Form</title>
    <?php include ("header.php")?>
</head>
<body>
    <section class="container gray-text">
    <h4 class="center">Sign UP</h4>
    <form action="dashboard.php" method="post">
        <label for="email">Your Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo  $errors['email'];?></div>
        <label for="password">Your Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>">
        <div class="center">
            <input type="submit" name="sign in" value="sign in" class="btn">
            <h5>Don't have an account? <a href="sign up.php">Create One</a></h5>
        </div>
    </form>
    </section>    
</body>
</html>