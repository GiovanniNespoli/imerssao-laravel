<?php

namespace Database\Seeders;

use App\Models\Projects;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory()->count(200)->create();
        $users->random(10)->each(
            function (User $u) { 
               $project = Projects::factory()->create(['created_by' => $u->id]);

               Proposal::factory()->count(random_int(4,45))->create(['projects_id' => $project->id]);
            }
        );

    

    }
}
