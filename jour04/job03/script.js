$('#tri').click(function () {

    
    // $.post(
    //     'index.php', // Le fichier cible côté serveur.
    //     {
    //         form_tri : $("#form_tri").val(), // Nous supposons que ce formulaire existe dans le DOM.
    //         id : $("#id").val(),
    //         nom : $("#nom").val(),
    //         type : $("#type").val()


    //     },
    //     nom_fonction_retour, // Nous renseignons uniquement le nom de la fonction de retour.
    //     'text' // Format des données reçues.
    // );
    
    // function nom_fonction_retour(){
    //     console.log($("#id").val());
    //         $('body').append($("#id").val());
    // }

    $.ajax({
        url : 'index.php',
        type: 'GET', 
        datatype : 'text',

        success : () => {
            //alert('bravo ça marche'); 
            // console.log($('#id').value); 
            $('body').append($("#id").val());
        } 
    })
  
    
})