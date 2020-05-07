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
        factory(App\User::class, 28)->create();


        App\User::create([
        'name'              => 'Juan Diego',
        'email'             => 'juandialonso@gmail.com',
        'password'          =>  bcrypt('123456'),
        'remember_token'    => str_random(10),
        ]);
        App\User::create([
        'name'              => 'Javier Llorens',
        'email'             => 'llorens_jav@gva.es',
        'password'          =>  bcrypt('severo'),
        'remember_token'    => str_random(10),
        ]);
      

    }
}
