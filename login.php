<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Aqui você pode adicionar a lógica para autenticação.
    // Exemplo de verificação (substitua com sua lógica de autenticação):
    if ($email === "admin@admin.com.br" && $senha === "123456") {
        echo "Login bem-sucedido!";
        // Redirecionar ou iniciar sessão
    } else {
        echo "E-mail ou senha incorretos.";
    }
}
?>