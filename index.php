<!DOCTYPE html>
<html style="height: 100%;height: 100vh;margin: 0;">

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

<body style="height: 100%;height: 100vh;margin: 0;"><?php
ob_start();
session_start();

require 'require/dbconnect.php';

if( !isset($_SESSION['id']) ) {
    header("Location: login.php");
    exit;
}

$r=mysqli_query($conn, "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "'");
$userRow=mysqli_fetch_array($r);
?>
    <div class="container-fluid" style="height: 100%;display: flex;flex-direction: column;">
        <div class="row fixheight">
            <div class="col-md-4 col-lg-3 col-xl-2 offset-lg-0 hideformob" style="padding-right: 0px;padding-left: 0px;">
                <div class="d-flex flex-column flex-fill justify-content-between left-menu darkbars setborder" style="height: 100%;height: 100vh;">
                    <div class="darkbars scrollable" style="border-bottom: 0px solid rgba(0,0,0,0);">
                        <form>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <p style="font-family: 'Titillium Web', sans-serif;font-size: 27px;color: rgb(96,96,96);margin-top: 22px;margin-left: 23px;margin-bottom: 0px;"><strong>Rom</strong></p><a class="btn btn-secondary btn-block text-left left-menu-btn setfont darkbars" role="button"># main</a></div>
                        </form>
                    </div>
                    <div class="d-md-flex d-lg-flex d-xl-flex align-items-md-end align-items-lg-end align-items-xl-end setborder darkbars" style="border-top: 0px solid rgba(0,0,0,0);"><a class="btn btn-secondary btn-block text-left left-menu-btn setfont darkbars" role="button" style="margin-top: 0px;border-top: 1px solid #d6d6d6;color: rgb(33,37,41);" href="admin.php">Administrasjon</a></div>
                </div>
            </div>
            <div class="col-md-8 col-lg-7 col-xl-8" style="padding-left: 0px;padding-right: 0px;">
                <div class="divwrap d-flex flex-column justify-content-between">
                    <div class="middle-top-div" style="padding: 23px;">
                        <form>
                            <div class="form-group text-right" style="margin-bottom: -31px;"><label style="margin-right: 10px;font-family: 'Titillium Web', sans-serif;font-size: 19px;margin-bottom: 1px;"><?php echo $userRow['name']; ?></label><a class="loggut" href="require/loggut.php?l=success">Logg ut</a></div>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <h1 class="d-flex align-items-end mx-auto" style="font-family: 'Titillium Web', sans-serif;margin-bottom: 5px;font-size: 33px;color: rgb(96,96,96);"><strong>Main Chat</strong><label class="invisible roomlabel" style="margin-bottom: 0px;"># støttefunksjonen</label></h1>
                                <p style="color: rgb(119,119,119);font-family: 'Titillium Web', sans-serif;font-size: 17px;">This is the main chat for this community</p>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex d-xl-flex flex-column flex-fill align-items-xl-start middle-middle-div scrollable interval" id="scrolldiv" style="padding: 20px;padding-left: 30px;padding-top: 20px;margin-bottom: 0px;">
                        <div id="dbchecker" style="width: 100%;"></div>
                        <div id="interval" style="width: 100%;"></div>
                    </div>
                    <div>
                        <div class="middle-top-div" style="/*position: absolute;*//*bottom: 0;*//*width: 100%;*/padding: 15px;">
                            <form id="messageform" method="post" name="form1">
                                <div class="form-group" style="margin-bottom: 0px;"><input type="hidden" class="form-control" id="user" value="<?php echo $userRow['name']; ?>" /><input class="form-control" type="hidden" id="user"><textarea class="form-control textarea-replace messagebox textarea-autosize" id="msg" placeholder="Skriv noe.." rows="1" maxlength="1500"></textarea>
                                    <label
                                        id="lblcount" style="margin-bottom: 0px;font-size: 13px;color: rgb(133,133,133);margin-left: 12px;">0 / 1500</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 col-xl-2 offset-lg-0 offset-xl-0 fixheight-right hideonresize" style="padding-left: 0px;padding-right: 0px;">
                <div class="right-menu setborder darkbars" style="padding-right: 0px;padding-bottom: 0px;">
                    <div class="scrollable">
                        <form>
                            <div class="form-group" style="margin-bottom: 0px;">
                                <p style="font-family: 'Titillium Web', sans-serif;font-size: 27px;color: rgb(96,96,96);"><strong>Brukere</strong></p><?php
require 'require/dbconnect.php';

$q = "SELECT * FROM users";
if ($resu = mysqli_query($conn, $q)) {

    while ($ro = mysqli_fetch_assoc($resu)) {?>

    <div class="dropdown"><button class="btn dropdown-toggle memberitem" data-toggle="dropdown" aria-expanded="false" type="button"><?php echo $ro['name']; ?></button>
        <div role="menu" class="dropdown-menu" style="padding: 0px;"><a role="presentation" class="dropdown-item" href="#" style="padding-top: 2px;padding-bottom: 2px;"><span style="text-decoration: line-through;">Visit profile</span></a><a role="presentation" class="dropdown-item" href="#" style="padding-top: 0px;padding-bottom: 0px;"><span style="text-decoration: line-through;">Send message</span></a>
            <div
                role="presentation" class="dropdown-divider"></div><a role="presentation" class="dropdown-item" href="#" style="padding-top: 0px;padding-bottom: 5px;"><span style="text-decoration: line-through;">Kick from room</span></a></div>
    </div>

    <?php
    }

    mysqli_free_result($resu);
}
mysqli_close($conn);
?>


</div>
                        </form>
                    </div>
                </div>
            </div>
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
    <script src="assets/js/update.js"></script>
</body>

</html>