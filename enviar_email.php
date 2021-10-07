<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Expection;

$mail = new PHPMailer(true);

$nome= $_POST['nome'];
$email= $_POST['email'];
$mensagem= $_POST['mensagem'];

$status = null;

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'esllenpessoal@gmail.com';
    $mail->Password = 'pqfdnjzbudqhkwsq';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($email, $nome);
    $mail->addAddress('esllenpessoal@gmail.com', 'Esllen');

    $mail-> isHTML(true);
    $mail-> Subject = 'Formulário de contato';
    $mail->Body = $mensagem;

    $mail->send();
    echo 'Mensagem enviada';

} catch (Exception $e) {
    echo "Mensagem não pode ser enviada." . $mail->ErrorInfo;
}

?>

<h1>Nome</h1>
<?= $nome ?>
<h1>email</h1>
<?= $email ?>
<h1>mensagem</h1>
<?= $mensagem ?>
