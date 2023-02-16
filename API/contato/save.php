<?php

//instância da conexão com o banco de dados.
include('../conexao/conn.php');

try{
    //Gerar a query de inserção de dados no Banco de Dados.
    $sql = "INSERT INTO CONTATO (NOME, TELEFONE, CELULAR, EMAIL) VALUES (?, ?, ?, ?)";

    // Preparar a query para gerar o objeto de inserção ao Banco de Dados.
    $stmt = $pdo->prepare($sql);

    //Executar.
    $stmt->execute([
        $_REQUEST['NOME'],
        $_REQUEST['TELEFONE'],
        $_REQUEST['CELULAR'],
        $_REQUEST['EMAIL']
    ]); //Foi criado um Array de validação.

    //Retorno da função.
    $dados = array (
        'type' => 'success',
        'mensagem' => 'Registro salvo com sucesso!'
    );
} catch (PDOException $e){
    $dados = array (
        'type' => 'error',
        'mensagem' => 'Erro ao salvar o registo: '.$e
    );
}

echo json_encode($dados);