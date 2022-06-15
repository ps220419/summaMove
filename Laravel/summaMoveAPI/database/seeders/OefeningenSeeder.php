<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\oefeningen;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oefeningen::create([
            'naam' => 'Squat',
            'omschrijving' => 'De term squatten is verbasterd van het Engels woord squatting, dat staat voor hurken. Een squat is dus een kniebuiging, waarbij je je billen naar achteren duwt en je knieën tegelijkertijd niet voorbij je tenen komen.',
            'img' => 'https://thumbs.dreamstime.com/b/gym-boy-squats-icon-cartoon-style-gym-boy-squats-icon-cartoon-gym-boy-squats-vector-icon-web-design-isolated-white-206600307.jpg'
        ]);

        Oefeningen::create([
            'naam' => 'Push-up',
            'omschrijving' => 'Strek je armen waardoor je lichaam omhoog komt met maximale kracht van je borstspieren en triceps. Span goed je borstspieren aan als je boven bent. Laat je daarna weer langzaam terug zakken en houd gedurende de hele oefening je lichaam recht.',
            'img' => 'https://media.istockphoto.com/vectors/the-active-afroamerican-young-man-is-doing-the-push-up-exercise-vector-id882882258?k=20&m=882882258&s=612x612&w=0&h=zmKyq3KSuqv-CTDXhakYKH84KtOIZNUIDDKBsaWt27M='
        ]);

        Oefeningen::create([
            'naam' => 'Dip',
            'omschrijving' => 'De dip is een compound oefening, vaak gebruikt tijdens een borst -, push – of upper body training. De oefening belast verschillende spieren in de borst, schouders en triceps. Dit maakt de oefening een geweldige all-round spiermassa bouwer voor het bovenlichaam.',
            'img' => 'https://t4.ftcdn.net/jpg/04/30/92/21/360_F_430922106_5Nv0QMVziiz4QLkAplu1BFhQmU8bJsUF.jpg'
        ]);

        Oefeningen::create([
            'naam' => 'Plank',
            'omschrijving' => 'Begin liggend op je buik en plaats je ellebogen op de grond, recht onder je schouders. Laat daarbij de onderarmen op de grond steunen voor stabiliteit. Plaats nu je voeten zo dat je jezelf van de grond af tilt en steunt op je tenen en onderarmen en kantel je bekken naar voren.',
            'img' => 'https://thumbs.dreamstime.com/b/man-doing-plank-fitness-exercise-white-background-man-doing-plank-110871835.jpg'
        ]);

        Oefeningen::create([
            'naam' => 'Paardentrap',
            'omschrijving' => 'Ga op ellebogen en knieën op de grond liggen, met je gezicht naar de grond. Strek dan je rechterbeen naar achteren. Pas op dat je de beweging niet overdrijft, want dan ga je te veel vanuit je onderrug bewegen. Deze oefening moet je voelen in je billen.',
            'img' => 'https://docplayer.nl/docs-images/66/56064493/images/16-0.jpg'
        ]);

        Oefeningen::create([
            'naam' => 'Mountain climber',
            'omschrijving' => 'Wat zijn mountain climbers? De mountain climber is een fitnessoefening voor het hele lichaam, waarbij de nadruk ligt op je core. De oefening heet zo, omdat de beweging wat wegheeft van het beklimmen van een berg: terwijl je handen op de grond staan, beweeg je je knieën omstebeurt naar je ellebogen.',
            'img' => 'https://media.istockphoto.com/vectors/step-of-doing-the-mountain-climber-exercise-by-healthy-woman-vector-id957699448?k=20&m=957699448&s=612x612&w=0&h=kxdGeANir4ASYaCyuXkeHkoL-VZTPQ9eOIRKjuhuCWc='
        ]);

        Oefeningen::create([
            'naam' => 'Burpee',
            'omschrijving' => 'Spring met je voeten richting je handen duw jezelf met je benen vervolgens helemaal omhoog, waarbij je een afsprong maakt. Plaats je handen bij de landing als eerste op de grond en kom vervolgens weer in de push-up positie.',
            'img' => 'https://thumbs.dreamstime.com/b/exercise-guide-woman-doing-squat-thrust-burpee-position-exercise-guide-woman-doing-squat-thrust-burpee-position-236665787.jpg'
        ]);

        Oefeningen::create([
            'naam' => 'Lunge',
            'omschrijving' => 'Je achterste voet til je iets op, zodat je teen de vloer nog aanraakt maar je hiel niet meer. Buig beide knieën tegelijk. Het doel is om beide knieën te laten stoppen in een hoek van 90 graden. Zorg ervoor dat je voorste knie altijd in lijn blijft met je voet, nooit er overheen.',
            'img' => 'https://us.123rf.com/450wm/artinspiring/artinspiring1903/artinspiring190300466/124593050-woman-making-lunges-doing-sport-exercises-in-gym-leg-workout-muscle-building-healthy-and-active-life.jpg?ver=6'
        ]);

        Oefeningen::create([
            'naam' => 'Wall sit',
            'omschrijving' => 'Begin staand met je rug tegen de muur. Zet je voeten iets naar voren, op schouderbreedte en zak in een squat: je knieën zijn gebogen in een hoek van 90 graden, net als je heupen. Span je buikspieren goed aan en duw je rug tegen de muur.',
            'img' => 'https://t3.ftcdn.net/jpg/04/79/49/60/360_F_479496012_Z8G26DMVFXEfLQqi8JKHOBCBv2W0iqtC.jpg'
        ]);

        Oefeningen::create([
            'naam' => 'Crunch',
            'omschrijving' => 'Ga op je rug liggen en houd je handen op je borst. Plaats je voeten op de grond voor je met je knieën op 90 graden. Adem in en til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt. Laat je hoofd rustig weer terugzakken en adem uit.',
            'img' => 'https://us.123rf.com/450wm/lioputra/lioputra2010/lioputra201000080/157104352-man-doet-crunches-in-de-sportschool-buikverbranding-training-guy-maken-oefening-buikspieroefeningen-.jpg?ver=6'
        ]);
    }
}
