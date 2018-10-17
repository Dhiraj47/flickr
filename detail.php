<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/3/2018
 * Time: 12:04 PM
 */

include 'db_connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE photo_id LIKE '%$id%'";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);

$p_id = $row['photo_id'];
?>

<html>
<head>
    <title><?php echo $row['name']; ?> | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/myCSS.css">
    <script type="text/javascript" src="js/vue.js"></script>
    <script type="text/javascript" src="js/myJS.js"></script>

</head>
<body style="background-color: #F3F5F6">

<?php
include 'navigation.php'; ?>


<div class="container rounded grid"
     style="padding-top:1% ;background-color: white; max-height: max-content; max-width: max-content">
                <span>
                    <img class="rounded-circle" width="30" height="30"
                         src="profile_pic/<?php echo $row['profile_pic']; ?>"
                         style="margin-right: 2%">
                    <a style="font-size: medium;"
                       href="profile.php?e_id=<?php echo $row['email']; ?>"> <?php echo $row['name']; ?> </a>
                    <label style="font-size: small; color: #b7b0b0;float: right">Posted on: <?php echo $row['date']; ?></label>
                </span>
    <br>
    <img style="margin-top: 2%"
         class="img-thumbnail" src="photos/<?php echo $row['photo_id']; ?>" height="480" width="720">
    <h6 style="font-size: small;"><b> <?php echo $row['title']; ?></b></h6>
    <p style="font-size: medium;"><i><?php echo $row['content']; ?></i></p>
    <hr>
    <span class="row">
            <a style="color: #b7b0b0; font-size: small;"
               id="<?php echo $row['photo_id']; ?>"><?php echo $row['likes']; ?>
                Faves</a>
            <a style="color: #b7b0b0; font-size: small; margin-left: 5%"><?php echo $row['comments']; ?> Comments</a>

<br>
<br>

</span>
    <?php

    $query = "SELECT * FROM comments WHERE photo_id LIKE '%$id%'";

    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <img class="rounded-circle" width="30" height="30"
             src="profile_pic/<?php echo $row['profile_pic']; ?>"
             style="margin-right: 1%">
        <a style="font-size: medium;"
           href="profile.php?e_id=<?php echo $row['email']; ?>"> <?php echo $row['name']; ?> </a>
        <p style="margin-left: 8%"><?php echo $row['comments']; ?></p>
        <br>
    <?php }
    ?>
<span id="add_comment">
    <input type="text" id="comment" class="form-control" placeholder="Add Your Comment">
    <br>
    <input style="float: right" type="button" name="submit" class="btn btn-primary" value="Add Comment"
           onclick="addcomment('<?php echo $p_id; ?>')">
</span>
    <br>
    <br>
</div>


<script>

    window.onload = function () {
        var e = document.getElementsByClassName('g');
        for (var i = 0; i < e.length; i++)
            e[i].style.display = 'none';

        var m ='<?php echo $_SESSION['email'];?>';
        if(m==='admin@flickr')
        {
            document.getElementById('add_comment').style.display = 'none';
        }
    }

    function addcomment(photo_id) {
        var msg = document.getElementById('comment').value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                window.location.href = 'detail.php?id=' + photo_id;
            }
        }

        xmlhttp.open("GET", "php_functions.php?comment=" + msg + "&p_id=" + photo_id);
        xmlhttp.send();
    }

</script>
</body>
</html>
