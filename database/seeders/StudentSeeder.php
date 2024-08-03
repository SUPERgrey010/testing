<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['name' => 'budi', 'gender' => 'L', 'nis' => '11223311', 'class_id' => 1],
        //     ['name' => 'buda', 'gender' => 'P', 'nis' => '11223312', 'class_id' => 2],
        //     ['name' => 'badu', 'gender' => 'L', 'nis' => '11223313', 'class_id' => 3],
        //     ['name' => 'budo', 'gender' => 'P', 'nis' => '11223314', 'class_id' => 4],
        //     ['name' => 'bodi', 'gender' => 'L', 'nis' => '11223315', 'class_id' => 5],
        //     ['name' => 'rani', 'gender' => 'P', 'nis' => '11223316', 'class_id' => 2],
        //     ['name' => 'agak', 'gender' => 'L', 'nis' => '11223317', 'class_id' => 1],
        //     ['name' => 'runi', 'gender' => 'P', 'nis' => '11223318', 'class_id' => 3],
            
        // ];

        // foreach($data as $dt){
        //     Student::insert([
        //         'name' => $dt['name'],
        //         'gender' => $dt['gender'],
        //         'nis' => $dt['nis'],
        //         'class_id' => $dt['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        
    }
}
