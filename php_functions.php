<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/3/2018
 * Time: 10:06 AM
 */
include 'db_connection.php';
ob_flush();
session_start();



if (isset($_GET['like'])) {

    $photo_id = $_GET['like'];
    $query = "SELECT likes FROM posts WHERE photo_id LIKE '%$photo_id%'";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);
    $like = $row['likes'];
    $like++;

    $query = "UPDATE posts SET likes = $like WHERE photo_id LIKE '%$photo_id%'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $email = $_SESSION['email'];
        $query = "INSERT INTO likes VALUES('$photo_id','$email')";
        mysqli_query($connection, $query);

        unset($query, $result, $row);
        echo $like;
        $_SESSION['like'] += 1;
    } else {
        echo 'Error' . mysqli_error($connection);
        die();
    }

}

if (isset($_GET['comment'])) {

    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $pic = $_SESSION['profile_pic'];
    $photo_id = $_GET['p_id'];
    $comment = $_GET['comment'];

    $query = "INSERT INTO comments VALUES ('$email','$name','$pic','$photo_id','$comment')";
    $result = mysqli_query($connection, $query);

    $_SESSION['comment'] += 1;
    unset($query, $result);

    $query1 = "SELECT comments FROM posts WHERE photo_id LIKE '$photo_id'";
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $t_com = $row1['comments'];
    $t_com+=1;

    $q = "UPDATE posts SET comments = $t_com WHERE photo_id LIKE '$photo_id'";
    mysqli_query($connection, $q);

}



if (isset($_POST['login'])) {
    $user_id = $_POST['user_id'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM users WHERE email='$user_id' AND password='$pass'";
    $result = mysqli_query($connection, $query);

    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($count != 0) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['profile_pic'] = $row['profile_pic'];
        $_SESSION['gender'] = $row['gender'];

        $_SESSION['upload'] = 0;
        $_SESSION['like'] = 0;
        $_SESSION['comment'] = 0;
        $_SESSION['online_time'] = time();

        header('Location: posts.php');
    } else
        header('Location: index.php');

    unset($query, $result, $row);
}

if (isset($_POST['make_posts'])) {
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $pic = $_SESSION['profile_pic'];

    $photo = uniqid(rand(), true) . $_FILES['file']['name'];;
    $image_temp = $_FILES['file']['tmp_name'];
    move_uploaded_file($image_temp, "photos/$photo");

    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO posts(email,name,profile_pic,photo_id,title,content,date) VALUES ('$email','$name','$pic','$photo','$title','$content',now())";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script type='text/javascript'>alert('Successfully Uploaded');</script>";
        header('Location: upload.php');
    } else
        echo "<script type='text/javascript'>alert('Error - " . mysqli_error($connection) . ");</script>";

    unset($query, $result, $row);
    $_SESSION['upload'] += 1;
}

if (isset($_GET['logout'])) {
    $email = $_SESSION['email'];

    if ($email == 'admin@flickr') {
        session_destroy();
        header('Location: index.php');
    } else {
        $UPLOAD = $_SESSION['upload'];
        $LIKE = $_SESSION['like'];
        $COMMENT = $_SESSION['comment'];
        $offline_time = time();

        $total_time = ($offline_time - $_SESSION['online_time']) / 60;


        $query1 = "SELECT COUNT(name) AS total FROM users WHERE hit_upload >4";
        $result1 = mysqli_query($connection, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $hit_upload = ($row1['total'] + $UPLOAD) / 2;
        unset($result1, $row1, $query1);

        $query1 = "SELECT COUNT(name) AS total FROM users WHERE hit_like >4";
        $result1 = mysqli_query($connection, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $hit_like = ($row1['total'] + $LIKE) / 2;
        unset($result1, $row1, $query1);

        $query1 = "SELECT COUNT(name) AS total FROM users WHERE hit_comment >4";
        $result1 = mysqli_query($connection, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $hit_com = ($row1['total'] + $COMMENT) / 2;
        unset($result1, $row1, $query1);

        $query1 = "SELECT COUNT(name) AS total FROM users WHERE online_time >5";
        $result1 = mysqli_query($connection, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $online_time = ($row1['total'] + $total_time) / 2;
        unset($result1, $row1, $query1);


        $q = "UPDATE users SET hit_upload =$hit_upload, hit_like=$hit_like, hit_comment=$hit_com, online_time = $online_time WHERE email LIKE '$email'";
        mysqli_query($connection, $q);

        session_destroy();
        header('Location: index.php');
    }
}

if (isset($_POST['signup'])) {

    $email = $_POST['u_email'];
    $name = $_POST['u_name'];
    $psw = $_POST['u_psw'];
    $gender = $_POST['gender'];

    $photo = uniqid(rand(), true) . $_FILES['file']['name'];
    $image_temp = $_FILES['file']['tmp_name'];
    move_uploaded_file($image_temp, "profile_pic/$photo");

    $insert = "INSERT INTO users (email,password,name,profile_pic,gender) VALUES('$email','$psw','$name','$photo','$gender')";
    $s=mysqli_query($connection, $insert);
    if($s)
        echo "Successfully SignUp";
    else
        echo "Error: ".mysqli_error($connection);

    header('Location: signup.php');
}

function user_activity()
{
    global $connection;
    $query = "SELECT COUNT(name) AS total FROM users";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_assoc($result);
    $total_user = $row['total'];

    $query1 = "SELECT COUNT(name) AS total FROM users WHERE hit_upload >4";
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $hit_pics = round(($row1['total'] / $total_user) * 100, 2);
    unset($result1, $row1, $query1);

    $query1 = "SELECT COUNT(name) AS total FROM users WHERE hit_like >4";
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $hit_like = round(($row1['total'] / $total_user) * 100, 2);
    unset($result1, $row1, $query1);

    $query1 = "SELECT COUNT(name) AS total FROM users WHERE hit_comment >4";
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $hit_com = round(($row1['total'] / $total_user) * 100, 2);
    unset($result1, $row1, $query1);

    $query1 = "SELECT COUNT(name) AS total FROM users WHERE online_time >4";
    $result1 = mysqli_query($connection, $query1);
    $row1 = mysqli_fetch_assoc($result1);
    $online_time = round(($row1['total'] / $total_user) * 100, 2);
    unset($result1, $row1, $query1);

    $user_data = array($hit_pics, $hit_like, $hit_com, $online_time);

    return $user_data;

}


function compare($a, $b)
{
    return ($b[0] <= $a[0]) ? -1 : 1;
}
function top_likes_comments($ev)
{
    global $connection;
    $query = "SELECT name,photo_id,$ev FROM posts";
    $result = mysqli_query($connection, $query);

    $data = array();

    if ($ev == 'likes') {
        while ($row = mysqli_fetch_assoc($result)) {
            $store = array();
            array_push($store, $row['likes']);
            array_push($store, $row['name'] . ' - Photo ID:(' . $row['photo_id'] . ')');
            array_push($data, $store);
            unset($store);
        }

    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $store = array();
            array_push($store, $row['comments']);
            array_push($store, $row['name'] . ' - Photo ID:(' . $row['photo_id'] . ')');
            array_push($data, $store);
            unset($store);
        }
    }


//    print_r($data);

    usort($data, "compare");
//    print_r($data);
    $total = array_sum(array_column($data, 0));
    $count = sizeof($data);
//    echo $count.'<br><br>';
    $ret_data = array();
    $others = 0;
    for ($i = 0; $i < $count; $i++) {
        $store = array();
        if ($i >= 9) {
//            echo $data[$i][0];
//            echo '<br>';
            $others += ($data[$i][0] / $total) * 100;
//            echo $others;
//            echo '<br>';
            if ($i == $count - 1) {
//                echo $others;
//                echo '<br>';
                array_push($store, $others, 'Others');
                array_push($ret_data, $store);
                break;
            } else
                continue;
        }

        array_push($store, (round(($data[$i][0] / $total) * 100, 2)), $data[$i][1]);
        array_push($ret_data, $store);
        unset($store);
    }

    return $ret_data;
}

?>