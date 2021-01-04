<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('customers')->insert([
                [
                'id' => '1',
                'name' => 'insite',
                ],
                [
                'id' => '2',
                'name' => 'cw',
                ],
            ]);
        }
    }
}
