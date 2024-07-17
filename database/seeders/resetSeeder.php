<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class resetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('events')->delete();
        DB::table('tickets')->delete();

        DB::table('skills')->delete();
        DB::table('photo')->delete();

    }
}
