var texte = $('#texte') ; 

$('#button').click(function () {

    texte.append('<p> le $ est un bon élément monétaire. Le # de twitter est une bonne I D. Il faudra faire le point avec la classe pour cacher cet élément.</p>');
})

$('#cacher').click(function () {
    texte.empty(); 
})

