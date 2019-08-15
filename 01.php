<HTML>
	<head></head>
	<title>Formulario</title>
	<body>
		<h1>Formulario javascript</h1>

		<form action="#" name="curso1" id="curso1" method="post">
			<label for="">Nome</label>
			<input type="text" name="fnome" id="teste1" value="primeiro">
            <label for="">Senha</label>
            <input type="password" name="fSenha" value="123">
            <input type="submit" name="btEnviar" value="enviar" onclick="cadastrar()">

		</form>


	

		<script>
			/*
var fm = document.forms.length;

var fm = document.forms[0];

var fm = document.forms.item(0).id;
var fm = document.forms.namedItem("curso1").id;
	var fm = document.forms.namedItem("curso1").innerHTML;


	var fm = document.forms["curso1"].elements[0].value;
	var fm = document.forms["curso1"].elements[2].value;
var fm = document.forms[0];
			var el =fm.elements;

			el[0].style.backgroundColor="#ddd";
			el[0].value="CFBCURSOS";

			*/

function cadastrar(){		
			
var curso = document.getElementById('curso1').elements[0].value;

alert(curso);


	}
		</script>
		

		<div id="teste"></div>
	</body>
</HTML>