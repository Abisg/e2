<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh()
    {

        $this->migrate();
        $this->seed();
    }

    public function migrate()
    {

        $this->app->db()->createTable('rounds', [
            'choice' => 'char(11)',
            'result' => 'int',
            'timestamp' => 'timestamp',
        ]);
        dump('Migrations complete');
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = Factory::create();


        $words = [
              'community',
              'develop',
              'environment',
              'excellent'
          ];


        for($i = 0; $i < 10; $i++) {

            $this->app->db()->insert('rounds', [
                'choice' => $words[array_rand($words)],
                'result' => rand(0, 1),
                'timestamp' => $faker->dateTimeBetween('-' . $i . 'days', '-' . $i . 'days')->format('Y-m-d H:i:s') #Faker Date Time
            ]);
        }
        dump('Seeds complete!');

    }
}