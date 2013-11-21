
            <div id="forsideDiv">
                <h1 id="velkommenh1">Velkommen</h1>
                <h1 id="tilh1">til</h1>
                <h1 id="printh1">3d-print!</h1>
                <div id="forsideMargin">
            <img  class="forside" src="bilder/forside.png" alt="Bildet av 3d-printer"><img class="forside" src="bilder/forside2.png" alt="Bildet av 3d-printer">
            
                </div>
            </div>
	<section class="top">
            <p class="velkommen">...den offisielle informasjonssiden for <span class="black">3D-printing.</span>
                           <br/><br/>Denne siden vil kunne bidra med <span class="black">spørsmål og svar</span>, gi deg som bruker noen ideer til designer du kan printe ut,
			   og forklare hvordan 3D-printeren fungerer.
	
	<section>
		<h1 id="historie">Historie</h1>
		<h3>Begynnelsen</h3>
		<p>3D-printing kan bli sporet tilbake til 1976, �ret da inkjet-printeren ble oppfunnet. I 1984 hadde utvikling med
		   inkjet-konseptet f�rt til at printing-teknologien med blekk utviklet seg til printing-teknologien med materialer.
		   Denne teknologien kalles stereolitografi, og ble oppfunnet av Charles Hull, som siden skulle v�re med p� � grunnlegge
		   selskapet 3D Systems. Stereolitografi tillater at man kan skape et tredimensjonalt objekt fra digitale data. Allerede da
		   forsto man at dette kunne brukes til � teste design f�r man investerte i produksjon i storstilt skala.</p>
		<p>I 1992 ble den f�rste SLA(StereoLitografiske Apparatus)-maskinen skapt. I denne maskinens prosess blir fotopolymer
		   solide ved bruk av UV-laser. Dette gj�r at tredimensjonale deler kan lages lag p� lag. Selv om metoden ikke er perfekt,
		   gj�r dette at sv�rt kompliserte deler kan lages p� mye kortere tid.
		   Det f�rste modifiserte organet ble implantert i en pasient i 1999. En mann f�r en silikonisert urinbl�re ved bruk av
		   en 3D-syntetisert stillas dusjet i pasientens egne celler. Dette �pner for nye metoder � modifisere og lage nye organer p�,
		   inkludert � 3D-printe dem. Siden de blir laget med celler fra pasientene, er det s� � si ingen risk for avvisnig fra kroppen.</p>
		   <button class="buttonStyle" id="readmore">Les mer</button>
	</section>
	<section id="merTekst">
		<h3>I nyere tid</h3>
		<p>I 2002 klarte forskere � lage en fullt funksjonerende nyre i et dyr. Dette ledet til forskning p� regenererende medisin, som
		   har som m�l � kunne "printe" organer og vev med 3D-printing. Dr. Adrian Bowyer grunnlegger RepRap i 2005 for � kunne lage
		   en 3D-printer som lager de fleste av sine egne komponenter. Ideen er at alle skal kunne ha en 3D-printer for � kunne lage sine
		   egne produkter p� egen h�nd. Den f�rste SLS(Selektiv LaserSintring)-maskinen blir satt i bruk i 2006. Den bruker en laser for � koble
		   materialer til 3D-produkter. Dette gjennombruddet f�rer til massetilpasning og foresp�rselsproduksjon av industrideler, og siden,
		   proteser.</p>
		<p>Det samme �ret lager firmaet Objet en maskin som klarer � 3D-printe i flere forskjellige materialer, inkludert polymer og
		   elastomer. Den nye teknologien gj�r at deler kan lages med forskjellige tettheter og materialer. 2008 blir et stort �r for 3D-printing,
		   da en rekke nyvinninger kommer til: RepRap lager Darwin, en 3D-printer som klarer � replikere seg selv. Shapeways skaper et
		   nytt fellesskap for kunstnere, arkitekter og designere som �nsker � gj�re deres 3D-verk til fysiske objekter p� en billig m�te.
		   Og den f�rste fungerende, fullstendig 3D-printede protesen blir tatt i bruk.</p>
		<p>I 2009 blir den f�rste blodcellen 3D-printet, og selvbyggingspakker med 3D-printere blir lagt ut for salg.</p>
		<p>S�, i 2011 kommer en rekke gjennombrudd. Det f�rste 3D-printede robotflyet, bilen og gull- og s�lvprodukter blir lagd. Det nyeste
		   gjennombruddet kom med implanteringen av den f�rste 3D-printede kunstige kjeven i 2012.</p>
	</section>
            </section>
	<script>
		$(document).ready(function(){
		$('#merTekst').hide();
		$('#readmore').click(function(){
		$('#merTekst').toggle(400);
                $(this).text($(this).text() === 'Les mindre..' ? 'Les mer..' : 'Les mindre..');
		});
		});
                
                
	</script>
