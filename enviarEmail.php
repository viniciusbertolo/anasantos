<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente = $_POST['nome_completo'];
$idade = $_POST['idade'];
// $emailremetente = trim($_POST['email']);
$emaildestinatario = 'contato@anasantospsico.com.br';// Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$telefone = $_POST['whatsapp'];
$cidade = $_POST['cidade'];
$dia_horario = $_POST['dia_horario'];
// $curso = $_POST['curso'];
$mensagem = $_POST['mensagem'];

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '
Formulario de Contato
Nome completo:'.$nomeremetente.' 
Idade:'.$idade.' 
Telefone: '.$telefone.' 
Cidade: '.$cidade.' 
dia_horario: '.$dia_horario.'
Mensagem: '.$mensagem.'';

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $nomeremetente\r\n";
// remetente
$headers .= "Return-Path: $emaildestinatario \r\n";
// return-path
$envio = mail($emaildestinatario, $nomeremetente, $mensagemHTML, $nomeremetente);
if($envio)
echo "<script>location.href='https://anasantospsico.com.br'</script>";// Página que será redirecionada
?>