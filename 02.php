<HTML>
	<head>
		<title>JS AXIOS</title>
		
		<script>

/*
function pagina(pg){

	if(pg == 2){
window.location.assign("p2.html");
}else if(pg==3){
window.location.assign("p3.html");

}


}
*/



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


		</script>

<input type="text" name="fnome" id="fnome">
<button id="btnp1">pagina1</button>
<button id="btnp2">pagina2</button>
<button id="btnlimpar">limpar session store</button>
<div id="movies"></div>
		
	</body>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    

		
</HTML>