<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;


class PadletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('padlets')->insert([
            'name' => 'Mein erstes Padlet!',
            'created_at' => new DateTime(),
            'public' => true
        ]);*/

        //Book noch in padlet umbenennen!!!!!!!!!!!!!!!!!!!!!!!!!!

        $padlet = new \App\Models\Padlet;
        $padlet->name = "Mein erstes Padlet!";
        $padlet->published = new DateTime();
        $padlet->is_public = true;
        $padlet->save();

        $entry1 = new \App\Models\Entry;
        $entry1->entry_text = "Das ist ein Text";

        $entry2 = new \App\Models\Entry;
        $entry2->entry_text = "Das ist ein Text";


        $padlet->entries()->saveMany([$entry1,$entry2]);
        $padlet->save();


        /*$entry = new \App\Models\Entry;
        $entry->entry_text = "Das ist der erste Eintrag";
        $entry->save();*/

        $rating1 = new \App\Models\Rating;
        $rating1->rating = 1;
        $rating1->comment = "Toll gemacht!";
        $rating1->username = "MariaCupcake";

        $rating2 = new \App\Models\Rating;
        $rating2->rating = 3;
        $rating2->comment = "Naja!";
        $rating2->username = "Franzi0123";

        $entry1->ratings()->saveMany([$rating1,$rating2]);
        $entry1->save();

        $users = \App\Models\User::all()->pluck("id");
        $padlet->users()->sync($users);

        $padlet->save();
    }
}
