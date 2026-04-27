<?php

$_SESSION['teste'] = "";
      header('location: /login');
      exit();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validacoes = [];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $email_confirmed = $_POST['email_confirmed'];
  $senha = $_POST['senha'];


  // Nome precisa ser obrigatório
  if (strlen($nome) == 0) {
    $validacoes[] = 'O nome é obrigatório.';
  }

  if (strlen($email) == 0) {
    $validacoes[] = 'O email é obrigatório.';
  }

  if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validacoes[] = 'O email é inválido.';
  }

  if ($email != $email_confirmed) {
    $validacoes[] = 'O email de confirmação está diferente.';
  }

  if (strlen($senha) == 0) {
    $validacoes[] = 'A senha é obrigatória.';
  }

  if (strlen($senha) < 8 || strlen($senha) > 30) {
    $validacoes[] = 'A senha precisa ter entre 8 e 30 caracteres.';
  }

  if (! str_contains($senha, '*')) {
    $validacoes[] = 'A senha precisa ter um "*" nela.';
  }

  if (sizeof($validacoes) > 0) {
    view('login', compact('validacoes'));
    exit();
  }


  $database->query(
    query: "insert into usuarios ( nome, email, senha ) values ( :nome, :email, :senha )",
    params: [
      'nome' => $_POST['nome'],
      'email' => $_POST['email'],
      'senha' => $_POST['senha']
    ]
  );

  header('location: /login?mensagem=Registrado com sucesso!');
  exit();
}
