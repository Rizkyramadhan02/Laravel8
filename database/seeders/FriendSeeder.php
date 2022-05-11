<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Friends;
use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $friends = [
            [
                'nama' => 'Teman 1',
                'groups_id' => 0,
                'no_tlp' => '08123',
                'alamat' => 'cirebon',
            ],
            [
                'nama' => 'Teman 2',
                'groups_id' => 0,
                'no_tlp' => '08123',
                'alamat' => 'jakarta',
            ],
            [
                'nama' => 'Teman 3',
                'groups_id' => 0,
                'no_tlp' => '08123',
                'alamat' => 'bdg',
            ],
        ];

        Friends::insert($friends);
    }
}
