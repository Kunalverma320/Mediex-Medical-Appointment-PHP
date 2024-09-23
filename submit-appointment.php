<?php

include("config.php");
require 'vendor/autoload.php';
require("smtp/PHPMailerAutoload.php");
// error_reporting(0);

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$department=$_POST['department'];
$doctors=$_POST['doctors'];
$message=$_POST['message'];


$check_doc_info="SELECT fname,email,phone FROM doctors WHERE id='$doctors'";
$result = mysqli_query($con, $check_doc_info);

$row = mysqli_fetch_assoc($result);

$doc_fname = $row['fname'];
$doc_email = $row['email'];
$doc_phone = $row['phone'];



$sql="INSERT INTO appointment (name,email,phone,date,time,department,doctors,message) VALUES ('$name','$email','$phone','$date','$time','$department','$doctors','$message')";

$subsql=mysqli_query($con,$sql);

if($subsql==true)
{
    $subject = 'New Appointment Confirmation';
    
    // Constructing the HTML email body
    $email_body = '<body>
    <div dir="ltr" class="es-wrapper-color">
        <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#ffffff"></v:fill>
			</v:background>
		<![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table cellpadding="0" cellspacing="0" class="esd-header-popover es-header" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#ffffff" class="es-header-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p15t es-p15b es-p20r es-p20l es-m-p0b" align="left" esd-custom-block-id="794008">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="270" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="270" class="es-m-p0r es-m-p20b esd-container-frame" valign="top" align="center">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image es-p5t es-p5b es-m-txt-c" style="font-size: 0px;"><a target="_blank" href="https://viewstripo.email"><img src="https://demo.stripocdn.email/content/guids/30177517-3580-43bd-856f-4802832fec0b/images/logo.png" alt="Logo" style="display: block;" title="Logo" width="140"></a></td>
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
                                                                <tr class="es-mobile-hidden">
                                                                    <td width="270" align="left" class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="right" class="esd-block-button es-p5t es-p5b">
                                                                                        
                                                                                        <!--[if !mso]><!-- --><span class="msohide es-button-border"><a href="https://viewstripo.email" class="es-button es-button-1668693070775" target="_blank">Contact us</a></span>
                                                                                        <!--<![endif]-->
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
                                                    <td class="esd-structure" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="600" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-spacer es-p5t es-p5b es-p20r es-p20l" style="font-size:0">
                                                                                        <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="border-bottom: 2px solid #a3cef1; background: unset; height: 1px; width: 100%; margin: 0px;"></td>
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
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="background-color: #ffffff;" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p40t es-p30b es-p20r es-p20l" align="left" esd-custom-block-id="794010">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text">
                                                                                        <h2>Hello ' . $name . ' ,<strong>,</strong></h2>
                                                                                        <p><br></p>
                                                                                        <p style="font-size: 16px;">I hope this email finds you well. This is just a quick note to confirm your upcoming appointment with us on '.$date.' at '.$time.'.</p>
                                                                                        <p style="font-size: 16px;">Please make sure to arrive a few minutes early to complete any necessary paperwork and to ensure that we can start your appointment on time. If there are any changes or if you need to reschedule, please let us know at your earliest convenience.</p>
                                                                                        <p><br></p>
                                                                                        <p>Looking forward to seeing you soon.</p>
                                                                                        <p><br></p>
                                                                                        <p>Best regards,</p>
                                                                                        <p>' . $doc_fname . '</p>
                                                                                        <p>' . $doc_phone . '</p>
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
                                    <td class="esd-stripe" align="center" esd-custom-block-id="794061">
                                        <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p20r es-p20l" align="left">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" class="esd-container-frame" align="center" valign="top">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text es-m-txt-l">
                                                                                        <h2>Kunal Verma</h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text es-p5t es-m-txt-l">
                                                                                        <p>MBBS , MD</p>
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
                                                    <td class="esd-structure es-p20t es-p40b es-p20r es-p20l" align="left">
                                                        <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="136" valign="top"><![endif]-->
                                                        <table cellspacing="0" cellpadding="0" align="left" class="es-left">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="es-m-p0r esd-container-frame" width="131" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-image es-m-txt-l" style="font-size: 0px;"><a target="_blank" href="https://viewstripo.email"><img src="https://demo.stripocdn.email/content/guids/30177517-3580-43bd-856f-4802832fec0b/images/dsc_0085.jpg" alt style="display: block;" width="90"></a></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class="es-hidden" width="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!--[if mso]></td><td width="236" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="236" align="left" class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-text es-p5t es-p10b es-m-p10l">
                                                                                        <p>Raipur Chhattisgarh<br></p>
                                                                                        <p>,492001</p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="left" class="esd-block-social es-m-txt-l es-p40r es-m-p15t es-m-p15b es-m-p0r es-m-p10l" style="font-size:0">
                                                                                        <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://viewstripo.email"><img title="Facebook" src="https://tlr.stripocdn.email/content/assets/img/social-icons/circle-black-bordered/facebook-circle-black-bordered.png" alt="Fb" width="24" height="24"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://viewstripo.email"><img title="Twitter" src="https://tlr.stripocdn.email/content/assets/img/social-icons/circle-black-bordered/twitter-circle-black-bordered.png" alt="Tw" width="24" height="24"></a></td>
                                                                                                    <td align="center" valign="top" class="es-p10r"><a target="_blank" href="https://viewstripo.email"><img title="Instagram" src="https://tlr.stripocdn.email/content/assets/img/social-icons/circle-black-bordered/instagram-circle-black-bordered.png" alt="Inst" width="24" height="24"></a></td>
                                                                                                    <td align="center" valign="top"><a target="_blank" href="https://viewstripo.email"><img title="Youtube" src="https://tlr.stripocdn.email/content/assets/img/social-icons/circle-black-bordered/youtube-circle-black-bordered.png" alt="Yt" width="24" height="24"></a></td>
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
                                                        <!--[if mso]></td><td width="5"></td><td width="183" valign="top"><![endif]-->
                                                        <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="183" align="left" class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-menu" esd-tmp-menu-color="#333333" esd-tmp-menu-padding="5|5">
                                                                                        <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                                                                                            <tbody>
                                                                                                <tr class="links-images-left">
                                                                                                    <td align="left" valign="top" width="100%" class="es-p10t es-p10b es-p5r es-p10l" style="padding-top: 5px; padding-bottom: 5px;"><a target="_blank" href="tel:+00012345678" style="color: #333333;"><img src="https://tlr.stripocdn.email/content/guids/CABINET_43a1f25edeeba67e7304451dcecf7295/images/mail_1.png" alt="+91 9165454247" title="+91 9165454247" align="absmiddle" class="es-p10r" width="16">+91 9165454247</a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-menu" esd-tmp-menu-color="#333333" esd-tmp-menu-padding="5|5">
                                                                                        <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                                                                                            <tbody>
                                                                                                <tr class="links-images-left">
                                                                                                    <td align="left" valign="top" width="100%" class="es-p10t es-p10b es-p5r es-p10l" style="padding-top: 5px; padding-bottom: 5px;"><a target="_blank" href="mailto:David@network" style="color: #333333;"><img src="https://tlr.stripocdn.email/content/guids/CABINET_43a1f25edeeba67e7304451dcecf7295/images/mail.png" alt="kunal@network" title="kunal@network" align="absmiddle" class="es-p10r" width="16">kunal@network</a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-menu" esd-tmp-menu-color="#333333" esd-tmp-menu-padding="5|10">
                                                                                        <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                                                                                            <tbody>
                                                                                                <tr class="links-images-left">
                                                                                                    <td align="left" valign="top" width="100%" class="es-p10t es-p10b es-p5r es-p10l" style="padding-top: 5px;"><a target="_blank" href="https://viewstripo.email" style="color: #333333;"><img src="https://tlr.stripocdn.email/content/guids/CABINET_43a1f25edeeba67e7304451dcecf7295/images/mail_2.png" alt="network.com" title="network.com" align="absmiddle" class="es-p10r" width="16">network.com</a></td>
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
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-footer esd-footer-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table bgcolor="#ffffff" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" width="600">
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
                                                                                    <td align="center" class="esd-block-spacer es-p5t es-p5b" style="font-size:0">
                                                                                        <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="border-bottom: 2px solid #a3cef1; background: unset; height: 1px; width: 100%; margin: 0px;"></td>
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
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p30b es-p20r es-p20l" align="left" esd-custom-block-id="794030">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="560" align="left" class="esd-container-frame">
                                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-image es-p20b es-m-txt-c" style="font-size: 0px;"><a target="_blank" href="https://viewstripo.email"><img src="https://tlr.stripocdn.email/content/guids/CABINET_8c56c00191036e35443af3784d2134e3/images/group.png" alt="Logo" style="display: block;" width="50" title="Logo"></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-social es-m-txt-c es-p10t es-p20b" style="font-size:0">
                                                                                        <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td align="center" valign="top" esd-tmp-icon-type="twitter" class="es-p5r"><a target="_blank" href="https://viewstripo.email"><img src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png" alt="Tw" title="Twitter" width="32"></a></td>
                                                                                                    <td align="center" valign="top" esd-tmp-icon-type="facebook" class="es-p5r"><a target="_blank" href="https://viewstripo.email"><img src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png" alt="Fb" title="Facebook" width="32"></a></td>
                                                                                                    <td align="center" valign="top" esd-tmp-icon-type="linkedin"><a target="_blank" href="https://viewstripo.email"><img src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/linkedin-logo-black.png" alt="In" title="Linkedin" width="32"></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text" esd-links-underline="none">
                                                                                        <p style="font-size: 13px;"><a target="_blank" style="text-decoration: none;"></a><a target="_blank" style="text-decoration: none;" href="https://viewstripo.email">Privacy Policy</a><a target="_blank" style="font-size: 13px; text-decoration: none;"></a> • <a target="_blank" style="text-decoration: none;" href="https://viewstripo.email">Unsubscribe</a></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p20t" esd-links-underline="none">
                                                                                        <p><a target="_blank"></a>Copyright ©2022 Busines Network<a target="_blank"></a></p>
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </body>';
    
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