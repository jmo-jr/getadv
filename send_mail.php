<?
function SendMail() {
    $from = isset($_POST['email']) ? $_POST['email'] : "";
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $telefone = isset($_POST['phone']) ? $_POST['phone'] : "";
		$assunto = isset($_POST['subject']) ? $_POST['subject'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "Enviado pelo site";
    $to = 'admin@gteadv.com';
    $CC = 'josh.junior@hotmail.com';
    $content = "Nome: ".$name."\n" . 
              "Email: ".$from."\n" . 
              "Telefone: ".$telefone."\n" .  
              "Mensagem: ".$message."\n";
    $headers = "From: " . $from . "\r\n" . 
              "Cc: " . $CC . "\r\n" . 
              "Content-type: text/plain; charset=iso-8859-1";

    return mail($to, $assunto, $content, $headers);
  }
	?>