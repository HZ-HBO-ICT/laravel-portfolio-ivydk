<?php

namespace Database\Seeders;

use App\Models\Article;
use Database\Factories\ArticleFactory;
use Faker\Provider\Text;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: can i add some formatting to the articles?
        $articles = DB::table('articles');

        $articles->insert([
           'title' => 'Feedback pitch september 2021',
            'excerpt' => 'Nadat ik mijn pitch voor de eerste keer heb gedaan, heb ik een ToDo gemaakt en alle feedback
            op een rijtje gezet. Dit heb ik allemaal netjes in één document gestopt. Ook heb ik een reflectie gemaakt
            over deze feedback.',
            'body' => 'TODO:
            Ik kwam erachter dat er nog een aantal punten waren die ik wilde veranderen:
            Ik wil mezelf beter voorbereiden voor de pitch. Op het moment dat ik mijn pitch had wist ik niet helemaal
            wat ik moest doen, hierdoor leek het alsof ik mezelf niet goed genoeg had voorbereid.
            Mijn CSS document netjes maken.
            Een aantal bedrijven zoeken die mij interesseren en deze ook toevoegen aan mijn blog.
            Kijken of ik in mijn CSS document nog meer “onnodige” classes heb aangemaakt, deze verwijderen en de stijl
            ergens anders zetten waar het makkelijker te vinden is.
            De feedback van de pitch toevoegen aan mijn blog.
            Korte reflectie
            Op dit moment kijk ik vrij positief naar mijn eindproduct. Zeker nadat ik alle feedback heb gekregen en heb
            aangepast wat nodig was. Als ik kijk naar mijn proces heb ik tussendoor ook veel aan mijn klasgenoten
            gevraagd, dit was vooral als ik mijn eigen fout niet kon vinden of als ik even niet wist welke kleur ik
            moest gebruiken. Maar zei hebben ook dingen aan mij gevraagd waardoor ik ook weer oplossingen vond voor mijn
            eigen werk.
            Wat ik zeker mee neem naar het volgende project is de code formatter omdat dit de code veel netter maakt en
            je ziet zo ook veel sneller je eigen fouten. Ook weet ik nu dat een aantal zaken onnodig zijn en dat je ze
            ook simpeler kan oplossen. Maar mijn belangrijkste punt is het tussendoor feedback vragen, hierdoor vind je
            sneller de fouten die je hebt gemaakt.',
        ]);

        $articles->insert([
            'title' => 'Interessante bedrijven',
            'excerpt' => 'Na mijn pitch kreeg ik als opmerking dat ik eens een aantal bedrijven moest gaan zoeken waar
            ik mezelf zou zien werken. ',
            'body' => 'Dit heb ik gedaan en ik kwam al snel uit op ictergezocht.nl hier staan vacatures op het gebied
            van ICT. Ik heb uit de lijst voor software developer drie vacatures gekozen die mij aanspreken. Vacatures
            die ik interessant vind: Weave, BOLD Company & Evoke.
            conclusie: Als ik kijk naar de gelijkenissen van deze vacatures en bedrijven wil ik later in een graag in
            een bedrijfswerken die zich richt op teamverband. Samen aan een applicatie werken lijkt mij veel leuker dan
            alleen in
            een ruimte aan je project werken. Wat ik ook terug zie komen bij deze bedrijven is dat ze veel werken aan
            teamverband door samen te lunchen en uitjes te organiseren binnen het bedrijf. Een ander voordeel bij deze
            bedrijven vind ik de doorgroeimogelijkheden. De meeste bedrijven die ik heb bekeken hebben ook een
            persoonlijk ontwikkelbudget of iets in deze richting om je skills uit te breiden. Als laatste vind ik het
            leuk dat een bedrijf zich niet richt op een soort klant/project maar dat er afwisseling is in het werk wat
            je doet. Het leukste bedrijf uit mijn top 3 vind ik Weave, vooral omdat dit een iets kleiner/jonger bedrijf
            is.

',
        ]);

        $articles->insert([
            'title' => 'Bedrijvensafari',
            'excerpt' => 'In het begin van dit schooljaar hebben wij een bedrijvensafari gehad.',
            'body' => 'Guerrilla
            Het bedrijf is een AAA-studio die games ontwikkeld. De bekendste game die het bedrijf heeft ontwikkeld is
            “horizon Zero Dawn”.
            Bedrijfsrollen
            Programmeur, auteur, animator, producent.
            Technologieën
            Python scripting , Maya MotionBuilder , key - framed animation , C ++ , 3D and graphics - related algorithms
             , Maya API , Maya API , 3D packages , node - based shader building tools ( Unreal , Maya hypershade , etc.
             ). Houdini , Popcorn FX , simulation software ( Houdini , Embergen , FumeFX , Realflow , etc. ) Cascade ,
             etc. , Java server development experience , web - related technologie ( eg . HTTP , REST , Message Queuing
             ). Git , Perforce , Zbrush Photoshop , Substance en industry standard game editors.
            Voor en tegen
            Het leukste in de gamewereld lijkt mij dat je aan het einde met zijn alle de game ook daadwerkelijk kan
            spelen. Het nadeel lijkt mij dat je soms in een groot team werkt en allemaal op elkaar moet wachten, aan
            de andere kant kan dit een voordeel zijn omdat je elkaar kan controleren.
            Syntess Sofware
            Zij maken voor hun klanten logistieke-, mobiele- en administratieve ERP-software.
            Bedrijfsrollen
            Product manager customer service, support medewerker, financial controller, software developer team web
            apps, front-end developer
            Technologieën
            Ze werken met een ERP software. ERP staat voor Enterprise Resource Planning.
            Voor en tegen
            Mij lijkt dit minder leuk omdat je veel dezelfde dingen moet doen. Wel moet je altijd je programma’s
            verbeteren en leer je veel over hetzelfde onderwerp en word je hier dus steeds beter in.
            Damen Naval Technologies
            Zij zijn de marine scheepsbouw divisie van Damen Shipyards Group.
            Bedrijfsrollen
            Design & proposal, engineering, legal & finance, General, human resources & management IT & IM, marketing
            & sales, production, project management, repair & sevice, research & development, supply chain.
            Technologieën
            In de IT & IM heb je nodig: ervaring met designing (embedded) software; kennis van de werking van embedded
            software systems; kennis van agile development methodologies, like Scrum or XP; Knowledge of Linux,
            scripting and IP-networking (pre).
            Voor en tegen
            Een nadeel om hier te werken lijkt mij alle beveiliging en dat je thuis niet in alle details kan vertellen
            wat je hebt gedaan op je werk. Wel vond ik het leuk dat ze alles in virtual reality maken voordat ze het
             schip gaan bouwen. Ook zijn er veel verschillende richtingen die je op kan gaan in het bedrijf zelf dit
             vind ik ook een voordeel.
            Cisco
            Netwerkbedrijf met routers en netwerkapparatuur van bedrijven.
            Bedrijfsrollen
            Hardware, Software, Network, Pre-sales and product management, Customer support and engineering, Solutions
            architecture, Services consulting, Sales - product, Services, solutions, and customer succes, Business
            development, Marketing and communications, Human resources, Finance, Legal, Business strategy and operations
            , Supply chain, Information technology, Project and program management
            Technologieën
            JavaScript, TCL, C, C++, XMPP
            Voor en tegen
            Een voordeel is dat je hier als software engineer kan werken en dit lijkt mij leuk. Ook hier werken zij aan
            veel verschillende dingen en kan je alle kanten op binnen het bedrijf.
            Macaw
            Zij zijn een unieke combinatie van een systeemintegrator en een digitaal bureau.
            Bedrijfsrollen
            Financieel administratief medewerker, recruitment marketeer, solution consultants, security & Azure,
            business analist, digital marketing analist, power platform consultant
            Technologieën
            Exel, Unit4, CRO-traject, Sitecore, CMS, Microsoft Dynamics 365 CE (of CRM), SharePoint, Dataverse, VBA,
            Microsoft Acces, Power Platforms.
            Voor en tegen
            Bedrijfsstructuur lijkt mij fijn omdat je in dit bedrijf veel blijft leren. Zij zoeken vooral mensen met
            (net) genoeg ervaring en veel voorkennis en gaan er vanuit dat je dit uit wilt breiden. Dit is voor mij fijn
             omdat ik best leergierig kan zijn.',
        ]);

        $articles->insert([
            'title' => 'Studie keuze',
            'excerpt' => 'Mijn motivatie voor deze opleiding',
            'body' => 'Studiekeuze
            Studiekeuzeactiviteiten
            Studiekeuzetest
            HZ HBO-ICT
            VO week
            Meeloopdag
            Experince day
            HZ Bouwkunde
            Opendag
            Meeloopdag
            BUas Games
            Opendag
            Artvelde (BE) Grafische en Digitale Media
            Opendag
            HKU Graphic design
            toelatingsgesprek/rondleiding
            Motivatie
            In de vierde heb ik gekozen voor informatica. Ik kwam er toen achter dat ik dit heel leuk vond. Ik ben op
            dat moment gaan kijken naar studies in dit gebied en ben toen op HBO-ICT uitgekomen. Nadat ik deze studie
            had gevonden ben ik gaan kijken op de HZ voor HBO-ICT en ook ben ik naar Hogeschool Rotterdam gegaan om hier
             te kijken naar HBO Informatica. Nadat ik beide scholen had gezien sprak de HZ mij het meeste aan.

            ICT is de juiste studie voor mij omdat ik het leuk vind om nieuwe dingen te leren en uit te zoeken hoe alles
             werkt. De studieroute Software Engineer lijkt mij op dit moment het leukst omdat ik het technische aspect
             leuk vind.

            Na mijn opleiding
            aspect leuk vind. Over vier jaar hoop ik alles te hebben geleerd wat ik nodig heb om in een (klein) team te
             gaan werken aan projecten.',
        ]);

        $articles->insert([
            'title' => 'SWOT analyse',
            'excerpt' => 'De sterkte-zwakteanalyse is een bedrijfskundig model dat intern de sterktes en zwaktes en in
            de omgeving de kansen en bedreigingen analyseert.',
            'body' => 'Strenghts:
            Creatief
            Samenwerken
            Doorzetter

            Weaknesses:
            Chaotisch
            Eigenwijs

            Opportunities:
            atieve oplossingen bedenken
            Goed is teams werken
            Doorzetten als het even vast loopt

            Threats:
            Soms is mijn idee lastig uit te leggen
            Graag eerst zelf iets proberen',
        ]);

        $articles->insert([
            'title' => 'Programmeerervaring',
            'excerpt' => 'Mijn programmeerervaring',
            'body' => 'Op de middelbare heb ik in jaar vier en vijf informatica gehad, hier heb ik basis van een aantal
            programmeertalen geleerd. Hier hebben wij aandacht besteed aan HTML, CSS, Python turtle, SQL en PHP.',
        ]);

        $articles->insert([
            'title' => 'Eerste feedback',
            'excerpt' => 'Aan het einde van de eerste week gingen wij elkaars code bekijken en hier comentaar opgeven,
            hier kwam ik achter een aantal fouten/slordigheden die ik moest oplossen. Dit waren de punten waar ik op
            moest letten en nog moest verbeteren. Hier heb ik ook nog een reflectie over gemaakt.',
            'body' => 'Vergeten <...> weg te halen
            Ik had een aantal keer dat er geen begin tag was maar wel een eind tag. Ik had een aantal keer in elk
            document dat ik een stukje code had verandert en alleen de begintag had verwijdert. Nadat wij samen naar
            mijn code hadden gekeken kwam ik hier achter. Hierna is de code nog door de HTMLHint gegaan en had ik alle
            onnodige eindtags verwijdert. Dit kan ik voorkomen door beter naar mijn code te kijken als ik een stukje
            klaar heb.

            Linkfout
            Ik bij alle links de target=”blank” gebruikt in plaats van de target=”_blank” dit zorgde ervoor dat mijn
            links naar dezelfde nieuwe pagina gingen, nu is dit opgelost en gaan ze allemaal naar een nieuwe pagina.

            Netheid code
            Ik had een aantal wit regels die onnodig waren en daarnaast had ik een aantal keer dat mijn <…> een extra
            tabje nodig hadden omdat ze nog niet goed stonden. Dit kan ik voorkomen door hier beter op te letten en bij
             elk stukje nieuwe code alles goed te zetten.

            Opvullen
            Op dit moment staan er alleen op de profielpagina foto’s. De rest van de foto’s staan al wel in een map en
            deze ga ik nog zeker toevoegen. Ook moet ik de pagina’s nog opvullen met tekst.

            Blog
            Op dit moment staat mijn blogpagina op één pagina en ik wil een blogpagina met verschillende losse blog
             pagina’s.

            Footer
            Op dit moment staat er in mijn footer het HZ logo , mijn volledige naam en mijn email die linkt naar mijn
            mail. Maar deze wil ik nog in het midden hebben zowel verticaal als horizontaal.',
        ]);

        $articles->insert([
            'title' => 'article vs section',
            'excerpt' => '',
            'body' => 'Ik ben het eens met de conclusie van Geeks for Geeks. Dit houdt in dat je een article tag kan
             gebruiken als je informatie wilt plaatsen op jouw site en je kan een alleen een article in een article
             zetten als het met elkaar te maken heeft. Een section tag gebruik je als een stuk text in een blokje
             wilt zetten. Je kan dit gebruiken om sections en subsections te maken.',
        ]);

        Article::factory()
            ->count(20)
            ->create();
    }
}
