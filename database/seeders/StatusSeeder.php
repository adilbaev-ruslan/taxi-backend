<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([ 'name' => 'Waiting' ]);
        Status::create([ 'name' => 'Accepted' ]);
        Status::create([ 'name' => 'Refuse' ]);
        Status::create([ 'name' => 'Ended' ]);
    }
}
