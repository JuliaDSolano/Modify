
<?php
require_once '../Conexao/CRUDlogin.php';
$acao = 'verifica';

switch ($acao) {
    case 'verifica':
        $crud = new CRUDlogin();


        if (isset($_POST['gravar'])) {
            $usuario = $crud->GetUsuario($_POST['usuario']);
            if ($_POST['usuario'] == $usuario->nome and $_POST['senha'] == $usuario->senha) {
               header('Location: ../teste.html ');
            } else {
                echo 'ops, algo deu errado ';
            }
        } else {
            include '../login.html';

        }
        break;
}
*/