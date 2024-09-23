<?php
include("../config.php");
require '../vendor/autoload.php';
require("../smtp/PHPMailerAutoload.php");

$message=$_POST['message'];
$id=$_POST['id'];
$email=$_POST['email'];
$name=$_POST['name'];
$status=102;


$sql="UPDATE contact_customers SET backmessage='$message', status='$status' WHERE id='$id'";

if ($con->query($sql) === TRUE) {

    $email_body='<body>
    <div dir="ltr" class="es-wrapper-color">
        <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#f6f6f6"></v:fill>
			</v:background>
		<![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table class="es-content esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270" class="es-m-p20b esd-container-frame" align="left">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image" style="font-size: 0px;"><a target="_blank"><img class="adapt-img" src="https://ffoqvlb.stripocdn.email/content/guids/CABINET_6733dd5f6b6c4bf75abb9fcba3b29627e29d9f5600967126a3d702554b50266b/images/unnamed.png" alt style="display: block;" width="202"></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="20"></td><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270" align="left" class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-social es-p15t" style="font-size:0">
                                                                                        <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" dir="ltr">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href><img src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/circle-colored/facebook-circle-colored.png" alt="Fb" title="Facebook" width="32" height="32"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href><img src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/circle-colored/instagram-circle-colored.png" alt="Ig" title="Instagram" width="32" height="32"></a></td>
                                                                                                    <td align="center" valign="top"><a target="_blank" href><img src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/circle-colored/youtube-circle-colored.png" alt="Yt" title="YouTube" width="32" height="32"></a></td>
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
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text es-p40t">
                                                                                    <p><br></p>
                                                                                    <p>Dear '.$name.',</p>
                                                                                    <p><br></p>
                                                                                    '.$message.'
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
                        <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 75%, rgba(231,236,239,1) 75%);">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" style="border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid transparent;border-bottom:4px solid transparent;">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="552" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image es-m-p20t" style="font-size: 0px;"><a target="_blank" href="https://viewstripo.email"><img src="https://ffoqvlb.stripocdn.email/content/guids/CABINET_6733dd5f6b6c4bf75abb9fcba3b29627e29d9f5600967126a3d702554b50266b/images/unnamed.jpeg" alt="Samuel Richardson" style="display: block;" width="175" title="Samuel Richardson"></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p15t es-p5b es-p10r es-p20l es-m-p25r h-auto es-m-txt-c" valign="middle" height="44">
                                                                                        <h3 style="color: #274c77;"><b>Kunal Verma</b></h3>
                                                                                        <h3 style="display: none; color: #274c77;"><br></h3>
                                                                                        <p style="display: none; color: #274c77;"><br></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p5t es-p5b es-p10r es-p10l es-m-p20b">
                                                                                        <p style="color: #333333;">MBBS ,MD</p>
                                                                                        <h3 style="display: none; color: #333333;"><br></h3>
                                                                                        <p style="display: none; color: #333333;"><br></p>
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
                                                <tr>
                                                    <td class="esd-structure es-p20r es-p20l" align="left">
                                                        <!--[if mso]><table width="552" cellpadding="0" cellspacing="0"><tr><td width="266" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="266" class="esd-container-frame" align="left">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-menu" esd-tmp-menu-size="width|20">
                                                                                        <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                                                                                            <tbody>
                                                                                                <tr class="links-images-top">
                                                                                                    <td align="center" valign="top" width="100%" class="es-p10t es-p10b es-p5r es-p5l"><a target="_blank" href="tel:+000123456789"><img src="https://ffoqvlb.stripocdn.email/content/guids/CABINET_4d623d07a8ac2f09cffc56a7bdec51c6/images/47111615465058298.png" alt="+91 9165454247" title="+91 9165454247" align="absmiddle" class="es-p5b" width="20"><br>+91 9165454247</a></td>
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
                                                        <!--[if mso]></td><td width="20"></td><td width="266" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="266" align="left" class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-menu" esd-tmp-menu-size="width|20">
                                                                                        <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                                                                                            <tbody>
                                                                                                <tr class="links-images-top">
                                                                                                    <td align="center" valign="top" width="100%" class="es-p10t es-p10b es-p5r es-p5l"><a target="_blank" href="mailto:kunalverma320@gmail.com"><img src="https://ffoqvlb.stripocdn.email/content/guids/CABINET_4d623d07a8ac2f09cffc56a7bdec51c6/images/17021615465058275.png" alt="kunalverma320@gmail.com" title="kunalverma320@gmail.com" align="absmiddle" class="es-p5b" width="20"><br>kunalverma320@gmail.com</a></td>
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
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p20b es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="552" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-social es-p10t es-p10b" style="font-size:0">
                                                                                        <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center" valign="top" class="es-p20r"><a target="_blank" href="https://viewstripo.email"><img title="Facebook" src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/logo-colored/facebook-logo-colored.png" alt="Fb" width="32"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p20r"><a target="_blank" href="https://viewstripo.email"><img title="Twitter" src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/logo-colored/twitter-logo-colored.png" alt="Tw" width="32"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p20r"><a target="_blank" href="https://viewstripo.email"><img title="Instagram" src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/logo-colored/instagram-logo-colored.png" alt="Inst" width="32"></a></td>
                                                                                                    <td align="center" valign="top"><a target="_blank" href="https://viewstripo.email"><img title="Youtube" src="https://ffoqvlb.stripocdn.email/content/assets/img/social-icons/logo-colored/youtube-logo-colored.png" alt="Yt" width="32"></a></td>
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
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-content esd-footer-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-spacer" height="0"></td>
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>';
    $subject = 'For Your Appointment Request Getback';
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
        echo "Record updated successfully";
    } else {
        echo "Record not submitted";
    } 
} else {
    echo "Error updating record: " . $con->error;
}



?>