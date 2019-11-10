<!DOCTYPE html>
<html style="background-color: #f1f7fc;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>chatapp</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: rgb(241,247,252);">
    <div class="login-clean"><?php
if (isset($_GET['l'])){?>

    <div class="d-xl-flex justify-content-xl-center" style="margin-bottom: 20px;">
    <div id="successmsg" class="loggedout" style="width: 90%;max-width: 320px;"><label style="margin-bottom: 0px;">Du har blitt logget ut</label></div>
</div>
<?php
}
?>


        <form id="login_form" method="post" name="form1">
            <div class="form-group">
                <div id="errormsg" class="msgerror" style="display:none;"><label style="margin-bottom: 0px;">Label</label></div>
                <div id="successmsg" class="msgsuccess" style="display:none;"><label style="margin-bottom: 0px;">Label</label></div>
            </div>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="far fa-user"></i></div>
            <div class="form-group"><input class="form-control" type="email" id="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" id="login" type="button" name="login">Log In</button></div><a class="forgot" href="registration.php">Don't have an account? Click here!</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Circle-Nav.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="assets/js/login.js"></script>
    <script src="assets/js/Select-Search.js"></script>
    <script src="assets/js/Studious-selectbox.js"></script>
    <script src="assets/js/update.js"></script>
</body>

</html>