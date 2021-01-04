<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            ['id' => '1','name' => '河野',],
            ['id' => '2','name' => '北濱',],
            ['id' => '3','name' => '高岡',],
            ['id' => '4','name' => '岡本',],
        ]);
}
}
