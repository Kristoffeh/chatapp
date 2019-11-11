<?php
require 'dbconnect.php';

$query = "SELECT * FROM messages";
if ($result = mysqli_query($conn, $query)) {

    if (mysqli_num_rows($result) == 0){?>
        <label style="margin-bottom: 0px;font-size: 18px;color: rgb(133,133,133);margin-left: 12px;">Her var det tomt..</label>
    <?php }

    while ($row = mysqli_fetch_assoc($result)) {?>
    <div class="form-group" style="align-items: center;">
        <img class="rounded-circle" src="../assets/img/blue to pink.jpg" width="30" height="30" style="margin-right: 10px;" />
        <label style="margin-right: 10px;font-family: 'Titillium Web', sans-serif;font-size: 19px;
        margin-bottom: 0px;"><?php echo $row['sentby']; ?></label>
        <label style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: rgb(142,142,142);margin-bottom: 0px;"><?php echo $row['date']; ?></label>
        <label class="shadow-sm d-flex float-right d-xl-flex userrole <?php echo $row['tag']; ?>"
        style="font-family: 'Titillium Web', sans-serif;font-size: 15px;color: rgb(255,255,255);margin-left: 5px;margin-bottom: 0px;"><?php echo $row['role']; ?></label>
        <p style="color: #636363; font-family: 'Titillium Web', sans-serif;font-size: 17px;margin-top: 0px;margin-left: 45px;"><?php echo $row['message']; ?><br /></p>
	</div>

    <?php
    }

    mysqli_free_result($result);
}
mysqli_close($conn);
?>