<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ken = User::factory()->create([
            'username' => 'Ken',
            'name' => 'Ken Kaneki',
        ]);

        Post::factory(5)->create([
            'user_id' => $ken->id,
        ]);

        $category = Category::factory()->create([
            'name' => 'Tokyo',
            'slug' => 'tokyo'
        ]);

        $touka = User::factory()->create([
            'username' => 'Touka',
            'name' => 'Touka Kirishima',
        ]);

        Post::factory(5)->create([
            'user_id' => $touka->id,
            'category_id' => $category->id,
        ]);
    }
}
