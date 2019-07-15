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
    <header class="header">
        <h1><i class="far fa-comments"></i> way2sms</h1>
        <a href="reg.php">Register</a>
        <a href="login.php">Log-in</a>
    </header>   
    <div class="form">
        <form action="" onsubmit="return check()" method="POST">
            <label for="phone">
                Mobile number
                <input type="text" name="phone2" id="phone">
            </label><br><br>
            <label for="password">
                Password 
                <input type="password" name="password" id="pass">
            </label><br><br>
            <input type="submit" value="Log In"><br><br>
        </form>
        <?php
            if(isset($_REQUEST['phone2'])){
                $phone = $_REQUEST['phone2'];
                $password = $_REQUEST['password'];
                $con = mysqli_connect('localhost','root','','way2sms');
                $q = "SELECT * from login where phone='$phone'";
                $res = mysqli_query($con,$q);
                if($row = mysqli_fetch_array($res)){
                    if($row['password']==$password)
                        echo "Login Successfully!!
                            <script>window.location.href = 'index.php'</script>
                        "; 
                    else
                        echo "Wrong password";
                }
                else 
                    echo "Invalid number or Failed connecting to database";
            }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>