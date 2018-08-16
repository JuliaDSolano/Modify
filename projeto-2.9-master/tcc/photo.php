<?php
$PHP_SELF = "";

//Diretório aonde ficará os arquivos
$dir = "";

//Extensões permitidas
$ext = array("gif","jpg","png");

//Quant. de campos do tipo FILE
$campos = 6;

//Formulário
echo '<form method="post" action="'.$PHP_SELF.'" enctype="multipart/form-data">
      <input type="file" name="file[]">
        <br/>
        <br/>
        <br/>
     <input type="submit" name="submit" value=" OK ">
     </form>';


//Se for enviado
if (isset($_POST['submit'])) {

    //Obtendo informações dos arquivos
    $f_name = $_FILES['file']['name'];
    $f_tmp = $_FILES['file']['tmp_name'];
    $f_type = $_FILES['file']['type'];


    //Contar arquivos enviados
    $cont=0;

    //Repetindo de acordo com a quantidade de campos FILE
    for($i=0;$i<$campos;$i++){

        //Pegando o nome
        $name = "";

        //Verificando se o campo contem arquivo
        if ( ($name!="") and (is_file($f_tmp[$i])) and (in_array(substr($name, -3),$ext)) ) {

            if ($cont==0) {
                echo "<b>Arquivo(s) enviados:
    </b>";
            }
            echo $name." - ";

            //Movendo arquivo's do upload
            $up = move_uploaded_file($f_tmp[$i], $dir.$name);

            //Status
            if ($up==true):
                echo  "<i>Enviado com sucesso!</i>";
                $cont++;
            else:
                echo "<i>Falhou!</i>";
            endif;

            echo "
    ";
        }

    }

    echo ($cont!=0) ? "<i>Total de arquivos enviados: </i>".$cont : "Nenhum arquivo foi enviado!";
}
?>