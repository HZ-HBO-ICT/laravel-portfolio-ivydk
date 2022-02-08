<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eerste feedback</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/id-logo-2.png">
</head>

<body>
    <header>
        <a href="/index.html"><img src="/img/id-logo-2.png" class="header-logo" alt="id-logo">IVY DEKKER</a>
    </header>
    <nav class="nav-bar">
        <ul>
            <li><a href="/index.html">Home</a></li>
            <li><a href="/profile.html">Profile</a></li>
            <li><a href="/dashboard.html">Dashboard</a></li>
            <li><a href="/faq.html">FAQ</a></li>
            <li><a href="/blog.html" class="active">Blog</a></li>
        </ul>
    </nav>
    <main>
        <article>

            <h2>Eerste feedback</h2>
            <p>Aan het einde van de eerste week gingen wij elkaars code bekijken en hier comentaar opgeven, hier kwam ik achter een aantal fouten/slordigheden die ik moest oplossen. Dit waren de punten waar ik op moest letten en nog moest verbetren. Hier
                heb ik ook nog een <a href="/docs/sept-feedbackCodeReview-reflectie.pdf" target="_blank">reflectie</a> over gemaakt.
            </p>

            <h3>Vergeten &lt...&gt weg te halen</h3>
            <p>Ik had een aantal keer dat er geen begin tag was maar wel een eind tag. Ik had een aantal keer in elk document dat ik een stukje code had verandert en alleen de begintag had verwijdert. Nadat wij samen naar mijn code hadden gekeken kwam ik
                hier achter. Hierna is de code nog door de HTMLHint gegaan en had ik alle onnodige eindtags verwijdert. Dit kan ik voorkomen door beter naar mijn code te kijken als ik een stukje klaar heb.
            </p>

            <h3>Linkfout</h3>
            <p>Ik bij alle links de target=”blank” gebruikt in plaats van de target=”_blank” dit zorgde ervoor dat mijn links naar dezelfde nieuwe pagina gingen, nu is dit opgelost en gaan ze allemaal naar een nieuwe pagina.
            </p>

            <h3>Netheid code</h3>
            <p>Ik had een aantal wit regels die onnodig waren en daarnaast had ik een aantal keer dat mijn &lt…&gt een extra tabje nodig hadden omdat ze nog niet goed stonden. Dit kan ik voorkomen door hier beter op te letten en bij elk stukje nieuwe code
                alles goed te zetten.
            </p>

            <h3>Opvullen</h3>
            <p>Op dit moment staan er alleen op de profielpagina foto’s. De rest van de foto’s staan al wel in een map en deze ga ik nog zeker toevoegen. Ook moet ik de pagina’s nog opvullen met tekst.
            </p>

            <h3>Blog</h3>
            <p>Op dit moment staat mijn blogpagina op één pagina en ik wil een blogpagina met verschillende losse blog pagina’s.
            </p>

            <h3>Footer</h3>
            <p>Op dit moment staat er in mijn footer het HZ logo , mijn volledige naam en mijn email die linkt naar mijn mail. Maar deze wil ik nog in het midden hebben zowel verticaal als horizontaal.
            </p>
        </article>
        <input type="button" value="Terug" onclick="history.back()" class="terug-knop">
    </main>

    <aside class="nav-bar">
        <ul>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf" target="_blank">Onderwijs-& examenregeling</a></li>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf" target="_blank">Uitvoeringsregeling</a></li>
            <li><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="blank">Teams</a></li>
            <li><a href="https://learn.hz.nl/my/" target="blank">HZ learn</a></li>
            <li><a href="https://portal.hz.nl/" target="blank">HZ portal</a></li>
            <li><a href="https://www.w3schools.com/" target="blank">W3 Schools</a></li>
            <li><a href="https://github.com/" target="blank">GitHub</a></li>
            <li><a href="https://outlook.office.com/mail/inbox" target="blank">E-mail</a></li>
        </ul>
    </aside>

    <footer class="footer-display">
        <a class="a-color" href="https://hz.nl/" target="blank"> <img src="/img/hz-logo.png" height="60px" alt="hz-logo"></a>
        <div class="link-footer">Ivy Dekker
            <a href="mailto:dekk0123@hz.nl"><br>dekk0123@hz.nl</a>
        </div>
    </footer>
</body>

</html>