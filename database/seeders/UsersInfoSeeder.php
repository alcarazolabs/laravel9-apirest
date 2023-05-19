<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        


    }
}
        $useradmin = User::where('email','creatorpart@gmail.com')->first();
        $userdemo = User::where('email','demo@demo.com')->first();
     
        if($useradmin){
            //si ya existe borrarlo
            $useradmin->delete();
        }
        $useradmin = User::create([
            'name' => 'Admin',
            'phone' => '960168260',
            'city' => 'Lambayeque',
            'email' => 'creatorpart@gmail.com',
            'state' => 1,
            'role' => 'admin',
            'password' => Hash::make('123456789')
        ]);

        if($userdemo){
            //si ya existe borrarlo
            $userdemo->delete();
        }
        $userdemo = User::create([
            'name' => 'Demo',
            'phone' => '000000000',
            'city' => 'Lambayeque',
            'email' => 'demo@demo.com',
            'state' => 1,
            'role' => 'client',
            'password' => Hash::make('123456789')
        ]);