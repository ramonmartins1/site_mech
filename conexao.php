<?php

	function DBConexao(){

		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die (mysqli_error());
		

		return $sql;

	}
	



?>