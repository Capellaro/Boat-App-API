<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $this->call(UsersTableSeeder::class);
        for ($i = 1; $i <= 10; $i++) {
            DB::table('boats')->insert([
                'name' => $faker->word,
                'description' => $faker->paragraph($nbSentences = 1)
            ]);
        }

        DB::table('users')->insert([
            'name' => 'Alexandre',
            'email' => 'test@openweb.ch',
            'password' => bcrypt('Hireme')
        ]);
    }
}
