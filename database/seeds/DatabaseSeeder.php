<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      

        DB::table('users')->insert([

            ['name' => 'GreatAdmin',
            'email' => 'admin@la.fr',
            'password' => bcrypt('admin'),
            'seen' => true,
            'ID_ROLES' => 1,
            'valid' => true,
            'confirmed' => true],

            ['name' => 'GreatRedactor',
            'email' => 'redac@la.fr',
            'password' => bcrypt('redac'),
            'seen' => true,
            'ID_ROLES' => 2,
            'valid' => true,
            'confirmed' => true],

            ['name' => 'Walker',
            'email' => 'walker@la.fr',
            'password' => bcrypt('walker'),
            'seen' => false,
            'ID_ROLES' => 3,
            'valid' => false,
            'confirmed' => true],

            ['name' => 'Slacker',
            'email' => 'slacker@la.fr',
            'password' => bcrypt('slacker'),
            'seen' => false,
            'ID_ROLES' => 3,
            'valid' => false,
            'confirmed' => true]

        ]);

}
}
