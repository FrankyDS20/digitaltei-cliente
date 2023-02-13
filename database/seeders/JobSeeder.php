<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //!puestos de trabajo o roles
        
        $job= new Job();
        $job->name = 'Administrador';
        $job->save();
        $job_1= new Job();
        $job_1->name = 'Cajero';
        $job_1->save();
    }
}
