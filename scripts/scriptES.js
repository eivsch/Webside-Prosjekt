//toggle-knapp for skjulte div-elementer
var a = 5;
var b = "false";
function toggleTekst(idTekst, idKnapp){
  a = $(idKnapp).attr("aria-expanded");
  if ( a === b)
  {
    $(idKnapp).attr("aria-expanded", "true");
  }else{
    $(idKnapp).attr("aria-expanded", "false");
  }
  $(idTekst).toggle(400);
  
}


/*******EasterEgg********/

  var easterEgg = [83, 72, 79, 87, 69, 71, 71]; //showegg
  var eggLength = easterEgg.length;
  var currentPosition = 0;
    
    $(document).keydown(function (e) {
      if (e.keyCode === easterEgg[currentPosition]) {
      e.preventDefault();
        
        if (++currentPosition === eggLength) {
           currentPosition = 0;
           $("#egg").toggle(10);
           var myAudio=document.getElementById("solo");
           myAudio.play();
        }
      } else {
          currentPosition = 0;
        }
     });