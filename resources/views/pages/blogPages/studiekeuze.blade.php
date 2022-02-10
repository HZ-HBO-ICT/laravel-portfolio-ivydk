@extends('layouts.masterLayout')

@section('title', 'Blog')

@section('content')
        <article>
            <h2>Studiekeuze</h2>
            <h3>Studiekeuzeactiviteiten</h3>

            <ul>
                <li>Studiekeuzetest</li>
                <li>HZ HBO-ICT
                    <ul>
                        <li>VO week</li>
                        <li>Meeloopdag</li>
                        <li>Experince day</li>
                    </ul>
                </li>
                <li>HZ Bouwkunde</li>
                <ul>
                    <li>Opendag</li>
                    <li>Meeloopdag</li>
                </ul>
                <li>BUas Games</li>
                <ul>
                    <li>Opendag</li>
                </ul>
                <li>Artvelde (BE) Grafische en Digitale Media</li>
                <ul>
                    <li>Opendag</li>
                </ul>
                <li>HKU Graphic design</li>
                <ul>
                    <li>toelatingsgesprek/rondleiding</li>
                </ul>

            </ul>

            <h3>Motivatie</h3>
            <p>In de vierde heb ik gekozen voor informatica. Ik kwam er toen achter dat ik dit heel leuk vond.
                Ik ben op dat moment gaan kijken naar studies in dit gebied en ben toen op HBO-ICT uitgekomen.
                Nadat ik deze studie had gevonden ben ik gaan kijken op de HZ voor HBO-ICT en ook ben ik naar
                Hogeschool Rotterdam gegaan om hier te kijken naar HBO Informatica. Nadat ik beide scholen had gezien
                sprak de HZ mij het meeste aan. </p>
            <p> ICT is de juiste studie voor mij omdat ik het leuk vind om nieuwe dingen te leren en uit te zoeken hoe
                alles werkt.
                De studieroute Software Engineer lijkt mij op dit moment het leukst omdat ik het technische aspect leuk
                vind.
            </p>

            <h3>Na mijn opleiding</h3>
            <p>
                aspect leuk vind. Over vier jaar hoop ik alles te hebben geleerd wat ik nodig heb om in
                een (klein) team te gaan werken aan projecten.
            </p>

        </article>

        <input type="button" value="Terug" onclick="history.back()" class="terug-knop">
@endsection
