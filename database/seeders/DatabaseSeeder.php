<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pastry;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Category::create([
            'nama' => 'Kue Kering',
            'slug' => 'kue-kering'
        ]);
        Category::create([
            'nama' => 'Kue Basah',
            'slug' => 'kue-basah'
        ]);
        Pastry::factory(20)->create();
    }
}