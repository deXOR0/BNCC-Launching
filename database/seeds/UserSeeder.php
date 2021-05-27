<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'SCAC Binus',
            'email' => 'scac.kemanggisan@binus.edu',
            'password' => Hash::make('SCACxBNCC'),
            'gender' => 'Male',
            'address' => 'Binus Univesity',
            'city' => 'Jakarta Barat',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '2000-01-01',
            'fyp_batch' => 1,
            'nim' => 'adminSCAC',
            'campus' => 'admin',
            'major' => 'admin',
            'phone_number' => 'admin',
            'line_id' => 'admin',
            'lnt_subject' => 'admin',
            'role' => 1,
            'schedule_id' => 1,
        ]);

        User::create([
            'name' => 'Superadmin BNCC',
            'email' => 'admin@bncc.net',
            'password' => Hash::make('VIVABNCC!'),
            'gender' => 'Male',
            'address' => 'Jl. Rawa Belong',
            'city' => 'Jakarta Barat',
            'place_of_birth' => 'Batam',
            'date_of_birth' => '2002-02-02',
            'fyp_batch' => 1,
            'nim' => 'adminBNCC',
            'campus' => 'admin',
            'major' => 'admin',
            'phone_number' => 'admin',
            'line_id' => 'admin',
            'lnt_subject' => 'admin',
            'role' => 2,
            'schedule_id' => 1,
        ]);
    }
}
