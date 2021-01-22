<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST)) {
    if ($_POST['name'] && $_POST['email'] && $_POST['konu']) {


        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;
                $mail->setLanguage('tr', '/Directory/');
                $mail->CharSet = "utf8";                     
                $mail->isSMTP();                                       
                $mail->Host = "smtp.gmail.com";                   // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = "projectbitirme@gmail.com";                     //aviteng e pota buraya ayzılacak
                $mail->Password   = '1q2w3e4r5T*-?';                               // aviteng password
                $mail->SMTPSecure = "tls";        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients

                $mail->addAddress('projectbitirme@gmail.com', 'Sende El VER');   //avitengin email adresini buraya yazacaz
                $mail->setFrom($_POST['email'], $_POST['name']);
                
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "CV Gönderimi";
                $mail->Subject = $_POST['email'];
                $mail->Body    = $_POST['message'];
               
                $mail->AltBody = 'body';

                if ($mail->send()) {

                    $alert = array(
                        "message" => "Your mail has been successfully received. We thank you",
                        "type" => "success"
                        
                    );
                    $_SESSION["alert"]=$alert;
                    header("location:/Bitirme/İletişim.php");
                } else {
                    $alert = array(
                        "message" => "An Error Encountered While Trading",
                        "type" => "danger"
                    );
                    $_SESSION["alert"]=$alert;
                    header("location:/Bitirme/İletişim.php");
                }
            } catch (Exception $e) {

                $alert = array(
                    "message" => "A system error has occurred",
                    "type" => "danger"
                );
                $_SESSION["alert"]=$alert;
                header("location:/Bitirme/İletişim.php");
            }
        } else {
            $alert = array(
                "message" => "A system error has occurred",
                "type" => "danger"
            );
            $_SESSION["alert"]=$alert;
            header("location:/Bitirme/İletişim.php");
        }
    } else {
        $alert = array(
            "message" => "A system error has occurred",
            "type" => "danger"
        );
        $_SESSION["alert"]=$alert;
        header("location://Bitirme/İletişim.php");
    }