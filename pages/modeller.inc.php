<section class="top">
        <h1 class="undersiderOverskrift">Modeller</h1>
        <img class="ikoner" src="bilder/ikoner/print.png" alt="Print ikon">
        <section id="models" role="main" aria-label="info/modeller">

        <div id="egg" hidden >
			  	    <img src="bilder/atomguitar.jpg" id="3Dgitar" alt="En 3Dprintet el-gitar">
			  	    <p class="byline">Hentet fra <a href="http://createdigitalmusic.com/2012/10/six-3d-printed-musical-instruments-and-what-3d-printing-could-do-for-musicians/">Createdigitalmusic.com</a></p>
			  	    <audio id="solo">
			  	      <source type="audio/wav" src="pages/gitar.wav">
			  	      Browseren din støtter ikke audio tags.
			  	    </audio>
	  </div>

	    <div class="infoText">
                <h2>Har du planer om å kjøpe 3D-Printer?</h2>
	      <p> Det finnes svært mange modeller, og
		     prisene kan variere fra noen tusenlapper, til millioner av kroner. Idag regnes
			 3D-Printerne til under 30 000 kr som billige, disse har bare vært på markedet i 2-3 år.
			 I valget av printer er det lurt å være klar over hva slags printerteknologi modellen den bruker.
			 Dersom du f.eks. ønsker deg en printer til hjemmebruk, vil en FDM-maskin være et naturlig valg.
			 Det står for Fused Deposition Modeling, og denne typen maskiner er de klart billigste. Det finnes såklart også
			 nyere teknologier som gir både raskere og mer detaljert printing, men det tar tid før disse synker i pris. Les mer om ulike typer maskiner
			 nedenfor:
             </p>
		</div>
		<div class="infoText">
		<h2>Er du interessert i 3D-Printere?</h2>
	      <p> Med en 3D-Printer kan du skrive ut masse forskjellige
		     plastdingser hjemme i din egen stue. Det er til og med blitt printet ut fullt fungerende
			 våpen med enkle 3D-printere. Av andre ting kan også nevnes flytende metall, mikrobatteri og NASA
			 har faktisk skrevet ut rakettdeler. Printerne for hjemmebruk idag er foreløpig ganske enkle og
			 begrenser seg til å skrive ut ting i plast, vanligvis <a href="http://www.bitsfrombytes.com/content/3d-printing-materials">PLA og ABS</a>.
			 Likevel er det masser av ting du kan lage og potensielt er det penger å spare på å skaffe seg en 3D-Printer.
			 Lær mer om de ulike modellene nedenfor:</p>
		</div>

		<h2>Liten Modelloversikt:</h2>

		<div class="outer" id="first">
		  <div id="inner1">
		    <h3>Cube</h3>
			<img src="bilder/cube.jpg" alt="Printer nr1 - Cube" width="155" id="printer1">
			<p class="byline">Hentet fra <a href="http://www.3dprint.no/">3Dprint.no</a> </p>
		  </div>
		  <div>En FDM printer i øvre sjikt. Cube fra<div class="skjult" id="cubeText" hidden> Cubify
		  er en fin maskin for å komme igang med 3D-printing, da den er relativt billig og enkel i bruk.
		  Den kan printe i både ABS og PLA-materialer, og du kan velge mellom forskjellige farger (men bare en av gangen).
		  <br>Pris: Rundt 12 000 kr.</div></div>
		  <button class="buttonStyle" type="button" onclick="toggleTekst('#cubeText', '#knapp1');" aria-expanded="false" id="knapp1" tabindex="5">Les mer</button>
		</div>

		<div class="outer" id="second">
		  <div id="inner2">
		    <h3>BFB 3Dtouch</h3>
		    <img src="bilder/3dprinter_0.jpg" alt="Printer nr2 - 3Dtouch" width="155" id="printer2">
		    <p class="byline">Hentet fra <a href="http://www.3dprint.no/">3Dprint.no</a> </p>
		  </div>
		  <div>3Dtouch er en dyrere "billigprinter", <div class="skjult" id="bfbText" hidden>Den er basert
		  på samme teknologi som Cube, men er vesentlig større og mer avansert. Godt egnet for skole eller
		  bedriftsbruk.<br>Pris: Rundt 30 000 kr.
		  </div></div>
		  <button class="buttonStyle" type="button" onclick="toggleTekst('#bfbText','#knapp2');" aria-expanded="false" id="knapp2" tabindex="6">Les mer</button>
		</div>

		<div class="outer" id="third">
		  <div id="inner3">
		    <h3>RepRap</h3>
			<img src="bilder/reprap.jpg" alt="Printer nr3 - Reprap" width="155" height="130" id="printer3">
			<p class="byline">Hentet fra <a href="http://www.utra.ca/projects/reprap">utra.ca</a> </p>
		  </div>
		  <div>RepRap er i seg selv en ganske enkel<div class="skjult" id="repRapText" hidden> printer. Likevel
		  er den en av de mest spennende da den faktisk er kapabel til å printe ut sine egne deler.
		  Den bruker en versjon av FDM-teknologien.
		  Det hele er basert på et prosjekt av dr. Adrian Bowyer, les mer
		  om det <a href="http://reprap.org/wiki/RepRap">her</a>.</div></div>
		  <button class="buttonStyle" type="button" onclick="toggleTekst('#repRapText', '#knapp3');" aria-expanded="false" id="knapp3" tabindex="7">Les mer</button>
		</div>

		<div id="between"></div>

		<div class="outer" id="fourth">
		  <div id="inner4">
		    <h3>ProJet 660</h3>
			<img src="bilder/projet660.jpg" alt="Printer nr4 - Projet660" width="155" height="130" id="printer4">
			<p class="byline">Hentet fra <a href="http://www.3dprint.no/">3Dprint.no</a> </p>
		  </div>
		  <div>Dette er en "high end" maskin<div class="skjult" id="proJetText" hidden>fra 3Dsystems.
		  Den printer svært detaljert, og er basert på teknologien CJP (ColourJet Printing), som blant annet gjør at den kan printe
		  en modell i forskjellige farger. Brukes av mange større bedrifter i Norge idag, blant annet arkitektfirmaet Snøhetta.
		  <br>Pris: Fra 500 000 kr.</div></div>
		  <button class="buttonStyle" type="button" onclick="toggleTekst('#proJetText', '#knapp4');" aria-expanded="false" id="knapp4" tabindex="8">Les mer</button>
		</div>

		<div class="outer" id="fifth">
		  <div id="inner5">
		    <h3>Printrbot Simple</h3>
			<img src="bilder/pbsimple.png" alt="Printer nr5 - Printrbot" width="155" height="130" id="printer5">
			<p class="byline">Hentet fra <a href="http://printrbot.com/shop/assembled-printrbot-simple/">Printrbot.com</a> </p>
		  </div>
		  <div>En kjempebillig FDM-printer fra<div class="skjult" id="printrText" hidden> Printrbot, som har
		  spesialisert seg på billige 3D-printere. De har en nokså "rough" design, men hvis man synes printere
		  som Cube og lignende blir for dyre kan dette være et godt alternativ.
		  <br>Amerikansk pris: Rundt 2400 kr.</div></div>
		  <button class="buttonStyle" type="button" onclick="toggleTekst('#printrText', '#knapp5');" aria-expanded="false" id="knapp5" tabindex="9">Les mer</button>
		</div>

		<div class="outer" id="sixth">
		  <div id="inner6">
		    <h3>Form1</h3>
			<img src="bilder/form1.png" alt="Printer nr6 - Form1" width="155" height="130" id="printer6">
			<p class="byline">Hentet fra <a href="http://www.hardware.no/artikler/guide-slik-velger-du-riktig-3d-skriver/136356">Hardware.no</a> </p>
		  </div>
		  <div>Form1 bruker stereolitografi (SLA),<div class="skjult" id="form1Text" hidden>som
		  er en relatitvt ny printerteknologi på hjemmemarkedet. Denne gir svært detaljrike
          utskrifter, og er heller ikke så altfor dyr.
		  <br>Pris: Fra 20 000 kr + frakt + avgifter.</div></div>
		  <button class="buttonStyle" type="button" onclick="toggleTekst('#form1Text', '#knapp6');" aria-expanded="false" id="knapp6" tabindex="10">Les mer</button>
		</div>
		<div id="stop"></div>

		</section>
      </section>
