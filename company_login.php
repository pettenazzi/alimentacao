<?php
// Inicia a sessão
session_start();

// Simulação de uma empresa registrada (em um cenário real, você deve buscar isso de um banco de dados)
$registered_company = [
    'email' => 'empresa@exemplo.com',
    'password' => '123'
];

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['company_email'];
    $password = $_POST['company_password'];

    // Verifica as credenciais
    if ($email == $registered_company['email'] && $password == $registered_company['password']) {
        // Armazena a informação da empresa na sessão
        $_SESSION['company_logged_in'] = true;
        $_SESSION['company_email'] = $email;
        echo "Login da empresa bem-sucedido! Bem-vindo, " . $email;
    } else {
        echo "Credenciais da empresa inválidas!";
    }
} else {
    // Redireciona para o formulário de login se o acesso for direto a este arquivo
    header("Location: index.php");
}
?>
