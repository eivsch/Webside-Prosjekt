<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;  charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="form.css">
            <title>Spørsmål</title>
    </head>
<body>
    
<?php
error_reporting(E_ALL);
//definere variabler
$kategoriErr = $hendvendelseErr = $epostErr = "";
$kategori = $hendvendelse = $navn = $tlf = $epost = "";
$sjekkErr = "*Du må bekrefte skjemaet";

//lage error meldinger 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kategori"])) {
        $kategoriErr = "*Kategori er påkrevd";
    }
    else {
        $kategori = $_POST["kategori"];
    }
 
    if (empty($_POST["henv"])) {
        $hendvendelseErr = "*Beskrivelse er påkrevd";
    }
    else {
        $hendvendelse = $_POST["henv"];
    }
    if (empty($_POST["mail"])) {
        $epostErr = "*E-post er påkrevd";
    }
    else {
        $epost = $_POST["mail"];
    }
}

?>
    <article>
<img src="mail.png" alt="Epost ikon">
<h2>Spørsmål</h2>
<p>Vennligst merk hva spørsmålet gjelder, og fyll ut feltene. 
   Send skjemaet. Vi vil svare deg så fort mulig.</p>
<p><span>*</span>Obligatoriske felt</p>
    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
            <legend>Hva gjelder hendvendelsen?</legend>
                    <ul>
                        <li>Velg en kategori<span>*</span></li>
                        <li><input class="kategori" type="radio" name="kategori" value="kat1" id="henv1" tabindex="1"
                            <?php if (isset($kategori) && $kategori == "kat1") echo "checked"; ?>/> <!--bedre brukskvalitet. Husker hva du har trykket på-->
                            <label for="henv1">Kategori 1</label>
                                
                            <input class="kategori" type="radio" name="kategori" value="kat2" id="henv2" 
                            <?php if (isset($kategori) && $kategori == "kat2") echo "checked"; ?>/> 
                            <label for="henv2">Kategori 2</label>
                                
                            <input class="kategori" type="radio" name="kategori" value="kat3" id="henv3" 
                            <?php if (isset($kategori) && $kategori == "kat3") echo "checked"; ?>/>
                            <label for="henv3">Kategori 3</label>
                            <span class="error"><?php echo $kategoriErr;?></span></li>
                     </ul>
                    <ul>
                        <li><label for="beskrivelse">Spørsmål</label><span>*</span></li>
                        <li><textarea id="beskrivelse" name ="henv" rows="4" cols="50" maxlength="200" tabindex="2" aria-required="true"
                            <?php echo htmlspecialchars($hendvendelse);?>><?php echo $hendvendelse?></textarea> <!--husker det som ble skevet-->
                            <span class="error"><?php echo $hendvendelseErr;?></span></li>
                    </ul>
            </fieldset>
            <fieldset>
                <legend>Personalia:</legend>
                    <ul>
                        <li><label for="navn">Navn:</label></li>
                        <li><input class="info" type="text" name="navn" id="navn" tabindex="3"></li>
                            
                        <li><label for="tlf">Telefonnummer:</label></li>
                        <li><input class="info" type="text" name="tlf" id="tlf" tabindex="4"></li>
                            
                        <li><label for="epost">E-post</label><span>*</span></li>
                        <li><input class="info" type="text" name="mail" id="epost" tabindex="5" aria-required="true"
                            value="<?php echo htmlspecialchars($epost);?>"/>
                        <span class="error"><?php echo $epostErr;?></span></li>
                    </ul>
            </fieldset>
            <p id="bekreft"><label for="check">Bekreft opplysningene</label><span>*</span></p>
            <input class="kategori" type="checkbox" name="sjekk" id="check" value="sjekket"/>
            <input id="submit" type="submit" name="send" value="Send" tabindex="7"/>
    </form>
  
    <?php
    
    //hvis submit knappen er trykket,alle obligatoriske felt er fylt ut og beskreftet skjema; Send mail
   if(isset($_POST["sjekk"]) and isset($_POST["send"])){
       if (!empty($_POST["kategori"]) and !empty($_POST["henv"]) and 
        !empty($_POST["mail"]) ){
            $to = $_REQUEST["mail"];
            $from = "From: ".$_REQUEST["mail"];
            $subject = $_REQUEST["kategori"];
            $body = $_REQUEST["henv"]."\n Tlf: ".$_REQUEST["tlf"]; 
            mail($to, $subject, $body, $from );
            echo "<p id='mail'>Mailen er sendt!</p>";
        
        }
      }
       elseif(!isset($_POST["sjekk"]) and isset($_POST["send"])){
          echo "<span class='error'>$sjekkErr</span> </article>";
   }
     
    
     
    
    ?>




        
 
    </body>
</html>
