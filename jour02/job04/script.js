// document.getElementById("keylogger").innerHTML = "" ;

function logger(e){

    
    var textarea = document.getElementById("keylogger");
    
    
    if(textarea.matches(':focus'))
    {
        for(i = 0 ; i <= 1 ; i++)
        {
            textarea.innerHTML += e.key ;
        }
    }
    else{
        textarea.innerHTML += e.key + e.key;
    }

    console.log(textarea);


    // console.log(e.key); 
    // console.log(document.getElementById("keylogger").innerHTML); 
    // console.log(compte); 
    // alert("tu appuis sur une touche ! ") ;
}


document.addEventListener("keydown",logger);

