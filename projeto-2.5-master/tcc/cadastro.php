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
<h4> Preencha o Formul&aacute;rio para efetuar o cadastro no site</h4>

<form method="POST" action="conexao.php" onsubmit="return valida_dados(this)">

    <input type="text" name="nome" placeholder="Nome" size="23">
    <br>
    <br>
    <input type="email" name="email" placeholder="E-mail" size="23">
    <br>
    <br>
    <input type="password" name="senha" placeholder="Senha" size="23">
    <br>
    <br>
    <input type="password" name="confirmacao" placeholder="Confirme sua senha" size="23">

    <p> Você é um usuário:</p>
    <p> Físico  <input id="campoFisica" type="radio" name="tipoPessoa" value="fisica"> </p>
    <p> Jurídico<input id="campoJuridica" type="radio" name="tipoPessoa" value="juridica"> </p>

    
    <input class="tipoFisico" type="text" name="cpf" placeholder="Digite seu CPF">
    <p class="tipoFisico">tipo de acessibilidade</p>
    <select class="tipoFisico" name="especificacao" size="1">
        <option></option>
        <option>muleta</option>
        <option>cadeira de rodas manual</option>
        <option>cadeira motorizada</option>
        <option>hover board</option>
        <option>skate</option>

    <input class="tipoJuridico" type="text" name="razao_social" placeholder="Nome da empresa">
    <input class="tipoJuridico" type="text" name="cnpj" placeholder="Digite o CNPJ">


    <p><input type="submit" value="Continuar" name="Continuar"><a href=""></a></p>
</form>
</body>
</html>
