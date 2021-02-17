<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserDomicilio;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class, 100)->create();
        factory(UserDomicilio::class, 100)->create();
    
    }
}
