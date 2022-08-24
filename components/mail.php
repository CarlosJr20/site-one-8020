<?php
date_default_timezone_set("Brazil/East");
header('Content-Type: text/html; charset=utf-8');
error_reporting(0);
// Dados do formulário.
$nome = utf8_decode($_POST['nome']);
$assunto = utf8_decode($_POST['assunto']);
$whatss = utf8_decode($_POST['whtass']);
$email = $_POST['email'];
$select = $_POST['select'];
$mensagem = $_POST['mensagem'];
$captcha = $_POST['g-recaptcha-response'];

// Envia um email para validação.
// require_once $_SERVER['DOCUMENT_ROOT']."/mail/PHPMailer/class.phpmailer.php";
require_once $_SERVER['DOCUMENT_ROOT']."/mail/PHPMailer/src/PHPMailer.php";

// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP

try {
	if ($captcha != null ) {
		$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdTzQEVAAAAAGeqRX1saPX7QJjdo07g24mT9cc6&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);

		if ($resposta.success == true) {

	   		$mail->Host = 'smtp.uni5.net'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
	    	$mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
			$mail->Port       = 587; //  Usar 587 porta SMTP

			$mail->Username = 'contato@one8020.rec.br'; // Usuário do servidor SMTP (endereço de email)
			$mail->Password = '858@Carapuceiro'; // Senha do servidor SMTP (senha do email usado)
			
			$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
			$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"

			// DADOS DO REMETENTE
		    $mail->From = "contato@one8020.com.br"; // Sua conta de email que será remetente da mensagem
// 		    $mail->From = "tharycksouto@gmail.com"; // Sua conta de email que será remetente da mensagem

		    $mail->FromName = "Reuniao [site]"; // Nome da conta de email
		    
		    //Assunto do e-mail
		    $mail->Subject = 'Solicitacao de reuniao para um cliente potencial';
		         
		    //Define os destinatário(s)
// 		    $mail->AddAddress('leobarros.br@gmail.com', 'Leo Barros');
			//$mail->AddAddress('agencia.one8020@gmail.com', 'ONE 80/20');
// 			$mail->AddAddress('contato@one8020.com.br', 'Contato ONE 80/20');
			$mail->AddAddress('contato@yopmail.com', 'Contato ONE 80/20');
			

			//Define o corpo do email
			// Template com variáveis.
			$mail->MsgHTML(file_get_contents($_SERVER['DOCUMENT_ROOT']."/mail/parts/header.php").'
				<table class="AZ-600" width="600" align="center" border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<td height="40"></td>
							<tr align="center">
								<td data-link-style="text-decoration:none; color:#c86e6e;" data-link-color="Content Link25" data-color="Content25" data-size="Content25" style="font-family: Open sans, Arial, sans-serif; color: rgb(97, 97, 97); font-size: 15px; line-height: 25.5px; padding-bottom:20px;">
								Solicitação de contato para: <strong>'.$nome.'</strong> Assunto:' .$assunto. '<br> WhatsApp:'.$whatss.'<br>através do site.<br><br>
								<strong>Email:</strong> '.$email.'<br>
								<strong>Interesse:</strong> '.$select.'<br>
								<strong>Mensagem:</strong> '.$mensagem.'<br>
								</td>
							</tr>
							<tr>
								<td height="20"></td>
							</tr>
							<tr>
								<td height="80">
							</td>
						</tr>
					</tbody>
				</table>'.file_get_contents($_SERVER['DOCUMENT_ROOT']."/mail/parts/footer.php"));
				
				$mail->Send();

				// Informa que o cadastro funcionou.
				echo "<b align-items: center;>Contato enviado com sucesso! Responderemos em breve.</b>";
				header('Refresh: 5; URL=https://www.one8020.com.br/');

			} else {
				echo "<script>alert('Algo deu errado -- no captcha. Tente novamente.');
				history.back();</script>";				
				header('Location: https://one8020.com.br/');
			}
		}
	} catch (phpmailerException $e) {
		echo "<script>alert('Algo deu errado. Tente novamente.');history.back();</script>"; 
        // Informa que não funcionou o cadastro.
		echo $e->errorMessage();
    }
?>