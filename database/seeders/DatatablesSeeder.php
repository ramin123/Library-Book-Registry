<?php

namespace Database\Seeders;

use App\Models\Datatable;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DatatablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datatable::truncate();
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            if (rand(0, 1) == 0) {
                $gender = 'Male';
            } else {
                $gender = 'Female';
            }

            switch (rand(0, 5)) {
                case 0:
                    $country = 'Australia';
                    break;
                case 1:
                    $country = 'Canada';
                    break;
                case 2:
                    $country = 'Newzealand';
                    break;
                case 3:
                    $country = 'bangladesh';
                    break;
                case 4:
                default:
                    $country = 'America';
                    break;
            }

            Datatable::create([
                'firstname' => $faker->unique()->firstName,
                'lastname' => $faker->unique()->lastName,
                'email'     => $faker->unique()->email,
                'job' => $faker->jobTitle,
                'gender' => $gender,
                'age' => $faker->numberBetween(20, 80),
                'points' => $faker->numberBetween(0, 1000),
                'notes' => $faker->text(100),
                'country' => $country,
                'sale_date' => $faker->dateTimeBetween('2017-09-15', '2017-10-20')
            ]);
        }

        $this->command->info('Dummy data entered for data tables!');
    }
}
