<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'firstName' => 'Super',
                'surname' => 'Admin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('@SuperAdmin2019'),
                'contact' => '054-4474-706',
                'profile' => 'avatar.png',
                'user_type' => 'Super Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'firstName' => 'School',
                'surname' => 'Admin',
                'email' => 'schooladmin@gmail.com',
                'password' => bcrypt('@SchoolAdmin2019'),
                'contact' => '054-4422-706',
                'profile' => 'avatar.png',
                'user_type' => 'Normal Admin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            
        ]);
    }
}
