<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = DB::table('faqs');

        $faqs->insert(
            [
                'question' => 'Hoe print je een document hier op de HZ',
                'answer' => 'In een printkamer met je HZ pasje,de printkamer vind je in de hokken met een koffiekopje
                erop. je kan je print sturen naar de printer en met je HZ pasje kan je de print betalen.',
                'link' => 'https://print.hz.nl/login.cfm?dest=index.cfm&'
            ]
        );

        $faqs->insert(
            [
                'question' => 'Hoe scan je een document en stuur je dit naar je laptop hier op de HZ?',
                'answer' => 'Dit kan in de DOC-room.'
            ]
        );

        $faqs->insert(
            [
                'question' => 'Wat moet je doen als je ziek bent of symptomen van het corona virus?',
                'answer' => 'Dit moet je melden bij een van de docenten. En als het mogelijk is alle lessen online
                volgen en de opdrachten thuis maken.'
            ]
        );

        $faqs->insert(
            [
                'question' => 'Hoe kun je een projectruimte boeken in één van de vleugels van het gebouw?',
                'answer' => 'Via HZ-Portal kan je naar het selfservice portal. Via dit portaal kan je een projectruimte
                boeken.'
            ]
        );

//        todo: fix this question, answer was too long
        $faqs->insert(
            [
                'question' => 'Wat zijn de instructies om je auto te parkeren op het HZ parkeerterrein?',
                'answer' => 'Je hebt drie parkeeropties.
                Je kan gratis parkeren bij PZEM Bij Poelendaelesingel of bij de HZ zelf'
            ]
        );

        $faqs->insert(
            [
                'question' => 'Hoe zet je geld op jouw HZ pas?',
                'answer' => 'Dit kan op de begaande grond. als je binnenkomt is er aan de linkerkant na de receptie een
                machine aan de muur waar je geld op jouw pasje kunt zetten.'
            ]
        );
    }
}
