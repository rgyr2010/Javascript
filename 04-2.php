<HTML>
	<head>
		<title>Session storage</title>
		
		<script>

/*
function pagina(pg){

	if(pg == 2){
window.location.assign("p2.html");
}else if(pg==3){
window.location.assign("p3.html");

}


}




function pagina(pg){
	sessionStorage.nome = document.getElementById("fnome").value;
window.location.assign("02p"+pg+".php");


}

			
function inicia(){
document.getElementById("btnp1").addEventListener("click",
function(){
pagina(1);
	});


document.getElementById("btnp2").addEventListener("click",
function(){
pagina(2);
	});



document.getElementById("btnlimpar").addEventListener("click",
function(){
sessionStorage.clear();
	});
}


window.addEventListener("load",inicia);




function gravarnome(){
sessionStorage('nomedapessoa',nomedapessoa.value);

}


function lernome(){
	sessionStorage('nomedapessoa',nomedapessoa.value)
}

*/
		</script>


 <label for="">Nome da pessoa:<input type="text" id="nomedapessoa"></label>
 <label for=""><input type="button" id="gravaNomeSession"  onclick="gravarnome()"  value="gravarnome"> </label>


  <label for=""><input type="button" id="lerNomeSession"  onclick="lernome()"     value="lernome" > </label>


<script >





	var teste = sessionStorage.getItem('nomedapessoa',nomedapessoa.value);
        
   if(teste == "fabiane"){
   	document.write("fabiane e roger");
   } else{

   	document.write('Roger e bom mesmo');
   }






		</script>















	</body>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    

		
</HTML>