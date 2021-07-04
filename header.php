<?php

    session_start();
    $_SESSION['name'] = $_POST['fullname'];

    $name= $_SESSION['name']?? 'Guest'; 
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Login Task</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <nav class="white">
        <div class="container">
            <ul class="right hide-on-small">
                <li class="grey-text"><?php echo htmlspecialchars($name)?></li>
                <li><a href="sign in.php" class="btn">sign in</a></li>
            </ul>
        </div>
    </nav>    
</body>
</html>