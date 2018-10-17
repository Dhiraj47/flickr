<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/3/2018
 * Time: 12:04 PM
 */
include 'db_connection.php';
$email_id = $_GET['e_id'];
$query = "SELECT * FROM users WHERE email LIKE '%$email_id%'";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title><?php echo $row['name']; ?> | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/myCSS.css">
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/myJS.js"></script>
    <script type="text/javascript" src="js/vue.js"></script>

</head>
<body style="background-color: #F3F5F6">
<span id="editor">
<?php
include 'navigation.php';
?>

<div id="dvImage" style="background-color: #212124; height: 45%; width: 100%; padding-top: 10%;">
    <div class="container">
        <img src="profile_pic/<?php echo $row['profile_pic']; ?>" class="rounded-circle" width="100" height="100"
             style="margin-right: 1%">
        <label style="color: white"><?php echo $row['name']; ?></label>

    </div>
</div>

<div class="container">
    <div class="row">

        <?php
        $query = "SELECT * FROM posts WHERE email LIKE '%$email_id%' ORDER BY date DESC";

        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="rounded grid" :class="{'col-xl-5': col2, 'col-xl-3': col3, 'col-xl-2': col4}"
                 style="padding-top:1% ; margin:1% 8% 0 0; background-color: white; max-height: max-content; max-width: max-content">
                <span>
                    <label style="font-size: small; color: #b7b0b0;">Posted on: <?php echo $row['date']; ?></label>
                </span>
                <img onclick="goto_detail('<?php echo $row['photo_id']; ?>')" style="margin-top: 2%"
                     class="img-thumbnail" src="photos/<?php echo $row['photo_id']; ?>">
                <h6 style="font-size: small;"><b> <?php echo $row['title']; ?></b></h6>
                <h5></h5>
                <hr>
                <span class="row">
            <a style="color: #b7b0b0; font-size: small;margin-left: 2%"
               id="<?php echo $row['photo_id']; ?>"><?php echo $row['likes']; ?>
                Faves</a>
            <a style="color: #b7b0b0; font-size: small; margin-left: 5%"><?php echo $row['comments']; ?> Comments</a>

</span>
            </div>

        <?php } ?>
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
</span>
<script>

    new Vue({
        el: '#editor',
        data: {
            col2: false,
            col3: true,
            col4: false
        }
    });

    function grid(grid_type) {
        var el = document.getElementsByClassName('grid');
        for (var i = 0; i < el.length; i++)
            el[i].setAttribute('class', 'rounded grid ' + grid_type);
    }


    function goto_detail(id) {
        window.location.href = 'detail.php?id=' + id;
    }


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
        }, 10000);
    });
</script>
</body>
</html>
