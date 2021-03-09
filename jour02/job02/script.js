var newArticle = document.createElement("article"); 
newArticle.style = "display : block"; 

var newContent = document.createTextNode('L\'important n\'est pas la chute, mais l\'atterrissage.');

newArticle.appendChild(newContent);

document.body.insertBefore(newArticle,button);

function showhide(){

    if(newArticle.style.display == "block"){

        newArticle.setAttribute("style", "display: none"); 
    }
    else if(newArticle.style.display = "none"){
        newArticle.setAttribute("style", "display: block");
    }

    console.log(newArticle);
}

var button = document.getElementById("button"); 

button.addEventListener("click", showhide);

