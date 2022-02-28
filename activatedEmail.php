<?php
//database connection
require_once "db.php";
require_once "layouts/headerEmailVerify.php";
// check first if record exists
$query = "SELECT id_ev FROM email_verify WHERE verification_code = ? and verified = '0'";
$stmt = $myCon->prepare($query);
$stmt->bind_param('s', $_GET['code']);
$stmt->execute();

$stmt->store_result();
$num = $stmt->num_rows;

if ($num > 0) {

    // update the 'verified' field, from 0 to 1 (unverified to verified)
    $query = "UPDATE email_verify 
                set verified = '1'
                where verification_code = ?";

    $stmt = $myCon->prepare($query);
    $stmt->bind_param('s', $_GET['code']);

    if ($stmt->execute()) {
        // tell the user
        echo "
        <div class='bg'></div>
        <div class='bg bg2'></div>
        <div class='bg bg3'></div>
        <div class='content'>
            <h1>Your email is valid, thanks!</h1>
            <a href='$_DOMAIN_Client'><h1><span class='iconify' data-icon='cil:home'></span>Trở về trang chủ</h1></a>
        </div>
        </body>
        </html>";
        // <div>Your email is valid, thanks!. You may now login.</div>
    } else {
        echo "<div>Unable to update verification code.</div>";
        //print_r($stmt->errorInfo());
    }
} else {
    // tell the user he should not be in this page
    echo "<div>I think you're in the wrong place.</div>";
}
