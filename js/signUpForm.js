
let name = document.getElementsByName("name");
var textName = 'Enter Name';

let email = document.getElementsByName("email");
var textEmail = 'Enter Email';

let username = document.getElementsByName("username");
var textUsername = 'Enter Username';

let password = document.getElementsByName("password");
let textPassword = 'Enter Password';

let passwordRepeat = document.getElementsByName("repeatpassword");
let textPasswordRepeat = 'Repeat Password';

let closeWindow = document.getElementsByClassName("close");

name[0].addEventListener("blur",function(){showPlaceholder(name,textName);});
name[0].addEventListener("focus",hidePlaceholder);

email[0].addEventListener("blur",function(){showPlaceholder(email,textEmail);});
email[0].addEventListener("focus",hidePlaceholder);


username[0].addEventListener("blur",function(){showPlaceholder(username,textUsername);});
username[0].addEventListener("focus",hidePlaceholder);

password[0].addEventListener("blur",function(){showPlaceholder(password,textPassword);});
password[0].addEventListener("focus",hidePlaceholder);

passwordRepeat[0].addEventListener("blur",function(){showPlaceholder(passwordRepeat,textPasswordRepeat);});
passwordRepeat[0].addEventListener("focus",hidePlaceholder);

closeWindow[0].addEventListener("click",displayModalWindow);

let closeWindowbyButton = document.getElementsByClassName("closeButton");
closeWindowbyButton[0].addEventListener("click",displayModalWindow);
function displayModalWindow()
{
let window = document.getElementsByClassName("modal");
window[0].style.display = "none";	
}

function showPlaceholder(data,textToShow){
data[0].placeholder = textToShow;	
}

function hidePlaceholder()
{
	this.placeholder = '';	
}

