

<?php

include_once ("config.php");
include_once ("conexao.php");	

	//Fazer a consulta
	function DBQuery($conexao, $tabela, $parametro = null, $colunas="*"){

		//se receber algo em paramentro, a variavel parametro recebera o valor passado caso nao recebe nulo

		$parametro = ($parametro) ? " {$parametro} ":null;
		$colunas = ($colunas)? "{$colunas}": "*";

		$sql = "SELECT {$colunas} FROM {$tabela}{$parametro}";

		$resultado = DBExecute($sql);

		if(!mysqli_num_rows($resultado)){
			return false;
		}else{

			while($res = mysqli_fetch_assoc($resultado)){

				$dados[] = $res;
			}

			return $dados;

		}


	}

	function DBExecute($sql){

		$conn = DBConexao();

		//Passando para o Query o retorno de DBQuery com $sql e a conexao

		$resultado = @mysqli_query($conn, $sql) or die (mysqli_error($conn));

		mysqli_close($conn);
		

		return $resultado;




	}



?>