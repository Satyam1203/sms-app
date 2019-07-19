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
        if(isset($_SESSION['user'])){
            $user= $_SESSION['user'];
        }
        else{
            echo "<script>window.location = 'login.php'</script>";
        }
    ?>
    <div class="header">
        <h1 id="title"><i class="far fa-comments"></i> way2sms</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="group.php">New group</a></li>
            <li><a href="#">New contact</a></li>
            <li><a href="smspage.php">Sms</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </div>
    <div class="form" style="padding-top:0px;">
        <h1 style="text-decoration:underline;">ADD CONTACT</h1>
        <form action="" method="POST" onsubmit="return checkContact()">
            <label for="g_name2">
                Select Group
                <select name="g_name2" id="g_name2">
                    <option selected disabled>Name</option>
                    <?php
                        $con = mysqli_connect('localhost','root','','way2sms');
                        $q = "SELECT * from group_table where user='$user'";
                        $res = mysqli_query($con,$q);
                        while($row = mysqli_fetch_array($res)){
                            echo "
                                <option>$row[g_name]</option>
                            ";
                        }
                    ?>
                </select>
            </label><br>
            <label for="c_name">
                <input type="text" name="c_name" id="c_name" placeholder="Person Name" required>
            </label><br>
            <!-- <label for="photo">
                <input type="file" name="c_image" id="c_img" value="PHOTO" style="width:200px;">
            </label> -->
            <label for="c_phone">
                <input type="text" name="c_phone" id="c_phone" placeholder="Mobile Number" required>
            </label><br>
            <input type="submit" value="Save">
        </form>

        <?php
        if(isset($_REQUEST['c_phone'])){
            $g_name = $_REQUEST['g_name2'];
            $c_name = $_REQUEST['c_name'];
            $c_phone = $_REQUEST['c_phone'];
            $con = mysqli_connect('localhost','root','','way2sms');
            $q = "INSERT into contact_table values('','$c_name','$c_phone','$g_name','$user')";
            $res = mysqli_query($con,$q);
            if($res)
                echo "<br>Contact saved successfully";
            else
                echo "<br>Can't save !! Try Later";
        }
        ?>
    </div>
    <div class="main">
            <?php
            echo "
                <h2>Contacts..</h2>
                <table>
                    <tr>
                        <th>Contact Id</th>
                        <th>Contact name</th>
                        <th>Mobile number</th>
                        <th>Group related</td>
                    </tr>
            ";
                $con = mysqli_connect('localhost','root','','way2sms');
                $q = "SELECT * from contact_table where user='$user'";
                $res = mysqli_query($con,$q);
                while($row = mysqli_fetch_array($res)){
                    echo "
                        <tr>
                            <td>$row[c_id]</td>
                            <td>$row[c_name]</td>
                            <td>$row[c_phone]</td>
                            <td>$row[g_name]</td>
                        </tr>
                    ";
                }
            ?>

        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>