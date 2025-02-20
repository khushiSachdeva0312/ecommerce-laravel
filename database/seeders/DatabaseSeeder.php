<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductGroup;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'parent_id'=>null,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('12345678'),
            'role'=>'admin',
        ]);
        // ProductGroup::insert([
        //     ['group_name' => 'electronics'],
        //     ['group_name' => 'shoes'],
        //     ['group_name' => 'books'],
        //     ['group_name' => 'fashion'],
        // ]);   
    }
}