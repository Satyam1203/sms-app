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
    <div class="header">
        <h1 id="title"><i class="far fa-comments"></i> way2sms</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">New group</a></li>
            <li><a href="contact.php">New contact</a></li>
            <li><a href="smspage.php">Sms</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <div class="form">
        <form action="" method="POST" onsubmit="return checkgrp()">
            <label for="group">
                Group name 
                <input type="text" name="g_name" id="g_name">
            </label><br>
            <input type="submit" value="Create group">
        </form>
    </div>
    <div class="main">
            <?php
            echo "
                <h3>Existing groups..</h3>
                <table>
                    <tr>
                        <th>Group Id</th>
                        <th>Group name</th> 
                        <th colspan=2>Controls</th>
                    </tr>
            ";
                $con = mysqli_connect('localhost','root','','way2sms');
                $q = "SELECT * from group_table";
                $res = mysqli_query($con,$q);
                while($row = mysqli_fetch_array($res)){
                    echo "
                        <tr>
                            <td>$row[g_id]</td>
                            <td>$row[g_name]</td>    
                            <td><a href='edit.php?id=`$row[g_id]`'>Edit</a></td>    
                            <td><a href='delete.php'>Delete</a></td>                
                        </tr>
                    ";
                }
            ?>
        
        </table>
        <?php
        if(isset($_REQUEST['g_name'])){
            $g_name = $_REQUEST['g_name'];
            $con = mysqli_connect('localhost','root','','way2sms');
            $q = "INSERT into group_table values('','$g_name')";//Or else we can pass NULL in place of '' . It accepts NULL value.
            $res = mysqli_query($con,$q);
            if($res){
                echo "Group Saved";
                echo "<script>window.location.href='group.php';</script>";
            }
            else 
                echo "<script>alert('Group name already exists.')</script>";
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>