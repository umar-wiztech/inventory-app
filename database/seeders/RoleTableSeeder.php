<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $data = [
            "admin",
            "moderator",
            "client",
        ];
        foreach ($data as $item) {
            Role::create(['name' => $item]);
        }

    }
}
