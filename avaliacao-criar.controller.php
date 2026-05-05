<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  header('location: /');
  exit();
}

$usuario_id = auth()->id;
$livro_id = $_POST['livro_id'];
$validacao = $_POST['avaliacao'];
$nota = $_POST['nota'];

$database->query("
  insert into avliacoes ( usuario_id, livro_id, avaliacao, nota )
  values ( :usuario-id, :livro_id, :avaliacao, :nota )
", params: compact('usuario_id', 'livro_id', 'avaliacao', 'nota'));


flash()->push('mensagem', 'Avaliação criada com sucesso!');
header('location: /livro?id='. $livro_id);
exit();
