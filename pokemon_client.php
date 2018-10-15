<!DOCTYPE html>
<html>
<head>
 	 <script src="https://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
  	<title></title>
</head>
<body>
	<h2>Choose between Pikachu,Bulbasaur,Squirtle,Charmander</h2>
	Pokemon: <input type="text" name="pokemon" id="pokemoninput">
	<button id="mybutton">I choose you!</button>

	<div id="jsonsection"></div>
	<dir id="outputsection"></dir>

	<script type="text/javascript">
		$(document).ready(() => {
			$("#mybutton").click(() => {
				let pokemon = $("#pokemoninput").val();
				// alert(pokemon);
				$.ajax({
					"url":"pokemon_server.php",
					"data":{"pokemonbeingsearched":pokemon},
					"type": "GET",
					"success":editHTML
				})
			});
		})
		const editHTML = (jstring) => {
			$("#jsonsection").html("Received" + jstring);
			if(jstring != ""){
				let data =JSON.parse(jstring);
				$("#outputsection").html("");
				$("#outputsection").append("<hr>");
				$("#outputsection").append("Name:" + data.name + "<br>");
				$("#outputsection").append("Type:" + data.type + "<br>");
				$("#outputsection").append("Basic move:" + data.moves.basic + "<br>");
				$("#outputsection").append("Special move:" + data.moves.special + "<br>");
			}else{
					$("#outputsection").html("<hr>No Info found");
			}

		}
	</script> 
</body>
</html>