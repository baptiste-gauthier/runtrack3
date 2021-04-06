
// script animation apparition 

var observer = new IntersectionObserver(function (entries){
    entries.forEach(function(entrie){
        if(entrie.intersectionRatio > 0.5){
            entrie.target.classList.remove('not-visible')
        }
    })
}, {

    threshold: [0.5]
})

let items = document.querySelectorAll('.vue')

items.forEach(function(item){
    item.classList.add('not-visible')
    observer.observe(item) ; 
})

// sript nav responsive 

var height = $('.lien_header').css("height");
// console.log(height);
var opacity = $('.lien_header').css("opacity");

function navReplier(){

  if( $('.lien_header').attr('style') == 'height: 30vh; opacity: 1;'){
      // $('.lien_header').attr({ style :"height: 0px; opacity: 0;"});
      $('.lien_header').removeAttr("style") ;
  }
  else if(height == "0px" || height < "60px"){
      $('.lien_header').css({"height": "30vh","opacity": "1"});
  }
}

$('#burger').on("click",function () {
    navReplier(); 
})

$('.lien_header').on("click", function () {
  if (window.matchMedia("(max-width: 768px)").matches) {
    navReplier(); 
  } 
})

// console.log(window.matchMedia("(min-width: 768px)").matches);

// config cursor 


// set the starting position of the cursor outside of the screen
let clientX = -100;
let clientY = -100;
const innerCursor = document.querySelector(".cursor--small");

const initCursor = () => {
  // add listener to track the current mouse position
  document.addEventListener("mousemove", e => {
    clientX = e.clientX;
    clientY = e.clientY;
  });
  
  // transform the innerCursor to the current mouse position
  // use requestAnimationFrame() for smooth performance
  const render = () => {
    innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
    // if you are already using TweenMax in your project, you might as well
    // use TweenMax.set() instead
    // TweenMax.set(innerCursor, {
    //   x: clientX,
    //   y: clientY
    // });
    
    requestAnimationFrame(render);
  };
  requestAnimationFrame(render);
};

initCursor();

let lastX = 0;
let lastY = 0;
let isStuck = false;
let showCursor = false;
let group, stuckX, stuckY, fillOuterCursor;

const initCanvas = (color) => {
  const canvas = document.querySelector(".cursor--canvas");
  const shapeBounds = {
    width: 75,
    height: 75
  };
  paper.setup(canvas);
  var strokeColor = color ;
  const strokeWidth = 1;
  const segments = 8;
  const radius = 15;
  
  // we'll need these later for the noisy circle
  const noiseScale = 150; // speed
  const noiseRange = 4; // range of distortion
  let isNoisy = false; // state
  
  // the base shape for the noisy circle
  const polygon = new paper.Path.RegularPolygon(
    new paper.Point(0, 0),
    segments,
    radius
  );
  polygon.strokeColor = strokeColor;
  polygon.strokeWidth = strokeWidth;
  polygon.smooth();
  group = new paper.Group([polygon]);
  group.applyMatrix = false;
  
  const noiseObjects = polygon.segments.map(() => new SimplexNoise());
  let bigCoordinates = [];
  
  // function for linear interpolation of values
  const lerp = (a, b, n) => {
    return (1 - n) * a + n * b;
  };
  
  // function to map a value from one range to another range
  const map = (value, in_min, in_max, out_min, out_max) => {
    return (
      ((value - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
    );
  };
  
  // the draw loop of Paper.js 
  // (60fps with requestAnimationFrame under the hood)
  paper.view.onFrame = event => {
    // using linear interpolation, the circle will move 0.2 (20%)
    // of the distance between its current position and the mouse
    // coordinates per Frame
    lastX = lerp(lastX, clientX, 0.2);
    lastY = lerp(lastY, clientY, 0.2);
    group.position = new paper.Point(lastX, lastY);
  }
}

initCanvas("rgba(0, 0, 0, 1)");

// script hello world 


$("#hello").html(function(index, html) {
  // console.log($("#hello")[0].innerText.charAt(i)); 
  var a = 0.03 ; 
  for(var i = 0 ; i < $("#hello")[0].innerText.length ; i++)
  {
    // console.log($("#hello")[0].innerText.charAt(i));
    // console.log("yo") ;
    if( i >= 18 && i <= 34 )
    {
      $("#message_hello").append("<span class=\"slide-bottom hvr-bounce-in\" style=\"-webkit-animation: slide-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940)"+ a +"s both; color: #b97381;\">" + $("#hello")[0].innerText.charAt(i) + "</span>");
    }
    else if(i == 17)
    {
      $("#message_hello").append("<span class=\"slide-bottom hvr-bounce-in\" style=\"-webkit-animation: slide-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940)"+ a +"s both; display :block;\">" + $("#hello")[0].innerText.charAt(i) + "</span>");
    }
    else{

      $("#message_hello").append("<span class=\"slide-bottom hvr-bounce-in\" style=\"-webkit-animation: slide-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940)"+ a +"s both;\">" + $("#hello")[0].innerText.charAt(i) + "</span>");
    }
    // console.log($("#hello")[0].innerText.charAt(i));
    a = a + 0.03 ; 

    // $('.slide-bottom').css("-webkit-animation","slide-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 3s both");
  }
  // $(".slide-bottom").removeAttr("style"); 
});

var buttonCheck = document.getElementsByClassName("bloc_click");

// console.log(buttonCheck); 


for(var i = 0 ; i < buttonCheck.length ; i++)
{
  // if(i == 1)
  // {
  //   var url = "page.php?id=1" 
  // }
  // else{
  //   var url = "page.php?id=3" ; 
  // }
  buttonCheck[i].setAttribute("placement", i) ; 
  // console.log(buttonCheck[i]); 
  buttonCheck[i].addEventListener('click', function(e) { 
    
    // initCursor();
    initCanvas("rgba(255, 255, 255, 1)");

    var placement = e.target.getAttribute('placement'); 
    console.log(e.target); 
    var placement = Number(placement) + 1 ; 

    console.log(placement);
    var url = "page.php?id="+ placement; 
    
    
    console.log("yo"); 
    $.ajax({
      type: "get",
      url: url,
      
      success: function (response) {
        console.log(response) ; 
        $("#projet_flex").append(response);
        strokeColor = "rgba(150, 255, 255, 1)";
        $("#projet_flex").addClass("animate__animated animate__slideInRight");
      }
    });
  });

}

$(document).on('click', '.b_burger', function(){
  // initCursor();
  initCanvas("rgba(0, 0, 0, 1)");

  $("#projet_flex").removeClass("animate__animated animate__slideInRight");
  $("#projet_flex").addClass("animate__animated animate__slideOutLeft");
  setTimeout(function(){  $("#projet_flex").empty(); 
  $("#projet_flex").removeClass("animate__animated animate__slideOutLeft"); }, 1000);

 

  // $("#projet_flex").removeAttr("class");
}
)
  

// nav resize //



$(window).resize(function() {
  if($(window).width() >= 769)
  {
    $('.lien_header').css({"height": "auto","opacity": "1"});
  }
  else{
    $('.lien_header').css({"height": "0px","opacity": "0"});
  }
  
});







