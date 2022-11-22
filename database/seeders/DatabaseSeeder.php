<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ichsan Rachman',
            'username' => 'ichsanrchmn',
            'email' => 'ichsanugraha@trade-indo.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Siwy Andin',
            'username' => 'siwyandin',
            'email' => 'siwyandin@trade-indo.com',
            'password' => bcrypt('siwy3838')
        ]);

        User::create([
            'name' => 'Sani Safitri',
            'username' => 'sanisafitri',
            'email' => 'sanisafitri@trade-indo.com',
            'password' => bcrypt('sani3838')
        ]);

        User::create([
            'name' => 'Sandra Afrianti',
            'username' => 'sandraafrianti',
            'email' => 'sandraafrianti@trade-indo.com',
            'password' => bcrypt('sandra3838')
        ]);

        User::create([
            'name' => 'Sri Nur Azmi',
            'username' => 'srinurazmi',
            'email' => 'srinurazmi@trade-indo.com',
            'password' => bcrypt('sri3838')
        ]);

        User::create([
            'name' => 'Elsa Hutapea',
            'username' => 'elsahutapea',
            'email' => 'elsahutapea@trade-indo.com',
            'password' => bcrypt('elsa3838')
        ]);

        User::create([
            'name' => 'Aisyah Wahid',
            'username' => 'aisyahwahid',
            'email' => 'aisyahwahid@trade-indo.com',
            'password' => bcrypt('aisyah3838')
        ]);

        User::create([
            'name' => 'Mia Agustina',
            'username' => 'miaagustina',
            'email' => 'miaagustina@trade-indo.com',
            'password' => bcrypt('mia3838')
        ]);

        Category::create([
            'name' => 'Webinar',
            'slug' => 'webinar'
        ]);

        Category::create([
            'name' => 'Seminar',
            'slug' => 'seminar'
        ]);

        Category::create([
            'name' => 'Program Trading',
            'slug' => 'program-trading'
        ]);
    }
}
