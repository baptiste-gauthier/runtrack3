var i = 0; 

function addone(){

    
    i++ ; 

    document.getElementById("compteur").innerHTML = i ; 
    
    // var content = article.innerHTML ; 

}

var button = document.getElementById("button"); 

button.addEventListener('click',addone);