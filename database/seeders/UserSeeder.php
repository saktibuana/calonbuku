<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UserSeeder extends Seeder
{
   
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Arip Budiman",
            'email' => "arip@gmail.com",
            'password' => bcrypt('tuangokil22;'),
            'role_id' => '1',
            'profile_foto'=>'src/profile/user.png',
            'email_verified_at'=>now(),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('users')->insert([
            'name' => "Mega Ranisa",
            'email' => "mega@gmail.com",
            'password' => bcrypt('tuangokil22;'),
            'role_id' => '1',
            'profile_foto'=>'src/profile/user.png',
            'email_verified_at'=>now(),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
