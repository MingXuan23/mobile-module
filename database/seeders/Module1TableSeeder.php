<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Module1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tickets')->insert([
            [
                'type' => 'Opening Ceremony Tickets',
                'seat' => 'A6 Row1 Column2',
                'name' => 'Jack',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Opening Ceremony Tickets',
                'seat' => 'A7 Row1 Column3',
                'name' => 'Rose',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Closing Ceremony Tickets',
                'seat' => 'A5 Row1 Column3',
                'name' => 'Rose',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('events')->insert([
            [
                'title' => 'Event 1',
                'desc' => 'Description for event 1',
                'status' => 'Unread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Event 2',
                'desc' => 'Description for event 2',
                'status' => 'Unread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Event 3',
                'desc' => 'Description for event 3',
                'status' => 'Read',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile development',
                'desc' => 'We use apps on our phones every day. It is the job of Mobile Applications Development to create these essential tools for almost every aspect of our lives.',
                'status' => 'Unread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
