<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Formulario</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <script language="JavaScript">
    function validarFormulario(){

      if(document.forms['registro'].nome.value==""){

        alert('Preencha corretamente o nome');

        return;
      }else if(document.forms['registro'].email.value==""){

        alert('Preencha corretamente o email');
        return;
      }else if (document.forms['registro'].idade.value==""){

        alert('Preencha corretamente a idade');
        return;
      }else if(document.forms['registro'].senha.value==" "){

        alert('Preencha corretamente a senha');
        return; 
      }else{
        document.forms['registro'].submit();
      }

}
  </script>
  <body>
    
   	<div class="container">
   		
   		<div class="page-header">
        <h1>Cadastro Usuários</h1>
          
      </div>
      <div class="row">

        <div class="col-sm-8">
          <h3>Insira seus dados</h3>
        

          <form name="cadastro" method="post" action="cadusuario.php" onSubmit="validarFormulario(); return false;">

            <div class="form-group">
              <label for="nome">Nome </label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="form-group">
              <label for="email">E-mail </label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

             <div class="form-group">
              <label for="idade">Idade </label>
                <input type="text" class="form-control" name="idade" id="idade">
            </div>

            <div class="form-group">
              <label for="idade">Informações </label>
                <textarea name="info" id="info" maxlength="200"></textarea>
            </div>
           

            <div class="form-group">
              <label for="senha">Senha </label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="termos"> Aceito os termos          &nbsp;&nbsp;
                <button class="btn btn-default"> <a href="termos.html">Leia os termos</a> </button>
              </label>
            </div>

           <input type="submit" name="submeterdados" value="Cadastrar" class="btn btn-success" />
          <a href="home.html" class="btn btn-info">Voltar</a>


          </form>

        </div>
 

        <div class="col-sm-4">
          

        </div>

      </div>

   	</div> 

    
  </body>
</html>