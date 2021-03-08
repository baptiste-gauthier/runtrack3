function bisextile(annee) {

    if(annee %4 == 0 && (annee%100 != 0) || (annee%400 == 0)) {
        return true ;
    }
    else{
        // console.log(annee % 400 ); 
        return false; 
    }
}

var result = bisextile(1904);
console.log(result); 

