
<?php
require_once '../modelo/CrudLogin.php';
if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'verifica';
}
switch ($acao) {
    case 'verifica':
        $crud = new CrudLogin();
        if (isset($_POST['gravar'])) {
            $usuarios = $crud->GetUsuarios();
            foreach ($usuarios as $usuario) {
                if ($_POST['email'] == $usuario->email and $_POST['senha'] == $usuario->senha) {
                    echo 'oi';
                    header('../views/index.html');
                }
            }
        } else {
            include '../login.phtml';
        }
}
