function chamarPhpEmail() 
{
	var email = document.getElementsByName("email-news")[0].value;
	
		
    $.ajax({
       url: 'http://localhost/Live%20&%20In%20Colors/arquivos/_php/insere_email.php',
	   data: 'email-news=' + email,
	   method: 'POST',
       complete: function (response) 
	   {
          alert(response.responseText);
       },
       error: function () 
	   {
           alert('Erro');
       }
   });  

   return false;
}

function chamarPhpInscrito() 
{
	var nome = document.getElementsByName("nome")[0].value;
	var email = document.getElementsByName("email")[0].value;
			
    $.ajax({
       url: 'http://localhost/Live%20&%20In%20Colors/arquivos/_php/insere_inscrito.php',
	   data: 'nome=' + nome + '&email=' + email,
	   method: 'POST',
       complete: function (response) 
	   {
          alert(response.responseText);
       },
       error: function () 
	   {
           alert('Erro');
       }
   });  

   return false;
}

function verificaAdmin()
{
	var usuario = prompt("Informe o nome de administrador");
	
	if(usuario == "reznor9trentNailsWITHcl0s3r")
	{
		open("http://localhost/Live%20&%20In%20Colors/arquivos/saved_resource(2).php");	
	}
	else
	{
		alert("Nome errado!");
	}
}
