<?php
//variavel que verifica se a autenticação foi realizada
$usuario_autenticado = false;

//Usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email'=> 'user@teste.com.br', 'senha' => 'abcd'),
);
 

// echo '<pre';
// print_r ($usuarios_app);
// echo '</ pre>';



foreach( $usuarios_app as $user ){
   echo 'Usuário app: '.$user['email']. '/'. $user['senha'];
   echo '<br/>';
   echo 'Usuário form: '.$_POST['email']. '/'.  $_POST['senha'];
   echo '<br/>';
   echo '<br/>';

   if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
   }
}

if($usuario_autenticado){
    echo '<br/><br/>';
     echo 'Usuário autenticado';
    echo '<br/><br/>';
} else {
    header('Location: index.php?login=erro ');
}
/*
print_r($_GET);

echo '<br/>';

$_GET ['email'];
echo '<br/>';
$_GET ['senha'];



?> */


// print_r($_POST  );

// echo '<br/>';

// echo $_POST ['email'];
// echo '<br/>';
// echo $_POST ['senha'];

?>