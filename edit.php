<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/15e3edaa10.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Ubuntu&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_REQUEST['id'];
    ?>
    <form>
        Group Name 
        <!-- <input type="text" name="g_name" id="" value='<?php 
                $con = mysqli_connect('localhost','root','','way2sms');
                $q = "SELECT * from group_table where g_id='$id'";
                $res = mysqli_query($con,$q); 
                if($row == mysqli_fetch_array($res))
                    echo $row['g_name'];
                    ?>'>
        <input type="submit" value="Save"> -->
    </form>
</body>
</html>