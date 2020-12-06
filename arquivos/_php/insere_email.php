<?php
			
	function enviar_email()	
	{
		try
		{		
			//Variáveis do servidor
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "LIVE_IN_COLORS";
	
			//váriaveis do html
			$email = $_POST['email-news'];
	
			//cria uma instância do objeto mysqli() como "conexão"
			$conexao = new mysqli($servidor, $usuario, $senha, $banco);
	
			//verificando a conexão
			if($conexao -> connect_error)
			{
				die ("Erro na conexão : " . $conexao -> connect_error);
			}
		
			//código sql para criar a tabela, e utilizando o '?'
			$sql = "INSERT INTO NEWSLETTER (EMAIL, DATA_CADASTRO)
					VALUES('$email', NOW())";
				
			//executa a query SQL	
			if($conexao -> query($sql) == TRUE)
			{
				echo "Inscrito com sucesso";
			}
			else
			{	
				echo "Erro ao inscrever : " . $conexao -> error;
			}
					
			//desconecta
			$conexao -> close();	
		}
		catch(Exception $ex)
		{
			echo $ex -> getMessage();
		}
	}
		
	enviar_email();
		
?>
