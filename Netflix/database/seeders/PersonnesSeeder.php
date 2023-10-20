<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
           [
              'nom' => 'Reynolds' ,
              'prenom' => 'Ryan',
              'ddn' => '1976-10-23',
              'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/220px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg',
           ],

           [
            'nom' => 'Ruffalo' ,
            'prenom' => 'Mark',
            'ddn' => '1967-11-22',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Mark_Ruffalo_%2836201774756%29_%28cropped%29.jpg/220px-Mark_Ruffalo_%2836201774756%29_%28cropped%29.jpg',
         ],

         [
            'nom' => 'Saldaña' ,
            'prenom' => 'Zoe',
            'ddn' => '1978-06-19',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Avatar_The_Way_of_Water_Tokyo_Press_Conference_Zoe_Salda%C3%B1a_%2852563431865%29_%28cropped2%29.jpg/220px-Avatar_The_Way_of_Water_Tokyo_Press_Conference_Zoe_Salda%C3%B1a_%2852563431865%29_%28cropped2%29.jpg',
         ],

         [
            'nom' => 'Garner' ,
            'prenom' => 'Jennifer',
            'ddn' => '1976-10-23',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Jennifer_Garner_at_the_Fast_Company_Innovation_Festival_-_44972951114_%28cropped%29.jpg/220px-Jennifer_Garner_at_the_Fast_Company_Innovation_Festival_-_44972951114_%28cropped%29.jpg',
         ],
         [
            'nom' => 'Levy' ,
            'prenom' => 'Shawn',
            'ddn' => '1968-07-23',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Shawn_Levy_by_Gage_Skidmore.jpg/220px-Shawn_Levy_by_Gage_Skidmore.jpg',
         ],
         [
            'nom' => 'Ellison' ,
            'prenom' => 'David',
            'ddn' => '1983-01-09',
            'lien_photo' => 'https://th.bing.com/th/id/OIP.SMeR2WnjjiCddPFrA8jxjgHaJ4?w=195&h=260&c=7&r=0&o=5&pid=1.7',
         ],
         [
            'nom' => 'Chbosky' ,
            'prenom' => 'Stephen',
            'ddn' => '1970-01-25',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Stephen_Chbosky%2C_Jericho_Panel_at_Comic_Con_SD_2006_cropped.jpg/220px-Stephen_Chbosky%2C_Jericho_Panel_at_Comic_Con_SD_2006_cropped.jpg',
         ],
         [
            'nom' => 'Malkovich' ,
            'prenom' => 'John',
            'ddn' => '1953-12-09',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/John_Malkovich%2C_Berlinale_2023.jpg/220px-John_Malkovich%2C_Berlinale_2023.jpg',
         ],
         [
            'nom' => 'Lerman' ,
            'prenom' => 'Logan',
            'ddn' => '1992-01-19',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/The_arrival_of_the_stars_from_the_movie_%22Indignation%22_%2825036130926%29_%28Logan_Lerman_cropped%29.jpg/220px-The_arrival_of_the_stars_from_the_movie_%22Indignation%22_%2825036130926%29_%28Logan_Lerman_cropped%29.jpg',
         ],
         [
            'nom' => 'Watson' ,
            'prenom' => 'Emma',
            'ddn' => '1990-04-15',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Emma_Watson_2013.jpg/220px-Emma_Watson_2013.jpg',
         ],
         [
            'nom' => 'Miller' ,
            'prenom' => 'Ezra',
            'ddn' => '1992-09-30',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Ezra_Miller_by_Gage_Skidmore_2.jpg/220px-Ezra_Miller_by_Gage_Skidmore_2.jpg',
         ],
         [
            'nom' => 'Radcliffe' ,
            'prenom' => 'Daniel',
            'ddn' => '1989-07-23',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/DanielRadcliffe.jpg/220px-DanielRadcliffe.jpg',
         ],
         [
            'nom' => 'Grint' ,
            'prenom' => 'Rupert',
            'ddn' => '1988-08-24',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/RupertGrint2018.jpg/220px-RupertGrint2018.jpg',
         ],
         [
            'nom' => 'Columbus' ,
            'prenom' => 'Chris',
            'ddn' => '1958-09-10',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Chris_Columbus.jpg/220px-Chris_Columbus.jpg',
         ],
         [
            'nom' => 'Cuarón' ,
            'prenom' => 'Alfonso',
            'ddn' => '1961-11-28',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg/220px-Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg',
         ],
         [
            'nom' => 'Newell' ,
            'prenom' => 'Mike',
            'ddn' => '1942-03-28',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Mike_Newell.jpg/200px-Mike_Newell.jpg',
         ],
         [
            'nom' => 'Yates' ,
            'prenom' => 'David',
            'ddn' => '1963-10-08',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg/220px-Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg',
         ],
         [
            'nom' => 'Heyman' ,
            'prenom' => 'David',
            'ddn' => '1961-07-26',
            'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/David_Heyman1.jpg/220px-David_Heyman1.jpg',
         ],
           ]);
    }
}
