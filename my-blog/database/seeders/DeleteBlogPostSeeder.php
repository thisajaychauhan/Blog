<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeleteBlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BlogPost::truncate();
    }
}
