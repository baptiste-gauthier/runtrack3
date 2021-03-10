var contenu_div = $("#img_1").html(); 

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

console.log(contenu_div);
// console.log(contenu_div2);

//console.log(contenu_div2);

// $('#button').click(function () {
//     $(contenu_div).replaceAll("#m1");
//     console.log($('#r_1'));

// })

// $('#button').click(function () {
//     for(var i = 0 ; i < 100 ; i++)
//     {
//         var nb = getRandomInt(1,7);
//         console.log(nb); 
//         $('#temp').append($("#img_" + nb).html());
//         $('#img_'+ nb).empty(); 
//         $('#m_' + nb).append($('#temp'));
//         console.log($("#img_" + nb))
//         i++ ;
//     }

// })

$('#button').click(function () {
    for(var i = 0 ; i < 100 ; i++)
    {
        var nb = getRandomInt(1,7);
        
        var nb2 = getRandomInt(1,7);
        
        $('#m_'+ nb).append($('#'+nb2));
        $('#img_'+ nb2).empty(); 
        // $('#m_' + nb).append($('#temp'));
        console.log($("#img_" + nb))
        i++ ;
    }

})

$(document).ready (function () {
    
    $('img').click(function (e) {
        console.log(e.target.id);
        $('#m_1').append($('#'+e.target.id));
        //alert("ça clique ! ");
    })
})

// if($(".m_1").)

