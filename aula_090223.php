<?php
     
     $NOME = $_REQUEST['NOME'];
     $CELULAR = $_REQUEST['CELULAR'];
     $EMAIL = $_REQUEST['EMAIL'];
     $SEXO = $_REQUEST['SEXO'];

    // if($SEXO == 'M'){
     //    $SEXO = 'Masculino';
     //   }else{
      //      $SEXO = 'Feminino';
     //   }

        //IF ternário ele consegue analise true e false
        $SEXO = $SEXO == 'M' ? 'Masculino' : 'Feminino';

  
    $MSG = array(
      'nome' => $NOME,
      'celular' => $CELULAR,
      'e-mail' => $EMAIL,
      'sexo' => $SEXO
  );

  echo json_encode($MSG);