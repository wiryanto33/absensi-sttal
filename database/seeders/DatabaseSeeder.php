<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\prajurit;
use App\Models\Satuan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'indra',
            'email' => 'indra@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);

        prajurit::factory(10)->create();

        prajurit::factory()->create([
            'nrp'=> '118929',
            'name' => 'popy indra w',
            'pangkat'=> 'klk',
            'korps'=>'elektro',
            'password' => Hash::make('123'),
        ]);

        //data dummy satuan
        Satuan::create([
            'name'=>'STTAL',
            'email'=>'sttal@gmail.edu',
            'address'=>'morokrembangan koiklatal surabaya jawa timur',
            'latitude'=>'-7.219082',
            'longitude' => '112.718285',
            'radius_km'=> '0.5',
            'time_in'=>'07:00',
            'time_out'=>'15:30'
        ]);
        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
