<?php
	//Orientado à Objeto
	//variáveis
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "LIVE_IN_COLORS";
					
	//cria uma instância do objeto mysqli() como "conexão"
	$conexao = new mysqli($servidor, $usuario, $senha, $banco);
		
	//verificando a conexão
	if($conexao -> connect_error)
	{
		die ("Erro na conexão : " . $conexao -> connect_error);
	}
		
	//código sql para mostrar os dados
	$sql = "SELECT * FROM INSCRITO";
				
	/*utilizando uma variável que irá receber  o resultado da consulta
	  mysqli_query()*/
	$result = $conexao -> query($sql);
		
	/*se o número de linhas do result for maior do que 0
	  mysqli_num_rows() verifica se há mais de 0 linhas*/
	if($result -> num_rows > 0)
	{
		echo "<table>
				<tr>
					<th> ID </th>
					<th> Nome </th>
					<th> Email </th>
					<th> Data de Cadastro</th>
				</tr>";

		//mysqli_fetch_assoc() coloca os resultados num array;
		while($rows = $result -> fetch_assoc())
		{
			//mostra todos os dados inseridos
			echo "<tr>
					<td> " . $rows["ID"] . "</td>" .
					"<td>" . $rows["NOME"] . "</td>" .
					"<td>" . $rows["EMAIL"] . "</td>" .
					"<td>" . $rows["DATA_CADASTRO"] . "</td>
				 </tr>" ; 
				 
		}
		
		echo "</table>";
	}
	else
	{
		echo "Sem resultados";
	}
							
	//desconecta do banco, mysqli_close()
	$conexao -> close();
					 
?>