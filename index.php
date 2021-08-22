<?php
$username = $email = $password = "";
$errors = ['username' =>'', 'email'=>'', 'password' =>'', 'con-password'=>''];
   
if (isset($_POST['sign-up'])) {
    session_start();
    $_SESSION['name'] = $_POST['username'];
    
}
//validate username
if (empty($_POST['username'])) {
    $errors['username'] = 'Please enter a username';
}
elseif (!preg_match('/^[a-zA-Z\s]+$/', $_POST['username'])) {
    $errors['username'] = "User name can only contain letters and spaces";
}
else {
    $username = $_POST['username'];
}
//validate email
if (empty($_POST['email'])) {
    $errors['email'] = 'Please enter your Email';
}
elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email must be a valid email address";
}
else {
    $email = $_POST['email'];
}
//validate password
if (empty($_POST['password'])) {
    $errors['password'] = 'Please enter a password';
}
elseif (strlen($_POST["password"]) < 6) {
    $errors['password'] = "Password must have at least 6 characters";
}
else {
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
}
 // validate password confirm
 if (empty($_POST['con-password'])) {
    $errors['con-password'] = "Re-enter your password";
} 
elseif($password !== $_POST['con-password']) {
    $errors['con-password'] = "Password do not match";
} 
else {
    $con_password = $_POST['con-password'];
    $hashed_con_password = password_hash($con_password, PASSWORD_DEFAULT);
}

if (array_filter($errors)) {
    //echo 'errors in the form';
}   else {
    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <section class="container gray-text">
    <h4 class="center">Create An Account</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="username">username:</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>" required>
        <div class="red-text"><?php echo  $errors['username'];?></div>
        <label for="email">Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo  $errors['email'];?></div>
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>" required>
        <div class="red-text"><?php echo  $errors['password'];?></div>
        <label for="con-password">Confirm Password:</label>
        <input type="password" name="con-password" value="" required>
        <div class="red-text"><?php echo  $errors['con-password'];?></div>
        <div class="center">
            <input type="submit" class="btn" name="sign-up" value="Sign Up">
        </div>
    </form>
    </section>
</body>
</html>

