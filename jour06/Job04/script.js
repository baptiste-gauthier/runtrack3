var liste = document.getElementById("liste");
console.log(liste);


$('.burger').click( function () {
    if(window.matchMedia("(max-width: 767px)").matches)
    {
        if(liste.style.display == "none"){
    
            liste.setAttribute("style", "display: flex");
        }
        else{
            liste.setAttribute("style", "display: none");
        }
    }
    else{
        liste.setAttribute("style", "display: flex");
    }
})