function sommesnombrespremiers(nombre1,nombre2){
    if(nombre1 < 2)
    {
        return false;
    }
    
    for(i = 2 ; i <= Math.sqrt(nombre1) ; i++)
    {
        if(nombre1 % i == 0)
        {
            return false 
        }
    }

    if(nombre2 < 2)
    {
        return false;
    }
    
    for(i = 2 ; i <= Math.sqrt(nombre2) ; i++)
    {
        if(nombre2 % i == 0)
        {
            return false 
        }
    }

    return nombre1 + nombre2;

}

var result = sommesnombrespremiers(7,12);

console.log(result);