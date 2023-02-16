<?php
 //Instância do nosso conexão com o banco dados
 include('../conexao/conn.php');

 try{
     //Gerar a querie de inserção de dados no B.D.
     $sql= "INSERT INTO CONTATO (NOME, TELEFONE, CELULAR, EMAIL) VALUES (?, ?, ?, ?)";
     //Iremos preparar a nossa querie para gerar o objeto de inserção ao B.D. 
     $stmt = $qdo->prepare($sql);
     $stmt ->execute([
         $_REQUEST['NOME'],
         $_REQUEST['TELEFONE'],
         $_REQUEST['CELULAR'],
         $_REQUEST['EMAIL']
     ]);
     $dados = array(
         'type' => 'success',
         'mensagem' => 'Registro salvo com sucesso'
     );
 }catch (PDOExeception $e ) {
     $dados = array(
         'type' => 'error',
         'mensagem' => 'erro ao salvar registro:' .$e 
     ); 
 }