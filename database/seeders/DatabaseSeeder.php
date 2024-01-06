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
        User::create([
            'nama' => 'Elvin Mustianto',
            'username' => 'mustianto',
            'email' => 'mustianto82@gamil.com',
            'password' => bcrypt('password')
        ]);
        User::factory(3)->create();
        Category::create([
            'nama' => 'Kue Kering',
            'slug' => 'kue-kering'
        ]);
        Category::create([
            'nama' => 'Kue Basah',
            'slug' => 'kue-basah'
        ]);

        Category::create([
            'nama' => 'Roti',
            'slug' => 'roti'
        ]);
        Pastry::factory(20)->create();
    }
}