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
        <form action="" onsubmit="return checkreg()" method="POST">
            <label for="phone">
                <input type="text" placeholder="Mobile number" name="phone" id="phone">
            </label><br><br>
            <input type="submit" value="Get password">
        </form>
        <?php
            if(isset($_REQUEST['phone'])){
                $phone = $_REQUEST['phone'];
                $password = rand(100000,999999);
                $con = mysqli_connect('localhost','root','','way2sms');
                $q = "INSERT into login values($phone,$password)";
                $res = mysqli_query($con,$q);
                if($res){
                    echo "<script>document.getElementById('phone').value = '$phone'</script>";
                    echo "<input type='text' value = '$password'>";
                }
                else 
                    echo "Mobile number already registered or failed connecting to database";
            }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>