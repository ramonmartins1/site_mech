<?PHP

include_once ("config.php");
include_once ("conexao.php");
include_once ("funcoes.php");

if (isset($_POST['entrar'])) {
    
    $conn = DBConexao();
    $login = mysqli_escape_string($conn, $_POST['email']);
    $senha = mysqli_escape_string($conn, md5($_POST["senha"]));

    $teste= mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha' " );

    //percorrer todo array 

    while ($row=mysqli_fetch_array($teste)) {
      $usuario_id = $row['usuario_id'];
      $nivel = $row['nivel_usuario'];
      $nome = $row['nome'];

      session_start();

      if ($nivel == 1) {
        
        $_SESSION['adm'] = $nome;
        $_SESSION['msg'] = "Bem vindo &nbsp;". $nome."<br/>";

        header('Location: pagadmin.php');

      }else if ($nivel == 2){

        $_SESSION['usuario_id'] = $usuario_id; 
        $_SESSION['usuario'] = $nome;
        $_SESSION['msg'] = "Bem vindo &nbsp;". $nome."<br/>";
        header('Location: pagusuario.php');

      }else

        echo "usuario nao cadastrado";
      
    }

    

}






?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Cesar">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Área para Usuário Cadastrado</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <div class="container">   
      <form class="form-signin" method="POST" action="#">
        <h2 class="form-signin-heading text-center">Área para Usuário Cadastrado</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
    
        <input type="text" name="email" class="form-control" placeholder="Digite o E-mail" ><br />
    
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha"  >
        
        <button class="btn btn-lg btn-success btn-block" type="submit" name="entrar">Acessar</button>
        <a href="home.html" class="btn btn-lg btn-info btn-block" >Voltar</a>
      </form>
    
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


