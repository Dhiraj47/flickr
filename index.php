<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/2/2018
 * Time: 5:22 AM
 */

?>

<html>
<head>
    <title>Find your inspiration. | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jQuery.js"></script>
</head>
<body background="icons/8.jpg">

<nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" style="color: white; font-size: xx-large"><b>flickr</b></a>
    <form class="form-inline" action="php_functions.php" method="post">
        <input class="form-control mr-sm-2" name="user_id" type="text" placeholder="UserId">
        <input class="form-control mr-sm-2" name="pass" type="password" placeholder="Password" >
        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="login">Login</button>
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="window.location.href='signup.php'">Signup</button>
    </form>
</nav>

<div id="dvImage" style="height: 89%;width: 100%; padding: 10% 25%; color: white">
    <div class="container" align="center">
        <h1 style="font-size: 50px"><b>Find your inspiration.</b></h1>
        <h3>Join the Flickr community, home to tens of billions of photos and 2 million groups.</h3>

    </div>
</div>


<script>
    var images = ['icons/1.jpg', 'icons/2.jpg', 'icons/3.jpg', 'icons/4.jpg', 'icons/5.jpg', 'icons/6.jpg', 'icons/7.jpg', 'icons/.jpg'];

    $(function () {
        var i = 0;
        $("#dvImage").css("background-image", "url(images/" + images[i] + ")");
        setInterval(function () {
            i++;
            if (i === images.length) {
                i = 0;
            }
            $("#dvImage").fadeOut("slow", function () {
                $(this).css("background-image", "url(" + images[i] + ")");
                $(this).fadeIn("slow");
            });
        }, 5000);
    });


</script>
</body>
</html>
