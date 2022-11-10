<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            "books_name" => "To kill a Mockingbird",
            "books_price" => "100000",
            "books_image" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRO7Te2MLyEC2TPkOt7Ghh_SpYdEyuYUsznDwdc-0qhy-Ju4v0I",
            "books_desc" => "To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools.
            To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize."
        ]);

        DB::table('books')->insert([
            "books_name" => "To kill a Mockingbird",
            "books_price" => "100000",
            "books_image" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRO7Te2MLyEC2TPkOt7Ghh_SpYdEyuYUsznDwdc-0qhy-Ju4v0I",
            "books_desc" => "To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools.
            To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize."
        ]);

        DB::table('books')->insert([
            "books_name" => "Great Expectations",
            "books_price" => "110000",
            "books_image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5H6yzhGTlD5LMIPWH6Rdr8Kejo6h_QfzbvO0_tFpw0lp_iphH",
            "books_desc" => "Great Expectations is the thirteenth novel by Charles Dickens and his penultimate completed novel. It depicts the education of an orphan nicknamed Pip.
            It is Dickens' second novel, after David Copperfield, to be fully narrated in the first person."
        ]);
    }
}
