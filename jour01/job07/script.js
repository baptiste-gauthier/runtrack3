function jourtravaille(date){

    var date = new Date(date) ;
    console.log(date);

    // Pour le jour de la semaine 
    var day = date.getDay();
    var options = { weekday: 'long'};
    jour_semaine = date.toLocaleDateString("fr-FR", options);

    // Pour le jour 
    var num = date.getDate();
    console.log(num);


    // Pour le mois 
    var month = date.getMonth();
    var options = { month: 'long'};
    nom_mois = date.toLocaleDateString("fr-FR", options);

    // Pour l'année
    var annee = date.getFullYear();
    console.log(annee);
    
    console.log(day);


    var jourferier = ['2020-01-01','2020-04-13','2020-05-01','2020-05-08','2020-05-21','2020-06-01','2020-07-14','2020-08-15','2020-11-01','2020-12-25']; 

    for(i = 0 ; i < 10 ; i++)
    {
        var ferier = new Date(jourferier[i]);

        if(date.getTime() == ferier.getTime())
        {
            jour_ferier = 1 ;
            console.log("Le " + jour_semaine + " " + num + " " + nom_mois + " " + annee + " est un jour ferié");
        }
        
    }

    if(typeof(jour_ferier) == "undefined"){

        if(day == 0 || day == 6)
        {
            console.log("Non, " + jour_semaine + " " + num + " " + nom_mois + " " + annee + " est un week end");
        }
        else{
            console.log("Oui, " + jour_semaine + " " + num + " " + nom_mois + " " + annee + " est un jour travaillé");
        }
    }
    
}

date = new Date('2020-05-21');
jourtravaille(date);