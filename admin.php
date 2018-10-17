<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/3/2018
 * Time: 12:04 PM
 */
include 'php_functions.php';


$likes_data = top_likes_comments('likes');
$comments_data = top_likes_comments('comments');
$user_data = user_activity('comments');

//print_r($likes_data);

?>

<html>
<head>
    <title>Home | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/myCSS.css">
    <script type="text/javascript" src="js/myJS.js"></script>
    <script>
        window.onload = function () {

            var like_chart = new CanvasJS.Chart("like_container", {
                animationEnabled: true,
                title: {
                    text: "LIKES"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00'%'",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        {y: <?php echo $likes_data[0][0];?>, label: "<?php echo $likes_data[0][1];?>"},
                        {y: <?php echo $likes_data[1][0];?>, label: "<?php echo $likes_data[1][1];?>"},
                        {y: <?php echo $likes_data[2][0];?>, label: "<?php echo $likes_data[2][1];?>"},
                        {y: <?php echo $likes_data[3][0];?>, label: "<?php echo $likes_data[3][1];?>"},
                        {y: <?php echo $likes_data[4][0];?>, label: "<?php echo $likes_data[4][1];?>"},
                        {y: <?php echo $likes_data[5][0];?>, label: "<?php echo $likes_data[5][1];?>"},
                        {y: <?php echo $likes_data[6][0];?>, label: "<?php echo $likes_data[6][1];?>"},
                        {y: <?php echo $likes_data[7][0];?>, label: "<?php echo $likes_data[7][1];?>"},
                        {y: <?php echo $likes_data[8][0];?>, label: "<?php echo $likes_data[8][1];?>"},
                        {y: <?php echo $likes_data[9][0];?>, label: "<?php echo $likes_data[9][1];?>"}
                    ]
                }]
            });
            like_chart.render();


            var comment_chart = new CanvasJS.Chart("comment_container", {
                animationEnabled: true,
                title: {
                    text: "COMMENTS"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00'%'",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        {y: <?php echo $comments_data[0][0];?>, label: "<?php echo $comments_data[0][1];?>"},
                        {y: <?php echo $comments_data[1][0];?>, label: "<?php echo $comments_data[1][1];?>"},
                        {y: <?php echo $comments_data[2][0];?>, label: "<?php echo $comments_data[2][1];?>"},
                        {y: <?php echo $comments_data[3][0];?>, label: "<?php echo $comments_data[3][1];?>"},
                        {y: <?php echo $comments_data[4][0];?>, label: "<?php echo $comments_data[4][1];?>"},
                        {y: <?php echo $comments_data[5][0];?>, label: "<?php echo $comments_data[5][1];?>"},
                        {y: <?php echo $comments_data[6][0];?>, label: "<?php echo $comments_data[6][1];?>"},
                        {y: <?php echo $comments_data[7][0];?>, label: "<?php echo $comments_data[7][1];?>"},
                        {y: <?php echo $comments_data[8][0];?>, label: "<?php echo $comments_data[8][1];?>"},
                        {y: <?php echo $comments_data[9][0];?>, label: "<?php echo $comments_data[9][1];?>"}
                    ]
                }]
            });
            comment_chart.render();


            var bar_chart = new CanvasJS.Chart("barchart_container", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Users Activities"
                },
                axisY: {
                    title: "% of Users",
                    suffix: " %"
                },
                data: [{
                    type: "column",
                    showInLegend: true,
                    toolTipContent: "Users who {label} in a Session: {y}%",
                    legendMarkerColor: "grey",
                    legendText: "Users Per Session",
                    dataPoints: [
                        { y: <?php echo $user_data[0]?>,  label: "uploads more than 4 pics" },
                        { y: <?php echo $user_data[1]?>, label: "likes more than 4 pics" },
                        { y: <?php echo $user_data[2]?>,  label: "comments more than 4 pics" },
                        { y: <?php echo $user_data[3]?>,  label: "online more than 5 mins" }
                    ]
                }]
            });
            bar_chart.render();


            var e = document.getElementsByClassName('g');
            for (var i = 0; i < e.length; i++)
                e[i].style.display = 'none';
        }

    </script>
</head>
<body style="background-color: #F3F5F6">

<?php
include 'navigation.php';

?>
<br>
<div class="container-fluid row" style="margin-left: 0.5%">
    <div class="col-xl-6">
        <div id="like_container" style="height: 400px;"></div>
    </div>
    <div class="col-xl-6">
        <div id="comment_container" style="height: 400px;"></div>
    </div>
</div>
<br>
<br>
<br>
<div class="container">
    <div id="barchart_container" style="height: 470px;"></div>
</div>
<br>
<br>
<br>
<script type="text/javascript" src="js/canvasjs.min.js"></script>
</body>
</html>
