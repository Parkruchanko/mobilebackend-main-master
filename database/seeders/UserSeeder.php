<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'kritsada',
                'password'=>md5('123'),
                'email'=>'krti@gmail.com',
                'address'=>'tsu',
                "telephone"=>'088888888',
            ],[
                'name'=>'krit',
                'password'=>md5('123'),
                'email'=>'krt@gmail.com',
                'address'=>'tsu',
                "telephone"=>'088778888',
            ],[
                'name'=>'sada',
                'password'=>md5('123'),
                'email'=>'ti@gmail.com',
                'address'=>'tsu',
                "telephone"=>'0881234888',
            ],
        ]);
        //
    }
}
