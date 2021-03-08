function fizzbuzz(){
    for(var chiffre = 1 ; chiffre < 152 ; chiffre++)
    {
        if(chiffre%3 == 0 && chiffre%5 != 0)
        {
            console.log(chiffre + ' Fizz');
        }
        else if(chiffre%5 == 0 && chiffre%3 != 0){
            console.log(chiffre + ' Buzz'); 
        }
        else if((chiffre%3 == 0) && (chiffre%5 == 0))
        {
            console.log(chiffre + ' FizzBuzz'); 
        }
        else{
            console.log(chiffre);
        }
    } 
}

fizzbuzz();