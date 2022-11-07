<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $train = new Train();
            $train->azienda = $faker->name(); 
            $train->stazione_partenza = $faker->city(); 
            $train->stazione_arrivo = $faker->city() ; 
            $date = $faker->date();
            $train->orario_partenza = $date . ' ' . $faker->time(); 
            $train->orario_arrivo = $date . ' ' . $faker->time(); 
            $train->codice_treno = 'XaXaXX' . $i; 
            $train->carrozze = $faker->numberBetween(0, 20) ; 
            $train->in_orario = $faker->boolean(); 
            $train->cancellato =  $faker->boolean(); 
            $train->save();

        }
    }
}
