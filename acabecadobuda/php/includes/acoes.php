<?php
include_once('funcoes.php');

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];} else {
    $acao = $_GET['acao'];}

switch ($acao) {
  case 'login':
    if(login($_POST['username'], $_POST['senha'])){
      header('Location:../home_alt.php');
    } else { header('Location:../login.php?page=login&msg=erro');
    }
    break;

  case 'cadastro':
    unset($_POST['acao']);
    $cad=cadastro($_POST);
    if($cad['error']){
      header('Location:../home_alt.php?page=cadastro&msg='.$cad['msg']);
    }  else {
      header('Location:../home_alt.php?page=login&msg='.$cad['msg']);
    }
    break;

  case 'logout':
    logout();
    header('Location:../home_alt.php');
  break;

  default:
  // echo "Rota inválida";
  break;
}
