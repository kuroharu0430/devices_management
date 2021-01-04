<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['id' => '1','number' => '1','name' => 'PC',],
            ['id' => '2','number' => '2','name' => '外付けHDD',],
            ['id' => '3','number' => '3','name' => '外付けMD',],
            ['id' => '4','number' => '6','name' => '外付けCDーROM',],
            ['id' => '5','number' => '7','name' => '外付けモデム',],
            ['id' => '6','number' => '8','name' => 'ハブ ',],
            ['id' => '7','number' => '10','name' => 'その他PC設備',],
        ]);
    }
}
