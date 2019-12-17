<!DOCTYPE html>
<?PHP

  session_start();
?>


<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pedidos</title>

    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo2.css" rel="stylesheet">

   
    
  </head>
  <script language="JavaScript">
    function validarFormulario(){

      if(document.forms['pedidos'].nome.value==""){

        alert('Preencha corretamente o nome');

        return;
      }else if(document.forms['pedidos'].email.value==""){

        alert('Preencha corretamente o email');
        return;
      }else if (document.forms['pedidos'].tel==""){

        alert('Preencha corretamente o telefone');
        return;
      }else if(document.forms['pedidos'].relato.value==""){

        alert('Preencha corretamente o serviço');
        return; 
      }else{
        document.forms['pedidos'].submit();
      }

}
  </script>
  <body>
    
   	<div class="container">
   		
   		<div class="page-header">
        <h1>Solicite um Serviços ou agendamento</h1>
      </div>
      <div class="row">

        <div class="col-sm-8">
         

          <form name="pedidos" method="post" action="cad_pedidos.php" onSubmit="validarFormulario(); return false;">
              
            <div class="form-group">
              <label for="nome">Nome </label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="form-group">
              <label for="email">E-mail </label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

             <div class="form-group">
              <label for="idade">Telefone </label>
                <input type="text" class="form-control" name="tel" id="tel">
            </div>

            <div class="form-group">
              <label for="idade">Descreva a situação: </label>
                <textarea name="relato" id="relato" maxlength="400"></textarea>
            </div>

           <input type="submit" name="submeterdados" value="Cadastrar" class="btn btn-success" />
          <a href="home.html" class="btn btn-info">Voltar</a>


          </form>


        </div>
        

      </div>

   	</div> 
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>