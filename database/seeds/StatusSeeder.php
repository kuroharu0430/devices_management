<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            ['id' => '1','name' => '購入', 'uses_own' => '1'],
            ['id' => '2','name' => '借用', 'uses_own' => '1'],
            ['id' => '3','name' => '回収', 'uses_own' => '1'],
            ['id' => '4','name' => '廃棄', 'uses_own' => '0'],
            ['id' => '5','name' => '返却', 'uses_own' => '0'],
            ['id' => '6','name' => '貸出', 'uses_own' => '0'],
        ]);
    }
}
