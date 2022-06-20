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
            'naamNL' => 'Squat',
            'naamEN' => 'Squat',
            'omschrijvingNL' => 'De term squatten is verbasterd van het Engels woord squatting, dat staat voor hurken. Een squat is dus een kniebuiging, waarbij je je billen naar achteren duwt en je knieën tegelijkertijd niet voorbij je tenen komen.',
            'omschrijvingEN' => 'A squat is a strength exercise in which the trainee lowers their hips from a standing position and then stands back up. During the descent of a squat, the hip and knee joints flex while the ankle joint dorsiflexes; conversely the hip and knee joints extend and the ankle joint plantarflexes when standing up.',
            'img' => 'https://thumbs.dreamstime.com/b/gym-boy-squats-icon-cartoon-style-gym-boy-squats-icon-cartoon-gym-boy-squats-vector-icon-web-design-isolated-white-206600307.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Push-up',
            'naamEN' => 'Push-up',
            'omschrijvingNL' => 'Strek je armen waardoor je lichaam omhoog komt met maximale kracht van je borstspieren en triceps. Span goed je borstspieren aan als je boven bent. Laat je daarna weer langzaam terug zakken en houd gedurende de hele oefening je lichaam recht.',
            'omschrijvingEN' => 'A conditioning exercise performed in a prone position by raising and lowering the body with the straightening and bending of the arms while keeping the back straight and supporting the body on the hands and toes.',
            'img' => 'https://media.istockphoto.com/vectors/the-active-afroamerican-young-man-is-doing-the-push-up-exercise-vector-id882882258?k=20&m=882882258&s=612x612&w=0&h=zmKyq3KSuqv-CTDXhakYKH84KtOIZNUIDDKBsaWt27M='
        ]);

        Oefeningen::create([
            'naamNL' => 'Dip',
            'naamEN' => 'Dip',
            'omschrijvingNL' => 'De dip is een compound oefening, vaak gebruikt tijdens een borst -, push – of upper body training. De oefening belast verschillende spieren in de borst, schouders en triceps. Dit maakt de oefening een geweldige all-round spiermassa bouwer voor het bovenlichaam.',
            'omschrijvingEN' => 'Modern meaning. To perform a dip, the exerciser supports themselves on a dip bar with their arms straight down and shoulders over their hands, then lowers their body until their arms are bent to a 90 degree angle at the elbows, and then lifts their body up, returning to the starting position.',
            'img' => 'https://t4.ftcdn.net/jpg/04/30/92/21/360_F_430922106_5Nv0QMVziiz4QLkAplu1BFhQmU8bJsUF.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Plank',
            'naamEN' => 'Plank',
            'omschrijvingNL' => 'Begin liggend op je buik en plaats je ellebogen op de grond, recht onder je schouders. Laat daarbij de onderarmen op de grond steunen voor stabiliteit. Plaats nu je voeten zo dat je jezelf van de grond af tilt en steunt op je tenen en onderarmen en kantel je bekken naar voren.',
            'omschrijvingEN' => 'The plank is a bodyweight exercise which involves holding the trunk part of your body in a straight line off the ground. The static exercise engages multiple muscle groups at the same time which makes it extremely effective at strengthening your core, whilst also working the shoulders, arms and glutes.',
            'img' => 'https://thumbs.dreamstime.com/b/man-doing-plank-fitness-exercise-white-background-man-doing-plank-110871835.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Paardentrap',
            'naamEN' => 'Kickbacks',
            'omschrijvingNL' => 'Ga op ellebogen en knieën op de grond liggen, met je gezicht naar de grond. Strek dan je rechterbeen naar achteren. Pas op dat je de beweging niet overdrijft, want dan ga je te veel vanuit je onderrug bewegen. Deze oefening moet je voelen in je billen.',
            'omschrijvingEN' => 'A kickback, also known as a glute kickback, is a bodyweight exercise that targets muscle groups throughout your lower body—specifically your glute muscles. Perform kickbacks by getting on all fours or in a kneeling push-up position. Keep your back straight and your core engaged as you lift one leg up behind you.',
            'img' => 'https://docplayer.nl/docs-images/66/56064493/images/16-0.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Mountain climber',
            'naamEN' => 'Mountain climber',
            'omschrijvingNL' => 'Wat zijn mountain climbers? De mountain climber is een fitnessoefening voor het hele lichaam, waarbij de nadruk ligt op je core. De oefening heet zo, omdat de beweging wat wegheeft van het beklimmen van een berg: terwijl je handen op de grond staan, beweeg je je knieën omstebeurt naar je ellebogen.',
            'omschrijvingEN' => 'Start from a high plank position with your hands stacked directly under your shoulders.
            Drive one knee forward toward your chest while engaging your abs.
            Return to your plank position, then drive the knee of your opposite foot in. Repeat the movement, alternating legs and speeding up your movements.',
            'img' => 'https://media.istockphoto.com/vectors/step-of-doing-the-mountain-climber-exercise-by-healthy-woman-vector-id957699448?k=20&m=957699448&s=612x612&w=0&h=kxdGeANir4ASYaCyuXkeHkoL-VZTPQ9eOIRKjuhuCWc='
        ]);

        Oefeningen::create([
            'naamNL' => 'Burpee',
            'naamEN' => 'Burpee',
            'omschrijvingNL' => 'Spring met je voeten richting je handen duw jezelf met je benen vervolgens helemaal omhoog, waarbij je een afsprong maakt. Plaats je handen bij de landing als eerste op de grond en kom vervolgens weer in de push-up positie.',
            'omschrijvingEN' => 'A burpee is essentially a two-part exercise: a pushup followed by a leap in the air. Doing several burpees in a row can be tiring, but this versatile exercise may be worth the payoff, especially if youre looking for a way to build strength and endurance, while burning calories, and boosting your cardio fitness.',
            'img' => 'https://thumbs.dreamstime.com/b/exercise-guide-woman-doing-squat-thrust-burpee-position-exercise-guide-woman-doing-squat-thrust-burpee-position-236665787.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Lunge',
            'naamEN' => 'Lunge',
            'omschrijvingNL' => 'Je achterste voet til je iets op, zodat je teen de vloer nog aanraakt maar je hiel niet meer. Buig beide knieën tegelijk. Het doel is om beide knieën te laten stoppen in een hoek van 90 graden. Zorg ervoor dat je voorste knie altijd in lijn blijft met je voet, nooit er overheen.',
            'omschrijvingEN' => 'It involves stepping forward, lowering your body toward the ground, and returning back to the starting position. Its the version most people will refer to when they say theyre “doing lunges.” In the beginning of the exercise, your leg muscles have to control the impact of your foots landing.',
            'img' => 'https://us.123rf.com/450wm/artinspiring/artinspiring1903/artinspiring190300466/124593050-woman-making-lunges-doing-sport-exercises-in-gym-leg-workout-muscle-building-healthy-and-active-life.jpg?ver=6'
        ]);

        Oefeningen::create([
            'naamNL' => 'Wall sit',
            'naamEN' => 'Wall sit',
            'omschrijvingNL' => 'Begin staand met je rug tegen de muur. Zet je voeten iets naar voren, op schouderbreedte en zak in een squat: je knieën zijn gebogen in een hoek van 90 graden, net als je heupen. Span je buikspieren goed aan en duw je rug tegen de muur.',
            'omschrijvingEN' => 'Stand with your back against a wall, holding dumbbells by your sides. With your feet shoulder-width apart, slide your back down the wall while keeping your core engaged and coming into a squat position, bending at the hips and knees and keeping the dumbbells at your sides, with your arms straight.',
            'img' => 'https://t3.ftcdn.net/jpg/04/79/49/60/360_F_479496012_Z8G26DMVFXEfLQqi8JKHOBCBv2W0iqtC.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Crunch',
            'naamEN' => 'Crunch',
            'omschrijvingNL' => 'Ga op je rug liggen en houd je handen op je borst. Plaats je voeten op de grond voor je met je knieën op 90 graden. Adem in en til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt. Laat je hoofd rustig weer terugzakken en adem uit.',
            'omschrijvingEN' => 'The crunch is a classic core exercise. It specifically trains your abdominal muscles, which are part of your core.',
            'img' => 'https://us.123rf.com/450wm/lioputra/lioputra2010/lioputra201000080/157104352-man-doet-crunches-in-de-sportschool-buikverbranding-training-guy-maken-oefening-buikspieroefeningen-.jpg?ver=6'
        ]);
    }
}
