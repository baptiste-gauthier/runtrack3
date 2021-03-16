
$('#button_inscription').click( function (){
    
    var nom = $('#nom').val(); 
    var prenom = $('#prenom').val(); 
    var email = $('#mail').val(); 
    var pass = $('#pass').val(); 
    $.ajax({
        url: "traitement_inscription.php",
        type: "POST",
        data: {nom : nom , prenom : prenom , mail: email, pass : pass},
        dataType: "text",
        success: function (data) {
            console.log(data);
            $('body').append(data);
        }
    });

})

$('#button_connexion').click( function (){
    var email = $('#mail').val(); 
    var pass = $('#pass').val(); 

    $.ajax({
        type: "POST",
        url: "traitement_connexion.php",
        data: {mail : email, pass : pass},
        dataType: "text",
        success: function (data) {
            console.log(data); 
            $('body').append(data);
        }
    });
})




