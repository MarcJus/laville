var buttonActive = document.getElementById("header-button-active");
console.log(buttonActive);
buttonActive.addEventListener("click", function(){
    console.log("bouton");
});

var buttonsHeader = document.querySelectorAll("#header .buttons a");
console.log(buttonsHeader);

for(var i = 0; i < buttonsHeader.length; i++){
    var button = buttonsHeader[i];
    console.log(button);
}