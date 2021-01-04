<?php

use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            ['id' => '1','owner_distinct_id' => '1','foreign_id' => '0',],
            ['id' => '2','owner_distinct_id' => '2','foreign_id' => '2',],
        ]);
    }
}
