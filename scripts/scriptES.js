/*
  Script for Modeller: 3D-direktoratet
*/


//toggle-knapp for skjulte div-elementer
var a = 0;
var b = "false";
function toggleTekst(idTekst, idKnapp){
  a = $(idKnapp).attr("aria-expanded");
  if ( a == b)
  {
    $(idKnapp).attr("aria-expanded", "true");
    $(idKnapp).html('Les mindre');
  }else{
    $(idKnapp).attr("aria-expanded", "false");
    $(idKnapp).html('Les mer');
  }
  $(idTekst).toggle(115);
}





/*******EasterEgg********/

  var easterEgg = [83, 72, 79, 87, 69, 71, 71]; //showegg
  var eggLength = easterEgg.length;
  var currentPosition = 0;
    
    $(document).keydown(function (e) {
      if (e.keyCode == easterEgg[currentPosition]) {
      e.preventDefault();
        
        if (++currentPosition == eggLength) {
           currentPosition = 0;
           $("#egg").toggle(10);
           var myAudio=document.getElementById("solo");
           myAudio.play();
        }
      } else {
          currentPosition = 0;
        }
     });
