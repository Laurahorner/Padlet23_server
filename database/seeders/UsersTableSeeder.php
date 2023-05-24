<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user1 = new User();
        $user1->username = "laurahorner1";
        $user1->firstName = "Laura";
        $user1->lastName = "Horner";
        $user1->image_url = "https://imgv3.fotor.com/images/blog-cover-image/part-blurry-image.jpg";
        $user1->password = bcrypt('laurahorner1');
        $user1->save();

        $user2 = new User();
        $user2->username = "hannaLeh";
        $user2->firstName = "Hanna";
        $user2->lastName = "Lehner";
        $user2->image_url = "https://imgv3.fotor.com/images/blog-cover-image/part-blurry-image.jpg";
        $user2->password = bcrypt('hannaLeh');
        $user2->save();

        $user3 = new User();
        $user3->username = "maxMusti";
        $user3->firstName = "Max";
        $user3->lastName = "Mustermann";
        $user3->image_url = "https://imgv3.fotor.com/images/blog-cover-image/part-blurry-image.jpg";
        $user3->password = bcrypt('maxMusti');
        $user3->save();


    }
}
