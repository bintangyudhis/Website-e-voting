<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin users
        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('adminkesatu'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('adminkedua'),
            'role' => 'admin',
        ]);

        // Create Voter users
        $VoterData = [
            ['Ardea Himawan Nugroho', '21102076','A', '21102076@ittelkom-pwt.ac.id'],
            ['Voter 2', '', 'B', 'Voter2@gmail.com'],
            ['Voter 3', '', 'A', 'Voter3@gmail.com'],
            ['Voter 4', '', 'B', 'Voter4@gmail.com'],
            ['Voter 5', '', 'A', 'Voter5@gmail.com'],
        ];

        foreach ($VoterData as $data) {
            User::create([
                'name' => $data[0],
                'NIM' => $data[1],
                'email' => $data[3],
                'password' => bcrypt('password'),
                'role' => 'voter',
            ]);
        }

        // Create Candidate records
        Candidate::create([
            'name' => 'Hati Kosong',
            'election_number' => 1,
        ]);
        Candidate::create([
            'name' => 'Agus Yanto - Ammar Joni',
            'election_number' => 2,
        ]);
        Candidate::create([
            'name' => 'Feri Asin - Notyourzaz',
            'election_number' => 3,
        ]);
    }
}
