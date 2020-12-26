<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class ClassRepresentativesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // \App\Models\ClassRepresentative::factory(10)->create();


        // How many genres you need, defaulting to 10
        $count = (int)$this->command->ask('How many class representatives do you need ?', 10);

        $this->command->info("Creating {$count} class representatives.");

        // Create the class representatives
        \App\Models\ClassRepresentative::factory()->count($count)->create();


        $this->command->info('class representatives created!');

    }
}
