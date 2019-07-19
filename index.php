<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/15e3edaa10.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(!(isset($_SESSION['user']))){
            echo "<script>window.location='login.php'</script>";
        }else{
            $user=$_SESSION['user'];
        }
    ?>
    <div class="header">
        <h1 id="title"><i class="far fa-comments"></i> way2sms</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="group.php">New group</a></li>
            <li><a href="contact.php">New contact</a></li>
            <li><a href="smspage.php">Sms</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main">
        <h3>Welcome to way2sms</h3>
    </div>
</body>
</html>