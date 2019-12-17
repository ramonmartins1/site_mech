<?PHP

session_start();

include_once ("config.php");
include_once ("conexao.php");
include_once ("funcoes.php");


 
$conn = DBConexao();



$nome = mysqli_escape_string ($conn, $_POST['nome']);
$email  = mysqli_escape_string ($conn, $_POST['email']);
$tel  = mysqli_escape_string ($conn, $_POST['tel']);
$relato  = mysqli_escape_string ($conn, $_POST['relato']);

$sql= mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$email'");
$dados = mysqli_fetch_array($sql);
$_SESSION['usuario_id'] = $dados['usuario_id'];

if ($dados['usuario_id'] != '') {
    
    $usuario_id = $_SESSION['usuario_id'];
}

 
/* Vamos checar algum erro nos campos */
 
if ((!$nome) || (!$email) || (!$tel) || (!$relato)){
 
    echo "ERRO: <br /><br />";
 
    if (!$nome){
 
        echo "Nome é requerido.<br />";
 
    }
 
    if (!$email){
 
        echo "Email é um campo requerido.<br /><br />";
 
    }
 
    if (!$tel){
 
        echo "telefone é requerido.<br /><br />";
 
    }

    if (!$relato) {
        echo "relato é requerido. <br /><br />";
    }
 
    echo "Preencha os campos abaixo: <br /><br />"; 
 
    include "form_pedidos.php";
 
}else{
 
    /* Vamos checar se o nome de Usuário escolhido e/ou Email já existem no banco de dados */

 
        /* Se passarmos por esta verificação ilesos é hora de
        finalmente cadastrar os dados. Vamos utilizar uma função para gerar a senha de
        forma randômica*/
 
        $sql = mysqli_query($conn,
 
                "INSERT INTO pedidos
                (usuario_id, nome_cliente, email, telefone, relato, data_pedido)
 
                VALUES
                ('$usuario_id','$nome', '$email', '$tel', '$relato', now())")
 
                or die( mysqli_error($conn));
 
        if (!$sql){
 
            echo "Ocorreu um erro ao solicitar o serviço, entre em contato.";
 
        }else{
 
       echo "Solicitação de serviço concluida";
 
            
 
    }    
}
