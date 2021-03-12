

$('#button').click( function (){
    
    var nom = $('#nom').val(); 
    var prenom = $('#prenom').val(); 
    var email = $('#mail').val(); 
    var pass = $('#pass').val(); 
    $.ajax({
        url: "inscription.php",
        type: "POST",
        data: {nom : nom , prenom : prenom , mail: email, pass : pass},
        dataType: "text",
        success: function (data) {
            console.log(nom);
            $('body').append(data);
        }
    });

})




