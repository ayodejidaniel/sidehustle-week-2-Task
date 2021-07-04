<?php
 $_SESSION['email'] = $_POST['email'];
 $email= $_SESSION['email'];
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <?php include ("header.php")?>
</head>
<body>
    <div class="container">
        <h4>Welcome <?php echo htmlspecialchars($name)?>, <br>
        Your email address is: <?php echo htmlspecialchars($email)?></h4>
    </div>
</body>
</html>