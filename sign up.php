<?php

$fullname = $email = $age = $password ='';

$errors = array('email' =>'', 'fullname'=>'','age' =>'', 'password' =>'');

if (isset($_POST['sign up'])) {
    # code...
}

     // check name
     if (empty($_POST['fullname'])) {
        $errors['fullname'] = 'A Name is Required';
    }
    else {
        $title = $_POST['fullname'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['fullname'] = 'Name must be letters and space only';
        }
    }

     // check age
     if (empty($_POST['age'])) {
        $errors['age'] = 'Age is Required';
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
        <label for="name">Your Full name:</label>
        <input type="text" name="fullname" value="<?php echo htmlspecialchars($fullname)?>">
        <div class="red-text"><?php echo  $errors['fullname'];?></div>
        <label for="age">Your Age:</label>
        <input type="text" name="age" value="<?php echo htmlspecialchars($age)?>">
        <div class="red-text"><?php echo  $errors['age'];?></div>
        <label for="email">Your Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo  $errors['email'];?></div>
        <label for="password">Your Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>">
        <div class="center">
            <input type="submit" name="sign up" value="sign up" class="btn">
        </div>
    </form>
    </section>    
</body>
</html>