<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Groups;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $groups = [
            [
                'name' => 'Group 1',
                'description' => 'description 1',
            ],
            [
                'name' => 'Group 2',
                'description' => 'description 2',
            ],
            [
                'name' => 'Group 3',
                'description' => 'description 3',
            ],
        ];

        Groups::insert($groups);
    }
}
