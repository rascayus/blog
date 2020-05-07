<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();


        App\User::create([
        'name'              => 'Juan Diego',
        'email'             => 'juandialonso@gmail.com',
        'password'          => '$2y$10$Kt4nGR5QAnrND6zv1aZvleYbgj3jp2o9gK3uXFrXfxdQ9goAxy5Zq',
        'remember_token'    => str_random(10),
        ]);
      

    }
}
