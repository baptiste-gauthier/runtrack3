function changeStyle()
{
    var style = document.getElementById("stylecss"); 

    console.log(style);
    if(x.matches){
        alert("yo");
        style.setAttribute("href","style2.css"); 
    }
}
var x = window.matchMedia("(max-width: 700px)").matches; 
changeStyle(); 
x.addListener(changeStyle);