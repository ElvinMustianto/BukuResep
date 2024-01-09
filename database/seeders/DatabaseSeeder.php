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
            'email' => 'mustianto82@gmail.com',
            'password' => bcrypt('password'),
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore expedita quas minima quod eum doloribus tempore illo, rem enim labore voluptatibus rerum dignissimos corrupti error aliquam quae suscipit sunt pariatur excepturi! Nostrum tempora cupiditate modi nisi inventore, commodi fugit labore soluta iusto odit quisquam dignissimos autem voluptate doloremque pariatur ad excepturi sunt facilis natus fugiat veniam qui corporis impedit'
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