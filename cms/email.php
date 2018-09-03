<?php

    require("../phpmailer/class.phpmailer.php");
    require("../phpmailer/class.smtp.php");
    require ('..\phpmailer\PHPMailerAutoload.php');

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;        maharjanshona12@gmail.com                       // Enable verbose debug output
    $htmlversion="<p style='color:red'>this is the html version</p>";
    $textversion="this is the text version";

    $mail->isSMTP(); 
    //$mail->SMTPDebug = 2;                                     // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'maharjanshona12@gmail.com';                 // SMTP username
    $mail->Password = 'testingm@il';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('maharjanshona12@gmail.com','Sender');

        //database
        include '../inc/dbcon.php';

    //initializing variables
        $ebatch = "";

        $errors = array(); //creating $errors as an array variable.

       
    if (isset($_POST['entbatch'])) {
        $ebatch = mysqli_real_escape_string($con, $_POST['batch']);
        //echo 'success';
        //ensure that the form field are filled properly(form validation)...
    if (!empty($ebatch)) {
            if (!preg_match("/^[0-9]{4}$/", $ebatch)) {
                    array_push($errors, "invalid batch number");
                }
            }
            else{
                array_push($errors, "batch is required here");
            }
            
            if (count($errors) == 0){

    /*** prepare the select statement ***/
             $stmt = "SELECT email FROM registration WHERE batch= '$ebatch' ";
     
            /*** execute the prepared statement ***/
            $run = mysqli_query($con,$stmt);
            if (!$run) {
                die ('SQL Error: ' . mysqli_error($conn));
            }
            $email =array();
            //$arrlength = count($email);
            //$row = array();     
            while($row = mysqli_fetch_array($run)) {
               
                $email = $row['email'];
                //echo $arrlength;
                $mail->addAddress($email);  
                        }   // Add a recipient
                            }
}
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Result published';
        $mail->Body    = $htmlversion;
        $mail->AltBody = $textversion;

        if(!$mail->send()) {
            $_SESSION['error'] = 'Message could not be sent.please try again :(';
            header('location:sendmail.php');
            // $_SESSION['error'] = 'Mailer Error: ' . $mail->ErrorInfo;
            //echo 'Not sent: <pre>'.print_r(error_get_last(), true).'</pre>';

        } else {
            $_SESSION['success'] ='Message has been sent :)';
            header('location:sendmail.php');
        exit();
        }
?>