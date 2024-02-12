<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_tags = config("tag");
        foreach($array_tags as $tag_item) {
            $new_tag = new Tag();

        $new_tag->fill($tag_item);
           $new_tag->save();
    }
}}
