
<?PHP

include_once ("config.php");
include_once ("conexao.php");
include_once ("funcoes.php");


 
$conn = DBConexao();

$nome = mysqli_escape_string ($conn, $_POST['nome']);
$email  = mysqli_escape_string ($conn, $_POST['email']);
$idade = mysqli_escape_string ($conn, $_POST['idade']);
$senha = mysqli_escape_string ($conn, md5($_POST["senha"]));
$info = mysqli_escape_string ($conn, $_POST['info']);
 
/* Vamos checar algum erro nos campos */
 
if ((!$nome) || (!$email) || (!$idade)){
 
    echo "ERRO: <br /><br />";
 
    if (!$nome){
 
        echo "Nome é requerido.<br />";
 
    }
 
    if (!$email){
 
        echo "Email é um campo requerido.<br /><br />";
 
    }
 
    if (!$idade){
 
        echo "Idade é requerido.<br /><br />";
 
    }
 
    echo "Preencha os campos abaixo: <br /><br />"; 
 
    include "formulario_cadastro.php";
 
}else{
 
    /* Vamos checar se o nome de Usuário escolhido e/ou Email já existem no banco de dados */


 
    $sql = mysqli_query( $conn, "SELECT count(usuario_id) FROM usuarios WHERE email='$email'");
 
    $eReg = mysqli_fetch_array($sql);
 
    $email_check = $eReg[0];

 
    if (($email_check > 0)){
 
        echo "Este email já está sendo utilizado.<br /><br />";
 
            unset($email);

 
        include "formulario_cadastro.php";
 
    }else{
 
        /* Se passarmos por esta verificação ilesos é hora de
        finalmente cadastrar os dados. Vamos utilizar uma função para gerar a senha de
        forma randômica*/
 
        $sql = mysqli_query($conn,
 
                "INSERT INTO usuarios
                (nome, email, idade, senha, info, data_cadastro)
 
                VALUES
                ('$nome', '$email', '$idade', '$senha', '$info', now())")
 
                or die( mysqli_error($conn));
 
        if (!$sql){
 
            echo "Ocorreu um erro ao criar sua conta, entre em contato.";
 
        }else{
 
       echo "Usuario cadastrado com sucesso";
 
            
 
    }    
  }
}
  