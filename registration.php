<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>chatapp</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo" style="height: 100%;height: 100vh;display: grid;">
        <div class="form-container">
            <div class="image-holder"></div>
            <form id="login_form" method="post" name="form1">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <div id="errormsg" class="msgerror" style="display:none;"><label style="margin-bottom: 0px;">Label</label></div>
                    <div id="successmsg" class="msgsuccess" style="display:none;"><label style="margin-bottom: 0px;">Label</label></div>
                </div>
                <div class="form-group"><input class="form-control" type="text" id="name" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control" type="email" id="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" id="repassword" name="repassword" placeholder="Password (repeat)"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" id="signup" type="submit" name="signup">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a></form>
        </div>
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
</body>

</html>