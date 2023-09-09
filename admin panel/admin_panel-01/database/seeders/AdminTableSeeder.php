<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;



class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('111111');

        $adminRecords = [
            ['id'=>'1', 'username'=>'admin1', 'type'=>'admin','mobile' => '01785421417','email'=>'admin1@gmail.com','password' => $password, 'image'=>'','status'=> '1'],

            ['id'=>'2', 'username'=>'admin2', 'type'=>'admin','mobile' => '01785421417','email'=>'admin2@gmail.com','password' => $password, 'image'=>'','status'=> '1'],

            ['id'=>'3', 'username'=>'admin3', 'type'=>'admin','mobile' => '01785421417','email'=>'admin3@gmail.com','password' => $password, 'image'=>'','status'=> '1'],

            ['id'=>'4', 'username'=>'admin4', 'type'=>'admin','mobile' => '01785421417','email'=>'admin4@gmail.com','password' => $password, 'image'=>'','status'=> '1'],
        ];

        Admin::insert($adminRecords);
    }
}
