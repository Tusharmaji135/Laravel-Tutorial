<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Facade;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table('contacts')->insert([
            [
                'email'=>"135john@gmail.com",
                'phone'=>'7858478587',
                'address'=>"205-Akash Bhumi apt",
                'city'=>"Surat",
                'student_id'=>1
            ]
        ]);
    }
}
