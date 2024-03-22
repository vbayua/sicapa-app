<?php

namespace Database\Seeders;

use App\Models\Capa;
use App\Models\Category;
use App\Models\Issue;
use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $role = Role::factory()->create();
        $role2 = Role::factory()->create();
        $role3 = Role::factory()->create();

        User::factory()->create([
            'password' => 'password',
            'role_id' => $role->id
        ]);


        User::factory()->create([
            'password' => 'password',
            'role_id' => $role2->id
        ]);

        User::factory()->create([
            'password' => 'password',
            'role_id' => $role3->id
        ]);


        $capa = Capa::factory()->create();

        Issue::factory(5)->create([
            'capa_id' => $capa->id,
        ]);

        $capa = Capa::factory()->create();

        Issue::factory(5)->create([
            'capa_id' => $capa->id,
        ]);

    }
}
