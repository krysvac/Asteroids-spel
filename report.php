<?php
$title = "Redovisningar";
require "include/header.php";
?>
<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <h1 class="text-header">Redovisningar</h1>
                <hr>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom01">Kmom01 &gt;</a>
                            </h4>
                        </div>

                        <div id="kmom01" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Allmänt</h3>
                                <p>Kursens start var ganska lugn, vilket är skönt. Jag använder min egna hemmagjorda lösning för att strukturera kod osv. Den är ganska simpel.</p>
                                
                                <p>När jag gjorde min sida så skippade jag de mesta av länkarna i footern eftersom det vart så många, jag behöll dock validatorerna.</p>
                                
                                <p>Min mall som jag gjorde var inte som mos gjorde i sin guide. 
                                    Jag förstog knappt poängen med en mall alls, men min mall är bara en tom sida som annars är identisk till alla andra sidor.</p>

                                <h3>Vilken utvecklingsmiljö använder du?</h3>
                                <p>Jag har PHP 5.6 med WAMP. Texteditor är Sublime Text 2.</p>
                                
                                <h3>Hur väl känner du till JavaScript?</h3>
                                <p>Jag har inte enorm erfarenhet med JavaScript, men jag har använt det tidigare till ett par sidor. 
                                    Det mesta jag gjort är egna modals och AJAX-Lösningar för olika sidor samt små lösningar för ännu mindre problem.</p>

                                <h3>Vilken uppfattning har du av JavaScript så här långt?</h3>
                                <p>Jag tycker JavaScript är bra, man kan göra många olika coola saker med språket. Speciellt om man använder t.ex. JQuery samtidigt.</p>
                                
                                <h3>Berätta vilka exempelprogram du gjorde och länka till dem.</h3>
                                <p>Jag gjorde de program man skulle göra: Ändra storlek, Baddie move, och en showcase. 
                                Jag la till så att storleken på div:en i Ändra storlek uppdateras automatiskt när man ändrar värdet. Det vart snyggare så.</p>
                                <p>Länkarna till mina program finns <a href="http://www.student.bth.se/~jodu15/dbwebb-kurser/javascript/me/kmom01/playground.php">här</a>, kolla under fliken <strong>"Kmom01"</strong></p>

                                <h3>Beskriv hur du gjort din baddie och vilka konster den kan.</h3>
                                <p>När jag gjorde min baddie kollade jag först på hur andra hade gjort sina lösningar, och sedan mos. 
                                    Efter det gjorde jag en egen lösning som fungerar bra och jag lärde mig mer eftersom jag inte skrev av allt från mos artikel.</p>
                                <p>Min showcase är likadan som i artikeln från mos.</p>
                                
                                <h3>Gjorde du extrauppgiften och utbildade din baddie med något extra?</h3>
                                <p>Nej.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom02">Kmom02 &gt;</a>
                            </h4>
                        </div>
                        
                        <div id="kmom02" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Vilka funktioner har du lagt till i din variant av mos.js?</h3>
                                <p>Jag la till en funktion som slumpar fram ett tal mellan min och max. Detta eftersom det redan förekommit tidigare och kommer säkert komma upp senare igen. 
                                    Jag har dock en annan fil benämnd <strong>"modal.js"</strong> som innehåller kod som tillsammans med jquery kan skapa en popup med valfri info. Den är speciellt användbar vid ajax. 
                                    Jag använder den dock till regex-delen.</p>
                                
                                <h3>Gjorde du något extra arbete på spelplanen med Boulder Dash, eller gjorde du kanske en egen spelvariant?</h3>
                                <p>Jag la till mitt egna utseende på spelplanen, jag gjorde också som en annan gjort och gav de olika typerna av tiles random-bilder. Så att spelplanen blir lite mer unik.</p>
                                <p>Det tog ett litet tag att förstå hur spelet fungerade, speciellt när min text på sidan låg i samma div som spelet och förstörde på så sätt placeringen av spelplanen och baddien. 
                                    Jag stoppade också sidan från att scrolla med piltangenter eftersom det störde mig väldigt mycket.</p>
                                <p>Spelet är inte responsivt, som resten av sidan. Dock så omfångas spelet av en scrollbar ruta om rutan spelet ligger i blir mindre än spelet själv.</p>
                                
                                <h3>Gjorde du något extra på Roulettespelet?</h3>
                                <p>Jag ändrade stylen lite bara.</p>

                                <h3>Allmänt</h3>
                                <p>Det här kursmomentet var jobbigt. Men inte svårighetsmässigt, utan tidsmässigt. Det var väldigt många saker man skulle göra, och i slutändan kopierade jag en hel del från mos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom03">Kmom03 &gt;</a>
                            </h4>
                        </div>
                        
                        <div id="kmom03" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Vad tycker du om jQuery, hur känns det?</h3>
                                <p>
                                    Jag tycker jQuery är en jättebra plugin. Det finns mängder med olika funktioner som gör att man kan dels göra en sida vädligt bra, men också att man kan använda så många andra 3e parts-plugins som använder jQuery.
                                    Och med dem så kan man göra ännu fler saker.
                                </p>
                                <p>Jag har använt jQuery tidigare och kommer definitivt att fortsätta använda det.</p>
                                
                                <h3>Vilka är dina erfarenheter av jQuery inför detta kursmoment?</h3>
                                <p>På i stort sett alla mina sidor som jag har gjort har jag haft jQuery, antingen för att uppnå vissa funktioner, eller för att vissa plugins skulle funka. 
                                    T.ex. bootstrap och plugins därtill, utan jQuery skulle många av mina tidigare sidor sakna många av sina funktioner.</p>

                                <h3>Berätta om din plugin.</h3>
                                <p>Min plugin, slider, är -- som namnet kanske avslöjar -- en plugin för enkla bildspel. 
                                    Syftet är att användaren gör en enkel mall och fyller på med bilder, därefter laddar min plugin in alla bilder och bläddrar mellan de med en satt delay som kan ändras vid initiering av pluginen.
                                    Vid varje intervall så fadear programmet mellan bilder, jag har lagt till funktioner för att pausa och starta vilket gör att man inte behöver ha automatisk bläddring om man inte vill det.</p>
                                    <p>Min plugin finns att hitta under fliken lekplats, eller <a href="http://www.student.bth.se/~jodu15/dbwebb-kurser/javascript/me/kmom03/kmom03_plugin.php">här</a></p>

                                <h3>Allmänt.</h3>
                                <p>Det här kursmomentet var någorlunda enkelt, jag har inte skrivit särskilt många plugins, och ännu mindre till jQuery. Men det löste sig. Jag skippade mos guider och gjorde på egen hand istället.</p>
                                <p>Något som stör mig dock är att validatorn klagar på typ allt, men problemen den ger är felaktiga. T.ex. att en sak inte används osv. Utöver det funkade allt som det skulle och jag gillade kursmomentet.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom04">Kmom04 &gt;</a>
                            </h4>
                        </div>
                        
                        <div id="kmom04" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Vad tycker du om Ajax, hur känns det att jobba med?</h3>
                                <p>Jag tycker att Ajax är jättebra, har jobbat en hel del med det tidigare och enligt mig blir upplevelsen på en sida väldigt mycket bättre med Ajax. 
                                    Eftersom sidan inte laddas om så behöver man inte skriva om informationen i ett formulär t.ex. och det är något jag gillar speciellt mycket.</p>

                                <h3>Vilka är dina erfarenheter av Ajax inför detta kursmoment?</h3>
                                <p>Mina erfarenheter med Ajax innan detta är ganska stora. Jag har gjort diverse sidor och projekt med Ajax tätt integrerad i sidorna. 
                                    Jag har haft det till att skicka och få tillbaka information, lägga till och ta bort saker från tabeller osv... Ajax är väldigt användbart och jag kommer bara att använda det mer och mer.</p>

                                <h3>Berätta om din webbshop på din me-sida, hur gjorde du?</h3>
                                <p>Jag kollade på hur mos hade gjort för att se validering på kortnummer osv. Efter det gjorde jag allt på egen hand då jag gjort liknande saker tidigare och detta inte var särskilt avancerat.
                                    Feedbacken kommer i form av en modal som jag skrivit med jQuery och javascript en tid tillbaka. När all information är korrekt får man reda på det och sidan laddas om.</p>
                                <p>Jag fyllde i ett accepterbart kortnummer i förväg så man slipper tänka på det när man testar om allt funkar. Webbshoppen och utcheckning mm. finns på lekplats under kmom04 eller <a href="http://www.student.bth.se/~jodu15/dbwebb-kurser/javascript/me/kmom04/kmom04_ajax.php">här</a></p>

                                <h3>Lyckades du göra extra-uppgiften och paketera din kod?</h3>
                                <p>Jag gjorde den inte.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom05">Kmom05 &gt;</a>
                            </h4>
                        </div>
                        
                        <div id="kmom05" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Vilka möjligheter ser du med HTML5 Canvas?</h3>
                                <p>Med HTML5 Canvas finns det en hel del möjligheter. Man kan göra en hel del olika spel och liknande.</p>

                                <h3>Hur avancerat gjorde du din spelfysik (om du överhuvudtaget har någon i ditt spel)?</h3>
                                <p>Min spelfysik har accelerering samt att du bromsas när du inte aktivt ger fart. Det skapas block runtomkring dig som rör sig hit och dit. Med varierande storlek och hastighet. Du kan också skjuta blocken för att få dem att försvinna och då skapas ett nytt block på en annan plats. Det skapas utöver det också ett block per sekund vilket innebär att det blir svårare med tiden också.</p>

                                <h3>Beskriv och berätta om ditt spel. Förklara hur du använder objekt och prototyper.</h3>
                                <p>Mitt spel är ett asteroids-spel. Hur spelet funkar är beskrivet ovan. Jag använder prototyper för blocken, spelaren, och skotten som skjuts. Jag skapar 20 block som åker runt och sätter spelaren i mitten. När spelaren åker in i ett block förlorar den men när den skjuter ett block tas blocket bort, skotten som skjuts skapas från en prototyp och tas bort när de är utanför canvasen.</p>

                                <h3>Gjorde du något på extrauppgiften?</h3>
                                <p>Nej.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom06">Kmom06 &gt;</a>
                            </h4>
                        </div>
                        
                        <div id="kmom06" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <h3>Vilka möjligheter ser du med HTML5 Websockets?</h3>
                                <p>Med Websockets kan man ju göra typ allt, gränsen sätts ju vid en själv. Man kan t.ex. göra chattservrar som vi gjort eller spel som utnyttjar det för att göra live-spel osv. Definitivt något jag skulle kunna tänkas använda i framtiden till olika projekt.</p>

                                <h3>Vad tycker du om Node.js och hur känns det att programmera i det?</h3>
                                <p>Jag tycket att Node är jättebra, det är väldigt smidigt att programmera i och eftersom det är någorlunda modernt finns det en hel drös med plugins till Node också, vilket hjälper till. Att det krävdes så få saker för en fungerande simpel chattserver hade jag ingen aning om.</p>

                                <h3>Beskriv hur du löste echo-servern och broadcast-servern.</h3>    
                                <p>På både echo- och broadcast-servern följde jag först mos-exempel och sen kollade jag på hur andra hade gjort, i slutändan är dock den mesta koden från mos exempel.</p>

                                <h3>Beskriv och berätta om din chatt. Förklara hur du byggde din chatt-server och förklara protokollet.</h3>
                                <p>Jag gjorde chatt-servern med broadcast-servern i åtanke, eftersom deras koncept inte är särskilt annorlunda. När man skriver ett meddelande får alla anslutna användare det skickat till sig. Meddelandet skickas som ett JSON-objekt där meddelandet och användarnamnet finns med. Det finns en array av alla användare som används för att hålla koll på vilka som är anslutna så servern kan skicka ut alla meddelanden i en loop till de som ska få ett. Porten som jag använder är 8169</p>
                                <p>Källkoden till min chattserver <a href="http://www.student.bth.se/~jodu15/dbwebb-kurser/javascript/me/kmom06/js/kmom06_chatserver.js">här</a></p>

                                <h3>Gjorde du något på extrauppgiften?</h3>
                                <p>Nej.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="text-subheader" data-parent="#accordion" href="#kmom0710">Kmom07/10 &gt;</a>
                            </h4>
                        </div>
                        
                        <div id="kmom0710" class="panel-collapse collapse">
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
$CURRENTFILE = basename($_SERVER['PHP_SELF']);

$scripts_include = array();
$scripts_include[] = "openCloseDiv.js";
require "include/footer.php";
?>