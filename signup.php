<html>
<head>
    <title>Find your inspiration. | Flickr</title>
    <link rel="shortcut icon" type="image/ico" href="icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div style="background-color: black ; width: 100%">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" >flickr</a>
            </div>
        </div>
    </nav>


</div>
<div class="container" align="center">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
</div>
<form class="container" action="php_functions.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <label for="u_email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="u_email" required class="form-control col-xl-6">

                <label for="u_psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="u_psw" required class="form-control col-xl-6">

                <label for="u_name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="u_name" required class="form-control col-xl-6">
                <br>
                <label><b>Gender</b></label> <br>
                <input type="radio" name="gender" value="Male" class="custom-radio"> Male
                <input type="radio" name="gender" value="Female" class="custom-radio"> Female
                <br>
            </div>
            <div class="col-xl-4">
                <h4>Upload Photo</h4>
                <img class="rounded-circle" name="image" id="image" width="240" height="240" src="profile_pic/user.png"><br/><br>
                <input name="file" type="file" onchange="showImage.call(this)" class="btn btn-dark"><br/><br/>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="container" align="center">
        <button type="submit" class="btn btn-success" name="signup">Sign Up</button>
    </div>
</form>

<script>

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
