function jsonValueKey(json, key)
{  
    
    console.log(json);
    var obj = JSON.parse(json); 

    console.log(typeof obj)

    console.log(obj.name); 

    var result = obj[key]; 

    $('body').append(result); 

    // $.ajax({
        
    //     url : json ,
    //     type : 'GET' ,
    //     dataType : 'json',

        
        // success : function (data, key) {
            
            
            // console.log(obj);

            // return data[key] ;
           
                            
    //     }
    // })   
}

 jsonValueKey("{\"name\": \"La Plateforme_\",\"city\": \"Marseille\",\"address\": \"8 rue d'hozier\",\"nb_staff\": \"11\",\"creation\": \"2019\"}", "name");



//"{\"name\": \"La Plateforme_\",\"city\": \"Marseille\",\"address\": \"8 rue d'hozier\",\"nb_staff\": \"11\",\"creation\": \"2019\"}"


