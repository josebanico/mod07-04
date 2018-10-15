<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script type="text/javascript">
let myself = 		
{
	"name":"Jose",
	"age":33,
	"hobbies":["eating","sleeping","tennis"],
	"rowmates":["Shaira","Jen","Lito","Jek","Jon"],
	"pet":{"name": "dog", "species":"parakeet","gender":"male" }
};
	// alert(myself.name);
	// for(i=0; i < myself.hobbies.length; i++){
	// 	alert(myself.hobbies[i]);
	// }
	// alert(myself.pet.name + " the " + myself.pet.species);
	let str = "My name is " + myself.name + ", am" + myself.age + "years old, currently a student of tuitt coding bootcamp";
	let str2 = "I like " + myself.hobbies + " and to do programming";
	let str3= "My coworkers are " + myself.rowmates + ".";
	let str4 = "Oh by the way, I have a pet " + myself.pet.species + " . And";
	let str5 = "";
	if(myself.pet.gender == "male"){
		str5 = " his ";
	}else{
		str5 = " her ";
	}
	let str6 = "name is " + myself.pet.name;
	let last_str =  str4 + str5 + str6;
 	$("#summary").html(str);
	$("#summary").append(str2);
	$("#summary").append(str3);
	$("#summary").append(last_str);
</script>
