

let openOrCloseRightMenu = document.getElementsByClassName("containerMenuIcon");

let menu = document.getElementsByClassName("rightMenu");

let body = document.getElementsByClassName("container");



openOrCloseRightMenu[0].addEventListener("click", function (e) {
	openOrCloseRightMenu[0].classList.toggle("change");
   body[0].classList.toggle("rightMenu--active"); 
});

let username = document.getElementsByName("username");
var textUsername = 'Enter Username';

let password = document.getElementsByName("password");
let textPassword = 'Enter Password';

username[0].addEventListener("blur",function(){showPlaceholder(username,textUsername);});
username[0].addEventListener("focus",hidePlaceholder);

password[0].addEventListener("blur",function(){showPlaceholder(password,textPassword);});
password[0].addEventListener("focus",hidePlaceholder);


function showPlaceholder(data,textToShow){
data[0].placeholder = textToShow;	
}

function hidePlaceholder()
{
	this.placeholder = '';	
}
