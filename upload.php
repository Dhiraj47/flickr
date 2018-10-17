<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/3/2018
 * Time: 12:04 PM
 */
include 'db_connection.php';
?>

<html>
<head>
    <title>Upload Pics | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/myCSS.css">
    <script type="text/javascript" src="js/myJS.js"></script>

</head>
<body style="background-color: #F3F5F6">

<?php
include 'navigation.php';
?>

<br>
<div class="container border">
    <form action="php_functions.php" method="post" enctype="multipart/form-data">
        <h4>Make Post</h4>
        <img class="img-thumbnail" id="image" width="650" height="360"/><br/>
        <input name="file" type="file" onchange="showImage.call(this)" class="btn btn-dark"><br/><br/>
        <input type="text" name="title" placeholder="Caption" class="form-control col-xl-7"><br>
        <textarea name="content" rows="5" cols="78" style="resize: none;" class="form-control col-xl-7 text-info"
                  placeholder="Write Something Here..."></textarea><br/>
        <input class="btn btn-success" name="make_posts" type="submit" value="Post"/>
    </form>
</div>


<script>

    window.onload = function () {
        var e = document.getElementsByClassName('g');
        for (var i = 0; i < e.length; i++)
            e[i].style.display = 'none';
    }

    function showImage() {
        if (this.files && this.files[0]) {
            var obj = new FileReader();

            obj.onload = function (data) {
                var image = document.getElementById("image");
                image.src = data.target.result;
                image.style.display = "block";
            };

            obj.readAsDataURL(this.files[0]);
        }
    }
</script>
</body>
</html>
