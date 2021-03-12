$('#tri').click(function () {
                
    var inputValueId = $('#id').val();
    var inputValueName = $('#nom').val(); 
    var inputValueSelect  = $('#type').val();

    $.ajax({
        url: "pokemon.json",
        data: "data",
        dataType: "json",
        success: function (response) {

            if(inputValueName == 0 && inputValueSelect == 0)
            {
                $('body').append('<p> Veuillez remplir tous les champs !');
            }
            else{
                for(var i = 0 ; i != response.length ; i++){
                    console.log(response[i]);
                    if(i == inputValueId && inputValueName == response[i-1].name.french )
                    {
                        //console.log(response[i].name.french);
                        $('body').append(response[i-1].name.french);
                        $('body').append(response[i-1].type);
                    }
    
                }
            }
        }
    });
  
    
})