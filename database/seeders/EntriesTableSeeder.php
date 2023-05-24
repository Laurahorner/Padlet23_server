<?php

namespace Database\Seeders;

use App\Models\Entry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$firstTableSeeder = app(PadletsTableSeeder::class);
        $entry = $firstTableSeeder->get(1);



        $records = DB::table('entries')->get();
        foreach ($records as $record) {
            $rating1 = new \App\Models\Rating;
            $rating1->rating = 1;
            $rating1->comment = "Toll gemacht!";
            $rating1->username = "MariaCupcake";
            $record->ratings()->saveMany([$rating1]);
            $record->save();
        }*/

        /*$entry = new \App\Models\Entry;
        $entry->entry_text = "Das ist der erste Eintrag";
        $entry->save();

        $rating1 = new \App\Models\Rating;
        $rating1->rating = 1;
        $rating1->comment = "Toll gemacht!";
        $rating1->username = "MariaCupcake";

        $rating2 = new \App\Models\Rating;
        $rating2->rating = 3;
        $rating2->comment = "Naja!";
        $rating2->username = "Franzi0123";

        $entry->ratings()->saveMany([$rating1,$rating2]);
        $entry->save();*/
    }
}
