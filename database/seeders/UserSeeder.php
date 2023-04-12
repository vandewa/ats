<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->truncate();
        // $data = [
        //     [
        //         'id' => '1',
        //         'name' => 'Superadmin',
        //         'email' => 'superadmin@app.com',
        //         'password' => '$2y$10$iaFDvfu0za8ldbEnp/gmTu0zcRayGRWrZuBjP9G2XWo.b.WUcSdXO',
        //     ],
        // ];

        // foreach ($data as $datum) {
        //     User::create($datum);
        // }

        $admin = User::create([
            'name' => 'Superadmin', 
            'email' => 'superadmin@app.com',
            'password' => bcrypt('password'), //password
        ]);

        $admin->assignRole('admin');

        $admin = User::create([
            'name' => 'Kecamatan', 
            'email' => 'kecamatan@app.com',
            'password' => bcrypt('password'), //password
        ]);

        $admin->assignRole('kecamatan');
    }
}
