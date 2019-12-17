<!DOCTYPE html>
<?PHP

session_start();


include_once ("config.php");
include_once ("conexao.php");
include_once ("funcoes.php");

if (isset($_GET['deslogar'])) {
    session_destroy();
    header('Location: home.html');
  }





?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrativo</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
     


  </head>
  
    <body>

  <div class="container">
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">

  
          <div class="navbar-header">
            <?PHP 

            echo $_SESSION['msg'];

            ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
              <span class="sr-only">Alternar Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
           
          </div>

         <div class="collapse navbar-collapse" id="barra-navegacao">
            
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="home.html">Home</a></li>
              <li><a href="historia.html">Historia</a></li>
              <li><a href="portifolio.html">Portifolio</a></li>
             

             
              <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Minha conta <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="usuariologin.php">Perfil</a></li>
                     <li><a href="?deslogar">Sair</a></li>
                </ul>

                
               


              </li>

            </ul>

          </div>
          

      </nav>

</div>
  <div class="container">
        
      <div class="row">
        <div class="col-md-10">
          
          <h1 stylr="font-family: 'Montserrat', sans-serif;" >Área Administrativa</h1>

        </div>
        <div class="col-md-2">
          <!-- mibew button --><a id="mibew-agent-button" href="/mibew/chat?locale=pt-br" target="_blank" onclick="Mibew.Objects.ChatPopups['5ac21eb315ca71fc'].open();return false;"><img src="/mibew/b?i=mibew&amp;lang=pt-br" border="0" alt="" /></a><script type="text/javascript" src="/mibew/js/compiled/chat_popup.js"></script><script type="text/javascript">Mibew.ChatPopup.init({"id":"5ac21eb315ca71fc","url":"\/mibew\/chat?locale=pt-br","preferIFrame":true,"modSecurity":false,"forceSecure":false,"width":640,"height":480,"resizable":true,"styleLoader":"\/mibew\/chat\/style\/popup"});</script><!-- / mibew button -->
          <!-- <button class="btn btn-success btn-ls" style="margin-top: 30px" onclick="window.location.href='usuariologin.php'">Precisa de Suporte?</button> -->
        
        </div>
      </div>
      <div class="row">
        
        <h4> Pedidos </h4>

          <table>
            
              <tr>
                <td>ID:</td>
                <td>Numero Pedido</td>
                <td>Nome:</td>
                <td>E-mail:</td>
                <td>Telefone:</td>
                <td>Endereço:</td>
                <td>Pedido:</td>
                <td>Status</td>
                <td>Ações</td>

                <BR>

                <?PHP


                $conn = DBConexao();

                  if (isset($_REQUEST['excluir']) && $_REQUEST['excluir'] == true) {
                     
                     $sql = "DELETE FROM pedidos WHERE id= ". $_REQUEST['id'];
            
                     mysqli_query($sql, $conn);
                     echo "Pedido removido com sucesso <BR>";

                   }


                $sql= mysqli_query($conn,"SELECT id, nome, email, telefone, endereco, pedido FROM pedidos");

                while ($resultado = mysqli_fetch_array($sql)) {

                    echo "<TR>";
                    echo "<TD>". $resultado['id']. "<TD>";
                    echo "<TD>". $resultado['nome']. "<TD>";
                    echo "<TD>". $resultado['email']. "<TD>";
                
                    echo "<TD> <a href = 'pagadmin?excluir=true&id=". $resultado['id']."'> X </a> 
                            




                    <TD>";
                    echo "</TR>";
        }





                ?>

              </tr>





          </table>


      </div>
        
  </div> 
      <br><br>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    

    
  </body>
  
</html>