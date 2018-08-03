<html>
<head>

    <link>
    <meta charset="utf-8">
    <title>Cadastro</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            $(".tipoFisico").hide();
            $(".tipoJuridico").hide();

            $('input[type=radio][name=tipoPessoa]').change(function () {
                if (this.value === 'fisica') {
                    $(".tipoFisico").show();
                    $(".tipoJuridico").hide();
                }
                else if (this.value === 'juridica') {
                    $(".tipoFisico").hide();
                    $(".tipoJuridico").show();
                }
            });
        });
    </script>

    <script language="JavaScript">
        function valida_dados (nomeform)
        {
            if (nomeform.nome.value==""){
                alertt ("Por favor digite o nome.");
                return false;
            }
            if (nomeform.email.value=="" || nomeform.email.value.ind ex0f('@','0')==-1 || nomeform.email.valueinde x0f('.','0')==-1){
            alert ("E-mail inválido");
            return false;
        }

        if (nomeform.senha.value.len gth < 5 || nomeform.senha.value.len gth > 15){
        alert("A senha deve conter entre 5 e 15 caracteres");
        return false;
        }

        if (nomeform.senha.value.ind es0f(' ','0')!= -1){
            alert("A senha não pode conter espaços em branco");
            return false;
        }
        if (nomeform.senha.value!= nomeform.confirmação.value){
            alert ("Senhas não conferem, você digitou duas senhas diferentes");
            return false;
        }
        return true;
        }
    </script>
</head>
<body>

<form method="POST" action="controlador/conexao.php" onsubmit="return valida_dados(this)">
    <?php
    require_once "cadastro.phtml";
    ?>

</form>
</body>
</html>
