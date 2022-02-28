<?php

include "./PHPMailer-master/src/PHPMailer.php";
include "./PHPMailer-master/src/Exception.php";
include "./PHPMailer-master/src/OAuth.php";
include "./PHPMailer-master/src/POP3.php";
include "./PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// if the sign up form was submitted
if($_POST){
 
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    // posted email must not be empty
    if(empty($email)){
        echo "<div>Email cannot be empty.</div>";
    }
 
    // must be a valid email address
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div>Your email address is not valid.</div>";
    }
 
    else{
       //include database connection
        require_once "db.php";
        require_once "layouts/headerEmailVerify.php";
        // check first if record exists
        $query = "SELECT id_ev FROM email_verify WHERE email = ? and verified = '1'";
        $stmt = $myCon->prepare( $query );
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        $num = $stmt->num_rows;
        if($num>0){
            echo "
            <div class='bg'></div>
            <div class='bg bg2'></div>
            <div class='bg bg3'></div>
            <div class='content'>
              <h1>Your email is already activated.</h1>
            </div>
            </body>
            </html>";
            // <div>Your email is already activated.</div>
        }
 
        else{
 
            // check first if there's unverified email related
            $query = "SELECT id_ev FROM email_verify WHERE email = ? and verified = '0'";
            if ($stmt = $myCon->prepare($query)) {
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
                $num = $stmt->num_rows;

                if($num>0){
     
                    // you have to create a resend verification script
                    echo "<div class='container'>Your email is already in the system but not yet verified. <a href='resend.php'>Resend verification?</a>.</div>";
                }
                else{
     
                    // now, compose the content of the verification email, it will be sent to the email provided during sign up
                    // generate verification code, acts as the "key"
                    $verificationCode = md5(uniqid("k88ma", true));
     
                    // send the email verification
                    $verificationLink = $_DOMAIN_Client . "activatedEmail.php?code=" . $verificationCode;
                    $htmlStr = "";
                    $htmlStr .= "Hi " . $email . ",<br /><br />";
                    $htmlStr .= "Cảm ơn đã đăng ký đặt lịch khám.<br /><br />";
     
                    $htmlStr .= "Làm ơn nhấn vào link bên dưới để xác thực địa chỉ email đăng ký đặt lịch khám.<br /><br /><br />";
                    $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
     
                    $htmlStr .= "Kind regards,<br />";
                    $htmlStr .= "<a href='https://www.facebook.com/khoa.nguyenvan.99' target='_blank'>Fb Khoa Nguyễn</a><br />";
     
                    $name = "Khoa2633";
                    $email_sender = "khoa.nv99vp@gmail.com";
                    $recipient_email = $email;
                    
                    $body = $htmlStr;
    
                    $mail = new PHPMailer(true);        // Passing `true` enables exceptions
    
                    try {
                        //Server settings
                        $mail->SMTP = 0;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = $email_sender;                 // SMTP username
                        $mail->Password = 'sdszijtrxfpxesrh';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to
                     
                        //Recipients
                        $mail->setFrom($email_sender, $name);
                        $mail->addAddress($recipient_email, 'K88MA');     // Add a recipient
                     
                        //Attachments
                        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                     
                        //Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'Verification Link | Khoa Nguyen | Subscription';
                        $mail->Body    = $body;
                        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                     
                        $mail->send();
                        // tell the user a verification email were sent
                        echo "<div class='bg'></div>
                        <div class='bg bg2'></div>
                        <div class='bg bg3'></div>
                        <div class='content'>
                          <h1>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link to verify.</h1>
                        </div>
                        </body>
                        </html>";
                        // <div class='container' id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link to verify.</div>
                    
                    } catch (Exception $e) {
                        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }
    
                    // save the email in the database
                    $created = date('Y-m-d H:i:s');
    
                    //write query, verified = '0' means it is unverified, on activation, it becomes '1'
                    $query = "INSERT INTO 
                                email_verify 
                            SET 
                                email = ?, 
                                verification_code = ?, 
                                created = ?,
                                verified = '0'";
    
                    $stmt = $myCon->prepare($query);
    
                    $stmt->bind_param('sss', $email, $verificationCode, $created);
    
                    // Execute the query
                    if($stmt->execute()){
                        echo "<div class='container'>Unverified email was saved to the database.</div>";
                    }else{
                        echo "<div class='container'>Unable to save your email to the database. <a href='https://www.facebook.com/khoa.nguyenvan.99'>Contact Us.</a></div>";
                        //print_r($stmt->errorInfo());
                    }
                }
            }
            else {
                echo 'Đã có lỗi thử lại sau';
            }
            
        }
 
    }
 
}
 
// show your sign up or registration form
// echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
//     echo "<input type='email' name='email' placeholder='Enter your email address to subscribe' required />";
//     echo "<input type='submit' value='Subscribe' />";
// echo "</form>";
?>