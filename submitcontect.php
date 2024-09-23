<?php

include('config.php');
require 'vendor/autoload.php';
require("smtp/PHPMailerAutoload.php");

// Validate and sanitize input data
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';


    $sql = "INSERT INTO contact_customers (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    $submitsql = mysqli_query($con, $sql);

    if ($submitsql) {
        $email_body='<body>
        <div dir="ltr" class="es-wrapper-color">         
            <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td class="esd-email-paddings" valign="top">
                            <table class="esd-header-popover es-header" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="es-p20t es-p20r es-p20l esd-structure" align="left">
                                                            
                                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="es-m-p0r es-m-p20b esd-container-frame" width="180" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://demo.stripocdn.email/content/guids/bf2627c1-75f4-492b-84f1-c14be61a3f87/images/logo.png" alt style="display: block;" width="180"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                           
                                                            <table cellspacing="0" cellpadding="0" align="right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="360" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-button h-auto" valign="middle" height="45"><span class="es-button-border" style="border-radius: 25px; border-bottom-width: 1px; border-top-width: 7px; background: #35b9d0;"><a href="http://localhost/mediex/contact.php" class="es-button es-button-1708411740120" target="_blank" style="background: #35b9d0; border-radius: 25px; padding: 5px 15px 10px 20px; color: #131212; mso-border-alt: 10px solid #35b9d0">Contact Us</a></span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="es-p20t es-p20r es-p20l esd-structure" align="left">
                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="560" valign="top" align="center">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text">
                                                                                            <p><br></p>
                                                                                            <p>Dear '.$name.',</p>
                                                                                            <p><br></p>
                                                                                            <p>I hope this message finds you well. We require your immediate attention regarding brief description of the issue or reason for contact is '.$message.'.</p>
                                                                                            <p><br></p>
                                                                                            <p>Thank you.</p>
                                                                                            <p><br></p>
                                                                                            <p>Best regards,</p>
                                                                                            <p>Kunal Verma</p>
                                                                                            
                                                                                            <p>9165454247</p>
                                                                                            <p><br></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="esd-footer-popover es-footer" cellspacing="0" cellpadding="0" align="center">
                                <tbody>
                                    <tr>
                                        <td class="esd-stripe" align="center">
                                            <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="esd-structure es-p20t es-p20b es-p20r es-p20l" align="left">
                                                            <!--[if mso]><table width="560" cellpadding="0" 
                            cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                            <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="es-m-p20b esd-container-frame" width="270" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://demo.stripocdn.email/content/guids/bf2627c1-75f4-492b-84f1-c14be61a3f87/images/dsc_0085.jpg" alt style="display: block;" width="90"></a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]-->
                                                            <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="esd-container-frame" width="270" align="left">
                                                                            <table width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td align="left" class="esd-block-text">
                                                                                            <p style="font-size: 20px; color: #333333;"><strong>Kunal Verma</strong></p>
                                                                                            <p style="font-size: 14px; color: #333333;"><u>MMBS,MD</u></p>
                                                                                            <p style="color: #333333;"><br></p>
                                                                                            <p style="color: #333333;"><br></p>
                                                                                            <p style="color: #333333;"><br></p>
                                                                                            <p style="color: #333333;"><br></p>
                                                                                            <p style="color: #333333;"><br></p>
                                                                                            <p style="color: #333333;"><br></p>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--[if mso]></td></tr></table><![endif]-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>';
        $subject = 'Follow-Up Appointment Request';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->Username = "smtktm098@gmail.com";
        $mail->Password = "vqexgkoydvcdcufg";
        $mail->SetFrom("noreply@ttbinternetsecurity.com");
        $mail->AddAddress($email);
        $mail->AddAddress("kunalverma320@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $email_body;
     
        if($mail->Send()) {
            echo "Data successfully submitted";
        } else {
            echo "Data not submitted";
        }
    } else {
        echo "Data not submitted";
    }


?>