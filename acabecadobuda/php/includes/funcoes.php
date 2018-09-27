<?php
session_start();
$arquivo = 'buda.json';

function cadastro($user){
  global $arquivo;
  if($user['senha']!=$user['confirmar-senha']){
    return ['error'=> true, 'id'=> false, 'msg' => "As senhas não conferem"];
  }
  if(file_exists($arquivo)){
    $dados = json_decode(file_get_contents($arquivo), true);
  } else {
    $dados = ["usuarios"=>[]];
  }

  foreach ($dados['usuarios'] as $id => $usuario) {
    if ($user['email']==$usuario['email']) {
      return ['error'=> true, 'id'=> $id, 'msg' => "Usuário já cadastrado"];
    }
  }

  $id = count($dados['usuarios']);
  unset($user['confirmar-senha']);
  $user['senha']=password_hash($user['senha'], PASSWORD_DEFAULT);
  $dados['usuarios'][] = $user;
  file_put_contents($arquivo, json_encode($dados));
  return ['error'=> false, 'id'=> $id, 'msg' => "Cadastro realizado com sucesso"];
  //retorna um array: ['error'=>bool, 'id' =>(false ou posição na lista), 'msg => "mensagem de erro"']
  //verificar se as senhas são iguais, abrir um json - se não existe, criar
  //("usuarios":[])
  //-verificar se já existe um usuário com o mesmo e-mail
  //se não existir, inserir no json
}

function login($login, $senha){
  global $arquivo;
  if(file_exists($arquivo)){
    $dados = json_decode(file_get_contents($arquivo), true);
  } else {
    $dados = ["usuarios"=>[]];
}

foreach ($dados['usuarios'] as $id => $usuario) {
 // var_dump($login);
 // var_dump($usuario['email']);
  if ($login==$usuario['email']&&password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['usuario']['id'] = $id;

        return true;

    // ['error'=> false, 'id'=> $id, 'usuario'=>$usuario];
  }
}
    return false;
    // ['error'=> true, 'id'=> false, 'msg'=>"Usuário não encontrado"];
  }

  function is_logged(){
    if (!empty($_SESSION['usuario'])) {
      return true;
    }
  }

function get_user(){
  return isset($_SESSION['usuario'])?$_SESSION['usuario']:false;
}

function logout(){
  session_destroy();
  // return true;
}

 ?>
