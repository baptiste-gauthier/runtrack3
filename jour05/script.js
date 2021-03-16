

const animateCSS = (element, animation, prefix = 'animate__') =>
// We create a Promise and return it
new Promise((resolve, reject) => {
  const animationName = `${prefix}${animation}`;
  const node = document.querySelector(element);

  node.classList.add(`${prefix}animated`, animationName);

  // When the animation ends, we clean the classes and resolve the Promise
  function handleAnimationEnd(event) {
    event.stopPropagation();
    node.classList.remove(`${prefix}animated`, animationName);
    resolve('Animation ended');
  }

  node.addEventListener('animationend', handleAnimationEnd, {once: true});
});


$('#button_inscription').click( function (){

    $('.message').empty(); 
    
    var nom = $('#nom').val(); 
    var prenom = $('#prenom').val(); 
    var email = $('#mail').val(); 
    var pass = $('#pass').val(); 
    var confirm_pass = $('#confirm_pass').val(); 

    $.ajax({
        url: "traitement_inscription.php",
        type: "POST",
        data: {nom : nom , prenom : prenom , mail: email, pass : pass, confirm_pass : confirm_pass},
        dataType: "text",
        success: function (data) {
            
            if(data == "error_champs_vide")
            {
                $('#error_champs_vide').append("Veuillez remplir tout les champs ! ");
            }
            else if(data == "error_pass")
            {
                animateCSS('#pass','shakeX');
                animateCSS('#confirm_pass','shakeX');

                $('#error_pass').append("Les mots de passe sont différents ! ");  
            }
            else if(data == "error_mail")
            {
                $('#error_mail').append("Email non valide");
            }
            else if(data == "error_admin")
            {
                $('#error_admin').append("Erreur lors de l'inscription, veuillez contacter l'admin");
            }
            else if(data == "success")
            {
                $('#success').append("Inscription réussi");
                setTimeout(function () {
                    window.location.replace("connexion.php");
                },2000);
            }
            //window.location.replace("connexion.php");
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
            if(data == "erreur")
            {
                $('#error').append("Email ou mot de passe incorrect");  
            }
            else if(data == "connecte")
            {
                $('#connecte').append("Connexion réussi");  
                setTimeout(function () {
                    window.location.replace("index.php");
                },2000);
            }
        }
    });
})




