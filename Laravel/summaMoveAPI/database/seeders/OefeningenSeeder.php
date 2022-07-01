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
            'omschrijvingNL' => 'Squatten is goed voor je onderlichaam. Met deze oefening kan je veel grote spieren trainen.
            1.	Plaats je voeten op schouderbreedte en zorg dat ze naar voren wijzen.
            2.	Maak nu een holle rug.
            3.	Vervolgens zak je naar beneden terwijl je bovenlichaam rechtop is en je knieën niet voorbij je tenen komen.
            4.	Daarna duw je jezelf weer omhoog via je benen. Wanneer je dit doet moet je oppassen dat je niet vanuit je tenen maar vanuit je hak duwt.
            Nu weet je een squat moet doen in 4 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'Squatting trains the lower body. This is a compound movement meaning there are multiple big muscle groups being targeted.
            1.	Stand straight, feet should be shoulder-width apart
            2.	Lower down keeping the back straight.
            3.	lower down till legs are 90 degrees bent. 
            4.	Lean slightly back, knees should not surpass your feet.
            5.	Straighten your legs to lift back up in original standing position.
            Now you know how to squat in just five easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://thumbs.dreamstime.com/b/gym-boy-squats-icon-cartoon-style-gym-boy-squats-icon-cartoon-gym-boy-squats-vector-icon-web-design-isolated-white-206600307.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Push-up',
            'naamEN' => 'Push-up',
            'omschrijvingNL' => 'De push-up is een hele bekende oefening omdat hij zo makkelijk uit te voeren is en het toch nog heel effectief is.
            1.	Ga op je knieën zitten en zet je handen op schouderbreedte. Als je je borstspieren wilt trainen dan moet je je handen wijder uit elkaar zetten. Als je je triceps wilt trainen dan moet je ze dichter bij elkaar zetten.
            2.	Strek je knieën zodat je op je tenen komt te staan.
            3.	Zorg dat je lichaam recht blijft.
            4.	Zak door je armen en stop net voor de vloer. Doe dit door alleen je armen te bewegen.
            5.	Duw daarna jezelf weer naar de positie waarin je begon.
            Nu weet je een push-up moet doen in 5 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'The push-up is a very popular exercise due to it’s simplicity and effectiveness. The pushup mostly targets the chest muscles, using the triceps as well.
            1.	Get down on your hands and knees.
            2.	Place your hands on the floor shoulder-width or a little more apart.
            3.	Stretch your legs back and only let your toes(and hands) have contact with the floor.
            4.	Keeping your body straight, lower down until chest is almost touching the floor.
            5.	Once down, press back up using the chest muscles.
            
            Now you know how to do push-ups in just five easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://media.istockphoto.com/vectors/the-active-afroamerican-young-man-is-doing-the-push-up-exercise-vector-id882882258?k=20&m=882882258&s=612x612&w=0&h=zmKyq3KSuqv-CTDXhakYKH84KtOIZNUIDDKBsaWt27M='
        ]);

        Oefeningen::create([
            'naamNL' => 'Dip',
            'naamEN' => 'Dip',
            'omschrijvingNL' => 'Je gebruikt de dip als je je borst of triceps wilt trainen. Het is makkelijk om uit te voeren en het enige wat je echt nodig hebt is een verhoogde rand, maar het is beter als je het doet met dip bars.
            1.	Pak 2 parallellen dip bars, spring vervolgens omhoog en strek je armen.
            2.	Kruis en buig je benen zodat je meer stabiliteit krijgt en verder naar beneden kan gaan. Adem in.
            3.	Houd je lichaam recht terwijl je een beetje naar voren leunt, zak daarna naar beneden door je armen te buigen.
            4.	Ga gecontroleerd naar beneden totdat je schouders op de hoogte van je ellebogen zitten. Houd deze positie even aan terwijl je je onderarmen verticaal houdt.
            5.	Til jezelf met wat snelheid omhoog door je armen te strekken. Adem uit.
            6.	Zet je schouders boven je handen terwijl je je ellebogen op slot zet.
            Nu weet je een dip moet doen in 6 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'The Dip is a compound movement targeting the chest and triceps. This is a very effective movement.
            1.	Place your arms on both parallel bars and jump up to straighten body.
            2.	Lower your body slowly while keeping arms sturdy, lean forward.
            3.	Lower your body till shoulders are below of level with elbows.
            4.	Lift your body back up by straightening arms.
            
            
            Now you know how to do dips in just four easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://t4.ftcdn.net/jpg/04/30/92/21/360_F_430922106_5Nv0QMVziiz4QLkAplu1BFhQmU8bJsUF.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Plank',
            'naamEN' => 'Plank',
            'omschrijvingNL' => 'De plank is gemaakt om je kern te trainen. Ook voor deze oefening heb je niks nodig behalve jezelf.
            1.	Ga op je handen en knieën zitten.
            2.	Plaats je handen op schouderhoogte en zorg dat je elleboog onder je schouder staat.
            3.	Strek je benen en zorg dat alleen je tenen de grond raken (zonder armen meegeteld).
            4.	Hou je rug recht en span je kern spieren aan. Hou dit zolang mogelijk vol.
            Nu weet je een plank moet doen in 4 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'The plank is an exercise made to target the abdominal muscles. It is a simple exercise which makes it perfect for beginners.  
            1.	Get down on your hands and knees.
            2.	Place hands on the floor shoulder-width or a little more apart.
            3.	Stretch legs back only letting toes touch the floor(and hands).
            4.	Straighten the back and make core muscles tens, hold this position.
            
            
            Now you know how to plank in just four easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.',
            'img' => 'https://thumbs.dreamstime.com/b/man-doing-plank-fitness-exercise-white-background-man-doing-plank-110871835.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Paardentrap',
            'naamEN' => 'Kickbacks',
            'omschrijvingNL' => 'Dit is een goede oefening voor je bilspieren en je hamstrings.
            1.	Ga op je handen en knieën zitten.
            2.	Zet je handen op schouderhoogte.
            3.	Doe één voor één je benen omhoog en strek hem naar achter, terwijl je je kont aanspant.
            Nu weet je een paardentrap moet doen in 3 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'Kickbacks are the perfect exercises for training the glutes and hamstrings.
            1.	Get down on your hands and knees.
            2.	Place hands on the floor shoulder-width apart.
            3.	One leg at a time, lift leg up and straighten backwards, squeezing but.
            
            
            Now you know how to do kickbacks in just three easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://docplayer.nl/docs-images/66/56064493/images/16-0.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Mountain climber',
            'naamEN' => 'Mountain climber',
            'omschrijvingNL' => 'De mountain climber is bedoeld voor je kern. Het is een intense oefening dus je verbrandt er ook wat calorieën mee.
            1.	Ga op je handen en knieën zitten.
            2.	Zet je handen op schouderhoogte.
            3.	Strek je benen naar achter en zorg dat alleen je tenen de grond raken.
            4.	Daarna doe je één voor één je knieën buigen richting je borst. blijf dit proces doen terwijl je van been afwisselt.
            Nu weet je de mountain climber moet doen in 4 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'Mountain climbers are designed to target the core. This exercise is also intense, meaning it also burns quite a few calories in the process.
            1.	Get down on your hands and knees.
            2.	Place hands on the floor shoulder-width apart
            3.	Stretch legs back only letting the toes touch the floor.
            4.	One leg at a time, bend knee and drive towards chest area, repeat this process, switching legs each time.
            
            Now you know how to do mountain climbers in just four easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://media.istockphoto.com/vectors/step-of-doing-the-mountain-climber-exercise-by-healthy-woman-vector-id957699448?k=20&m=957699448&s=612x612&w=0&h=kxdGeANir4ASYaCyuXkeHkoL-VZTPQ9eOIRKjuhuCWc='
        ]);

        Oefeningen::create([
            'naamNL' => 'Burpee',
            'naamEN' => 'Burpee',
            'omschrijvingNL' => 'Met de burpee gebruik je veel delen van je lichaam, dus train je heel gevarieerd en verbrand je veel calorieën.
            1.	Spring omhoog terwijl je armen boven je strekt.
            2.	Land rechtop en zorg dat je voeten recht onder je schouders zitten.
            3.	Hurk naar beneden terwijl je je rug recht houdt. Ga door totdat je knieën 90 graden gebogen zijn.
            4.	Leun naar achter, je knieën horen niet achter je voeten te komen.
            5.	Ga op je handen en knieën zitten.
            6.	Plaats je handen op schouderhoogte.
            7.	Strek je benen naar achter en zorg dat alleen je tenen en handen de grond raken.
            8.	Zak naar beneden totdat je borst bijna de grond raakt. Doe dit terwijl je je lichaam recht houdt.
            9.	Duw jezelf weer naar boven.
            10.	Ga terug naar je staande positie.
            Nu weet je een burpee moet doen in 10 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'The burpee is a movement used allot for burning calories during exercises. This is because there is allot going on during the movement. Thus meaning your body uses more calories. This exercise targets multiple muscle groups.

            1.	Jump, lifting feet from the floor while stretching arm straight up.
            2.	Stand straight, feet should be shoulder-width apart.
            3.	Lower down keeping the back straight.
            4.	lower down till legs are 90 degrees bent. 
            5.	Lean slightly back, knees should not surpass your feet.
            6.	Get down on your hand and knees.
            7.	Place hands on the floor shoulder-width or a little more apart.
            8.	Stretch the legs back and only letting the toes(and hands) have contact with the floor.
            9.	Straight body, lower down until the chest is almost touching the floor.
            10.	Once down, press back up using the chest muscles.
            11.	Get back in standing position.
            
            
            Now you know how to do burpees in just eleven easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://thumbs.dreamstime.com/b/exercise-guide-woman-doing-squat-thrust-burpee-position-exercise-guide-woman-doing-squat-thrust-burpee-position-236665787.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Lunge',
            'naamEN' => 'Lunge',
            'omschrijvingNL' => 'De lunge is een heel beginnersvriendelijke oefening omdat hij niet heel intens is maar wel voor resultaten zorgt. Met deze oefening train je je quad en hamstring.
            1.	Ga rechtop staan met je voeten op schouderhoogte.
            2.	Zet één been een grote stap vooruit.
            3.	Leun een beetje naar voren terwijl je je rug recht houdt. Ga door totdat je andere been een paar centimeter van de grond af zit.
            4.	Duw jezelf omhoog met je originele been en herhaal dit proces met het andere been.
            Nu weet je een lunge moet doen in 4 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken. 
            ',
            'omschrijvingEN' => 'The lunge is a very effective and popular exercise used by many. And for good reason. The lunge is a beginner friendly movement that grants allot of quad and hamstring activation.
            1.	Stand straight, feet shoulder-width apart.
            2.	Place one leg one big step forward. 
            3.	lean a bit forward keeping the back straight and lower body till the other leg’s knee is roughly an inch or two from the ground. 
            4.	Push back up using your legs, repeat this process with other leg.
            
            
            Now you know how to do lunges in just four easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://us.123rf.com/450wm/artinspiring/artinspiring1903/artinspiring190300466/124593050-woman-making-lunges-doing-sport-exercises-in-gym-leg-workout-muscle-building-healthy-and-active-life.jpg?ver=6'
        ]);

        Oefeningen::create([
            'naamNL' => 'Wall sit',
            'naamEN' => 'Wall sit',
            'omschrijvingNL' => 'De wall sit is gemaakt voor je kern en benen te trainen. Het is een handige training voor iedereen want als je meer ervaren bent kan je gewoon langer doorgaan.
            1.	Ga naar een muur met je rug ernaartoe.
            2.	Ga in de positie om zitten en duw je rug tegen de muur.
            3.	Zorg dat je knieën gebogen zijn met een hoek van 90 graden en houdt deze positie vast.
            Nu weet je de wall sit moet doen in 3 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'The wall-sit is a movement which pushes for muscle fatigue mostly in the legs but also in the core. It does this by having you increase the time under load.
            1.	Go to a wall, face away from the wall.
            2.	Get into seating position, pressing the back against the wall.
            3.	Make sure legs are at a 90 degree angle and hold this position.
            
            
            Now you know how to do wall-sits in just three easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://t3.ftcdn.net/jpg/04/79/49/60/360_F_479496012_Z8G26DMVFXEfLQqi8JKHOBCBv2W0iqtC.jpg'
        ]);

        Oefeningen::create([
            'naamNL' => 'Crunch',
            'naamEN' => 'Crunch',
            'omschrijvingNL' => 'De crunch is een populaire oefening om je kern te trainen.
            1.	Ga op je rug liggen.
            2.	Buig je knieën terwijl je voeten plat op de grond blijven.
            3.	Plaats je handen achter je hoofd voor meer steun.
            4.	Haal je hoofd en schouders van de grond en richting je bekken terwijl je je buik aanspant.
            Nu weet je de crunch moet doen in 4 gemakkelijke stappen. Als het hierna nog steeds niet lukt kan je altijd een tutorial op YouTube zoeken.
            ',
            'omschrijvingEN' => 'Crunch is a very popular exercise used by many. It places stress on the core area.
            1.	Lay down on your back.
            2.	Bend both legs, make sure feet are planted on the floor.
            3.	Place hands behind the head for support. 
            4.	Lift your shoulders and head from the floor towards the pelvic area, tensing the ab muscles.
            
            
            Now you know how to do crunch in just four easy steps, if you still can’t perform the exercise we recommend to search for a more in-depth tutorial on Youtube.
            ',
            'img' => 'https://us.123rf.com/450wm/lioputra/lioputra2010/lioputra201000080/157104352-man-doet-crunches-in-de-sportschool-buikverbranding-training-guy-maken-oefening-buikspieroefeningen-.jpg?ver=6'
        ]);
    }
}
