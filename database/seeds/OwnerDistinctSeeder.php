<?php

use Illuminate\Database\Seeder;

class OwnerDistinctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owner_distincts')->insert([
            ['id' => '1','symbol' => 'K', 'name' => '自社購入', 'relation' => 'insite','has_own' => '1'],
            ['id' => '2','symbol' => 'T', 'name' => '他社借用','relation'=>'customer','has_own' => '0'],
            ['id' => '3','symbol' => 'L', 'name' => 'リース', 'relation' => 'insite','has_own' => '0'],
            ['id' => '4','symbol' => 'R', 'name' => 'レンタル', 'relation' => 'insite','has_own' => '0'],
            ['id' => '5','symbol' => 'M', 'name' => '私物', 'relation' => 'employee','has_own' => '0'],
        ]);

    }
}
