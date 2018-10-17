<html>
<head>
    <title>Home | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/myCSS.css">
    <script type="text/javascript" src="js/myJS.js"></script>
</head>
<body style="background-color: #F3F5F6">
<span id="editor">

<?php
include 'navigation.php';

?>
    <br>
<div  class="container" style="margin-left: 10%">

    <div class="row">
        <?php

        include 'db_connection.php';

        $query = "SELECT * FROM posts ORDER BY date DESC";

        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <div class="rounded" :class="{'col-xl-5': col2, 'col-xl-3': col3, 'col-xl-2': col4}"
                 style="padding-top:1% ; margin:1% 8% 0 0; background-color: white; max-height: max-content; max-width: max-content">
                <span><img class="rounded-circle" width="30" height="30"
                           src="profile_pic/<?php echo $row['profile_pic']; ?>"
                           style="margin-right: 2%">

                    <a style="font-size: medium;"
                       href="profile.php?e_id=<?php echo $row['email']; ?>"> <?php echo $row['name']; ?> </a>
                    <label style="font-size: small; float: right;color: #b7b0b0;">Posted on: <?php echo $row['date']; ?></label>

                </span>
                <img onclick="gotopic('<?php echo $row['photo_id']; ?>','<?php echo $row['title']; ?>','<?php echo $row['content']; ?>')"
                     style="margin-top: 2%; margin-bottom: 1%"
                     class="img-thumbnail" src="photos/<?php echo $row['photo_id']; ?>">

                <h6 style="font-size: small;" id="<?php echo $row['title']; ?>"><b> <?php echo $row['title']; ?></b></h6>
                <hr>

                <div style="margin-bottom: 1%">
                <a id="<?php echo $row['photo_id']; ?>" style="color: #b7b0b0; font-size: small;"><?php echo $row['likes']; ?>
                    Faves</a>
                <a style="color: #b7b0b0; font-size: small;"><?php echo $row['comments']; ?> Comments</a>

                    <input onclick="goto_detail('<?php echo $row['photo_id']; ?>')" type="button" value="Comment"
                       class="page-link" style="float: right;font-size: small; margin-left: 2%">
                    <input onclick="like('<?php echo $row['photo_id']; ?>',this)" type="button" value="Like"
                       class="page-link" style="float: right;font-size: small;">
                </div>
            </div>
        <?php } ?>

    </div>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">
    <span id="close" class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

</span>

<script type="text/javascript" src="js/vue.js"></script>

<script>

    new Vue({
        el: '#editor',
        data: {
            col2: true,
            col3: false,
            col4: false
        }
    });


    function goto_detail(id) {
        window.location.href = 'detail.php?id=' + id;
    }



    function gotopic(photo_id, title, detail) {
// Get the modal
        var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption

        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        modal.style.display = "block";
        modalImg.src = 'photos/' + photo_id;
        captionText.innerHTML = '<b>'+title+'</b><br><i>'+detail+'</i>';

// Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
    }

</script>

</body>
</html>
