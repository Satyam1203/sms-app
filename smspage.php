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
            <li><a href="index.php">Home</a></li>
            <li><a href="group.php">New group</a></li>
            <li><a href="contact.php">New contact</a></li>
            <li><a href="#">Sms</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <div class="form">
        <form action="" method="POST" onsubmit="return checksms()">
            Group name
            <select name="g_name" style='padding:5px 20px;' id="g_name">
            <option selected disabled>Name</option>
            <?php
                $con = mysqli_connect('localhost','root','','way2sms');
                $q = "SELECT * from group_table where user='$user'";
                $res = mysqli_query($con,$q);
                while($row = mysqli_fetch_array($res)){
                    echo "<option>$row[g_name]</option>";
                }
            ?>
            </select><br>
            <span id="err"></span><br><br>
            <input type="submit" value="Filter">
        </form>
    </div>
    <div class="main">
        <?php
        if(isset($_REQUEST['g_name'])){
            // echo "<script>document.getElementById('g_name').value = `$_REQUEST['g_name']`;</script>";
            echo "
                <form action='' method='POST' onsubmit='return checksms2()'>
                    <select name='c_name' style='padding:5px 20px;' id='c_name'>
                        <option disabled selected>Person</option>
            ";
            $g_name = $_REQUEST['g_name'];
            $con = mysqli_connect('localhost','root','','way2sms');
            $q = "SELECT * from contact_table where g_name='$g_name' and user='$user'";
            $res = mysqli_query($con,$q);
            while($row = mysqli_fetch_array($res)){
                echo "
                    <option>$row[c_name]</option>
                ";
            }
            echo "
                </select><br><br>
                <textarea name='msg' placeholder='Message' rows=4 cols=18></textarea><br>
                <input type='submit' value='SEND'>
                </form>
            ";
        }
        ?>
        <?php
            if(isset($_REQUEST['c_name'])){
                $c_name = $_REQUEST['c_name'];
                echo "<script>alert('Message sending success !! ')</script>";
            }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>