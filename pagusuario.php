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
    <title>Home</title>

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
          
          <h1 stylr="font-family: 'Montserrat', sans-serif;" >Mech Informática - Cliente</h1>

        </div>
        <div class="col-md-2">
          <!-- mibew button --><a id="mibew-agent-button" href="/mibew/chat?locale=pt-br" target="_blank" onclick="Mibew.Objects.ChatPopups['5ac21eb315ca71fc'].open();return false;"><img src="/mibew/b?i=mibew&amp;lang=pt-br" border="0" alt="" /></a><script type="text/javascript" src="/mibew/js/compiled/chat_popup.js"></script><script type="text/javascript">Mibew.ChatPopup.init({"id":"5ac21eb315ca71fc","url":"\/mibew\/chat?locale=pt-br","preferIFrame":true,"modSecurity":false,"forceSecure":false,"width":640,"height":480,"resizable":true,"styleLoader":"\/mibew\/chat\/style\/popup"});</script><!-- / mibew button -->
          <!-- <button class="btn btn-success btn-ls" style="margin-top: 30px" onclick="window.location.href='usuariologin.php'">Precisa de Suporte?</button> -->
        
        </div>
          </div>
        
      </div> 
      <br><br>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <a href="form_pedidos.php" class="btn btn-succes-ls" style="text-align: right;">Solicite um Serviço</a>
        
        <h3>Visualizar Pedidos</h3>

      </div>      
    </div>

    

  </div>

   
    <div class="container" style="margin-top: 30px">
      
      <div class="container" id="container-rodape" >
           
            <div class="row" style="margin-top: 15px">

            <div class="col-md-6" style="text-align: left;">
              <h3> O que temos a oferecer</h3>
              <p><i class="fa fa-check" aria-hidden="true"></i>Profissionais experientes e qualificados.</p>
              <p> <i class="fa fa-check" aria-hidden="true"></i>Manutenção em sua residência ou em nossa empresa</p>
              <p><i class="fa fa-check"aria-hidden="true"></i>Segurança e tranquilidade para os nossos clientes.</p>
              <p><i class="fa fa-check" aria-hidden="true"></i> Ótimos preços e qualidade no serviço. </p>
            </div>

            <div class="col-md-6" style="text-align: left;">
              <h3> Contatos</h3>
              <p><i class="fa fa-address-card-o" aria-hidden="true"></i>Av. São Vicente de Paulo, 740 Itajubá/MG</p>
              <p> <i class="fa fa-phone" aria-hidden="true"></i>(35)99846-4804</p>
              <p><i class="fa fa-envelope" aria-hidden="true"></i>ramon123uni@gmail.com</p>
              <p>Redes Sociais:<a href="https://www.facebook.com/mechinformatica/?ref=aymt_homepage_panel"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </p>
            </div>
          
            




    </div>
  </div>
</div>
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