<?php
require_once 'src/functions.php';
require_once 'view/header.php';

?>
<h1>Kmom01</h1>
<h3>Är du sedan tidigare bekant med Unix, Linux, Debian och/eller terminalen?</h3>
<p>Jag är inte jätte bekant med Linux, jag har jobbat lite med olika raspberry pi projekt förut men det är inte så mycket. Jag har aldrig jobbat så mycket med själva oprativsystemet utan har bara instalerat det för att få pi:en att köra programet jag vill.</p>

<h3>Hur känns det med Unix-kommandon på terminalen, är det udda eller bekvämt?</h3>
<p>Dom flesta av komandona känner jag igen sedan tidigare, men jag känner att jag borde bli lite bättre på att använda terminalen då många av basic kommandosen inte riktigt sitter i huvudet. Utan att jag ofta istället kan skapa filen eller mappen  i utforskaren istället för att bara skriva komandot då man sitter i terminalen.<p>

<h3>Valde du att köra standard med VirtualBox och Debian eller hur gjorde du?</h3>
<p>Jag har nu valt att köra VirtualBox , jag har en extra raspberry pi som jag tänkt prova använda lite granna med men saknar för tillfället ett extra minnes kort till den.<p>

<h3>Hur kändes det att jobba med VirtualBox och ser du fördelar med det arbetssättet?</h3>
<p>Det känns som det kan vara ett smidigt , sen kan jag tänka mig att det är en bra test miljö. Även det att det var enklent att göra snapshots av systemet för att  gå tillbaka till tidigare verisoner.<p>


<h3>Hur gick det att installera Guest Additions?</h3>
<p>För mig gick den här delen av kursmomentet problem fritt och väldigt fort.<p>

<h3>Var det något som krånglade eller tog extra mycket tid?</h3>
<p>Jag tror inte jag hade några större problem då det här kändes som ett väldigt kort och snabbt kursmoment. Jag har tänkt prova instalera allt på min pi då jag skaffar ett till större sd kort till den. <p>

<h1>Kmom02</h1>

<h3>Hur känns konceptet med Apache name-based Virtual Hosts? Känner du igen det sedan tidigare?</h3>

<p>Jag tycker konceptet känns bra men jag hade lite problem att få till så jag kunde använda ett host namn på den lokala datorn och inte bara på den virtuella. 
    Då jag först bara hade ändrat host filen i den virtuella Linux datorn. Senare forstod jag att jag även vart tvungen att ändra host filen i Windows datorn. 
    Ett annat problem jag hade då jag skulle lägga upp sidan på den virtuella maskinen var att jag gjorde mina "vhosts" mappar då jag var inloggad som sudo istället för som "joakim" vilket gjorde att mapparna låg på fel ställen och apache kunde inte starta.<p>




<h3>Det blir allt fler kommandon i terminalen, hur känns det med terminalen och dess kommandon?</h3>

<p>Jag tycker att det börjar kännas mycket mer användbart och lättsamt att använda terminalen nu då man börja lära sig lite mer av vad och hur man kan göra saker.<p>




<h3>Gick det bra med ssh-nycklar och rsync över ssh?</h3>
<p>Ssh nycklarna gick utan problem helt utan problem då jag har använt det tidigare. Rsync gick även det bra ända problemet var det jag skrivit lite tidigare att jag inte fick till host-namnen i början.<p>


<h3>Hur kändes det att jobba med tmux?</h3>
<p>När jag väl fick till det så kändes det otroligt smidigt att kunna ha flera terminalrutor brevid varandra hela tiden, då man kan vara och jobba på flera ställen samtidigt. 
    Jag hade problem med att få till tmux då när jag installerade tmux så valde mitt antivirus program att ta bort vissa filer från min terminal. Jag vart då tvungen att ominstalera cygwin samt ta bort tmux paketet för att kunna installera hem det igen.<p>




<h3>Reflektera över hur du känner inför Unix som operativsystem så här långt?</h3>
<p>Jag tycker för det mesta det gått bra och att det är intressant då jag inte använt det så mycket förut. Jag har dock haft en del problem med min VM då den efter varje gång jag startat om min riktiga dator och  sedan startar linux i den virtuella så fick jag ingen bild. 
    Det fungerade då jag återställde från min snapshot men vart samma sak igen nästa gång då jag startade om datorn. Jag ominstallerade sedan debian och valde xfce istället för gnome som mitt GUI och nu verkar det fungera.<p>




<p>Labbarna tycker jag som alltid är väldigt roliga och jobba med men vet inte riktigt hur sista uppgiften vart. Den säger att jag gjort rätt och jag kollade på tipset för att veta hur jag skulle söka för att få fram rätt filer. 
    Jag har nu skrivit att den ska söka efter "apache2/mods-available/*ssl.conf" men som jag uppfattar uppgiften så ska jag söka efter

"apache2/mods-available/*ssl*.conf" jag vet inte riktigt om det är något jag missat eller om det ska vara så. <p>

<h1>Kmom03</h1>
    
<h3>Är detta din första bekantskap med skriptprogrammering i Bash?</h3>

<p>Det här är första gången jag skriver scrit i bash, det ända jag gjort i Bash tidigare kommandona vi använt i denna kursen och tidigare kurser ifrån skolan. 

Det är alltid roligt att prova på nya grejer. </p>

 

<h3>Berätta om din uppfattning om Bash som programmeringsmiljö, relatera till andra programspråk du kan.</h3>

<p>Det jag tycker det var lite speciellt att koda i Bash men det gick ganska bra att komma in i det. 
Jag tycker mest det liknar python och PHP python i avsaknaden av ; på dom flesta ställerna och PHP i hur man gör funktionerna. 
Men samtidigt tycker jag det var ganskla mycket som var specielt i bash blandannat “case - - esac” och “do - - done”. </p>

 

<h3>Vilka möjligheter/utmaningar ser du med denna typen av skriptprogrammering? <h3>

<p>Jag kan tänka mig att det finns stora möjligheter i att automatisera olika saker.</p>

 

<h3>Var det något som var extra svårt eller utmanande i uppgifterna? </h3>

<p>Det här kursmomentet gick relativt smärtfritt för mig, jag tycker som alltid labbarna är väldigt roliga att hålla på med. 
    Det vart en del googlande om options för kommandona osv då jag gjorde den. 
    Annars var det bara då jag skulle göra docker imagen jag hade lite problem med hur jag skulle skriva i min Dockerfile. 
    Problemet jag hade var att jag inte hade en “apt-get install update”  innan jag installerade min cal funktion. <p>

 

<h3>Har du arbetat med Docker innan? </h3>

<p>Docker är inget jag arbetat med innan men jag har hört om det en del. 
    Jag läste lite om det då jag la upp min homeassistant server hemma för att sköta automationer hemma men det vart inte att jag la den i en docker container. </p>

 

<h3>Anser du att det är någon fördel/nackdel med Docker om du jämför med VirtualBox? </h3>

<p>En stor fördel med docker är att den är att den tar mindre resurser. 

För mig känns docker som en mycket bättre lösning med den lilla kunskapen jag har kring ämnet hittills. </p>

<?php
require_once 'view/footer.php';