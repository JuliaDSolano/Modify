	<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/05/18
 * Time: 09:03
 */
require_once 'BDConection.php';
require_once '../Classes/Usuario.php';
class CRUDlogin
{
    public $conexao;

    public function GetUsuario($id){
        $this->conexao = BDConection::getConexao();

        $sql = "select * from usuarios where nome = '".$id."'";

        $res = $this->conexao->query($sql);

        $usuario = $res->fetch(PDO::FETCH_ASSOC);

        $usu = new Usuario($usuario['nome'],$usuario['email'],$usuario['senha'],$usuario['id_usuario']);

        return $usu;


    }

}