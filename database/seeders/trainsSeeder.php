<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;

use App\Models\Trains;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->addProvider(new Person($faker)); // Aggiungi il provider 'en_US\Person'

        for ($i = 0; $i < 10; $i++) {
            $trains = new Trains();
            $trains->azienda = $faker->word();
            $trains->stazione_partenza = $faker->word();
            $trains->stazione_arrivo = $faker->word();
            $trains->data_partenza = $faker->date();
            $trains->orario_partenza = $faker->time();
            $trains->orario_arrivo = $faker->time();
            $trains->n_carrozze = $faker->numberBetween(1,15);
            $trains->in_orario = $faker->boolean();
            $trains->cancelato = $faker->boolean();
            $trains->codice_treno = $faker->bothify('nt???##');

            $trains->save();
        }
    }
}
