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
