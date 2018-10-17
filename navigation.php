<?php
if (!isset($_SESSION))
    session_start();

if ($_SESSION['email'] != 'admin@flickr') {
    $href = 'profile.php?e_id=' . $_SESSION['email'];
} else
    $href = '#';
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between fixed-top">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="#">flickr</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="posts.php">All Activity</a>
            </li>
            <li class="nav-item">
                <?php
                if ($_SESSION['email'] == 'admin@flickr') {
                    $email = $_SESSION['email'];
                    echo " <a class=\"nav-link\" href=\"admin.php?id= $email\"><b>Admin</b></a>";
                } else {
                    $email = $_SESSION['email'];
                    echo " <a class=\"nav-link\" href=\"upload.php?id= $email\">Upload Pics</a>";
                }
                ?>
            </li>
            <li class="nav-item g">
                <input @click="col2 = true, col3 = false, col4 =false" width="25" height="25" type="button" value="2x2"
                       class="btn btn-primary">
            </li>
            <li class="nav-item g">
                <input @click="col2 = false, col3 = true, col4 =false" width="25" height="25" type="button" value="3x3"
                       class="btn btn-primary">
            </li>
            <li class="nav-item g">
                <input @click="col2 = false, col3 = false, col4 =true" width="25" height="25" type="button" value="4x4"
                       class="btn btn-primary">
            </li>

        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $href; ?>">Welcome <b><i> <?php echo $_SESSION['name']; ?></i></b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="php_functions.php?logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<br>

