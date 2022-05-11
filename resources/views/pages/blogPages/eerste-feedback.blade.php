@extends('layouts.masterLayout')

@section('title', 'Blog')

@section('content')
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
@endsection
