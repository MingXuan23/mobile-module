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
                'desc' => 'We use apps on our phones every day. It is the job of Mobile Applications Development to create these essential tools for almost every aspect of our lives.

As a rapidly increasing way of communicating and sharing information, this is one of the fastest growing occupations, offering opportunities for both employment and self-employment, especially for young people.

As such, you may have a tightly developed role for a company in a specific sector, such as delivery or sales, or be able to offer tailored solutions to smaller businesses as a freelancer.

Mobile Applications Development requires an understanding of technology and design to make an app that is appealing and functions well. You must understand the client’s requirements and create a test-driven framework for a product that is reliable, updatable, and that the user can understand and use with ease. ',
                'status' => 'Unread',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
