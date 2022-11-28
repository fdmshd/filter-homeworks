<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Homework;
use App\Models\User;

const USERS_NUM = 10;
const HOMEWORKS_PER_USER = 10;

class DatabaseSeeder extends Seeder
{   

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()->count(USERS_NUM)->create();
        foreach($users as $user){
            Homework::factory()
            ->count(HOMEWORKS_PER_USER)
            ->create(['owner_id' => $user]);
        }
    }
}
