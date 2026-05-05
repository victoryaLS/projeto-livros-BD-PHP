<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // 1- Receber o formulario com email e senha

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacao = Validacao::validar([
    'email' => ['required', 'email'],
    'senha' => ['required']
  ], $_POST);                                        

  if ($validacao->naoPassou('login')) {
    header('location: /login');
    exit();
  }

  // 2- Fazer uma consulta no banco de dados com o email e senha
  $usuario = $database->query(
    query: "select * from usuarios where email = :email",
    class: Usuario::class,
    params: compact('email')
  )->fetch();

  // Validar a senha

  if ($usuario){
    if(! password_verify($_POST['senha'], $usuario->senha)) {
    flash()->push('validacoes_login', ['Usuário ou senha estão incorretos!']);
    header('location: /login');
    exit();
  }


  // 3- Se existir nós adicionar na sessão que o usuário está autenticado

  $_SESSION['auth'] = $usuario;

  flash()->push('mensagem', "Seja Bem vindo " . $usuario->nome . "!");

  header('location /');
  exit();

}

// 4- mudar a informação no nosso navbar pra mostrar o nome do usuário
}


view('login');