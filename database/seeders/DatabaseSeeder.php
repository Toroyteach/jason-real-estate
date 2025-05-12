<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogMedia;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Estate;
use App\Models\EstateAppointment;
use App\Models\EstateEnquiry;
use App\Models\EstateFeedback;
use App\Models\EstateMedia;
use App\Models\File;
use App\Models\LandingSlider;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();
        $tags = Tag::factory(10)->create();

        User::factory(5)->create()->each(function ($user) use ($categories, $tags) {
            Blog::factory(3)->create([
                'user_id' => $user->id,
            ])->each(function ($blog) use ($categories, $tags) {
                $blog->categories()->attach($categories->random(2));
                $blog->tags()->attach($tags->random(3));

                BlogMedia::factory(2)->create(['blog_id' => $blog->id]);
                Comment::factory(3)->create(['blog_id' => $blog->id]);
            });

            Estate::factory(2)->create([
                'user_id' => $user->id,
            ])->each(function ($estate) use ($categories, $tags) {
                $estate->categories()->attach($categories->random(2));
                $estate->tags()->attach($tags->random(3));

                EstateMedia::factory(2)->create(['estate_id' => $estate->id]);
                EstateEnquiry::factory(2)->create(['estate_id' => $estate->id]);
                EstateAppointment::factory(2)->create(['estate_id' => $estate->id]);
                EstateFeedback::factory(2)->create(['estate_id' => $estate->id]);
            });

            File::factory(2)->create(['user_id' => $user->id]);
        });

        LandingSlider::factory(3)->create();
    }
}
