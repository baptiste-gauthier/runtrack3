$('#button').click( function () {
    // $.ajax({
    //     url : 'expression.txt' ,
    //     type : 'GET' ,
    //     dataType : 'text',

    //     success : function (expression) {
    //         var citation = '<p>'+expression+'</p>'; 
    //         $('body').append(citation); 
    //     }
    // })

    $.get({
        url : 'expression.txt' ,
        dataType : 'text',

        success : function (expression) {
            var citation = '<p>'+expression+'</p>'; 
            $('body').append(citation); 
        }
    })


    $.get(
        'expression.txt',
        'false',
        fonction_de_retour,
        'text',

    )

    function fonction_de_retour(test)  {
        console.log(test);  // recupère mon contenu
        
    }
})