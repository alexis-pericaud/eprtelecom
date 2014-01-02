<?php
header('Location:contact.php');
						echo "flkdlkgj";
						$to = 'valehamiri@yahoo.com'; //remplacer par club-eprt après..
						if ( empty($_POST['objet']) )
							$subject = 'Message du site eprtelecom';
						else
							$subject = 'Message du site eprtelecom | '.htmlspecialchars($_POST['objet']);								
						
						$ok_message = '<h3>Votre message a bien &eacute;t&eacute; envoy&eacute;.</h3>';
						$err_message = '<h3>Un probl&egrave;me est survenu lors de l\'envoi du message. Pour revenir sur la page de contact cliquer <a href="contact.php">ici</a>.</h3>';					
						if ( isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['message']) )
						{					
						$_POST['nom'] = htmlspecialchars($_POST['nom']);
						$_POST['mail'] = htmlspecialchars($_POST['mail']);
						$_POST['message'] = htmlspecialchars($_POST['message']);
						//echo $_POST['message'].' '.$_POST['mail'].' '.$_POST['nom'];
						
						$mail_headers  = 'MIME-Version: 1.0' . "\r\n";
						$mail_headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
						$mail_headers .= "From: {$_POST['nom']} "."<{$_POST['mail']}>\r\n";
						
						$mail_content = '<strong><span style="text-decoration:underline;">Message de:</span></strong> <br /> '.$_POST['nom']."\r\n";
						$mail_content .= "<br /><br />";
						$mail_content .= '<strong><span style="text-decoration:underline;">Corps du message:</span></strong> <br />'.$_POST['message']."\r\n";
						
						$ret_mail = mail($to, $subject, $mail_content, $mail_headers);
						
						if ( mail($to, $subject, $mail_content, $mail_headers) )
							echo $ok_message;
						else 
							echo $err_message;	 
						}
?> 						
	
	