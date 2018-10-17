<?php
/**
 * Created by PhpStorm.
 * User: Dhiraj
 * Date: 8/3/2018
 * Time: 7:22 AM
 */

$connection = mysqli_connect('localhost','root','','gallery');
if(!$connection){
    echo 'Error: '.mysqli_error($connection);
    die();
}

