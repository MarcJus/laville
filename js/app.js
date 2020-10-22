var explorer = document.querySelector("#welcome-message button");
var prompt = document.querySelector("#prompt");
var welcomeMessage = document.getElementById("welcome-message");
explorer.addEventListener("click", function(){
	showPrompt();
});

var validerButton = document.querySelector("#prompt .text-background form #send");
var input = document.querySelector("#prompt .text-background .input input");
validerButton.addEventListener("click", function(e){
	e.preventDefault();
	var ville = input.value;
    console.log(ville);
	input.value = "";
	if(ville==""){
		console.log("Entrez un nom de ville !");
		return false;
	}
    window.open("https://www.google.fr/maps/place/"+ville);
});

var close = document.querySelector("#prompt #close");
close.addEventListener("click", function(){
	hidePrompt();
});

function hidePrompt(){
    prompt.classList.add("inactive");
    welcomeMessage.classList.remove("inactive");
}

function showPrompt(){
    welcomeMessage.classList.add("inactive");
    prompt.classList.remove("inactive");
}

console.log("Tout est fait");
