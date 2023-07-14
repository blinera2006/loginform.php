<?php

session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body >
    <style type="text/css" >
        
        #text{
            height: 20px;
            border-radius:7px;
            padding:5px;
            border: solid thin #aaa;
            width:100%;
        }

        #buttom{
            padding: 20px;
            width:200px;
            color:white;
            background-color:lightblue;
            border:none;
        }

        #box{
            background-color:grey;
            margin:500px;
            width:300px;
            padding:20px;
            margin-right:60px;
        }

    </style>

    <div id="box" >
        <form method="post">
            <div style="font-size:20px;margin:10px; color:white;">SignUp</div>
            <input id="text" type="text" name="user_name">
             <input id="text" type="password" name="password">
             <input id="button" type="submit" value="login">
             <a href=" login.php"> click to login</a>
        </form>
    </div>
</body>
</html>