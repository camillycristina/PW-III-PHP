<?php
// Onde está o banco de dados.
$hostname = 'localhost:3306'; 
// Qual banco de dados iremos trabalhar.
$dbname = 'contato'; 
// Usuário de acesso ao banco de dados.
$username = 'root'; 
//Senha de acesso ao banco de dados.
$password = ''; //usbw caso for usbwebserver.

try {
    $pdo = new PDO('mysql:host=' .$hostname.' ;dbname=' .$dbname, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //ATTR_ERRMODE caso der algum erro na conexão com o banco trás o erro de forma inteligente; 
    //ERRMODE_EXCEPTION caso o erro for grave trazer á mim, caso n for, ignorar.
    echo 'Conexão com o banco ' .$dbname.', foi realizada com sucesso';
} catch (PDOException $e) { // Se o erro for grave mostrar mensagem.
    echo 'Erro: ' .$e->getMessage();
    
}