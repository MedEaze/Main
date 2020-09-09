<?php



function sendVerificationEmail($userEmail, $token , $userreference)
{
    		$subject = 'Verfy Email';
    		$headers = 'MIME-Version: 1.0';
			$headers = 'Content-type:text/html; charset=UTF-8';
        	$message = '<!DOCTYPE html>
			<html>
			
			<head>
				<title></title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<style type="text/css">
					@media screen {
						@font-face {
							font-family: "Lato";
							font-style: normal;
							font-weight: 400;
							src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
						}
			
						@font-face {
							font-family: "Lato";
							font-style: normal;
							font-weight: 700;
							src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
						}
			
						@font-face {
							font-family: "Lato";
							font-style: italic;
							font-weight: 400;
							src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
						}
			
						@font-face {
							font-family: "Lato";
							font-style: italic;
							font-weight: 700;
							src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
						}
					}
			
					body,
					table,
					td,
					a {
						-webkit-text-size-adjust: 100%;
						-ms-text-size-adjust: 100%;
					}
			
					table,
					td {
						mso-table-lspace: 0pt;
						mso-table-rspace: 0pt;
					}
			
					img {
						-ms-interpolation-mode: bicubic;
					}
			
					img {
						border: 0;
						height: auto;
						line-height: 100%;
						outline: none;
						text-decoration: none;
					}
			
					table {
						border-collapse: collapse !important;
					}
			
					body {
						height: 100% !important;
						margin: 0 !important;
						padding: 0 !important;
						width: 100% !important;
					}
			
					a[x-apple-data-detectors] {
						color: inherit !important;
						text-decoration: none !important;
						font-size: inherit !important;
						font-family: inherit !important;
						font-weight: inherit !important;
						line-height: inherit !important;
					}
			
					@media screen and (max-width:600px) {
						h1 {
							font-size: 32px !important;
							line-height: 32px !important;
						}
					}
			
					div[style*="margin: 16px 0;"] {
						margin: 0 !important;
					}
				</style>
			</head>
			
			<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td bgcolor="#f4f4f4" align="center">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								<tr>
									<td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								<tr>
									<td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
										<h1 style="font-size: 38px; font-weight: 400; margin: 2;">Welcome to Petroleumfacts</h1> <img src="http://petroleumfacts.com/assets/img/brand/logo.png" width="125" height="120" style="display: block; border: 0px;" />
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								<tr>
									<td bgcolor="#ffffff" align="center" style="padding: 10px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
										<p style="margin: 0;font-size: 18px;">We"re excited to have you get started. First, you need to confirm your account. Just press the button below.</p>
									</td>
								</tr>
								<tr>
									<td bgcolor="#ffffff" align="center">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td bgcolor="#ffffff" align="center" style="padding: 10px 30px 40px 30px;">
													<table border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td align="center" style="border-radius: 3px;" bgcolor="#FFA73B"><a href="http://petroleumfacts.com/home.php?token=' . $token .'" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;">Confirm Account</a></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr> 
								<tr>
									<td bgcolor="#ffffff" align="center" style="padding: 20px 30px 10px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
										<p style="margin: 0;">Your Reference Number: <span style="text-transform: uppercase; background:#FFA73B; color: #fff; padding: 5px; font-family: Helvetica, Arial, sans-serif;">'. $userreference . '</span></p>
									</td>
								</tr>
								<tr>
									<td bgcolor="#ffffff" align="center" style="padding: 40px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
										<p style="margin: 2;">Cheers,<br>Petroleumfacts Team</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#f4f4f4" align="center" style="padding: 10px 10px 0px 10px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								<tr>
									<td bgcolor="#FFECD1" align="center" style="padding: 20px 30px 20px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
										<h2 style="font-size: 20px; font-weight: 400; color: #111111; margin: 0;">Need more help?</h2>
										<p style="margin: 0;"><a href="http://petroleumfacts.com" target="_blank" style="color: #FFA73B;margin: 2;">We&rsquo;re here to help you out</a></p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
								<tr>
									<td bgcolor="#f4f4f4" align="left" style="padding: 0px 30px 30px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;"> <br>
										<p style="color: #111111; font-weight: 700; margin: 0;">Note: This is an autogenerated Email, Do not Reply.</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</body>
			</html>';
		mail($userEmail,$subject,$message,$headers);
				

	

}


function sendPasswordResetLink($userEmail, $token)
{

    		$subject = "Reset Email";
    		$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
		
        	$body = '<!DOCTYPE html>
        <html>
        <head>
        	<title>Verify email</title>
        </head>
        <body>
        	<div class="wrapper">
        		<p>
        			Hello There!
        			Please click on the link to reset your password.
        		</p>
        		<a href="http://petroleumfacts.com/home.php?password-token=' . $token .'">
        		Reset Your Password</a>
        	</div>
        
        </body>
        </html>';
        mail($userEmail,$subject,$body,$headers);



}
?>

