function tri(number,order){
    
    if(order == 'asc')
    {
        number.sort(function(a,b) {
            return a - b ; 
        }); 
    }
    else if(order == 'desc')
    {
        number.sort(function (a,b){
            return b - a ;
        });
    }
    
    console.log(number); 
}

var number = [1,5,10,12,4] ;

tri(number,'desc'); 

